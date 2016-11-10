<?php
require_once "PHPMailer/PHPMailerAutoload.php";

if (isset($_POST["email"]) &&
    isset($_POST["saran"])) {
  $email = $_POST["email"];
  $saran = $_POST["saran"];
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
  $mail->Body = $saran;

  if (! $mail->send())
      die("gagal kirim email");

  header("Location: hmj.php");
}else{
  echo "saran gagal dikirim";
}
?>
<p><a href="hmj.php"><button>Back To HMFH Website</button></a></p>