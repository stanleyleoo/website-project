<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 5) {
		session_destroy();
		header("location: login.html");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />
	<title>Edit Kegiatan</title>
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

if (!isset($_GET['id']))
	die('ID Kegiatan tidak ditemukan');
$conn = konek_db();


$id = $_GET['id'];
$query = $conn->prepare("select * from kegiatan where id=?");
$query->bind_param("i",$id);
$result = $query->execute();

if(!$result)
	die("Koneksi gagal");

$rows = $query->get_result();
if($rows->num_rows == 0)
die("<p>Informasi kegiatan tidak ditemukan</p>");

$data = $rows->fetch_object();
?>
	<a href="input-kegiatan.php"><button>Back to Input Kegiatan page</button></a>
<div class="wrapper">

	<form method="post" action="update-kegiatan.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
	<div>
		<h2>ID:&nbsp<?php echo $data->id;?></h2>
	</div>
	<table>
	<tr>
	<th><label>Title :</label></th>
	<td><input type="text" name="title" value="<?php echo $data->title?>"></td>
	</tr>
	<tr>
	<th><label>Faculty :</label></th>
	<td><input type="text" name="faculty" value="<?php echo $data->faculty?>"></td>
	</tr>
	<tr>
	<th><label>Speaker :</label></th>
	<td><input type="text" name="speaker" value="<?php echo $data->speaker?>"></td>
	</tr>
	<tr>
	<th><label>Location :</label></th>
	<td><input type="text" name="location" value="<?php echo $data->location?>"></td>
	</tr>
	<tr>
	<th><label>Date :</label></th>
	<td><input type="Date" name="date" value="<?php echo $data->date?>"></td>
	</tr>
	<tr>
	<th><label style="vertical-align:top;">Conclusion :</label></th>
	<td><textarea cols="50" rows="20" name="conclusion"><?php echo $data->conclusion?></textarea></td>
	</tr>
	<tr>
	<th><label style="vertical-align: top;">Logo:</label></th>
	<td><?php if($data->poster == null)
			echo "No Poster";
			else
			$image = "img/" . $data->poster;
		?>
		<img src="<?php echo $image;?>" style="width: 400px;"></td>
	</tr>
	<tr>
	<th></th><td><input type="file" name="image"></td>
	</tr>
	<tr>
	<th><label style="vertical-align: top;">Gambar:</label></th>
	<td><input type="file" name="image2[]" multiple="multiple"></td>
	</tr>
	<tr>
	<th></th><td><input type="submit"></td>
	</tr>
	</table>
	</div>
	</form>


	</body>
</html>