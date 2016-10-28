<!DOCTYPE html>
<html>
<head>
	<title>Delete from UU</title>
</head>
<body>
</body>

<?php
require_once 'db.php';

$conn = konek_db();

if(!isset($_GET['id']))
	die("Tidak ditemukan UU");

$id =$_GET['id'];

$query = $conn->prepare("select * from uu where id=?");
$query->bind_param('i',$id);
$result = $query->execute();

if(!$result)
	die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
	die("news tidak detemukan");

//hapus news
// tarik gambar news
$news = $rows->fetch_object();
$uu = $news->uu;
if ($uu != null && file_exists("UU/$uu")) {
	//hapus uu
	unlink("UU/$uu");
}

$query = $conn->prepare("delete from uu where id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
header("Location:input-uu.php");
else{
echo "<p>Gagl mendelete News</p><br>";
echo "<a href=\"input-uu.php\">Back to Input</a>";
}

?>
<a href="input-news1.php"><button>Back to Input News</button></a>
</body>
</html>