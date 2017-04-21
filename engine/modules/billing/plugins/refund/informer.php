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

$this->LQuery->DbWhere( array( "refund_date_return = '0' " => 1 ) );

return $this->TopInformerView(
	"?mod=billing&c=refund",
	$this->lang['refund_informer_title'],
	$this->LQuery->DbGetRefundNum(),
	$this->lang['refund_informer'],
	"icon-credit-card",
	"red"
);
?>
