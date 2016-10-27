<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input User || fhuphmedan.org</title>
</head>
<body>
<?php
require_once "db.php";
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['category'])){
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $category = $_POST['category'];


  $conn = konek_db();

    $query = $conn->prepare("insert into user(name,username,password,category) value(?,?,?,?)");
    $query->bind_param("ssss",$name,$username,$password,$category);
    $result = $query->execute();
    if(!$result){
      die ("Data User tidak berhasil diisi");
      echo "<a href=\"admin.php\">Back to Admin page</a>";
    } else{
      header("Location:admin.php");
    }
} else 
  die("Koneksi gagal");
?>
</body>
</html>