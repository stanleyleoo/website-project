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
	<title>Input news</title>
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
			<h2>Welcome,&nbsp<?php echo $_SESSION['username'];?> to Input UKM page</h2><a href="logout.php"><button>Logout</button></a>
			<form method="post" action="input-ukm1.php" enctype="multipart/form-data">
			<label>Title:</label><br>
			<input type="text" name="title"><br>
			<label>Faculty:</label><br>
			<input type="text" name="faculty"><br>
			<label>Leader:</label><br>
			<input type="text" name="leader"><br>
			<label>Location:</label><br>
			<input type="text" name="location"><br>
			<label>Time:</label><br>
			<input type="text" name="time"><br>
			<label>Description:</label><br>
			<textarea rows="20" cols="50" name="description"></textarea><br>
			<label>How to Join:</label><br>
			<textarea rows="10" cols="50" name="join"></textarea><br>
			<label>Logo :</label>
			<input type="file" name="image"><br>
			<input type="submit" value="Submit">
			</form>
		<?php
		require_once "db.php";

		$conn = konek_db();
		$query = $conn->prepare("select * from `website`.`ukm`");

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
			<th>Leader</th>
			<th>Location</th>
			<th>Time</th>
			<th>Description</th>
			<th>Join</th>
			<th>Logo</th>
		<?php

		while($row = $rows->fetch_array()){
			$url_edit = "edit-ukm.php?id=".$row['id'];
			$url_delete = "delete-ukm.php?id=".$row['id'];
			if($row['image'] == null || $row['image'] == "")
				$url_image = "img/none.png";
			else
				$url_image = "img/".$row['image'];
			echo "<tr>";
			echo '<td>'. $row['id'] . '</td>';
			echo '<td>'. $row['title'] . '</td>';
			echo '<td>'. $row['faculty'] . '</td>';
			echo '<td>'. $row['leader'] . '</td>';
			echo '<td>'. $row['location'] . '</td>';
			echo '<td>'. $row['time'] . '</td>';
			echo '<td>'. $row['description'] . '</td>';
			echo '<td>'. $row['join'] . '</td>';
			echo "<td><img src=\"$url_image\" style=\"width:100px;height:300px;\"></td>";
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