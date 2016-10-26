<?php 
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
	
	header("location: login.html");
}else {
	switch ($_SESSION['category']) {
		case 1:
			header("Location:admin.php");
			break;
		case 2:
			header("Location:input-news1.php");
			break;
		case 3:
			header("Location:input-tentang.php");
			break;
		case 4:
			header("Location:input-kegiatan.php");
			break;
		case 5:
			header("Location:input-ukm.php");
			break;
		case 6:
			header("Location:input-glosarium.php");
			break;	
	}
}
 ?>
