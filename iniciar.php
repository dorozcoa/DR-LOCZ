<?php include("header.php");?>
<?php include("head.php");?>

<div class="container">

	<div class="row aligncenter mtop50">

		<div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">

		     <h1>Iniciar Sesión</h1>

			<div class="mtop40">
		      <form action="login.php" method="POST" >

		        <p><input class="w-100" type="text" name="mail" placeholder="Correo"></p>

		        <p><input class="w-100" type="password" name="pass" placeholder="Contraseña"></p>

		        <p class="submit"><input type="submit" value="Login" class="btn btn-success1"></p>

		      </form>

		    </div>

	  </div>

	</div>

</div>


<?php include("footer.php");?>
<?php include("scripts.php");?>