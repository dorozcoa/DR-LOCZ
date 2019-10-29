<?php
session_start();
require_once('funciones.php');
conectar('localhost', 'root', '', 'drlocz');

//Recibir
$mail = strip_tags($_POST['mail']);
$pass = strip_tags(sha1($_POST['pass']));

$query = @mysql_query('SELECT * FROM usuarios WHERE mail="'.mysql_real_escape_string($mail).'" AND pass="'.mysql_real_escape_string($pass).'"');
if($existe = @mysql_fetch_object($query))
{
	$_SESSION['logged'] = 'yes';
	$_SESSION['mail'] = $mail;
	echo '<script>window.location="logeado.php"</script>';
}else{
	echo 'El usuario y/o pass son incorrectos.';	
	echo '<script>window.location="iniciar.php"</script>';
}
?>