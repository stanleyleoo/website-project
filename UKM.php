<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />

	<title>Unit Kerja Mahasiswa	</title>
<style>
	body{
		margin: 0px;
		padding: 0px;
		background: url("img/index.jpg") no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
	.wrapper{
		width: 100%;
		max-height: 6000px;
	}
	.wrapper:before,
	.wrapper:after,
	.row:before,
	.row:after{
		content: "";
		display: table;
	}
	.wrapper:after;
	.row:after{
		clear: both;
	}
	.row{
		clear: both;
	}
	.body{
		width: 1200px;
		max-height: 5600px;
		margin: auto;
	}
	.header{
		width: 1200px;
		height: 120px;
		background-color: #002b80;
	}
	.logo{
		width: 200px;
		height: 120px;
		float: left;
	}
	.logo img{
		margin-left: 80px;
		width: 130px;
	}
	.name{
		width: 800px;
		height: 120px;
		color:white;
		float: left;
		text-align: center;
	}
	.name h1{
		text-align: center;	
	}
	.logo2{
		width: 200px;
		height: 120px;
		float: left;
	}
	.logo2 img{
		margin-left: 0px;
		width: 100px;
		padding-top:10px;
	}
	.menu{
		width: 1200px;
		height: 50px;
		background-color:#ffa31a;
		margin-top: 0px;
		border-bottom: none;	
	}
	.body2{
		background-color: #e0ebeb;
		width: 1200px;
		max-height: 10000px;
		margin:auto;
	}
	a{
		text-decoration: none;
		color:black;
	}
	a:hover{
		color:#ff751a;
		transition: 0.3s ease;
	}
	.club{
		width: 400px;
		height: 500px;
		margin: 50px 30px 30px 120px;
		border:5px solid #b8b894;
		border-radius: 20%;
		float: left;
	}
	.club h1{
		padding-left: 120px;
	}
	.footer{
		width: 1200px;
		height: 50px;
		background-color:black;
		color:white;
		margin:auto;
		text-align: center;
	}
	.footer h2{
		padding-top:10px;
	}
		.menu ul
		{
			list-style:none;
			position:relative;
			float:left;
			margin:0;
			padding:0;
			z-index : 999;
		}
	.menu ul li{
		width: 240px;
		text-decoration: none;
		display: inline-block;
		list-style:none;
		text-align: center;
	}
	.menu ul li a{
		color:white;
		text-decoration: none;
		padding-top: 10px;
		padding-bottom: 9px;
		font-size: 15px;
	}
	.menu li a:hover{
		transition: 0.3s ease;
	}
		.menu ul a
		{
			display:block;
			color:#333;
			text-decoration:none;
			font-weight:700;
			font-size:12px;
			line-height:32px;
			font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		.menu ul li
		{
			position:relative;
			float:left;
			z-index : 999;
			margin:0;
			padding:0;
			left: 0px;
			bottom:0px;

		}

		.menu ul li.current-menu-item
		{
			background:#993d00;
		}

		.menu ul li:hover
		{
			background:#e68a00;
		}

		.menu ul ul
		{
			display:none;
			position:absolute;
			top:100%;
			left:0;
			background:#fff;
			padding:0;
			z-index : 999;
		}

		.menu ul ul li
		{
			float:none;
			width:240px;
			z-index : 999;
			background-color: #ffa31a;
		}

		.menu ul ul a
		{
			line-height:120%;
			padding:10px 15px;
			z-index : 999;
		}

		.menu ul ul ul
		{
			top:0;
			left:100%;
			z-index : 999;
		}

		.menu ul li:hover > ul
		{
			display:block;
			z-index : 999;
		}
</style>
</head>
<body>
<div class="wrapper">
	<div class="row">
		<div class="body">
			<div class="row">
				<div class="row">
					<div class="header">
						<div class="logo">
						<img src="img/logo.png">
						</div>
						<div class="name">
							<h1>Himpunan Mahasiswa Fakultas Hukum<br>UPH Medan</h1>
						</div>
						<div class="logo2">
						<img src="img/uph.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="menu">
						<ul>
						  <li><a href="hmj.php">Home</a></li>
						  <li><a href="tentang.php">Tentang HMFH</a></li>
						  <li class="current-menu-item"><a href="UKM.php">Unit Kegiatan Mahasiswa</a></li>
						  <li><a href="Kegiatan.php">Kegiatan</a></li>
						  <li><a href="glosarium.php">Glosarium</a>
						  </li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="body2">
						<div class="row">
						<?php
						require_once "db.php";
						$conn = konek_db();
						$query=$conn->prepare("select * from ukm");
						$result = $query->execute();
						if(!$result)
							die("Koneksi db gagal");
						$rows = $query->get_result();
						
						while($row = $rows->fetch_array()){

						if($row['logo'] == null || $row['logo'] == "")
							echo "No Image";
						else
							$url_image = "img/".$row['logo'];
							$club = "club.php?id=".$row['id'];
								echo "<div class=\"club\">";
								echo "<a href=\"$club\"><img src=\"$url_image\" width=\"400\" height=\"400\"><br>";
								echo "<h1>".$row['title']."</h1></a></div>";
						}	
						
						?>
						</div>
						<div class="row">
								<div class="footer">
								<h2>Design By : HMJ SI UPH MEDAN</h2>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>