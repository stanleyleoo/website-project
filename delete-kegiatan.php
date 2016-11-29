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

$query = $conn->prepare("select poster, image from gambar LEFT JOIN kegiatan ON kegiatan.id = gambar.id_kegiatan where gambar.id_kegiatan=?");
$query->bind_param('i',$id);
// $query->
$result = $query->execute();
$query->bind_result($poster, $col2);
$image = array();
while ($query->fetch()) {
  array_push($image, $col2);
}


if(!$result)
  die("Gagal query");
// $rows = $query->get_result();
// if($rows->num_rows == 0)
//   die("Kegiatan tidak detemukan");

//hapus ukm
// tarik gambar ukm
// $kegiatan = $rows->fetch_object();
// $image = $kegiatan->poster;
if ($poster != null && file_exists("img/$poster")) {
  //hapus image
  unlink("img/$poster");
  echo "$poster";
}
$i = 0;
echo "<p>" . count($image) . "</p>";
for ($i=0; $i < count($image); $i++) { 
	echo $image[$i] . " " . $i . "<br>";
	if($image[$i] != null && $image[$i] != "" && file_exists($image[$i])){
		unlink($image[$i]);
	}
}
$query = $conn->prepare("delete kegiatan, gambar from kegiatan LEFT JOIN gambar ON gambar.id_kegiatan = kegiatan.id where kegiatan.id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
echo "<script type='text/javascript'>alert('Delete Kegiatan Berhasil');window.location.href = 'input-kegiatan.php';</script>";
else
echo "<p>Gagl mendelete kegiatan</p>";

?>
</body>
</html>