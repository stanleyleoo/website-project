<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
    
    header("location: login.html");
}else {
    if ($_SESSION['category'] != 4) {
        session_destroy();
        header("location: login.html");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update UKM</title>
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

if(!isset($_POST['title']) || !isset($_POST['faculty']) || !isset($_POST['leader']) || !isset($_POST['location']) || !isset($_POST['time']) || !isset($_POST['description']) || !isset($_POST['howtojoin']))
    die("ukm tidak lengkap");
  $title = $_POST['title'];
  $faculty = $_POST['faculty'];
  $leader = $_POST['leader'];
  $location = $_POST['location'];
  $time = $_POST['time'];
  $description = $_POST['description'];
  $join = $_POST['howtojoin'];

$ukm = $rows->fetch_object();
if ($_FILES['image']['error']== 0) {

//hapus gambar lama
$image = $ukm->logo;
if($image != null && file_exists("img/$image")){
	unlink("img/$image");
}

//salin gambar yang diupload ke folder images
$file_gambar='';
        if(isset($_FILES['image'])){
        if($_FILES['image']['error'] == 0) {
            $image = $_FILES['image'];

            $extension = new SplFileInfo($image['name']);
            $extension = $extension->getExtension();
            $file_gambar = $title . '.' . $extension;
            copy($image['tmp_name'], 'img/' . $file_gambar);
        }
    }
} else {
	//tetap file yang lama
	$file_gambar = $ukm->logo;
}


$query = $conn->prepare("update ukm set title=?,faculty=?,leader=?,location=?,time=?,description=?,howtojoin=?,logo=? where id=?");
$query->bind_param("ssssssssi",$title,$faculty,$leader,$location,$time,$description,$join,$file_gambar,$id);
$result=$query->execute();


if($result)
header("Location:input-ukm.php");
else
echo "<p>Gagal mengupdate ukm</p>";

?>
<a href="input-ukm.php"><button>Back to Input ukm</button></a>
</body>
</html>