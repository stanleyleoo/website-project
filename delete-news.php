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

$query = $conn->prepare("select * from news where id=?");
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
$image = $news->image;
if ($image != null && file_exists("img/$image")) {
	//hapus image
	unlink("img/$image");
}

$query = $conn->prepare("delete from news where id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
header("Location:input-news1.php");
else
echo "<p>Gagl mendelete News</p>";

?>
<a href="input-news1.php"><button>Back to Input News</button></a>
</body>
</html>