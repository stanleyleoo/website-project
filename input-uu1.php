<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input Glosarium</title>
</head>
<body>
<?php
require_once "db.php";
if(isset($_POST['name'])){
  $name = $_POST['name'];

  $conn = konek_db();

        $file_uu='';
        if(isset($_FILES['uu'])){
        if($_FILES['uu']['error'] == 0) {
            $uu = $_FILES['uu'];

            $extension = new SplFileInfo($uu['name']);
            $extension = $extension->getExtension();
            $file_uu = $name . '.' . $extension;
            copy($uu['tmp_name'], 'UU/' . $file_uu);
        }
    }
    $query = $conn->prepare("insert into uu(nama,uu) values(?,?)");
    $query->bind_param("ss",$name,$file_uu);
    $result = $query->execute();
    if(!$result){
            echo "<a href=\"input-uu.php\">Back to input page</a>";
      die ("Data Glosarium tidak berhasil diisi");
    } else{
      echo "Data Glosarium berhasil diisi<br>";
      header("Location: input-uu.php");
    }
} else 
  die("Koneksi gagal");
?>
</body>
</html>