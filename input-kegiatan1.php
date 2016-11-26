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
        $i = array(0,1,2,3,4,5,6,7,8,9,10);
        
    $query = $conn->prepare("INSERT kegiatan(title,faculty,speaker,location,date,conclusion,poster) VALUES(?,?,?,?,?,?,?)");
    $query->bind_param("sssssss",$title,$faculty,$speaker,$location,$date,$conclusion,$file_poster);
    $result = $query->execute();

    $query2 = $conn->prepare("SELECT id from kegiatan where title=?");
    $query2->bind_param("s",$title);
    $result2 = $query2->execute();

    $result3 = $query2->get_result();
    $data = $result3->fetch_array();  
    function display_list($array) {
        $hasil = "<ul>";
        foreach ($array as $item) {
            $hasil .= "<li>$item</li>";
        }
        $hasil .= "</ul>";
        return $hasil;
    }
    $file_post = array();
    if(isset($_FILES['image2'])){
        $countarray = count($_FILES['image2']['name']);
        echo $countarray;
        $o = 1;
        for($i=0;$i<$countarray;$i++){
          // $image = $_FILES['image2'][$i];
          if($_FILES['image2']['error'][$i] == 0) {
              
              $filename = pathinfo($_FILES['image2']['name'][$i], PATHINFO_FILENAME);
            // ambil nama extension file
              $ext = pathinfo($_FILES['image2']['name'][$i], PATHINFO_EXTENSION);
              // lokasi directory tempat menyimpan file yang diupload
              $path = "img/";

              $imgname = $path . $title . '-' . $o . '.' . $ext;
              move_uploaded_file($_FILES['image2']['tmp_name'][$i], $imgname);
              // $extension = new SplFileInfo($image2['name']);
              // $extension = $extension->getExtension();
              // $file_poster2 = $image2['name'] . '.' . $extension;
              // copy($image2['tmp_name'], 'img/' . $file_poster2);
              array_push($file_post, $imgname);//eh bisa gini ga ya kwkwkwkw w ga rau  wkwkkwwk
              $o++;
            }
          }
        }else {
          echo "no images";
        }
    echo display_list($file_post);
    foreach ($file_post as $images) {
      $query3 = $conn->prepare("INSERT gambar(id_kegiatan,image) VALUES(?,?)");
      $query3->bind_param("is",$data['id'],$images);
      $result4 = $query3->execute();
    }
    

    if(!$result){
      echo "<a href=\"input-kegiatan.php\"><button>Back to input page</button></a>";
      die ("Data Kegiatan tidak berhasil diisi");
    } else{
      echo "<script type='text/javascript'>alert('Input Kegiatan Berhasil');window.location.href = 'input-kegiatan.php';</script>";
    }
}else 
  die("Data Tidak Lengkap");
?>

</body>
</html>