<!DOCTYPE html>
<html>
<head>
  <title>Delete from Kegiatan</title>
</head>
<body>
</body>

<?php
require_once 'db.php';

$conn = konek_db();

if(!isset($_GET['id']))
  die("Tidak ditemukan ID kegiatan");

$id =$_GET['id'];

$query = $conn->prepare("select poster, image from kegiatan LEFT JOIN gambar ON gambar.id_kegiatan = kegiatan.id where kegiatan.id=?");
$query->bind_param('i',$id);
// $query->
$result = $query->execute();

if(!$result)
  die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
  die("Kegiatan tidak detemukan");

//hapus ukm
// tarik gambar ukm
$kegiatan = $rows->fetch_object();
$image = $kegiatan->poster;
if ($image != null && file_exists("img/$image")) {
  //hapus image
  unlink("img/$image");
}
$i = 0;
while($row = $rows->fetch_array()){

	echo $row['image'] . " " . $i . "<br>";
	if($row['image'] != null && $row['image'] != "" && file_exists($row['image'])){
		unlink($row['image']);
	}
	$i++;
}
$query = $conn->prepare("delete kegiatan, gambar from kegiatan LEFT JOIN gambar ON gambar.id_kegiatan = kegiatan.id where kegiatan.id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
header("Location:input-kegiatan.php");
else
echo "<p>Gagl mendelete kegiatan</p>";

?>
</body>
</html>