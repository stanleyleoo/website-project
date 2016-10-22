<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "Anda telah Logout";
header("Location:login.html");
?>
</body>
</html>