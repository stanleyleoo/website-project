<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category']) ) {
	
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
	<title>Input Kegiatan</title>
<style>
	body{
		background-color: #f5f5f0;
	}
	table,th,td{
		border:1px solid black;
		border-collapse: collapse;
		text-align: center;
	}
	th,td{
		max-width: 600px;
	}
	th{
		color:white;
		background-color: black;
	}
	.wrapper1{
		padding-top: 10px;
	}
</style>
</head>
<body>
<div class="wrapper">
	<div class="wrapper1">
		<div style="padding-left: 20px;">
			<h2>Welcome,&nbsp<?php echo $_SESSION['username'];?> to Input Kegiatan page</h2><a href="logout.php"><button>Logout</button></a>
			<form method="post" action="input-kegiatan1.php" enctype="multipart/form-data">
			<label>Title:</label><br>
			<input type="text" name="title"><br>
			<label>Faculty:</label><br>
			<input type="text" name="faculty"><br>
			<label>Speaker:</label><br>
			<input type="text" name="speaker"><br>
			<label>Location:</label><br>
			<input type="text" name="location"><br>
			<label>Date:</label><br>
			<input type="date" name="date"><br>
			<label>Conclusion:</label><br>
			<textarea rows="20" cols="50" name="conclusion"></textarea><br>
			<label>Poster :</label>
			<input type="file" name="image"><br>
			<input type="submit" value="Submit">
			</form>
		<?php
		require_once "db.php";

		$conn = konek_db();
		$query = $conn->prepare("select * from `website`.`kegiatan`");

		$result= $query->execute();

		if(!$result)
			echo "Gagal Koneksi";

		$rows = $query->get_result();
		?>
		<br>
		<table>
			<th>ID</th>
			<th>Title</th>
			<th>Faculty</th>
			<th>Speaker</th>
			<th>Location</th>
			<th>Date</th>
			<th>Conclusion</th>
			<th>Poster</th>
		<?php

		while($row = $rows->fetch_array()){
			$url_edit = "edit-kegiatan.php?id=".$row['id'];
			$url_delete = "delete-kegiatan.php?id=".$row['id'];
			if($row['poster'] == null || $row['poster'] == "")
				$url_poster = "img/none.png";
			else
				$url_poster = "img/".$row['poster'];
			$date = date_create($row['date']);
			echo "<tr>";
			echo '<td>'. $row['id'] . '</td>';
			echo '<td>'. $row['title'] . '</td>';
			echo '<td>'. $row['faculty'] . '</td>';
			echo '<td>'. $row['speaker'] . '</td>';
			echo '<td>'. $row['location'] . '</td>';
			echo '<td>'. date_format($date,"d F Y") . '</td>';
			echo '<td>'. $row['conclusion'] . '</td>';
			echo "<td><img src=\"$url_poster\" style=\"max-width:300px;max-height:500px;\"></td>";
			echo "<td><a href='".$url_edit."'><button>Edit</button></a>"; 
			echo "<a href='".$url_delete."'><button>Hapus</button></a></td>";
			echo "</tr>";
		}

		?>
		</table>
		</div>
	</div>
</div>
</body>
</html>