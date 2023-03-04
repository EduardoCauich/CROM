<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
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
  <section class="slide">
    <div class="infoslide callbacks_container">
      <ul class="rslides " id="slider4">
        <li>
          <img src="imagenes/foto_slide1.jpg" alt="">
          <div class="infofoto">
            <h3 class="subtitulonaranaja wow animate__animated animate__bounceInLeft animate__slow">Sistemas de videovigilancia</h3>
            <h2 class="tituloblanco wow wow animate__animated animate__bounceInLeft animate__slow">Control de 24 horas para la seguridad de tu casa o negocio</h2>
          </div>
        </li>
        <li>
          <picture>
            <source  srcset="imagenes/foto_slide2_movil.jpg" media="(max-width:480px)">
            <img class="dos" src="imagenes/foto_slide2.jpg" alt="">
          </picture>
          <div class="infofoto">
            <h3 class="subtitulonaranaja wow animate__animated animate__bounceInLeft animate__slow">Sistema de detección de intrusos</h3>
            <h2 class="tituloblanco wow animate__animated animate__bounceInLeft animate__slow">Instalación garantizada de cámaras de videovigilancia</h2>
          </div>
        </li>
        <li>
          <picture>
            <source  srcset="imagenes/foto_slide3_movil.jpg" media="(max-width:480px)">
            <img class="dos" src="imagenes/foto_slide3.jpg" alt="">
          </picture>
          <div class="infofoto">
            <h3 class="subtitulonaranaja wow animate__animated animate__bounceInLeft animate__slow">Todo lo que necesitas para protegerte</h3>
            <h2 class="tituloblanco wow animate__animated animate__bounceInLeft animate__slow">Monitoreo de todas las areas de tu casa o negocio</h2>
          </div>
        </li>
        <li>
          <img src="imagenes/foto_slide4.jpg" alt="">
          <div class="infofoto">
            <h3 class="subtitulonaranaja wow animate__animated animate__bounceInLeft animate__slow">Planeación a medida segun tus necesidades</h3>
            <h2 class="tituloblanco wow animate__animated animate__bounceInLeft animate__slow">Diseño de proyectos de videovigilancia</h2>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bienvenida ancho">
    <figure>
      <img src="imagenes/foto_mejorservicio.jpg" alt="">
    </figure>
    <article class="infobienvenida">
      <h1 class="naranja">El mejor servicio de camaras de seguridad para tu casa o negocio</h1>
      <br>
      <h2 class="titulo">Contamos con especialistas para cada servicio e instalación.</h2>
      <hr class="linearoja">
      <br>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda ipsam cum distinctio reprehenderit expedita voluptate, eos minus est quo perferendis labore, doloribus voluptatum dicta veritatis at consequatur. Eligendi, error laboriosam!</p>
      <br>
      <div class="caracteristicas">
        <img src="imagenes/icono_caracteristicas1.png" alt="">
        <div class="infocaracteristicas">
          <h2 class="subtitulo">CONFIABLE Y SEGURO</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempore natus enim, quas voluptates vel consectetur cum perferendis sint reiciendis iure dolore quia maiores delectus earum maxime, voluptas, nam ipsum.</p>
          </div>
      </div>
      <br>
        <div class="caracteristicas">
          <img src="imagenes/icono_caracteristicas2.png" alt="">
          <div class="infocaracteristicas">
            <h2 class="subtitulo">24/7 SOPORTE</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempore natus enim, quas voluptates vel consectetur cum perferendis sint reiciendis iure dolore quia maiores delectus earum maxime, voluptas, nam ipsum.</p>
          </div>
      </div>
    </article>
  </section>
  <br>
  <div class="fondoazul">
    <section class="bienvenida ancho">
      <article class="infobienvenida">
        <h2 class="titulo">Por que escoger nuestros servicios</h2>
        <hr class="linearoja">
        <br>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda ipsam cum distinctio reprehenderit expedita voluptate, eos minus est quo perferendis labore, doloribus voluptatum dicta veritatis at consequatur. Eligendi, error laboriosam!</p>
        <br>
        <div class="caracteristicas2 wow animate__animated animate__fadeInRight">
          <i class="rojo fa-solid fa-circle-check fa-2x"></i>
          <p class="">Cámara con alarma con detección de humanos</p>
        </div>
        <div class="caracteristicas2 wow animate__animated animate__fadeInRight">
          <i class="rojo fa-solid fa-circle-check fa-2x"></i>
          <p>Soporte e Instalación garantizada</p>
        </div>
        <div class="caracteristicas2 wow animate__animated animate__fadeInRight">
          <i class="rojo fa-solid fa-circle-check fa-2x"></i>
          <p>Respaldo de grabaciones al día</p>
        </div>
        <div class="caracteristicas2 wow animate__animated animate__fadeInRight">
          <i class="rojo fa-solid fa-circle-check fa-2x"></i>
          <p>Configuración de dispositivos (móvil app).</p>
        </div>
      </article>
      <figure>
        <img src="imagenes/foto_porque.jpg" alt="">
      </figure>
    </section>
  </div>
  <br>
  <div class="nuestrosservicios ancho">
    <br>
    <h2 class="titulo">Nuestros Servicios</h2>
    <hr class="linearoja">
    <br>
    <div class="contenedorservicios">
      <article class="wow animate__animated animate__zoomIn">
        <img src="imagenes/icono1.png" alt="">
        <br>
        <h2 class="rojo">Seguridad para el HOGAR</h2>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure suscipit qui, odit id quia laboriosam impedit. Ex qui cupiditate, facilis porro veritatis tenetur iste? Aspernatur beatae expedita eaque fugiat odio.</p>
      </article>
      <article class="wow animate__animated animate__zoomIn">
        <img src="imagenes/icono2.png" alt="">
        <br>
        <h2 class="rojo">Seguridad para tu NEGOCIO</h2>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure suscipit qui, odit id quia laboriosam impedit. Ex qui cupiditate, facilis porro veritatis tenetur iste? Aspernatur beatae expedita eaque fugiat odio.</p>
      </article>
      <article class="wow animate__animated animate__zoomIn">
        <img src="imagenes/icono3.png" alt="">
        <br>
        <h2 class="rojo">Configuración de cámaras</h2>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure suscipit qui, odit id quia laboriosam impedit. Ex qui cupiditate, facilis porro veritatis tenetur iste? Aspernatur beatae expedita eaque fugiat odio.</p>
      </article>
      <article class="wow animate__animated animate__zoomIn">
        <img src="imagenes/icono4.png" alt="">
        <br>
        <h2 class="rojo">Respaldos de información</h2>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure suscipit qui, odit id quia laboriosam impedit. Ex qui cupiditate, facilis porro veritatis tenetur iste? Aspernatur beatae expedita eaque fugiat odio.</p>
      </article>
      <article class="wow animate__animated animate__zoomIn">
        <img src="imagenes/icono5.png" alt="">
        <br>
        <h2 class="rojo">Diseño e instalación de red</h2>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure suscipit qui, odit id quia laboriosam impedit. Ex qui cupiditate, facilis porro veritatis tenetur iste? Aspernatur beatae expedita eaque fugiat odio.</p>
      </article>
      <article class="wow animate__animated animate__zoomIn">
        <img src="imagenes/icono6.png" alt="">
        <br>
        <h2 class="rojo">Domótica para el HOGAR</h2>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure suscipit qui, odit id quia laboriosam impedit. Ex qui cupiditate, facilis porro veritatis tenetur iste? Aspernatur beatae expedita eaque fugiat odio.</p>
      </article>
    </div>
  </div>
  <br>
  <section class="instalaciones ancho">
    <br>
    <h2 class="titulo">Instalaciones realizadas</h2>
    <hr class="linearoja">
    <br>
  </section>
    <section id="galeria">
      <a  class="fancybox" rel="gallery1" href="imagenes/instalaciones1.jpg" title="FOTO 1">
        <img src="imagenes/instalaciones1.jpg" alt="" />
      </a>
      <a class="fancybox"  rel="gallery1"  href="imagenes/instalaciones2.jpg"  title="FOTO 2"  >
        <img src="imagenes/instalaciones2.jpg" alt="" />
      </a>
      <a class="fancybox" rel="gallery1" href="imagenes/instalaciones3.jpg" title="FOTO 3" >
        <img src="imagenes/instalaciones3.jpg" alt="" />
      </a>
      <a class="fancybox" rel="gallery1"  href="imagenes/instalaciones4.jpg"  title="FOTO 4"  >
        <img src="imagenes/instalaciones4.jpg" alt="" />
      </a>
    </section>
    <br>
    <section class="calltoaction">
      <div class="infocalltoaction ancho">
        <h2>La mejor solución para tu sistema de seguridad</h2>
      <a href="contactanos.php" class="btn_rojo"> Solicita más información</a>
      </div>
    </section>
    <section class="lineas">
      <section class="bienvenida ancho wow animate__animated animate__fadeIn animate__slow">
        <article class="infobienvenida">
          <br>
          <h2 class="titulo">Nuestras Ventajas</h2>
          <hr class="linearoja">
          <br><br>
          <div class="contenedor_ventajas">
            <article>
              <img src="imagenes/icono_ventajas1.png" alt="">
              <br>
              <h3 class="rojo">Soporte rápido y eficiente</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, explicabo autem amet quo molestias nulla nostrum esse labore voluptatum ab quis libero veritatis quisquam architecto repellendus maxime. Nulla, illum iusto!</p>
            </article>
            <article>
              <img src="imagenes/icono_ventajas2.png" alt="">
              <br>
              <h3 class="rojo">Instalaciones de Calidad</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, explicabo autem amet quo molestias nulla nostrum esse labore voluptatum ab quis libero veritatis quisquam architecto repellendus maxime. Nulla, illum iusto!</p>
            </article>
            <article>
              <img src="imagenes/icono_ventajas3.png" alt="">
              <br>
              <h3 class="rojo">Tecnología Digital</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, explicabo autem amet quo molestias nulla nostrum esse labore voluptatum ab quis libero veritatis quisquam architecto repellendus maxime. Nulla, illum iusto!</p>
            </article>
            <article>
              <img src="imagenes/icono_ventajas4.png" alt="">
              <br>
              <h3 class="rojo">Variedad de dispositivos</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, explicabo autem amet quo molestias nulla nostrum esse labore voluptatum ab quis libero veritatis quisquam architecto repellendus maxime. Nulla, illum iusto!</p>
            </article>
          </div>
        </article>
        <figure class="wow animate__animated animate__fadeIn animate__slow">
          <img src="imagenes/foto_camara.png" alt="">
        </figure>
      </section>
    </section>
    <?php
      include "footer.php";
    ?>
  <script src="funciones.js"></script>
</body>
</html>