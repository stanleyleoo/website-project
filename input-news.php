<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input news</title>
</head>
<body>
<?php
require_once "db.php";
if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['preview']) && isset($_POST['content'])){
  $title = $_POST['title'];
  $date = $_POST['date'];
  $preview = $_POST['preview'];
  $content = $_POST['content'];


  $conn = konek_db();

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
    $query = $conn->prepare("insert into news(title,date,preview,content,image) values(?,?,?,?,?)");
    $query->bind_param("sssss",$title,$date,$preview,$content,$file_gambar);
    $result = $query->execute();
    if(!$result){
      echo "<script type='text/javascript'>alert('Input News Gagal');window.location.href = 'input-news1.php';</script>";
    } else{
      echo "<script type='text/javascript'>alert('Input News Berhasil');window.location.href = 'input-news1.php';</script>";
    }
} else 
  die("Koneksi gagal");
?>
</body>
</html>