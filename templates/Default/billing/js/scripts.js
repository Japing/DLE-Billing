/*
=====================================================
 Billing
-----------------------------------------------------
 evgeny.tc@gmail.com
-----------------------------------------------------
 This code is copyrighted
=====================================================
*/

function BillingJS( lang, currency )
{
	this.ValidForm = true;
	this.SelectPayment = {};
	this.lang = lang;
	this.currency = currency.split(',');

	this.Payment = function( payment )
	{
		$( this.SelectPayment.obj ).removeClass("bt_billing_active");
		$( payment.obj ).addClass("bt_billing_active");

		$("#billingPayСurrency").html(payment.currency);
		$("#billingPayment").val( payment.tag );
		$("#billingPayBtn").css('opacity', "1");

		this.SelectPayment = payment;

		this.Convert();
	};

	this.Pay = function()
	{
		if( ! this.ValidForm )
		{
			return true;
		}

		var _error = '';

		if( ! this.SelectPayment.tag )
		{
			_error =  this.lang[2];
		}

		if( parseFloat( this.SelectPayment.min ) > parseFloat( $("#billingPaySum").val() ) )
		{
			_error =  this.lang[3] + this.SelectPayment.min + this.Declension( this.SelectPayment.min );
		}

		if( parseFloat( this.SelectPayment.max ) < parseFloat( $("#billingPaySum").val() ) )
		{
			_error =  this.lang[4] + this.SelectPayment.max + this.Declension( this.SelectPayment.max );
		}

		if( _error )
		{
			DLEalert( _error, this.lang[0] );

			return false;
		}

		return true;
	}

	this.Convert = function()
	{
		$("#billingPay").html( this.Format( ( this.SelectPayment.convert ? this.SelectPayment.convert : 1 ) * $("#billingPaySum").val() ) );
	}

	this.Format = function( n )
	{
		return parseFloat(n).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ");
	}

	this.Declension = function( number )
	{
		cases = [2, 0, 1, 1, 1, 2];

		return ' ' + this.currency[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
	}
}
