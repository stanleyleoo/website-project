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
    </body>

    <?php
    require_once 'db.php';

    $conn = konek_db();

    if (!isset($_GET['id']))
        die("Tidak ditemukan kegiatan");

    $id = $_GET['id'];

    $query = $conn->prepare("select poster, image from kegiatan LEFT JOIN gambar ON gambar.id_kegiatan = kegiatan.id where kegiatan.id=?");
    $query->bind_param('i', $id);
    $result = $query->execute();

    if (!$result)
        die("Gagal query");
    $rows = $query->get_result();
    if ($rows->num_rows == 0)
        die("kegiatan tidak detemukan");

    if (!isset($_POST['title']) || !isset($_POST['faculty']) || !isset($_POST['speaker']) || !isset($_POST['location']) || !isset($_POST['date']) || !isset($_POST['conclusion']))
        die(" Data Kegiatan tidak lengkap");
    $title = $_POST['title'];
    $faculty = $_POST['faculty'];
    $speaker = $_POST['speaker'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $conclusion = $_POST['conclusion'];

    $kegiatan = $rows->fetch_object();
    if ($_FILES['image']['error'] == 0) {

//hapus gambar lama
        $image = $kegiatan->poster;
        if ($image != null && file_exists("img/$image")) {
            unlink("img/$image");
        }
        while ($row = $rows->fetch_array()) {

            // echo $row['image'] . " " . $i . "<br>";
            if ($row['image'] != null && $row['image'] != "" && file_exists($row['image'])) {
                unlink($row['image']);
            }
            // $i++;
        }

//salin gambar yang diupload ke folder images
        $file_gambar = '';
        if (isset($_FILES['image'])) {
            if ($_FILES['image']['error'] == 0) {
                $image = $_FILES['image'];

                $extension = new SplFileInfo($image['name']);
                $extension = $extension->getExtension();
                $file_gambar = $title . '.' . $extension;
                copy($image['tmp_name'], 'img/' . $file_gambar);
            }
        }
        $query = $conn->prepare("delete kegiatan, gambar from kegiatan LEFT JOIN gambar ON gambar.id_kegiatan = kegiatan.id where kegiatan.id=?");
        $query->bind_param('i', $id);
        $result = $query->execute();
        $file_post = array();
        if (isset($_FILES['image2'])) {
            $countarray = count($_FILES['image2']['name']);
            echo $countarray;
            for ($i = 0; $i < $countarray; $i++) {
                // $image = $_FILES['image2'][$i];
                if ($_FILES['image2']['error'][$i] == 0) {

                    $filename = pathinfo($_FILES['image2']['name'][$i], PATHINFO_FILENAME);
                    // ambil nama extension file
                    $ext = pathinfo($_FILES['image2']['name'][$i], PATHINFO_EXTENSION);
                    // lokasi directory tempat menyimpan file yang diupload
                    $path = "img/";

                    $imgname = $path . $title . '-' . $i . '.' . $ext;
                    move_uploaded_file($_FILES['image2']['tmp_name'][$i], $imgname);
                    // $extension = new SplFileInfo($image2['name']);
                    // $extension = $extension->getExtension();
                    // $file_poster2 = $image2['name'] . '.' . $extension;
                    // copy($image2['tmp_name'], 'img/' . $file_poster2);
                    array_push($file_post, $imgname); //eh bisa gini ga ya kwkwkwkw w ga rau  wkwkkwwk
                }
            }
        } else {
            echo "no images";
        }
        echo display_list($file_post);
        foreach ($file_post as $images) {
            $query3 = $conn->prepare("INSERT gambar(id_kegiatan,image) VALUES(?,?)");
            $query3->bind_param("is", $data['id'], $images);
            $result4 = $query3->execute();
        }
    } else {
        //tetap file yang lama
        $file_gambar = $kegiatan->poster;
    }


    $query = $conn->prepare("update kegiatan set title=?,faculty=?,speaker=?,location=?,date=?,conclusion=?,poster=? where id=?");
    $query->bind_param("sssssssi", $title, $faculty, $speaker, $location, $date, $conclusion, $file_gambar, $id);
    $result = $query->execute();


    if ($result)
        header("Location:input-kegiatan.php");
    else
        echo "<p>Gagal mengupdate kegiatan</p>";
    ?>
    <a href="input-kegiatan.php"><button>Back to Input Kegiatan</button></a>
</body>
</html> 