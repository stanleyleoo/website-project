<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 2) {
		session_destroy();
		header("location: login.html");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit News</title>
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
//get data yang akan di edit/update
if (!isset($_GET['id']))
	die('Informasi news tidak ditemukan');
$conn = konek_db();

//cari data yang akan diupdate
$id = $_GET['id'];
$query = $conn->prepare("select * from news where id=?");
$query->bind_param("i",$id);
$result = $query->execute();

if(!$result)
	die("Koneksi gagal");

$rows = $query->get_result();
if($rows->num_rows == 0)
die("<p>Informasi news tidak ditemukan</p>");

$data = $rows->fetch_object();
?>
<a href="input-new1.php"><button>Back to Input page</button></a>
<div class="wrapper">
	<form method="post" action="update-news.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
	<div>
		<h2>ID:&nbsp<?php echo $data->id;?></h2>
	</div>
	<table>
	<tr>
	<th><label>Title :</label></th>
	<td><input type="text" name="title" value="<?php echo $data->title?>"></td>
	</tr>
	<tr>
	<th><label>Date :</label></th>
	<td><input type="Date" name="date" value="<?php echo $data->date?>"></td>
	</tr>
	<tr>
	<th><label style="vertical-align:top;">Content :</label></th>
	<td><textarea cols="80" rows="30" name="content"><?php echo $data->content?></textarea></td>
	</tr>
	<tr>
	<th><label style="vertical-align: top;">Image:</label></th>
	<td><?php if($data->image == null)
			$image = "img/none.png";
			else
			$image = "img/" . $data->image;
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
	</table>
</form>
</body>
</html>