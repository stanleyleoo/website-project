<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />
	<title>Glosarium	</title>
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
		width: 300px;
		height: 120px;
		float: left;
	}
	.logo img{
		margin-left: 150px;
	}
	.name{
		width: 800px;
		height: 120px;
		color:white;
		float: right;
	}
	.name h1{
		text-align: left;	
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
		max-height: 5000px;
		margin-top: -1px;
	}
	.left{
		width: 900px;
		max-height: 3000px;
		float: left;
	}
	.right{
		width: 300px;
		max-height: 1200px;
		float: left;
		background-color: #e0ebeb;
		margin-top: 20px;
	}
	.right table{
		margin: 10px 0 20px 25px;
	}
	.right table,th,td{
		border:2px solid black;
		border-collapse: collapse;
		text-align: center;
	}
	.right td a{
		text-decoration: none;
		list-style: none;
	}
	.right th,td{
		width: 235px;
		height: 50px;
		max-height: 300px;
	}
	th{
		background: #002b80;
		color:white;
	}
	.advertise{
		width: 300px;
		height: 300px;
	}
	.advertise img{
		margin-left: 25px;
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
		.head{
		width: 880px;
		height: 60px;
		border-bottom: 5px solid #ffa31a;
		margin-top: 30px;
		margin-left: 20px;
		background-color: #002b80;
		}
		.head h2{
			color:white;
			padding: 20px 0 0 30px;
		}
		.undang-undang{
			width: 880px;
			height: 100px;
			background-color: #e0e0d2;
			margin-left: 20px;
			margin-top: -20px;
		}
		.undang-undang h2{
			padding-top: 30px;
			padding-left: 20px;
		}
		.undang-undang a{
			text-decoration:none;
			color:black;
		}
		#UU{
			margin-top: 10px;
			padding-left: 20px;
		}
		input[type="button"]:hover{
			color: white;
			background-color:#e65c00;
			transition: 0.5s ease;
		}


</style>
</head>
<body>
<div class="wrapper">
	<div class="row">
		<div class="body">
		<?php
			require_once "db.php";
				if(!isset($_GET['id']))
					die("informasi tidak ada");
				$conn = konek_db();
				$id = $_GET['id'];
				$query = $conn->prepare("select * from uu where id=?");
				$query->bind_param("i",$id);
				$result = $query->execute();
				$rows= $query->get_result();
				if($rows->num_rows == 0)
				die("<p>Informasi UU tidak ditemukan</p>");
				$data = $rows->fetch_object();
				if($data->uu == null)
					$uu = "UU/none.png";
				else
					$uu = "UU/" . $data->uu;
		?>
			<div class="row">
				<div class="row">
					<div class="header">
						<div class="logo">
						<img src="img/logo.png">
						</div>
						<div class="name">
							<h1>Himpunan Mahasiswa Fakultas Hukum<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUPH Medan</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="menu">
						<ul>
						  <li><a href="hmj.php">Home</a></li>
						  <li><a href="tentang.php">Tentang HMFH</a></li>
						  <li><a href="UKM.php">Unit Kegiatan Mahasiswa</a></li>
						  <li><a href="Kegiatan.php">Kegiatan</a></li>
						  <li class="current-menu-item"><a href="glosarium.php">Glosarium</a>
						  </li>
						</ul>
			</div>
				</div>
				<div class="row">
					<div class="body2">
							<div class="left">
								<div class="head">
								<h2><?php echo $data->nama;?></h2>
								</div>
								<div id="UU">
								<!-- <iframe src="<?php echo $uu;?>" width="880" height="1000" type='application/pdf'></iframe> -->
								<!-- <object data="<?php echo $uu;?>" type="application/pdf" width="880" height="1000"></object> -->
								<!-- <img src="<?php echo $uu;?>" width="500"> -->
								<!-- <a href="<?php echo $uu;?>">test.pdf</a> -->
								<!-- <iframe src="http://docs.google.com/gview?url=<?php echo $uu;?>" style="width:600px; height:500px;" frameborder="0"></iframe> --> 
								<embed src="<?php echo $uu;?>" width="880" height="1000" type="application/pdf" />
								<!-- <a class="media" href="<?php echo $uu;?>">PDF File</a> --><!-- 
								<iframe src = "UU/tst.pdf" width='880' height='1000' allowfullscreen webkitallowfullscreen></iframe>  -->
								</div>
							</div>
							<div class="right">
								<table>
									<tr>
									<th>Latest News</th>
									</tr>
									<?php
									require_once "db.php";

									$conn = konek_db();
									$query = $conn->prepare("select * from `website`.`news` ORDER BY date DESC LIMIT 2");

									$result= $query->execute();

									if(!$result)
										echo "Gagal Koneksi";

									$rows = $query->get_result();
									while($row = $rows->fetch_array()){
									if($row['image'] == null || $row['image'] == "")
										$url_image = "img/none.png";
									else
										$url_image = "img/".$row['image'];
										$news = "news.php?id=".$row['id'];
									echo "<tr>";
									echo "<td><a href=\"$news\"><img src=\"$url_image\" style=\"margin-top:10px\" width=\"200\" height=\"144\"><br>".
										$row['title']."</a></td>";
									echo"</tr>";
										}
									?>
								</table>
							</div>
							<div class="row">

							<h2 style="text-align: center;">Or<br>Click Here to Download</h2>
							<p>
							<input type="button" value="Download" style="width: 200px;height: 50px;font-size: 20px; border-radius: 10px;text-align:center;margin-left: 42%;border: 1px solid #ff9900;" onclick="window.location.href='<?php echo $uu;?>'">
							</div>
							<div class="row">
								<div class="footer">
								<h2>&copy2016 by HMFH UPH MEDAN</h2>
								</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/js/pdfobject.js"></script>
<script>PDFObject.embed("uu/", "#UU");</script>
</body>
</html>