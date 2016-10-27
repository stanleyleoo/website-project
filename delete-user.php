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

$query = $conn->prepare("delete from user where username=?");
$query->bind_param('s',$username);
$result=$query->execute();

if($result)
header("Location:admin.php");
else
echo "<p>Gagl mendelete user</p>";

?>
<a href="admin.php"><button>Back to Admin Page</button></a>
</body>
</html>