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
        $file_poster2='';
        $i = array(0,1,2,3,4,5,6,7,8,9);
        if(isset($_FILES['image2[$i]'])){
        if($_FILES['image2[$i]']['error'] == 0) {
            $image2 = $_FILES['image2[$i]'];

            $extension = new SplFileInfo($image2[$i]['name']);
            $extension = $extension->getExtension();
            $file_poster2 = $image2[$i]['name'] . '.' . $extension;
            copy($image2[$i]['tmp_name'], 'img/' . $file_poster2);
          }
        }
    $query = $conn->prepare("INSERT kegiatan(title,faculty,speaker,location,date,conclusion,poster) VALUES(?,?,?,?,?,?,?)");
    $query->bind_param("sssssss",$title,$faculty,$speaker,$location,$date,$conclusion,$file_poster);
    $result = $query->execute();

    $query2 = $conn->prepare("SELECT id from kegiatan where title=?");
    $query2->bind_param("s",$title);
    $result2 = $query2->execute();

    $result3 = $query2->get_result();
    $data = $result3->fetch_array();  

    $query3 = $conn->prepare("INSERT gambar(id_kegiatan,image) VALUES(?,?)");
    $query3->bind_param("is",$data['id'],$file_poster2);
    $result4 = $query3->execute();

    if(!$result){
      echo "<a href=\"input-kegiatan.php\"><button>Back to input page</button></a>";
      die ("Data Kegiatan tidak berhasil diisi");
    } else{
      header("Location:input-kegiatan.php");
    }
}else 
  die("Data Tidak Lengkap");
?>
</body>
</html>