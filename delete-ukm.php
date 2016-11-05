<!DOCTYPE html>
<html>
<head>
	<title>Delete from UKM</title>
</head>
<body>
</body>

<?php
require_once 'db.php';

$conn = konek_db();

if(!isset($_GET['id']))
	die("Tidak ditemukan ukm");

$id =$_GET['id'];

$query = $conn->prepare("select * from ukm where id=?");
$query->bind_param('i',$id);
$result = $query->execute();

if(!$result)
	die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
	die("ukm tidak detemukan");

//hapus ukm
// tarik gambar ukm
$news = $rows->fetch_object();
$image = $news->logo;
if ($image != null && file_exists("img/$image")) {
	//hapus image
	unlink("img/$image");
}

$query = $conn->prepare("delete from ukm where id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
header("Location:input-ukm.php");
else
echo "<p>Gagl mendelete ukm</p>";

?>
</body>
</html>