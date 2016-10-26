<!DOCTYPE html>
<html>
<head>
	<title>Edit News</title>
<style type="text/css">
	table{
		text-align: left;
	}
</style>
</head>
<body>
<?php
require_once 'db.php';
//get data yang akan di edit/update
if (!isset($_GET['username']))
	die('Informasi user tidak ditemukan');
$conn = konek_db();

//cari data yang akan diupdate
$username = $_GET['username'];
$query = $conn->prepare("select * from user where username=?");
$query->bind_param("s",$username);
$result = $query->execute();

if(!$result)
	die("Koneksi gagal");

$rows = $query->get_result();
if($rows->num_rows == 0)
die("<p>Informasi user tidak ditemukan</p>");

$data = $rows->fetch_object();
?>

<form method="post" action="update-user.php?username=<?php echo $data->username;?>">
<div>
	<label>Username</label>
	<p><?php echo $data->username;?></p>
</div>
<table>
	<tr><th><label>Name</label><td>:</td></th><td><input type="text" name="name" value="<?php echo "$data->name"?>"></td></tr><br>
	<tr><th><label>Password</label><td>:</td></th><td><input type="password" name="password" value="<?php echo "$data->password"?>"></td></tr>	<br>
	<tr><th><label>Category</label><td>:</td></th><td>
		<select name="category">
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
<a href="admin.php"><button>Back to Admin</button></a>
</body>
</html>