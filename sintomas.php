<?php
if (!($conect = mysql_connect('localhost', 'root', ''))) {
        echo "Error conectando";
        exit();
      }
      if (!mysql_select_db("drlocz",$conect)) {
        echo "Error seleccionando la base de datos.";
        exit();
      }

//Recibir
@$sintomas = strip_tags($_POST['sintomas']);
@$descripcion = strip_tags($_POST['descripcion']);
@$apuntes = strip_tags($_POST['apuntes']);
	
	if(mysql_query('INSERT INTO sintomas (id_usuario, sintomas, descripcion, apuntes ) values ( 1,"'.$sintomas.'", "'.$descripcion.'","' .$apuntes.'")',$conect))
	{
		echo 'Registro enviado con exito';
		echo '<script>window.location="perfil.php"</script>';
	}else{
		die('Consulta no válida: ' . mysql_error());
		echo 'Hubo un error en el envio de datos.';	
	}

?>