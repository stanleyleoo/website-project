<!DOCTYPE html>
<html>
<head>
	<title>Contoh update data dari database</title>
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
if(!isset($_POST['title']) || !isset($_POST['date']) || !isset($_POST['content']))
		die("Data news tidak lengkap");

$title = $_POST['title'];
$date = $_POST['date'];
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


$query = $conn->prepare("update news set title=?,date=?,content=?,image=? where id=?");
$query->bind_param('sissi',$title,$date,$content,$file_gambar,$id);
$result=$query->execute();

if($result)
echo "<p>Data news berhasil di update</p>";
else
echo "<p>Gagl mengupdate news</p>";

?>
<a href="input-news1.php"><button>Back to Input News</button></a>
</body>
</html>