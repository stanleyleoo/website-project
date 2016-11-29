<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category']) ) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 6) {
		session_destroy();
		header("location: login.html");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Glosarium</title>
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
		max-width: 1000px;
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
			<h2>Welcome,&nbsp<?php echo $_SESSION['username'];?></h2><a href="logout.php"><button>Logout</button></a>
			<form method="post" action="input-uu1.php" enctype="multipart/form-data">
			<label>Nama Undang-Undang:</label><br>
			<input type="text" name="name"><br>
			<label>File Undang-Undang :</label>
			<input type="file" name="uu"><br>
			<input type="submit" value="Submit">
			</form>
		<?php
		require_once "db.php";

		$conn = konek_db();
		$query = $conn->prepare("select * from `website`.`uu`");

		$result= $query->execute();

		if(!$result)
			echo "Gagal Koneksi";

		$rows = $query->get_result();
		?>
		<br>
		<table>
			<th>ID</th>
			<th>Nama</th>
		<?php

		while($row = $rows->fetch_array()){
			$url_delete = "delete-uu.php?id=".$row['id'];
			if($row['uu'] == null || $row['uu'] == "")
				echo "UU tidak boleh tidak ada";
			else
				$url_uu = "UU/".$row['uu'];
			echo "<tr>";
			echo '<td>'. $row['id'] . '</td>';
			echo '<td>'. $row['nama'] . '</td>';
			echo "<td><a href='".$url_delete."'><button>Hapus</button></a></td>";
			echo "</tr>";
		}

		?>
		</table>
		</div>
	</div>
</div>
</body>
</html>