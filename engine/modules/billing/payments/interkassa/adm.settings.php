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

Class Payment
{
	var $doc = 'https://dle-billing.ru/platezhnye-sistemy/10-interkassa.html';

	function Settings( $config )
	{
		$Form = array();
		
		$Form[] = array(
			"Идентификатор магазина (ID):",
			"Можно получить в <a href='https://new.interkassa.com/account/checkout' target='_blank'>личном кабинете</a>.",
			"<input name=\"save_con[login]\" class=\"edit bk\" type=\"text\" value=\"" . $config['login'] ."\" style=\"width: 100%\">"
		);

		$Form[] = array(
			"Ваш текущий секретный ключ:",
			"<a href='https://new.interkassa.com/account/checkout' target='_blank'>Настройка кассы</a> вкладка 'Безопасность'",
			"<input name=\"save_con[secret]\" class=\"edit bk\" type=\"password\" value=\"" . $config['secret'] ."\" style=\"width: 100%\">"
		);

		return $Form;
	}

	function Form( $id, $config, $invoice, $currency, $desc )
	{
		return '
			     <form name="payment" method="post" id="paysys_form" action="https://sci.interkassa.com/">
					  <input type="hidden" name="ik_co_id" value="'.$config['login'].'" />
					  <input type="hidden" name="ik_pm_no" value="'.$id.'" />
					  <input type="hidden" name="ik_am" value="'.$invoice['invoice_pay'].'" />
					  <input type="hidden" name="ik_desc" value="'.$desc.'" />
					  <input type="submit" class="btn" value="Оплатить">
				</form> ';

	}

	function check_id( $data )
	{
		return $data["ik_pm_no"];
	}

	function check_ok( $data )
	{
		return '200';
	}

	function check_out( $data, $config, $invoice )
	{
		$save_secret = $data['ik_sign'];

		unset($data['ik_sign']);

		ksort($data, SORT_STRING);

		array_push($data, trim($config['secret']));

		$signString = implode(':', $data);
		$sign = base64_encode(md5($signString, true));

		if( $save_secret == $sign )
		{
			return 200;
		}

		return "bad sign";
	}
}

$Paysys = new Payment;
?>
