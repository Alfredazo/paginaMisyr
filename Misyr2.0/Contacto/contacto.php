<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../vendor/autoload.php';
  if(isset($_POST['nombre'])&&
    isset($_POST['correo']) &&
    isset($_POST['telefono'])&&
    isset($_POST['mensaje'])
    )
  {
    $fecha = date("d/m/Y");
    $mail = new PHPMailer(true);
    $mail ->CharSet = "UTF-8";                         // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'misyr.mantencion.nuevo@gmail.com';                  // SMTP username
        $mail->Password = '';                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
        );
        $mail->Port = 25;                                    // TCP port to connect to
/*        $mail->SMTPDebug = 2; */
        //Recipients
        $mail->setFrom('misyr.mantencion.nuevo@gmail.com', 'Sr.Noreply - Enviado: '.$fecha.''); // este manda
        $mail->addAddress('@hotmail.com', 'Maestranza Misyr');     // este recibe
      //  $mail->addAddress('ellen@example.com');               // Name is optional
      //  $mail->addReplyTo('info@example.com', 'Information');
      //  $mail->addCC('cc@example.com');
      //  $mail->addBCC('bcc@example.com');

        //Content

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = ('IP REMITENTE '.getRealIP());
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];


        $mail->Body    = "<h3>Nombre Contacto:          ".$nombre. "</h3>".
                         "<h3>Correo:       ".$correo."</h3>".
                         "<h3>Telefono:          ".$telefono."</h3>".
                         "<h3>MENSAJE:</h3>"."<p>".$mensaje."</p>".
                         "<br><br><br><br>".getRealIP();

        $mail->send();
        echo "Mensaje Enviado Correctamente";
        //header('Location: /icpp2.0/#contacto');
    } catch (Exception $e) {
        echo $e.' No se pudo Enviar';
        //echo $mensaje;

    }
  }else{
    //header('Location: /icpp2.0/#contacto');
  }

function getRealIP()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        return $_SERVER['REMOTE_ADDR'];
}
?>
