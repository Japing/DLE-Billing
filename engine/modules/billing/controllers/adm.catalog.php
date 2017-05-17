<?php	if( ! defined( 'BILLING_MODULE' ) ) die( "Hacking attempt!" );
/**
 * DLE Billing
 *
 * @link          https://github.com/mr-Evgen/dle-billing-module
 * @author        dle-billing.ru <evgeny.tc@gmail.com>
 * @copyright     Copyright (c) 2012-2017, mr_Evgen
 */

Class ADMIN
{
	function main()
	{
		$GetArray = array();

		if( ! $this->Dashboard->config['url_catalog'] )
		{
			$this->Dashboard->ThemeMsg( $this->Dashboard->lang['catalog_er'], $this->Dashboard->lang['catalog_er_title'], $PHP_SELF . "?mod=billing" );
		}

		$GetArray = json_decode( $this->Dashboard->GetCache('billingCatalog'), true);

		# Загрузить каталог по URL
		#
		if( ! $GetArray )
		{
			if( $curl = curl_init() )
			{
				curl_setopt($curl, CURLOPT_URL, $this->Dashboard->config['url_catalog']);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

				$Get = curl_exec($curl);
				$GetArray = json_decode(iconv("UTF-8", $this->Dashboard->config_dle['charset'], $Get ), true);

				$this->Dashboard->CreatCache('billingCatalog', iconv("UTF-8", $this->Dashboard->config_dle['charset'], $Get ) );

				curl_close($curl);

			} else
				$this->Dashboard->ThemeMsg( $this->Dashboard->lang['catalog_er'], $this->Dashboard->lang['catalog_er2_title'], $PHP_SELF . "?mod=billing" );

		}

		if( ! $GetArray )
		{
			$this->Dashboard->ThemeMsg( $this->Dashboard->lang['catalog_er'], $this->Dashboard->lang['catalog_er_title'], $PHP_SELF . "?mod=billing" );
		}

		$Content = $this->Dashboard->ThemeEchoHeader();

		# Проверка версии
		#
		if( $GetArray['version'] == $this->Dashboard->config['version'] )
		{
			$Content .= $this->Dashboard->MakeMsgInfo(
				$this->Dashboard->lang['catalog_version_yes'] . ' ' . $GetArray['version'],
				"icon-info-sign",
				"green"
			);
		}
		else
		{
			$Content .= $this->Dashboard->MakeMsgInfo(
				'<span style="float: right; margin-right: 15px; margin-top: -6px">
					<a href="' . $GetArray['update'] . '" target="_blank" class="btn btn-blue">
						<i class="icon-download" style="margin-right: 2px; vertical-align: middle"></i>' . $this->Dashboard->lang['catalog_get_update'] . '
					</a>
				</span>' . $this->Dashboard->lang['catalog_version_no'] . ' ' . $GetArray['version'],
				"icon-info-sign",
				"green"
			);
		}

		$GetPaysys = "";
		$GetPlugins = "";

		$PaysysArray = $this->Dashboard->Payments();
		$PluginsArray = $this->Dashboard->Plugins();

		foreach( $GetArray['plugins'] as $GetAPid => $GetAP )
		{
			if( $GetAP['cat'] == "3" )
			{
				$GetPaysys .= $this->ThemeCatalogItem( $GetAP, $PaysysArray[mb_strtolower($GetAPid)]['version'] );
			}

			if( $GetAP['cat'] == "2" )
			{
				$GetPlugins .= $this->ThemeCatalogItem( $GetAP, $PluginsArray[mb_strtolower($GetAPid)]['version'] );
			}
		}

		$tabs[] = array(
				'id' => 'payments',
				'title' => $this->Dashboard->lang['catalog_tab1'],
				'content' => $GetPaysys
		);

		$tabs[] = array(
				'id' => 'plugins',
				'title' => $this->Dashboard->lang['catalog_tab2'],
				'content' => $GetPlugins
		);

		$Content .= $this->Dashboard->PanelTabs( $tabs );

		$Content .= $this->Dashboard->ThemeEchoFoother();

		return $Content;
	}

	private function ThemeCatalogItem( $Info, $Version = 0 )
	{
		if( $this->Dashboard->dle['charset'] != 'utf-8' )
		{
			$Info['title'] = iconv('utf-8','windows-1251', $Info['title']);
			$Info['desc'] = iconv('utf-8','windows-1251', $Info['desc']);
		}

		if( $Version )
		{
			$status = $Version == $Info['version']
				? "<a href=\"#\" class=\"tip\" data-placement=\"left\" data-original-title=\"{$this->Dashboard->lang['catalog_verplug_ok']}\">
						<span class=\"status-success\">
							<i class=\"icon-ok-sign icon-2x\" style=\"margin-right: 10px; margin-top: 3px\"></i>
						</span>
					</a>"
				: "<a href=\"{$Info['link']}\" target=\"_blank\" class=\"tip\" data-placement=\"left\" data-original-title=\"{$this->Dashboard->lang['catalog_verplug_update']} {$Info['version']}\">
						<span class=\"status-warning\">
							<i class=\"icon-warning-sign icon-2x\" style=\"margin-right: 10px; margin-top: 3px\"></i>
						</span>
					</a>";
		}
		else
		{
			$status = "<a href=\"{$Info['page']}\" target=\"_blank\" class=\"btn btn-" . ( $Info['price'] ? "blue": "green" ) . "\">" . ( $Info['price'] ? "{$Info['price']} RUR": $this->Dashboard->lang['catalog_free'] ) . "</a>";
		}

		return "<div class=\"bt_catalog\">
					<b>
						<a href=\"{$Info['link']}\" target=\"_blank\">{$Info['title']} v." . ( $Version ? $Version : $Info['version'] )."</a><span style=\"margin-top: 10px; float: right\">{$status}</span>
					</b>
					<p class=\"bt_catalog_desc\">{$Info['desc']}</p>
				</div>";
	}
}
?>
