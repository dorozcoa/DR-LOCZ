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

                    <div class="col-lg-8 col-md-8 col-sm-8 alignleft">

                        <h4>Mi Perfil</h4>
                      
                        <table class="table table-striped table-bordered table-advance table-hover aligncenter">

                            <tbody>
                                    <?php
                                        include("datos_perfil.php");
                                        $Con = new conexion();
                                        $Con->recuperarDatos();
                                    ?>

                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="row mtop30">
                    <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 alignleft">

                          <h4>Consultas Recientes</h4>
                      
                        <table class="table table-striped table-bordered table-advance table-hover aligncenter">

                            <tbody>

                                <tr>
                                    <td><strong>Consulta Nº </strong></td>
                                    <td><strong>Síntomas Presentados </strong></td>
                                    <td><strong>Descripción </strong></td>
                                    <td><strong>Apuntes Relevantes</strong></td>
                                </tr>
                                    <?php
                                        include("datos_sintomas.php");
                                        $Con = new conexion2();
                                        $Con->recuperarDatos();
                                    ?>

                            </tbody>

                        </table>
                       <!--<a class="btn btn-success1" href="edit-profile.php">Editar Perfil</a>-->
 
                    </div>

                </div>

            </div>

        </div>

    </div>

<div class="push"></div>





<?php include("footer.php");?>

<?php include("scripts.php");?>