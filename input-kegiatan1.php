<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input UKM</title>
</head>
<body>
<?php
require_once "db.php";
if(isset($_POST['title']) && isset($_POST['faculty']) && isset($_POST['speaker']) && isset($_POST['location']) && isset($_POST['date']) && isset($_POST['conclusion'])){
  $title = $_POST['title'];
  $faculty = $_POST['faculty'];
  $speaker = $_POST['speaker'];
  $location = $_POST['location'];
  $date = $_POST['date'];
  $conclusion = $_POST['conclusion'];


  $conn = konek_db();

        $file_poster='';
        if(isset($_FILES['image'])){
        if($_FILES['image']['error'] == 0) {
            $image = $_FILES['image'];

            $extension = new SplFileInfo($image['name']);
            $extension = $extension->getExtension();
            $file_poster = $title . '.' . $extension;
            copy($image['tmp_name'], 'img/' . $file_poster);
        }
    }
    $query = $conn->prepare("INSERT kegiatan(title,faculty,speaker,location,date,conclusion,poster) VALUES(?,?,?,?,?,?,?)");
    $query->bind_param("sssssss",$title,$faculty,$speaker,$location,$date,$conclusion,$file_poster);
    $result = $query->execute();
    if(!$result){
      echo "<a href=\"input-kegiatan.php\"><button>Back to input page</button></a>";
      die ("Data Kegiatan tidak berhasil diisi");
    } else{
      header("Location:input-kegiatan.php");
    }
} else 
  die("Data Tidak Lengkap");
?>
</body>
</html>