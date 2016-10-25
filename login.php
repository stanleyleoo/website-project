<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
require_once "db.php";

if(!isset($_POST['username']) && !isset($_POST['password'])){
	echo "username dan password tidak cocok";
}
else {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = konek_db();;
	$query = $conn->prepare("select password,category from user where username=?");
	$query->bind_param("s",$username);
	$result = $query->execute();
	$query->bind_result($passdb, $category);
	$query->fetch();

	if(!$result)
		die("Gagal koneksi ke database");

		if($password != null || $password != ''){
			if($passdb = $password){
				$_SESSION['username'] = $username;
				switch ($category) {
					case 1:
						header("Location:admin.php");
						break;
					
					
				}
			}
		

		// switch($row->category){
		// 	case 1: $loc = "location:admin.php";
		// 	break;
		// 	case 2: $loc = "location:input-news1.php";
		// 	break;
		// }
	}else
		die("password atau username salah");
}


?>
</body>
</html>