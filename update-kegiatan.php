<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {

    header("location: login.html");
} else {
    if ($_SESSION['category'] != 5) {
        session_destroy();
        header("location: login.html");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Kegiatan</title>
    </head>
    <body>

    <?php
    require_once 'db.php';

    $conn = konek_db();

    if (!isset($_GET['id']))
        die("Tidak ditemukan kegiatan");

    $id = $_GET['id'];

    $query = $conn->prepare("select poster, image from kegiatan LEFT JOIN gambar ON gambar.id_kegiatan = kegiatan.id where kegiatan.id=?");
    $query->bind_param('i', $id);
    $result = $query->execute();
    $query->bind_result($poster, $col2);
    $image = array();
    while ($query->fetch()) {
      array_push($image, $col2);
    }
    if (!$result)
        die("Gagal query");
    $rows = $query->get_result();
    // if ($rows->num_rows == 0)
    //     die("kegiatan tidak ditemukan");

    if (!isset($_POST['title']) || !isset($_POST['faculty']) || !isset($_POST['speaker']) || !isset($_POST['location']) || !isset($_POST['date']) || !isset($_POST['conclusion']))
        die(" Data Kegiatan tidak lengkap");
    $title = $_POST['title'];
    $faculty = $_POST['faculty'];
    $speaker = $_POST['speaker'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $conclusion = $_POST['conclusion'];

    // $kegiatan = $rows->fetch_object();
    if ($_FILES['image']['error'] == 0) {
        if ($poster != null && file_exists("img/$poster")) {
            unlink("img/$poster");
            echo "<p>delete image</p> \n";
        }
        $file_gambar = '';
        if (isset($_FILES['image'])) {
            if ($_FILES['image']['error'] == 0) {
                $poster = $_FILES['image'];
                $extension = new SplFileInfo($poster['name']);
                $extension = $extension->getExtension();
                $file_gambar = $title . '.' . $extension;
                copy($poster['tmp_name'], 'img/' . $file_gambar);
                echo "<p>copy image </p>\n";
            }
        }
    } else {
        //tetap file yang lama
        $file_gambar = $poster;
    }

//salin gambar yang diupload ke folder images
        
    $file_post = array();
    if (isset($_FILES['image2'])) {
        $i = 0;
        // $image2 = $_FILES['image2'][$i];\
        echo count($image) . "  jumlah unlink" . "<br>";
        for ($i=0; $i < count($image); $i++) { 
            
            if($image[$i] != null && $image[$i] != "" && file_exists($image[$i]))
            {
                unlink($image[$i]);
                echo $image[$i] . " " . $i . "<br>";

            }
        }

        $countarray = count($_FILES['image2']['name']);
        echo "<p>" . $countarray . " jumlah gambar </p>";
        $o = 1;
        for ($i = 0; $i < $countarray; $i++) {
            // $image = $_FILES['image2'][$i];
            if ($_FILES['image2']['error'][$i] == 0) {

                $filename = pathinfo($_FILES['image2']['name'][$i], PATHINFO_FILENAME);
                echo "<p>$filename</p>";
                // ambil nama extension file
                $ext = pathinfo($_FILES['image2']['name'][$i], PATHINFO_EXTENSION);
                // lokasi directory tempat menyimpan file yang diupload
                $path = "img/";

                $imgname = $path . $title . '-' . $o . '.' . $ext;
                move_uploaded_file($_FILES['image2']['tmp_name'][$i], $imgname);
                array_push($file_post, $imgname); 
                echo "<p>move file $i </p>";
                $o++;
            }
        }
        echo "string";
        $query = $conn->prepare("delete gambar from gambar where id_kegiatan=?");
        $query->bind_param('i',$id);
        $result=$query->execute();
        echo "<p>$result <= delete gambar </p>\n"  ;
        $o = 0;
        foreach ($file_post as $images) {
            $query3 = $conn->prepare("INSERT gambar(id_kegiatan,image) VALUES(?,?)");
            $query3->bind_param("is", $id, $images);
            $result4 = $query3->execute();
            echo "<p>$result4 <= insert gambar $o</p>\n";
            $o++;
        }
    } else {
        echo "no images";
    }
    $query = $conn->prepare("update kegiatan set title=?,faculty=?,speaker=?,location=?,date=?,conclusion=?,poster=? where id=?");
    $query->bind_param("sssssssi", $title, $faculty, $speaker, $location, $date, $conclusion, $file_gambar, $id);
    $result = $query->execute();
    echo "$result <= update data master \n";


    if ($result)
        echo "<script type='text/javascript'>alert('Update Kegiatan Berhasil');window.location.href = 'input-kegiatan.php';</script>";
    else
        echo "<p>Gagal mengupdate kegiatan</p>";
    ?>
    <a href="input-kegiatan.php"><button>Back to Input Kegiatan</button></a>
</body>
</html> 