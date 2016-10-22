<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "stanz.leo97@gmail.com";
  $email = $_REQUEST['email'];
  $kritik = $_REQUEST['kritik'];
  $saran = $_REQUEST['saran'];
  
  //send email
  mail($admin_email, $kritik,$saran, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
    echo "error";
  }
?>