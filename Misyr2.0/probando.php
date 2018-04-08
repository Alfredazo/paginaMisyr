<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo21.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Misyr</title>

  </head>
  <body>

    <section class="mbr-section form1 cid-qOio2M6D9S mbr-parallax-background" id="form1-w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                        CONTACTANOS</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                        Te responderemos lo mas rapido posible</h3>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="media-container-column col-lg-8" data-form-type="formoid">
                      <div class="loader2"></div>
                            <form id="ajax-contact" class="mbr-form" action="Contacto/contacto.php" method="post">
                                <div class="row row-sm-offset">
                                    <div class="col-md-4 multi-horizontal" data-for="name">
                                        <div class="form-group">
                                            <label class="form-control-label mbr-fonts-style display-7" for="name-form1-m">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" data-form-field="Name" required="" id="name-form1-m">
                                        </div>
                                    </div>
                                    <div class="col-md-4 multi-horizontal" data-for="email">
                                        <div class="form-group">
                                            <label class="form-control-label mbr-fonts-style display-7" for="email-form1-m">Correo Electronico</label>
                                            <input type="email" class="form-control" name="correo" data-form-field="Email" required="" id="email-form1-m">
                                        </div>
                                    </div>
                                    <div class="col-md-4 multi-horizontal" data-for="phone">
                                        <div class="form-group">
                                            <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-m">Nro° Contacto</label>
                                            <input type="tel" class="form-control" name="telefono" data-form-field="Phone" id="phone-form1-m">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-for="message">
                                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-m">Mensaje</label>
                                    <textarea type="text" class="form-control" name="mensaje" rows="7" data-form-field="Message" id="message-form1-m"></textarea>
                                </div>

                                <div class="row">
                                  <span class="input-group-btn col-12 col-md-6">
                                      <button type="submit" class="btn btn-primary btn-form display-4">ENVIAR MENSAJE</button>
                                  </span>
                                  <div id="respuesta" class="MensajeContacto col-12 col-md-6">
                                  </div>
                                </div>
                            </form>
                    </div>
                </div>
              </div>
    </section>

      <script src="assets/web/assets/jquery/jquery.min.js"></script>
      <script src="assets/popper/popper.min.js"></script>
      <script src="assets/tether/tether.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/smoothscroll/smooth-scroll.js"></script>
      <script src="assets/dropdown/js/script.min.js"></script>
      <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
      <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
      <script src="assets/parallax/jarallax.min.js"></script>
      <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
      <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
      <script src="assets/theme/js/script.js"></script>
      <script src="assets/slidervideo/script.js"></script>
      <script src="assets/formoid/formoid.min.js"></script>

      <script type="text/javascript">
                $(document).ready(function () {
                    $('.loader2').hide();
                    $('#ajax-contact').submit(function () {
                        $(".loader2").fadeOut("slow");
                        $(".loader2").fadeIn("slow");
                        $('#respuesta').hide();
                        $.ajax({
                            type: 'POST',
                            url: "Contacto/contacto.php",
                            data: $(this).serialize(),
                            success: function (data) {
                                $('#respuesta').html(data);
                                document.getElementById("name-form1-m").value = "";
                                document.getElementById("email-form1-m").value = "";
                                document.getElementById("phone-form1-m").value = "";
                                document.getElementById("message-form1-m").value = "";
                                $(".loader2").hide("slow");
                                $('#respuesta').fadeIn('slow');
                            }
                        })
                        return false;
                    });
                });
        </script>
  </body>
</html>
