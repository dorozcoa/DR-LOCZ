<?php
	class conexion2{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "drlocz";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM sintomas";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				echo " <tr>";
				echo "<td> $fila[id_sintoma]  </td> <td> $fila[sintomas]  </td> <td> $fila[descripcion] </td> <td> $fila[apuntes] </td> ";
				echo " </tr> ";

				/*echo " <tr>";
				echo "<td><strong>Consulta Nº </strong></td><td> $fila[id_sintoma]  </td>";
				echo " </tr> ";
				echo " <tr>";
				echo "<td><strong>Síntomas Presentados </strong></td><td> $fila[sintomas]  </td>";
				echo " </tr> ";
				echo " <tr>";
				echo "<td><strong>Descripción </strong></td><td> $fila[descripcion]  </td>";
				echo " </tr> ";
				echo " <tr>";
				echo " <td><strong>Apuntes Relevantes</strong></td><td> $fila[apuntes]  </td>";
				echo " </tr> ";*/
			}

		}
	}
?>