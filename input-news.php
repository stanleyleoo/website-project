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
if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['content'])){
  $title = $_POST['title'];
  $date = $_POST['date'];
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
    $query = $conn->prepare("insert into news(title,date,content,image) values(?,?,?,?)");
    $query->bind_param("ssss",$title,$date,$content,$file_gambar);
    $result = $query->execute();
    if(!$result){
      die ("Data News tidak berhasil diisi");
      echo "<a href=\"input-news1.php\">Back to input page</a>";
    } else{
      echo "Data news berhasil diisi<br>";
      header("Location: input-news1.php");
    }
} else 
  die("Koneksi gagal");
?>
</body>
</html>