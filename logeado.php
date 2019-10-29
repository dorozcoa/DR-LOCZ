<?php
session_start();
if($_SESSION['logged'] == 'yes')
{
	echo 'Bienvenido '.$_SESSION['user'].', esta es tu pagina personal.';	
	echo '<script>window.location="perfil.php"</script>';
}else{
	echo 'No estas logeado.';	
}
?>