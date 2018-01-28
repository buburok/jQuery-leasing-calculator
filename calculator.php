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
	document.getElementById('payment').innerHTML = "������������ ������: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+((amount2 / .1 )- amount)+" ��.</b>"+"<hr>�������� �� �����������: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+(amount )+" ��.</b>"+"<hr>������� ������: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+payment+" ��.</b>"+"  x  "+months+" ������"+"<hr>������� 10%: <br>"+"<b style=\"font-size:22px;text-shadow: 1px 1px #000;\">"+(amount2)+" ��.</b>";
}
</script>
</head>
<body>

<span class="h3" id="h33">144 900��</span>
<div id="retro">
<h3><center>�������� ����������</center></h3>
<p>���� ��� ���: <input id="amount1" type="text"  ></p>
<p>������������ ������: 
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
<p style="display:none;">����� %: <input id="interest_rate" type="text" value="10.4" name="10.4" ></p>
<p>�������� ���� (� ������):
<select id="months" type="text" >
  <option id="months" type="text" value="6">6</option>
  <option  id="months" type="text"value="12">12</option>
  <option id="months" type="text" value="18">18</option>
  <option id="months" type="text" value="24">24</option>
  <option id="months" type="text" value="36">36</option>
  <option id="months" type="text" value="48">48</option>
  <option id="months" type="text" value="60">60</option>
</select></p>
<button id="butcalc" onclick="computeLoan()" >������� ��������� �� ������</button><br>
<div id="ret"><h2 id="payment" style="   font-size: 14px !important;font-weight: normal !important;" ></h2></div>
<hr>
<p style="font-size:12px;">* ������ � ����������� �� ��� ���.</p>

<p style="font-size:12px;">* � ������ �� �� �������� ���������, �������� � ����������� �� ��� � ���, �����������, �����, ������ � ����� ������������ �������, �������� � �������������, ������������� � ���������� �� ����������.</p>

<p style="font-size:12px;">* �� �������� ���������� � ��������� ������, ����, ������� �� � ��� �� ���������� ��������</p></div>

</body>


</html>