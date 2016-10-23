<!DOCTYPE html>
<html>
<head>
	<title>Delete from news</title>
</head>
<body>
</body>

<?php
require_once 'db.php';

$conn = konek_db();

if(!isset($_GET['id']))
	die("Tidak ditemukan produk");

$id =$_GET['id'];

$query = $conn->prepare("select * from user where id=?");
$query->bind_param('i',$id);
$result = $query->execute();

if(!$result)
	die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
	die("user tidak detemukan");

$query = $conn->prepare("delete from user where id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
echo "<p>user berhasil di delete</p>";
else
echo "<p>Gagl mendelete user</p>";

?>
<a href="admin.php"><button>Back to Admin Page</button></a>
</body>
</html>