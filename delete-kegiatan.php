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

$query = $conn->prepare("select * from kegiatan where id=?");
$query->bind_param('i',$id);
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

$query = $conn->prepare("delete from kegiatan where id=?");
$query->bind_param('i',$id);
$result=$query->execute();

if($result)
header("Location:input-kegiatan.php");
else
echo "<p>Gagl mendelete kegiatan</p>";

?>
</body>
</html>