<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page || fhuphmedan.com</title>
<style type="text/css">
	th{
		text-align: left;
		width: 100px;
		height: 30px;
	}
	.wrapper{
		margin-left: 50px;
	}
</style>
</head>
<body>

<h2>Welcome,<?php echo "$name"?></h2><a href="logout.php"><button>Logout</button></a>
<div class="wrapper">
<form method="post" action="input-user.php">
<table>
	<tr><th><label>Name</label><td>:</td></th><td><input type="text" name="name"></td></tr><br>
	<tr><th><label>Username</label><td>:</td></th><td><input type="text" name="username"></td></tr>	<br>
	<tr><th><label>Password</label><td>:</td></th><td><input type="password" name="password"></td></tr>	<br>
	<tr><th><label>Category</label><td>:</td></th><td>
		<select name="category">
			<option name="2">News</option>
			<option name="3">Tentang</option>
			<option name="4">UKM</option>
			<option name="5">Kegiatan</option>
			<option name="6">Undang-undang</option>
		</select></td></tr>	
	<br>
	<tr><th></th><th colspan="2"><input type="submit" value="Submit"></th></tr>
</table>
<br>
<?php
require_once "db.php";

$conn  = konek_db();

$query = $conn->prepare('select * from user');
$result= $query->execute();

if(!$result)
	die('Gagal query');

//tarik data ke result set
$rows = $query->get_result();
?>
<table style="border:1px solid black;">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
		<th>Category</th>
		<th>Action</th>
	</tr>
<?php
while ($row = $rows->fetch_array()){
	$url_edit = "edit-user.php?id=".$row['id'];
	$url_delete = "delete-user.php?id=".$row['id'];
	echo '<tr>';
	echo '<td>'.$row['id'].'</td>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['username'].'</td>';
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['category']."</td>";
	echo "<td><a href='".$url_edit."'><button>Edit</button></a>"; 
	echo "<a href='".$url_delete."'><button>Hapus</button></a></td>";
	echo "</tr>";
}
?>
</form>
</div>
</body>
</html>