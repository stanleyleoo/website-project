<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
    
    header("location: login.html");
}else {
    if ($_SESSION['category'] != 2) {
        session_destroy();
        header("location: login.html");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update News</title>
</head>
<body>
</body>

<?php
require_once 'db.php';

$conn = konek_db();

if(!isset($_GET['id']))
	die("Tidak ditemukan news");

$id =$_GET['id'];

$query = $conn->prepare("select * from news where id=?");
$query->bind_param('i',$id);
$result = $query->execute();

if(!$result)
	die("Gagal query");
$rows = $query->get_result();
if($rows->num_rows == 0)
	die("news tidak detemukan");
if(!isset($_POST['title']) || !isset($_POST['date']) || !isset($_POST['preview']) || !isset($_POST['content']))
		die("Data news tidak lengkap");

$title = $_POST['title'];
$date = $_POST['date'];
$preview = $_POST['preview'];
$content = $_POST['content'];

$news = $rows->fetch_object();
if ($_FILES['image']['error']== 0) {

//hapus gambar lama
$image = $news->image;
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
	$file_gambar = $news->image;
}


$query = $conn->prepare("update news set title=?,date=?,preview=?,content=?,image=? where id=?");
$query->bind_param('sssssi',$title,$date,$preview,$content,$file_gambar,$id);
$result=$query->execute();


if($result)
header("Location:input-news1.php");
else
echo "<p>Gagal mengupdate news</p>";

?>
<a href="input-news1.php"><button>Back to Input News</button></a>
</body>
</html>