<?php include("head.html")?>

<?php
$n=$_POST["name"];
$s=$_POST["service"];
$e=$_POST["email"];
$m=$_POST["mobile"];
$b=$_POST["branch"];
$c=$_POST["cuisine"];
echo(" <center><h2>HI {$n}!</h2> <br/> 
<h3>YOUR ORDER IS PLACED SUCCESSFULLY!!!!!</h3></center>
<center><p>
Your order cuisine is <strong>{$c}</strong> placed on <strong>{$b}</strong> branch. <br/>
Your order invoice will be send on your mail <strong>{$e}</strong> and sms on <strong>{$m}</strong>.<br/>
<h4>THANK YOU SO MUCH FOR USING OUR SERVICE</h4></p>"); 
?>

<?php include("foot.html")?>