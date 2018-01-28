<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="jquery-3.3.1.min.js"></script>
<script>
	jQuery('.h3').attr('id', 'h33');
document.getElementById('amount1').value = (document.getElementById("h33").innerHTML.replace(/\W/g,''))/ 1.2;
document.getElementById('amount1').innerHTML = (document.getElementById("h33").innerHTML.replace(/\W/g,''))/ 1.2;
function computeLoan(){
	var amount2 = (document.getElementById('amount1').value) * .1;
	var amount1 = (document.getElementById('amount1').value);
	var amount = (document.getElementById('amount').value) * (amount1);
	var interest_rate = (document.getElementById('interest_rate').value)/100;
	var months = document.getElementById('months').value;
	var interest = ( amount - amount2) / ((1 / (interest_rate / 12 )) * ( 1 - Math.pow( 1 / ( 1 + (interest_rate / 12 )), months ))) + ((amount2) * (interest_rate / 12 ));
	var payment = (interest).toFixed(2);
	payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "");
	document.getElementById('payment').innerHTML = "Първоначална вноска: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+((amount2 / .1 )- amount)+" лв.</b>"+"<hr>Стойност за финансиране: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+(amount )+" лв.</b>"+"<hr>Месечна вноска: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+payment+" лв.</b>"+"  x  "+months+" месеца"+"<hr>Остатък 10%: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+(amount2)+" лв.</b>";
}
</script>
</head>
<body>

<span class="h3" id="h33">144 900лв</span>
<div id="retro">
<h3><center>Лизингов калкулатор</center></h3>
<p>Цена без ДДС: <input id="amount1" type="text"  ></p>
<p>Първоначална вноска: 
<select id="amount" type="text">
  <option id="amount" type="text" value=".85">15%</option>
  <option id="amount" type="text" value=".8">20%</option>
  <option id="amount" type="text" value=".75">25%</option>
  <option id="amount" type="text" value=".70">30%</option>
  <option id="amount" type="text" value=".65">35%</option>
  <option id="amount" type="text" value=".60">40%</option>
  <option id="amount" type="text" value=".55">45%</option>
  <option id="amount" type="text" value=".50">50%</option>
  <option id="amount" type="text" value=".45">55%</option>
  <option id="amount" type="text" value=".40">60%</option>
  <option id="amount" type="text" value=".35">65%</option>
  <option id="amount" type="text" value=".30">70%</option>
</select></p>
<p style="display:none;">Лихва %: <input id="interest_rate" type="text" value="10.4" name="10.4" ></p>
<p>Лизингов срок (в месеци):
<select id="months" type="text" >
  <option id="months" type="text" value="6">6</option>
  <option  id="months" type="text"value="12">12</option>
  <option id="months" type="text" value="18">18</option>
  <option id="months" type="text" value="24">24</option>
  <option id="months" type="text" value="36">36</option>
  <option id="months" type="text" value="48">48</option>
  <option id="months" type="text" value="60">60</option>
</select></p>
<button id="butcalc" onclick="computeLoan()" >Провери месечната си вноска</button><br>
<div id="ret"><h2 id="payment" style="   font-size: 14px !important;font-weight: normal !important;" ></h2></div>
<hr>
<p style="font-size:12px;">* Цените в калкулатора са без ДДС.</p>

<p style="font-size:12px;">* В цената не са включени разходите, свързани с регистрация на МПС в КАТ, застраховки, такси, данъци и други допълнителни разходи, свързани с придобиването, собствеността и ползването на автомобила.</p>

<p style="font-size:12px;">* За подробна информация и конкретна оферта, моля, свъжете се с нас на посочените телефони</p></div>

</body>


</html>
