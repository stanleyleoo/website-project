<!-- <?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 3) {
		session_destroy();
		header("location: login.html");
	}
}
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Tentang || fhuphmedan.org</title>
<style>
	body{
		background-color: #f5f5f0;
	}
	.wrapper{
		width: 100%;
		padding-left: 20px;
	}
</style>
</head>
<body>
// <?php
// require_once 'db.php';


// $conn = konek_db();


// $query = $conn->prepare("select * from tentang where id=1");
// $result = $query->execute();

// if(!$result)
// 	die("Koneksi gagal");

// $rows = $query->get_result();
// // if($rows->num_rows == null)
// // 	die("<p>Informasi tentang tidak ditemukan!!</p>");

// $data = $rows->fetch_array();
?>
<p>test</p>
<!--<div class= "wrapper">
	<form method="post" action="" enctype="multipart/form-data">
	<div>
		<h2>Welcome to Page "Tentang HMFH"</h2>
	</div>
	<table>
	<tr>
	<tr>
	<th><label style="vertical-align: top;">Gambar Cover:</label></th>
	<td><?php if($data->cover == null)
			echo "no Image";
			else
			$image = "img/" . $data->cover;
		?>
		<img src="<?php echo $image;?>" style="width: 500px;"></td>
	</tr>
	<tr>
	<th></th><td><input type="file" name="image1"></td>
	</tr>
	<tr>
	<th><label>Visi :</label></th>
	<td><textarea name="visi" cols="50" rows="20"><?php echo $data->visi;?></textarea></td>
	</tr>
	<tr>
	<th><label>Misi :</label></th>
	<td><textarea name="misi" cols="50" rows="20"><?php echo $data->misi;?></textarea></td>
	</tr>
	<tr>
	<th><label>Deskripsi tentang HMFH :</label></th>
	<td><textarea name="deskripsi" cols="50" rows="20"><?php echo $data->deskripsi;?></textarea></td>
	</tr>
	<tr>
	<th><label style="vertical-align: top;">Gambar Struktur Organisasi:</label></th>
	<td><?php if($data->struktur == null)
			echo "no image";
			else
			$image = "img/" . $data->struktur;
		?>
		<img src="<?php echo $image;?>" style="width: 500px;"></td>
	</tr>
	<tr>
	<th></th><td><input type="file" name="image2"></td>
	</tr>
	<tr>
	<th></th><td><input type="submit" value="Update"></td>
	</tr>
	</div>
	</table>
</form> -->

		<!-- <?php
		require_once 'db.php';

		$conn = konek_db();

		$query = $conn->prepare("select * from tentang where id=1");
		$result = $query->execute();

		if(!$result)
			die("Gagal query");
		$rows = $query->get_result();
		if($rows->num_rows == 0)
			die("tentang tidak ditemukan");

		if(!isset($_POST['visi']) || !isset($_POST['misi']) || !isset($_POST['deskripsi']))
		  $visi = $_POST['visi'];
		  $misi = $_POST['misi'];
		  $deskripsi = $_POST['deskripsi'];

		$tentang = $rows->fetch_object();
		if ($_FILES['image1']['error']== 0) {

		//hapus gambar lama
		$image1 = $tentang->cover;
		if($image1 = null && file_exists("img/$image1")){
			unlink("img/$image1");
		}

		//salin gambar yang diupload ke folder images
		$file_gambar1='';
		        if(isset($_FILES['image1'])){
		        if($_FILES['image1']['error'] == 0) {
		            $image1 = $_FILES['image1'];

		            $extension = new SplFileInfo($image1['name']);
		            $extension = $extension->getExtension();
		            $file_gambar1 = 'cover.' . $extension;
		            copy($image1['tmp_name'], 'img/' . $file_gambar1);
		        }
		    }
		} else {
			//tetap file yang lama
			$file_gambar1 = $tentang->cover;
		}
		if ($_FILES['image1']['error']== 0) {
		$image2 = $tentang->struktur;
		if($image2 != null && file_exists("img/$image2")){
			unlink("img/$image2");
		}

		//salin gambar yang diupload ke folder images
		$file_gambar2='';
		        if(isset($_FILES['image2'])){
		        if($_FILES['image2']['error'] == 0) {
		            $image2 = $_FILES['image2'];

		            $extension = new SplFileInfo($image2['name']);
		            $extension = $extension->getExtension();
		            $file_gambar2 = 'struktur.' . $extension;
		            copy($image2['tmp_name'], 'img/' . $file_gambar2);
		        }
		    }
		} else {
			//tetap file yang lama
			$file_gambar2 = $tentang->struktur;
		}


		$query = $conn->prepare("update tentang set cover=?,visi=?,misi=?,deskripsi=?,struktur=? where id=1");
		$query->bind_param("sssss",$file_gambar1,$visi,$misi,$deskripsi,$file_gambar2);
		$result=$query->execute();


		if($result)
		header("Location:input-tentang.php");
		else
		echo "<p>Gagal mengupdate tentang</p>";

		?> -->
</body>
</html>