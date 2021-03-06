<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='img/favicon.jpg' />
	<title>Kegiatan	</title>
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
	}
	.body2{
		background-color: #e0ebeb;
		width: 1200px;
		max-height: 8000px;
		margin:auto;
		margin-top: -1px;
		overflow: hidden;
	}
	.left{
		width: 900px;
		max-height: 3000px;
		float: left;
	}
	.seminar{
		width: 250px;
		height: 320px;
		border:5px solid #b8b894;
		float: left;
		margin:20px 10px 20px 20px;
	}
	
	.seminar img{
		width: 220px;
		height: 300px;
		padding-top:10px;
		padding-left:15px
	}
	.seminar h1{
		padding-left: 120px;
	}
	.right{
		width: 300px;
		max-height: 1200px;
		float: left;
		background-color: #e0ebeb;
		margin-top: 20px;
	}
	.right table{
		margin: 5px 0 15px 25px;
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
		margin-top: -39px;
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
		.news-nav{
			width: 900px;
			height: 50px;
			list-style-type: none;
			padding-left: 450px;
			float: left;
		}
		.news-nav ul{
		display: block;
		}
		.news-nav li{
			width: 22px;
			height: 25px;
			background-color: #ff6600;
			color:white;
			display: inline-block;
			list-style-type: none;
			margin-left: 10px;
			padding-top: 5px;
			text-align: center;
		}	
		.news-nav li a{
			text-decoration: none;
			color: black;
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
						  <li><a href="UKM.php">Unit Kegiatan Mahasiswa</a></li>
						  <li class="current-menu-item"><a href="Kegiatan.php">Kegiatan</a></li>
						  <li><a href="glosarium.php">Glosarium</a>
						  </li>
						</ul>
			</div>
				</div>
				</div>
				<div class="row">
					<div class="body2">
							<div class="left">
							<?php
									require_once "db.php";
									$conn = konek_db();
									$start=0;
									$limit=9;
									 
									if(isset($_GET['page']))
									{
									    $page=$_GET['page'];
									    $start=($page-1)*$limit;
									}
									else{
									    $page=1;
									}
									//Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
									$query = $conn->prepare("select * from kegiatan LIMIT $start, $limit");
										$result = $query->execute();
										if(!$result)
											echo "result tidak ditemukan";
										$rows = $query->get_result();
										while($row = $rows->fetch_array()){
										
										if($row['poster'] == null || $row['poster'] == "")
											$url_poster = "img/none.png";
										else
											$url_poster = "img/".$row['poster'];
										if($row['id'] == 0){
											echo "<p style=\"font-size: 100px;padding-left: 120px;\">Coming Soon !!!</p>";
										} else{
											$seminar = "seminar.php?id=".$row['id'];
											echo "<div class=\"seminar\">";
											echo "<a href=\"$seminar\"><img src=\"$url_poster\" ></a>";
											echo "</div>";
										}
									}
									
									
									//fetch all the data from database.
									$rows=mysqli_num_rows(mysqli_query($conn,"select * from `website`.`kegiatan`"));
									//calculate total page number for the given table in the database 
									$total=ceil($rows/$limit);
									// if($page>1)
									// {
									//     //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
									//     echo "<a href='?page=".($page-1)."' class='button' style='border:1px solid black;'>PREVIOUS</a>";
									// }
									// if($page!=$total)
									// {
									//     ////Go to previous page to show next 10 items.
									//     echo "<a href='?page=".($page+1)."' class='button'>NEXT</a>";
									// }
									?>
								<ul class="news-nav">
									<?php
									if($total < 2)
										echo "";
									else{
									//show all the page link with page number. When click on these numbers go to particular page. 
									        for($i=1;$i<=$total;$i++)
									        {
									            if($i==$page) { 
									            	echo "
										            			<li class='current'>".$i."</li>
									            		"; 
									            	}
									             
									            else { echo "<li><a href='?page=".$i."'>".$i."</a></li>"; }
									        }
									       }
									?>
								</ul>
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
					</div>'
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
</body>
</html>