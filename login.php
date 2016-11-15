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
			echo "$passdb = $password";
			if($passdb == $password){
				$_SESSION['username'] = $username;
				$_SESSION['category'] = $category;
				switch ($category) {
					case 1:
						header("Location:admin.php");
						break;
					case 2:
						header("Location:input-news1.php");
						break;
					case 3:
						header("Location:input-tentang1.php");
						break;
					case 4:
						header("Location:input-ukm.php");
						break;
					case 5:
						header("Location:input-kegiatan.php");
						break;
					case 6:
						header("Location:input-uu.php");
						break;					
				}
				// require_once "access.php";
			}else {
				header("Location:error.html");
			}
		

		// switch($row->category){
		// 	case 1: $loc = "location:admin.php";
		// 	break;
		// 	case 2: $loc = "location:input-news1.php";
		// 	break;
		// }
	}else
		header("Location:error.html");

}


?>
</body>
</html>