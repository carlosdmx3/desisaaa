<?php 

$elrfc  = $informacion4;
$elmail = $informacion3;

include 'PHPMailer/PHPMailerAutoload.php';
include 'PHPMailer/class.smtp.php';

$mail = new PHPMailer();
$mail->isSMTP();                    // Set mailer to use SMTP
$mail->Timeout  =   30;
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";     // Specify main and backup SMTP servers
$mail->Port = 465;          
$mail->SMTPAuth = true;             // Enable SMTP authentication
$mail->Username = "programas.posgrado@seiem.gob.mx";        // SMTP username
$mail->Password = "Posgrados-23";          // SMTP password
$mail->SMTPSecure = "ssl";          // Enable TLS encryption, `ssl` also accepte

//$mail->AddEmbeddedImage('Captura.PNG', 'PROGRAMA_SIMPOSIO_2019', 'Captura.PNG'); 

$mail->From = "programas.posgrado@seiem.gob.mx";
$mail->FromName = utf8_decode("Recuperación de contraseña de acceso");

$mail->addAddress($elmail);     // Add a recipient

$message  = "<html><body>";

$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
$message .= "<tr>";
$message .= "<td>";

$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>";
$message .= "<tr height='80'>";
$message .= "  <th colspan='4' style='background-color:#802434; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#D4AF37; font-size:18px;  text-align:center;'>";
$message .= "<b style='color:#D4AF37; font-family: Italic; font-size:35px;'>SEIEM</b><br>";
$message .= "<b style='color:#D4AF37; font-family: Italic; font-size:20px;'>Departamento de Posgrado e Investigación</b>";
$message .= "</th> ";
$message .= "</tr>";
$message .= "</thead>";

$message .= "<tbody>"; 
$message .= "<tr height='80'>";
$message .= "  <td colspan='4' style='background-color:#802434; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#D4AF37; font-size:18px;  text-align:center;'>";
$message .=  "Recuperación de contraseña de acceso";
$message .= "</td> ";
$message .= "</tr>";  
$message .= "<tr>";
$message .= " <td style='padding:15px;'>
               <p style='font-size:20px;'>Saludos, $informacion2
               <br><b>Contraseña: </b>$informacion5</p><br>
               <hr />
               <p style='font-size:16px;'>Esta es tu nueva contraseña de acceso. ¡Recuerdala!
               <br><br></p>";
$message .= "</td>";
$message .= "</tr>";
$message .= "</tbody>";    
$message .= "</table>";

$message .= "</td>";
$message .= "</tr>";
$message .= "</table>";
$message .= "</body></html>";

$mail->Subject = utf8_decode("Recuperación de contraseña de acceso");
$mail->Body    = $message;

$mail->AltBody = "O SE QUE MUESTRE ESTO";
//echo !extension_loaded('openssl')?"Not Available":"Available";

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
));


if(!$mail->send()) {   
    echo '<BR>Mailer Error: '.$mail->ErrorInfo;
    $oky = 0;
} else {
    //echo $message;
    echo "<br><b style='color:green; font-size:12px;'>se envió la nueva contraseña a tu correo: ".$elmail."</b><br>";
    $oky = 1;
    
}

?>