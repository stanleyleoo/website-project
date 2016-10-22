<!DOCTYPE html>
<html>
<head>
	<title>Edit News</title>
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

<form method="post" action="update-news.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
<div>
	<label>ID</label>
	<p><?php echo $data->id;?></p>
</div>
<div>
	<label>Title :</label>
	<input type="text" name="title" value="<?php echo $data->title?>">
</div>
<div>
	<label>Date :</label>
	<input type="Date" name="date" value="<?php echo $data->date?>">
</div>
<div>
	<label>Content :</label>
	<textarea cols="80" rows="30" name="content"><?php echo $data->content?></textarea>
</div>
<div>
	<label style="vertical-align: top;">Image:</label>
	<?php if($data->image == null)
		$image = "img/none.png";
		else
		$image = "img/" . $data->image;
	?>
	<img src="<?php echo $image;?>">
	<input type="file" name="image">
	</div>
<div><input type="submit" name="Update"></div><a href="read.php"><button>Back to View</button></a>
</form>
</body>
</html>