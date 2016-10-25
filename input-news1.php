<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input news</title>
<style>
	table,th,td{
		border:1px solid black;
		border-collapse: collapse;
		text-align: center;
	}
	th,td{
		max-width: 500px;
	}
</style>
</head>
<body>
<h2>Welcome<?php echo $_SESSION['username'];?></h2><a href="logout.php"><button>Logout</button></a>
<form method="post" action="input-news.php" enctype="multipart/form-data">
<label>News Title:</label><br>
<input type="text" name="title"><br>
<label>Date:</label><br>
<input type="Date" name="date"><br>
<label>Content:</label><br>
<textarea rows="20" cols="50" name="content"></textarea><br>
<label>Image :</label>
<input type="file" name="image"><br>
<input type="submit" value="Submit">
</form>

<?php
require_once "db.php";

$conn = konek_db();
$query = $conn->prepare("select * from news");

$result= $query->execute();


if(!$result)
	echo "Gagal Koneksi";

$rows = $query->get_result();

?>
<br>
<table>
	<th>ID</th>
	<th>Title</th>
	<th>Date</th>
	<th>Content</th>
	<th>Image</th>
<?php
die(var_export($rows,true));
while($row = $rows->fetch_assoc()){
	$url_edit = "edit-news.php?id=".$row['id'];
	$url_delete = "delete-news.php?id=".$row['id'];
	if($row['image'] == null || $row['image'] == "")
		$url_image = "img/none.png";
	else
		$url_image = "img/".$row['image'];
	echo "<tr>";
	echo '<td>'. $row['id'] . '</td>';
	echo '<td>'. $row['title'] . '</td>';
	echo '<td>'. $row['date'] . '</td>';
	echo '<td>'. $row['content'] . '</td>';
	echo "<td><img src=\"$url_image\" style=\"width:300px;height:400px;\"></td>";
	echo "<td><a href='".$url_edit."'><button>Edit</button></a>"; 
	echo "<a href='".$url_delete."'><button>Hapus</button></a></td>";
	echo "</tr>";
}

?>
</table>
</body>
</html>