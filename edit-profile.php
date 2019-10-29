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

                            <h4><strong>Editar Perfil</strong></h4>

                        </div>

                        <div>

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="w-100">

                                        <h4><strong>Email</strong></h4><hr>

                                        <div class="row">

                                            <div class="col-lg-4 alignright">

                                                <span>Email: </span>

                                            </div>

                                            <div class="col-lg-5">

                                                <textarea class="text-per"></textarea><br>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="w-100">

                                        <h4><strong>Cambiar contraseña</strong></h4><hr>

                                        <div class="row">

                                            <div class="col-lg-4 alignright">

                                                <span>contraseña: </span>

                                            </div>

                                            <div class="col-lg-5">

                                                <textarea class="text-per"></textarea><br>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="w-100">

                                        <h4><strong>Información de tu cuenta</strong></h4><hr>

                                        <div class="alignleft">

                                            <form action="act_usuario.php" method="POST">
                                                <div class="row">

                                                    <!--<div class="col-lg-4 alignright">

                                                        <span>Nombre: </span>

                                                    </div>

                                                    <div class="col-lg-5">

                                                        <textarea class="text-per"></textarea><br>

                                                    </div>

                                                    <div class="col-lg-4 alignright">

                                                        <span>Apellido: </span>

                                                    </div>

                                                    <div class="col-lg-5">

                                                        <textarea class="text-per"></textarea><br>

                                                    </div>-->

                                                    <div class="col-lg-4 alignright">

                                                        <span>Usuario: </span>

                                                    </div>

                                                    <div class="col-lg-5">

                                                        <textarea class="text-per"></textarea><br>

                                                    </div>

                                                   <!--<div class="col-lg-4 alignright">

                                                        <span>Celular: </span>

                                                    </div>

                                                    <div class="col-lg-5">

                                                        <textarea class="text-per"></textarea><br>

                                                    </div>

                                                    <div class="col-lg-4 alignright">

                                                        <span>Teléfono: </span>

                                                    </div>

                                                    <div class="col-lg-5">

                                                        <textarea class="text-per"></textarea><br>

                                                    </div>

                                                    <div class="col-lg-4 alignright">

                                                        <span>Dirección: </span>

                                                    </div>

                                                    <div class="col-lg-5">

                                                        <textarea class="text-per"></textarea><br>

                                                    </div>-->

                                                    

                                                    <p class="submit"><input type="submit" value="Enviar" class="btn btn-success1"></p>

                                                </div>                                          

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

  <div class="push"></div>


  <?php include("footer.php");?>

  <?php include("scripts.php");?>