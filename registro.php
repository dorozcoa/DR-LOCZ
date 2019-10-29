<?php
require_once('funciones.php');
conectar('localhost', 'root', '', 'drlocz');

//Recibir
$user = strip_tags($_POST['user']);
$edad = strip_tags($_POST['edad']);
$pass = strip_tags(sha1($_POST['pass']));
$mail = strip_tags($_POST['mail']);
$genero = strip_tags($_POST['genero']);
$ip = $_SERVER['REMOTE_ADDR'];

$query = @mysql_query('SELECT * FROM usuarios WHERE user="'.mysql_real_escape_string($user).'"');
if($existe = @mysql_fetch_object($query))
{
	echo 'El usuario '.$user.' ya existe.';	
}else{
	$meter = @mysql_query('INSERT INTO usuarios (user, edad, pass, mail, genero, ip) values ("'.mysql_real_escape_string($user).'", "'.mysql_real_escape_string($edad).'", "'.mysql_real_escape_string($pass).'", "'.mysql_real_escape_string($mail).'", "'.mysql_real_escape_string($genero).'", "'.$ip.'")');
	if($meter)
	{
		echo 'Usuario registrado con exito';
		echo '<script>window.location="iniciar.php"</script>';
	}else{
		echo 'Hubo un error en el registro.';	
	}
}
?>