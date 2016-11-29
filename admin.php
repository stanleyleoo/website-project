<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	if ($_SESSION['category'] != 1) {
		session_destroy();
		header("location: login.html");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />
	<title>Admin Page || fhuphmedan.com</title>
<style type="text/css">
	.table table{
		border-collapse: collapse;
	}
	.table td{
		border:1px solid black;
		text-align: center;
	}
	.table th{
		border:1px solid black;
		text-align: center;
	}
	.table th{
		border:1px solid black;
	}
	th{
		text-align: left;
		width: 100px;
		height: 30px;
	}
	.wrapper1{
		background-color: #f5f5f0;
		background-size: cover;
		min-height: 790px;
		margin-top: -20px;
	}
	.wrapper{
		margin-left: 50px;
		padding-top: 50px;
	}
</style>
</head>
<body>
<div class="wrapper1">
<div class="wrapper">
<h2>Welcome,&nbsp<?php echo $_SESSION['username'];?></h2><a href="logout.php"><button>Logout</button></a>

<form method="post" action="input-user.php">
<table>
	<tr><th><label>Name</label><td>:</td></th><td><input type="text" name="name"></td></tr><br>
	<tr><th><label>Username</label><td>:</td></th><td><input type="text" name="username"></td></tr>	<br>
	<tr><th><label>Password</label><td>:</td></th><td><input type="password" name="password"></td></tr>	<br>
	<tr><th><label>Category</label><td>:</td></th><td>
		<select name="category">
			<option>--Select--</option>
			<option value="1">Admin</option>
			<option value="2">News</option>
			<option value="3">Tentang</option>
			<option value="4">UKM</option>
			<option value="5">Kegiatan</option>
			<option value="6">Undang-undang</option>
		</select></td></tr>	
	<br>
	<tr><th></th><th colspan="2"><input type="submit" value="Submit"></th></tr>
</table>
</form>
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
<div class="table">
<table>
	<tr>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
		<th>Category</th>
		<th>Action</th>
	</tr>
<?php
while ($row = $rows->fetch_array()){
	$url_edit = "edit-user.php?username=".$row['username'];
	$url_delete = "delete-user.php?username=".$row['username'];
	echo '<tr>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['username'].'</td>';
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['category']."</td>";
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