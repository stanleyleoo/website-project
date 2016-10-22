<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require_once "db.php";

if(!isset($_POST['username']) && !isset($_POST['password']))
	echo "username dan password tidak cocok";

$username = $_POST['username'];
$password = $_POST['password'];

$conn = konek_db();
$query = $conn->prepare("select * from user");
$result = $query->execute();

if(!$result)
	die("Gagal koneksi ke database");
$rows = $query->get_result();

$row = $rows->fetch_array()
if($row){
	if($username == $row['username'] && $password == $row['password'] ){
		$_SESSION['username'] = $username;
		$_SESSION['category'] = $row->category;
		switch($row->category){
			case 1: $loc = "location:admin.php";
			break;
			case 2: $loc = "location:input-news1.php";
			break;
		}
		header($loc);
	}else
		die("password atau username salah");
}


?>
</body>
</html>