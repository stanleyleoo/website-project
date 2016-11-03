<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 4) {
		session_destroy();
		header("location: login.html");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit UKM</title>
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
	die('Informasi UKM tidak ditemukan');
$conn = konek_db();


$id = $_GET['id'];
$query = $conn->prepare("select * from ukm where id=?");
$query->bind_param("i",$id);
$result = $query->execute();

if(!$result)
	die("Koneksi gagal");

$rows = $query->get_result();
if($rows->num_rows == 0)
die("<p>Informasi ukm tidak ditemukan</p>");

$data = $rows->fetch_object();
?>
<a href="input-ukm.php"><button>Back to Input page</button></a>
<div class="wrapper">
	<form method="post" action="update-ukm.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
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
	<th><label>Leader :</label></th>
	<td><input type="text" name="leader" value="<?php echo $data->leader?>"></td>
	</tr>
	<tr>
	<th><label>Location :</label></th>
	<td><input type="text" name="location" value="<?php echo $data->location?>"></td>
	</tr>
	<tr>
	<th><label>Time :</label></th>
	<td><input type="text" name="time" value="<?php echo $data->time?>"></td>
	</tr>
	<tr>
	<th><label style="vertical-align:top;">Description :</label></th>
	<td><textarea cols="50" rows="20" name="description"><?php echo $data->description?></textarea></td>
	</tr>
	<tr>
	<th><label style="vertical-align:top;">How to Join:</label></th>
	<td><textarea cols="50" rows="10" name="howtojoin"><?php echo $data->howtojoin?></textarea></td>
	</tr>
	<tr>
	<th><label style="vertical-align: top;">Logo:</label></th>
	<td><?php if($data->logo == null)
			$image = "img/none.png";
			else
			$image = "img/" . $data->logo;
		?>
		<img src="<?php echo $image;?>" style="width: 500px;"></td>
	</tr>
	<tr>
	<th></th><td><input type="file" name="image"></td>
	</tr>
	<tr>
	<th></th><td><input type="submit"></td>
	</tr>
	</div>
	<tr>
	<th></th><td></a></td>
	</tr>
	</table>
</form>
</body>
</html>