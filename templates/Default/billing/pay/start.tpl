<script type="text/javascript" src="/templates/{module.skin}/billing/js/scripts.js"></script>
<script type="text/javascript">
	var billingLang = [
		"Внимание",
		"Введите корректную сумму",
		"Выберите один из предложенных способов оплаты",
		"Минимальная сумма оплаты через выбранную платежную систему - ",
		"Максимальная сумма оплаты через выбранную платежную систему - "
	];

	var BillingJS = new BillingJS( billingLang, '{module.currency}' );
</script>


<form action="" onsubmit="return BillingJS.Pay(this)" name="payform" method="post">

<h4>Пополнение баланса</h4>

	<span class="billing-pay-step" style="background-color: #f1fbff; line-height: 60px;">
		1. Пополнить баланс на сумму:
		<input type="text" value="{get.sum}" name="billingPaySum" id="billingPaySum" onkeyup="BillingJS.Convert()" style="height: 40px; width: 100px" required> {module.get.currency}
	</span>

	<span class="billing-pay-step" style="background-color: #f9fdff; line-height: 30px;">
		2. Выберите способ оплаты:
			<br />
		[payment]
			<label class="billing-pay-label">
				<input name="billingPayment" id="{payment.name}" type="radio" value="{payment.name}" onClick="BillingJS.Payment({payment.js})">
				<img src="{THEME}/billing/icons/{payment.name}.png" alt="{payment.title}" title="{payment.title}" />
			</label>
		[/payment]
	</span>

	<p>
		<button type="submit" id="billingPayBtn" name="submit" class="btn" style="opacity: 0.6">
			Оплатить
				<span id="billingPay">{get.sum}</span>
				<span id="billingPayСurrency">{module.get.currency}</span>
		</button>
	</p>

	<input type="hidden" name="billingHash" value="{hash}" />
</form>
