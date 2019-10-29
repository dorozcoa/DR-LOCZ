<?php include("header.php");?>

<?php include("head.php");?>



<!-- content general

    ================================================== -->

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 alignleft">

                <!-- Modulo Titulo centrado -->

                <div class="row mtop20">

                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <h2 class="bor-1px"><strong>Perfil</strong></h2>

                    </div>

                </div><!-- /END Modulo Titulo centrado -->



                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 aligncenter">

                        <h4>Mi Cuenta</h4>

                        <div class="cree "><a href="perfil.php" style="text-decoration: none;"><strong>Mi Perfil</strong></a></div>

                        <div class="cree "><a href="consulta.php" style="text-decoration: none;"><strong>Iniciar Consulta</strong></a></div>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8">

                        <div class="elem">

                            <h4><strong>Información de tu consulta</strong></h4>

                        </div>

                        <div>

                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="w-100">

                                            <div class="alignleft">

                                                <div class="no hay">
                                                <div class="mtop40">
                                                  <form action="sintomas.php" method="POST" >
                                                    <p><h5>Ingrse sus Síntomas:</h5> <textarea  class="w-100" type="text" name="sintomas" placeholder="síntomas"></textarea></p>
                                                    <p><h5>Descripción:</h5> <textarea  class="w-100" type="text" name="descripcion" placeholder="descripción"></textarea></p>
                                                    <p><h5>Apuntes Relevantes:</h5><textarea  class="w-100" type="text" name="apuntes" placeholder="apuntes"></textarea></p>

                                                    <p class="submit"><input type="submit" value="Enviar" class="btn btn-success1"></p>

                                                  </form>

                                                </div>
                                                    

                                                </div>



                                            </div>

                                        </div>

                                    </div>

                                </div>


                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>

<div class="push"></div>



<?php include("footer.php");?>

<?php include("scripts.php");?>