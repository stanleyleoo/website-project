<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 3) {
		session_destroy();
		header("location: login.html");
	}
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<?php
require_once 'db.php';
$conn = konek_db();
$query = $conn->prepare("select * from tentang where id=1");
$result = $query->execute();

if(!$result)
	die("Koneksi gagal");

$rows = $query->get_result();
if($rows->num_rows == 0)
	die("<p>Informasi tentang tidak ditemukan!!</p>");

$data = $rows->fetch_object();
?>
<div class= "wrapper">
	<form method="post" action="update-tentang.php" enctype="multipart/form-data">
	<div>
		<h2>Welcome to Page "Tentang HMFH"</h2>
	</div>
	<table>
	<tr>
	<tr>
	<th><label style="vertical-align: top;">Gambar Cover:</label></th>
	<td><?php 
			if($data->cover == null)
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
	</table>
	</form> 
</div>
	

</body>
</html>