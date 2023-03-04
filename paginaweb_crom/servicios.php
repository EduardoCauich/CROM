<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="secciones.css">
  <link rel="stylesheet" href="movil.css">
  <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
  <script src='https://kit.fontawesome.com/2ee0245f3d.js' crossorigin='anonymous'></script>
  <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
  <link rel="stylesheet" href="fancybox/jquery.fancybox.css" />
  <script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="wow.min.js"></script>
  <title>Automatizacion Residencial y Empresarial - CROM</title>
  <script src="responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
    });
  </script>
</head>
<body>
  <script>
    new WOW().init();
  </script>
  <!-- FLECHA -->
  <a class="ir_arriba" href="#">
    <i class=" fa fa-arrow-up fa-1x"></i>
  </a>
  <!-- WHATSAPP -->
  <?php
    include "whatsapp.php";
    include "header.php";
  ?>
  <section class="tituloservicios slide">
    <div class="ancho">
      <h2 class="tituloblanco  wow animate__animated animate__bounceInLeft animate__slow">SERVICIOS</h2>
      <hr class="linearoja  wow animate__animated animate__bounceInLeft animate__slow">
    </div>
  </section>
  <br>
  <section class="infoservicios ancho">

  </section>
<br>

    <?php
      include "footer.php";
    ?>
  <script src="funciones.js"></script>
</body>
</html>