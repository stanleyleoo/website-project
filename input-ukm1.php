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
if(isset($_POST['title']) && isset($_POST['faculty']) && isset($_POST['leader']) && isset($_POST['location']) && isset($_POST['time']) && isset($_POST['description']) && isset($_POST['join'])){
  $title = $_POST['title'];
  $faculty = $_POST['faculty'];
  $leader = $_POST['leader'];
  $location = $_POST['location'];
  $time = $_POST['time'];
  $description = $_POST['description'];
  $join = $_POST['join'];


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
    $query = $conn->prepare("insert into ukm(title,faculty,leader,location,time,description,join,logo) values (?,?,?,?,?,?,?,?)");
    $query->bind_param("ssssssss",$title,$faculty,$leader,$location,$time,$description,$join,$file_gambar);
    $result = $query->execute();
    if(!$result){
      echo "<a href=\"input-ukm.php\"><button>Back to input page</button></a>";
      die ("Data UKM tidak berhasil diisi");
    } else{
      echo "Data news berhasil diisi<br>";
      echo "<a href=\"input-ukm.php\"><button>Back to input page</button></a>";
    }
} else 
  die("Data Tidak Lengkap");
?>
</body>
</html>