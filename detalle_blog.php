<?php include("header.php");?>

<?php include("head.php");?>

<script>
 $(function(){
  $("#add_coment").click(function(){
   var nombre =$("#nombres").val();
   var email = $("#email").val();
   var mensaje = $("#mensaje").val();
   $(".wrap_main_coment_autor").append('<div><p class="nom_autor">'+nombre+'</p><p class="fecha_autor">Enero 31, 2014 a las 3:13 pm</p>');
   $(".wrap_main_coment_autor").append('<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"><img class="w-100 borde-guia1 sombra" src="img/user.png"></div>');
   $(".wrap_main_coment_autor").append('<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12"><div class="bac-blanco alignleft">'+mensaje+'</div></div><br>');
   $(".wrap_main_coment_autor").append('<div class="clear"></div>');
   $(".wrap_main_coment_autor").append('</div>');

  });
  
 });
</script>
<!-- content general

================================================== -->       
<div class="container">
   
        <div class="row mtop20">

            <div class="col-lg-12 col-md-12 col-sm-12 alignleft">

                <h2 class="bor-1px"><strong>Consectetur</strong> adipisicing elit.</h2>

                <img class="w-100 raised bor-ra" src="img/banner.png" alt="Generic placeholder image">



                <div class="bac-blanco alignleft mtop20">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, molestias, labore dolores dolorum fugit vitae reprehenderit soluta eum natus cum ea eaque ipsa quibusdam aspernatur velit excepturi eos atque culpa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, necessitatibus rem fugit accusamus nulla praesentium ut dicta consequatur delectus aperiam. Officia, quos placeat laudantium blanditiis similique magni reiciendis quasi provident.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur porro est maxime voluptatum possimus ratione aperiam culpa obcaecati non asperiores. A, sed, iste porro voluptatum optio pariatur natus itaque. Tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, molestias, labore dolores dolorum fugit vitae reprehenderit soluta eum natus cum ea eaque ipsa quibusdam aspernatur velit excepturi eos atque culpa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, necessitatibus rem fugit accusamus nulla praesentium ut dicta consequatur delectus aperiam. Officia, quos placeat laudantium blanditiis similique magni reiciendis quasi provident.</p>

                </div>

                <div class="blog">

                    <p>

                        <span class="mar-ri"><span class="icon-calendar"></span> 01/01/2014  </span>

                        <span  class="mar-ri"><span class="icon-user3"></span> <strong>Por: </strong> Autor del blog  </span>

                        <span ><span class="icon-bubbles2"></span> <strong> 2 </strong> Colentarios</span>

                    </p>

                </div>
                <div class="coment">

                </div>


            </div>

        </div>
          <div class="bor-1px"></div>
    <div class="row wrap_main_coment_autor">
        <div>
            <p class="nom_autor">Nombre autor</p>
            <p class="fecha_autor">Julio 11, 213 a las 12:00 pm</p>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <img class="w-100 borde-guia1 sombra" src="img/user.png">
        </div>
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
            <div class="bac-blanco alignleft">
                <p>
                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                 totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                  sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                   consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                     incidunt ut labore et dolore magnam aliquam quaerat voluptatem."
            </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="bor-1px"></div>
            <div>
                <p class="blog_detalle">
                    Registrar y responder 
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 div_blog">
                    <input id="nombres" class="w-100" type="text" name="nombres" placeholder="Nombres">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 div_blog">
                    <input id="email" class="w-100" type="text" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 div_blog">
                    <textarea id="mensaje" class="w-100 input_blog1" name="mensaje" placeholder="Mensaje"></textarea>
                </div>
                <p><a id="add_coment" class="a_demo_one f-left mar-ri">Enviar <span class="icon-arrow-right5 pos-icon"></span></a></p>
            </div>
        </div>
    </div>
    
</div>


<div class="push"></div>

<?php include("footer.php");?>

<?php include("scripts.php");?>