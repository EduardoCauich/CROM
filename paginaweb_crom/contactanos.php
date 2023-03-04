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
  <section class="titulocontactanos slide">
    <div class="ancho">
      <h2 class="tituloblanco wow animate__animated animate__bounceInLeft animate__slow">CONTACTANOS</h2>
      <hr class="linearoja wow animate__animated animate__bounceInLeft animate__slow">
    </div>
  </section>
  <section class="infocontactanos ancho">
  <section id="contactanos" class="ancho">
        <p id="descrip2">Completa el siguiente formulario  y un ejecutivo se pondrá en contacto contigo para darte más detalles.</span></p>
<br>
    <?php
      $errorusuario = isset($_GET["error"]);	
      if($errorusuario == "1"){
         echo '<center><font color="red" size="3" align="center"><b>Datos incorrectos del CÓDIGO DE SEGURIDAD del formulario</b></font></center><br>';
      }
    ?> 
    <form action="enviar.php" method="post" id="elem_contact">
          <div id="elementos_izquierda">
              <input  class="elem" type="text" name="nombre" placeholder="* Nombre" required>
              <input  class="elem" type="text" name="empresa" placeholder="Nombre del Negocio">
              <input  class="elem" type="email"name="email"  placeholder="* Correo electrónico" required>
              <input  class="elem" type="tel" name="telefono" placeholder="Telefono">
              <input  class="elem" type="tel" name="celular" placeholder="* Celular" required>
             
          </div>
          <div id="elementos_derecha">
              <textarea name="comentarios" placeholder="* Dejanos tus dudas" required></textarea>
              <div id="seguridad">
                  <p id="codigo">Código de Seguridad<br /></p>
                  <img src="CaptchaSecurityImages.php?width=100&amp;height=40&amp;characters=4" />
                  &nbsp;&nbsp;
                  <input id="security_code" name="security_code" type="text" />
                </div>
                <br>
                <label for="security_code"></label>
              <button class="btn_rojo enviar" type="submit">Enviar</button>
          </div>
          </form>

      </section>
  </section>

    <?php
      include "footer.php";
    ?>
  <script src="funciones.js"></script>
</body>
</html>