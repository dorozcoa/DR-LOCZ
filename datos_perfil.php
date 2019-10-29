<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "drlocz";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM usuarios";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				echo " <tr>";
				echo "<td><strong>Usuario </strong></td><td> $fila[user]  </td>";
				echo " </tr> ";
				echo " <tr>";
				echo "<td><strong>Género </strong></td><td> $fila[genero]  </td>";
				echo " </tr> ";
				echo " <tr>";
				echo "<td><strong>Edad </strong></td><td> $fila[edad]  </td>";
				echo " </tr> ";
				echo " <tr>";
				echo " <td><strong>Email</strong></td><td> $fila[mail]  </td>";
				echo " </tr> ";
			}

		}
	}
?>