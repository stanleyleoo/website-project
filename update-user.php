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

if(!isset($_GET['id']))
	die("Tidak ditemukan id");

$id =$_GET['id'];

$query = $conn->prepare("select * from user where id=?");
$query->bind_param('i',$id);
$result = $query->execute();

if(!$result)
	die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
	die("user tidak detemukan");
if(!isset($_POST['name']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['category']))
		die("Data user tidak lengkap");

    $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $category = $_POST['category'];


$query = $conn->prepare("update user set name=?,username=?,password=?,category=? where id=?");
$query->bind_param('ssssi',$name,$username,$password,$category,$id);
$result=$query->execute();

if($result)
echo "<p>Data user berhasil di update</p>";
else
echo "<p>Gagl mengupdate user</p>";

?>
<a href="admin.php"><button>Back to Input News</button></a>
</body>
</html>