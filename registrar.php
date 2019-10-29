<?php include("header.php");?>

<?php include("head.php");?>



<div class="container">

	<div class="row aligncenter mtop10">

		<section class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">

		    <div>

		      <h1>Crear cuenta</h1>

		      <form action="registro.php" method="POST">

		        <p><input class="w-100" type="text" name="user" placeholder="Nombre Completo"></p>

		        <p><input class="w-100" type="text" name="edad" value="" placeholder="Edad"></p>

		        <p><input class="w-100" type="email" name="mail" placeholder="e-mail"></p>

		        <p><input class="w-100" type="text" name="genero" value="" placeholder="Género"></p>

		        <p><input class="w-100" type="password" name="pass" placeholder="Contraseña"></p>

		         <!--<p><input class="w-100" type="password" name="password" value="" placeholder="Confime su Contraseña"></p>-->

		        <p class="submit"><input type="submit" value="Registrar" class="btn btn-success1"></p>

		      </form>

		    </div>

	  </section>

	</div>

</div>

<div class="push"></div>



<?php include("footer.php");?>

<?php include("scripts.php");?>