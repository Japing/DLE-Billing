<?php	if( ! defined( 'BILLING_MODULE' ) ) die( "Hacking attempt!" );
/**
 * DLE Billing
 *
 * @link          https://github.com/mr-Evgen/dle-billing-module
 * @author        dle-billing.ru <evgeny.tc@gmail.com>
 * @copyright     Copyright (c) 2012-2017, mr_Evgen
 */

$_Lang = include MODULE_PATH . '/lang/admin.php';

$blank = array
(
	'status' => "0",
	'page' => "billing",
	'currency' => "",
	'sum' => "100.00",
	'paging' => "25",
	'admin' => "",
	'secret' => "",
	'fname' => "user_balance",
	'start' => "log/main/page/1",
	'format' => "float",
	'version' => "0.7.2",
	'url_catalog' => "https://dle-billing.ru/engine/ajax/extras/plugins.php",
	'urls' => "refund-cashback"
);

$blank['currency'] = $_Lang['currency'];
$blank['admin'] = $member_id['name'];
$blank['secret'] = genCode();

$htaccess_set = "# billing\nRewriteRule ^([^/]+).html/(.*)(/?)+$ index.php?do=static&page=$1&seourl=$1&route=$2 [QSA]";

# Процесс установки
#
if( isset( $_POST['agree'] ) )
{
	# htaccess
	#
	if( is_writable( ".htaccess" ) )
	{
		if ( ! strpos( file_get_contents(".htaccess"), "# billing" ) )
		{
			$new_htaccess = fopen(".htaccess", "a");
			fwrite($new_htaccess, "\n" . $htaccess_set);
			fclose($new_htaccess);
		}
	}
	elseif ( ! strpos( file_get_contents(".htaccess"), "# billing" ) )
	{
		msg( "error", $_Lang['install_bad'], "<div style=\"text-align: left\">" . $_Lang['install_error'] . "<pre><code>" . $htaccess_set . "</code></pre></div><hr /><a href=\"\" class=\"btn btn-blue\" style=\"margin:7px;\" type=\"submit\">{$_Lang['main_re']}</a>" );
	}

	# config
	#
	$saveConfigFile = "<?PHP \n\n";
	$saveConfigFile .= "#Edit from " . $_SERVER['REQUEST_URI'] . " " . langdate('d.m.Y H:i:s', $_TIME) . " \n\n";
	$saveConfigFile .= "return array \n";
	$saveConfigFile .= "( \n";

	foreach ( $blank as $name => $value ) $saveConfigFile .= "'{$name}' => \"{$value}\",\n\n";

	$saveConfigFile .= ");\n\n?>";

	$handler = fopen( ENGINE_DIR . '/data/billing/config.php', "w" );

	fwrite( $handler, $saveConfigFile );

	fclose( $handler );

	# sql
	#
	$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_billing_history";
	$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_billing_invoice";
	$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_billing_refund";

	if( ! isset( $member_id[$blank['fname']] ) )
	{
		$tableSchema[] = "ALTER TABLE `" . PREFIX . "_users` ADD {$blank['fname']} float NOT NULL";
	}

	$_admin_sections = $db->super_query( "SELECT name FROM " . USERPREFIX . "_admin_sections WHERE name='billing'" );

	if( ! isset( $_admin_sections['name'] ) )
	{
		$tableSchema[] = "INSERT INTO `" . PREFIX . "_admin_sections` (`name`, `title`, `descr`, `icon`, `allow_groups`) VALUES ('billing', '" . $_Lang['title'] . "', '" . $_Lang['desc'] . "', 'billing.png', '1')";
	}

	$_static = $db->super_query( "SELECT name FROM " . USERPREFIX . "_static WHERE name='billing'" );

	if( ! isset( $_static['name'] ) )
	{
		$tableSchema[] = "INSERT INTO `" . PREFIX . "_static` (`name`, `descr`, `template`, `allow_br`, `allow_template`, `grouplevel`, `tpl`, `metadescr`, `metakeys`, `views`, `template_folder`, `date`, `metatitle`, `allow_count`, `sitemap`, `disable_index`) VALUES ('billing', '" . $_Lang['cabinet'] . "', 'billing/cabinet', 1, 1, 'all', 'billing', 'billing/cabinet', 'cabinet, billing', 0, '', " . $_TIME . ", '', 1, 1, 1);";
	}

	$tableSchema[] = "CREATE TABLE `" . PREFIX . "_billing_history` (
						  `history_id` int(11) NOT NULL AUTO_INCREMENT,
						  `history_plugin` varchar(21) NOT NULL,
						  `history_plugin_id` int(11) NOT NULL,
						  `history_user_name` varchar(40) NOT NULL,
						  `history_plus` text NOT NULL,
						  `history_minus` text NOT NULL,
						  `history_balance` text NOT NULL,
						  `history_currency` varchar(100) NOT NULL,
						  `history_text` text NOT NULL,
						  `history_date` int(11) NOT NULL,
						  PRIMARY KEY (`history_id`)
						) ENGINE=InnoDB  DEFAULT CHARSET=" . COLLATE . " AUTO_INCREMENT=1 ;";

	$tableSchema[] = "CREATE TABLE `" . PREFIX . "_billing_invoice` (
						  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
						  `invoice_paysys` varchar(21) NOT NULL,
						  `invoice_user_name` varchar(40) NOT NULL,
						  `invoice_get` text NOT NULL,
						  `invoice_pay` text NOT NULL,
						  `invoice_date_creat` int(11) NOT NULL,
						  `invoice_date_pay` int(11) NOT NULL,
						  `invoice_payer_requisites` varchar(40) NOT NULL,
						  `invoice_payer_info` text NOT NULL,
						  PRIMARY KEY (`invoice_id`)
						) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

	$tableSchema[] = "CREATE TABLE `" . PREFIX . "_billing_refund` (
						  `refund_id` int(11) NOT NULL AUTO_INCREMENT,
						  `refund_date` int(11) NOT NULL,
						  `refund_user` varchar(40) NOT NULL,
						  `refund_summa` text NOT NULL,
						  `refund_commission` text NOT NULL,
						  `refund_requisites` text NOT NULL,
						  `refund_date_return` int(11) NOT NULL,
						  PRIMARY KEY (`refund_id`)
						) ENGINE=InnoDB DEFAULT CHARSET=" . COLLATE . " AUTO_INCREMENT=1 ;";

	foreach($tableSchema as $table)
	{
		$db->super_query($table);
	}

	if( ! file_exists(ENGINE_DIR . '/data/billing/config.php') )
	{
		msg( "error", $_Lang['install_bad'], "<div style=\"text-align: left\">" . $_Lang['install_error_config'] . "<pre><code>" . str_replace('<', '&lt;', $saveConfigFile) . "</code></pre></div><hr /><a href=\"\" class=\"btn btn-blue\" style=\"margin:7px;\" type=\"submit\">{$_Lang['main_re']}</a>" );
	}

	msg( "success", $_Lang['install_ok'], $_Lang['install_ok_text'] . "<hr /><a href=\"\" class=\"btn btn-green\" style=\"margin:7px;\" type=\"submit\">{$_Lang['main_next']}</a>" );
}

# Соглашение
#
echoheader( $_Lang['title'] . " " . $blank['version'], $_Lang['install'] );

echo "<div id=\"general\" class=\"box\">
			<div class=\"box-header\">
				<div class=\"title\">{$_Lang['install']}</div>
			</div>

			<div class=\"box-content\">

				<form action=\"\" enctype=\"multipart/form-data\" method=\"post\" name=\"frm_billing\" >
					<form action=\"{$PHP_SELF}\" method=\"post\">
						<div style=\"margin: 10px; height: 200px; border: 1px solid #76774C; background-color: #FDFDD3; padding: 5px; overflow: auto;\">
						{$_Lang['license']}
						</div>
						<div class=\"row box-section\">
							<input class=\"btn btn-green\" name=\"agree\" type=\"submit\" value=\"{$_Lang['install_button']}\">
						</div>
					</form>
				</form>
			</div>
		</div>";

echofooter();


function genCode()
{
	$chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
	$numChars = strlen($chars);
	$string = '';

	for ($i = 0; $i < 10; $i++)
	{
		$string .= substr($chars, rand(1, $numChars) - 1, 1);
	}

	return $string;
}
?>
