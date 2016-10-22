<?php
require_once "PHPMailer/PHPMailerAutoload.php";

if (isset($_POST["email"]) &&
    isset($_POST["kritik"])) {
  $email = $_POST["email"];
  $kritik = $_POST["kritik"];
  $mail = new PHPMailer();

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'kritiksaranhmfh@gmail.com';
  $mail->Password = 'hmfhuphmedan2016';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom("kritiksaranhmfh@gmail.com");
  $mail->addAddress("hmfhuphmedan@gmail.com");
  $mail->addReplyTo($email);

  $mail->Subject = "Kritik dari $email";
  $mail->Body = $kritik;

  if (! $mail->send())
      die("gagal kirim email");

  echo "kritik berhasil dikirim";
}else{
  header("hmj.html");
}
?>
<p><a href="hmj.html"><button>Back To HMFH Website</button></a></p>