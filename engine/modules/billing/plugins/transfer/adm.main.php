<?php	if( !defined( 'BILLING_MODULE' ) ) die( "Hacking attempt!" );
/*
=====================================================
 Billing
-----------------------------------------------------
 evgeny.tc@gmail.com
-----------------------------------------------------
 This code is copyrighted
=====================================================
*/

Class ADMIN
{
	function main()
	{
		# Сохранить
		#
		if( isset( $_POST['save'] ) )
		{
			if( $_POST['user_hash'] == "" or $_POST['user_hash'] != $this->Dashboard->hash )
			{
				return "Hacking attempt! User not found {$_POST['user_hash']}";
			}

			$this->Dashboard->SaveConfig("plugin.transfer", $_POST['save_con']);
			$this->Dashboard->ThemeMsg( $this->Dashboard->lang['ok'], $this->Dashboard->lang['save_settings'] );
		}

		$plugin_config = $this->Dashboard->LoadConfig( "transfer", true, array('status'=>"0") );

		$this->Dashboard->ThemeEchoHeader();

		$this->Dashboard->ThemeAddStr(
			$this->Dashboard->lang['settings_status'],
			$this->Dashboard->lang['refund_status_desc'],
			$this->Dashboard->MakeICheck("save_con[status]", $plugin_config['status'])
		);

		$this->Dashboard->ThemeAddStr(
			$this->Dashboard->lang['paysys_name'],
			$this->Dashboard->lang['refund_name_desc'],
			"<input name=\"save_con[name]\" class=\"edit bk\" type=\"text\" style=\"width: 100%\" value=\"" . $plugin_config['name'] ."\">"
		);

		$this->Dashboard->ThemeAddStr(
			$this->Dashboard->lang['transfer_minimum'],
			$this->Dashboard->lang['transfer_minimum_desc'],
			"<input name=\"save_con[minimum]\" class=\"edit bk\" type=\"text\" style=\"width: 20%\" value=\"" . $plugin_config['minimum'] ."\"> " . $this->Dashboard->API->Declension( $plugin_config['minimum'] )
		);

		$this->Dashboard->ThemeAddStr(
			$this->Dashboard->lang['refund_commision'],
			$this->Dashboard->lang['refund_commision_desc'],
			"<input name=\"save_con[com]\" class=\"edit bk\" type=\"text\" style=\"width: 20%\" value=\"" . $plugin_config['com'] ."\">%"
		);

		$Content = $this->Dashboard->PanelPlugin('plugins/transfer', 'icon-cogs', $plugin_config['status'] );

		$Content .= $this->Dashboard->ThemeHeadStart( $this->Dashboard->lang['transfer_title'] );
		$Content .= $this->Dashboard->ThemeParserStr();
		$Content .= $this->Dashboard->ThemePadded( $this->Dashboard->MakeButton("save", $this->Dashboard->lang['save'], "green") );

		$Content .= $this->Dashboard->ThemeHeadClose();
		$Content .= $this->Dashboard->ThemeEchoFoother();

		return $Content;
	}
}
?>
