
       // SCRIPT PARA EL BOTON SUBIR

       $(document).ready(function () {
        $('.ir_arriba').click(function () {
          $('body, html').animate({
            scrollTop: '0px'
          }, 900);
        });

        $(window).scroll(function () {
          if ($(this).scrollTop() > 0) {
            $('.ir_arriba').slideDown(300);
          } else {
            $('.ir_arriba').slideUp(300);
          }
        });
      });

 // menu responsive
 $(function () {
    var btn_movil = $("#iconomenu");
    var menucompleto = $("nav ul");
  
    btn_movil.on("click", function (e) {
      e.preventDefault();
      menucompleto.toggleClass("open-menu");
    });
  });