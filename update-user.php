<!DOCTYPE html>
<html>
<head>
	<title>update data user</title>
</head>
<body>
</body>

<?php
require_once 'db.php';

$conn = konek_db();

if(!isset($_GET['username']))
	die("Tidak ditemukan username");

$username =$_GET['username'];

$query = $conn->prepare("select * from user where username=?");
$query->bind_param('s',$username);
$result = $query->execute();


if(!$result)
	die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
	die("user tidak detemukan");
if(!isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['category']))
		die("Data user tidak lengkap");

  $name = $_POST['name'];
  $password = $_POST['password'];
  $category = $_POST['category'];


$query = $conn->prepare("update user set name=?,password=?,category=? where username=?");
$query->bind_param('ssss',$name,$password,$category,$username);
$result=$query->execute();

if($result)
echo "<p>Data user berhasil di update</p>";
else
echo "<p>Gagl mengupdate user</p>";

?>
<a href="admin.php"><button>Back to Input News</button></a>
</body>
</html>