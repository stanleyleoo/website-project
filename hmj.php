<!DOCTYPE html>
<html>
<head>
	<title>HMF HUKUM UPH MEDAN</title>
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
	.body{
		width: 1200px;
		max-height: 2500px;
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
		border:none;
	}
	
	.body2{
		background-color: #e0ebeb;
		width: 1200px;
		height: 1529px;
		max-height: 2000px;
		margin:auto;
		margin-top: -1px;
	}
	.left{
		width: 300px;
		height: 1000px;
		float: left;
		background-color: #e0ebeb;
		margin-top: 20px;
	}
	.left table{
		margin: 10px 0 20px 25px;
	}
	.left table,th,td{
		border:2px solid black;
		border-collapse: collapse;
		text-align: center;
	}
	.left td a{
		text-decoration: none;
		list-style: none;
	}
	.left th,td{
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
	.center{
		width: 600px;
		height: 1480px;
		max-height: 3000px;
		float: left;
		/*background-color: #002b80;*/
		background-color: #eaeae1;
		margin-top: 29px;
		border:2px solid black;
	}
	.center .news-head h2{
		padding-left: 40px;
		padding-top: 15px;
		color: white;
	}
	.center .news-head{
		width: 600px;
		height: 56px;
		border-bottom: 5px solid #ffa31a;
		margin-top: -20px;
		background-color: #002b80;
	}
	.center .news-option{
		width: 600px;
		height: 200px;
		border-bottom: 1px solid black;
	}
	.news-option .img{
		width: 200px;
		height: 200px;
		float: left;
	}

	.news-option .img img{
		width: 180px;
		height: 180px;
		margin: 10px 0 0 10px;
	}
	.news-option .news{
		width: 400px;
		height: 200px;
		float:right;
		overflow: hidden;

	}
	.news-option .news h2{
		margin-top:12px;
	}
	.news-option .news h2 a{
		text-decoration: none;
		color:#ffa31a;
	}
	.news-option .news h2 a:hover{
		/*color:white;*/
	}
	.news-option .news p{
		margin-top:-10px;
		font-family: "Times new Roman";

	}
	.center .news-nav{
		width: 600px;
		height: 50px;
		padding-left: 470px;
	}
	.center input[type="button"]{
		width: 100px;
		height: 30px;
		background-color: #ff6600;
		color:white;
		margin-top: 8px;
	}		
	
/* General */
#css3-slider {
  margin:0px auto;
  padding:0px 0px;
  width:100%;
  height:550px;
  position:relative;
  overflow: hidden;
}

#css3-slider li {
  list-style:none;
  margin:0px 0px;
  padding:0px 0px;
}

/* Navigation */
#css3-slider li input + label {
  position:absolute;
  bottom:5px;
  left:10px;
  z-index:999;
  font:bold 11px/16px Arial,Sans-Serif;
  background-color:black;
  color:white;
  padding:0px 0px;
  width:16px;
  text-align:center;
  cursor:pointer;
}

#css3-slider li:nth-child(2) label {left:28px;}
#css3-slider li:nth-child(3) label {left:46px;}
#css3-slider li:nth-child(4) label {left:64px;}
#css3-slider li:nth-child(5) label {left:82px;}

/* Images */
#css3-slider li img {
  border:none;
  outline:none;
  position:absolute;
  top:50%;
  left:50%;
  width:0px;
  height:0px;
  visibility:hidden;
  opacity:0;
  /*-webkit-transition:all 2s ease-in-out;
  -moz-transition:all 2s ease-in-out;
  -ms-transition:all 2s ease-in-out;
  -o-transition:all 2s ease-in-out;
  transition:all 2s ease-in-out;
  -webkit-transform:rotate(0deg) scale(0);
  -moz-transform:rotate(0deg) scale(0);
  -ms-transform:rotate(0deg) scale(0);
  -o-transform:rotate(0deg) scale(0);
  transform:rotate(0deg) scale(0);*//*
  animation-duration: 1s infinite;
  animation-fill-mode: both;
  animation-name:fadeInLeft;
            webkit-animation-name:fadeInLeft;*/

}

/* Captions */
#css3-slider a {
  text-decoration:none !important;
}

#css3-slider li a span {
  cursor:default;
  display:block;
  position:absolute;
  right:0px;
  bottom:0px;
  left:0px;
  background-color:rgba(0,0,0,0.8);
  font:normal 20px/28px Arial,Sans-Serif;
  color:white;
  padding:0px 10px;
  text-align:right;
  opacity:0;
  --!visibility:hidden;!--
  /*-webkit-transition:all 2s ease-in-out;
  -moz-transition:all 2s ease-in-out;
  -ms-transition:all 2s ease-in-out;
  -o-transition:all 2s ease-in-out;
  transition:all 2s ease-in-out;*/
}

/* Active navigation */
#css3-slider li input:checked + label {
  background-color:#39f;
  color:white;
}

/* Show the image with transition */
#css3-slider li input:checked ~ img,
#css3-slider li input:checked ~ a img {
  top:0%;
  left:0%;
  width:100%;
  height:550px;
  visibility:visible;
/*  -webkit-transform:rotate(720deg) scale(1);
  -moz-transform:rotate(720deg) scale(1);
  -ms-transform:rotate(720deg) scale(1);
  -o-transform:rotate(720deg) scale(1);
  transform:rotate(720deg) scale(1);*/
  animation-duration: 2s;
  animation-fill-mode: both;
  animation-name:fade;
            webkit-animation-name:fade;
  opacity:1;
  z-index:99;
}

/* Show the caption with fade effect */
#css3-slider li input:checked ~ a span {
  opacity:1;
  z-index:100;
}

/* Hide the radio */
#css3-slider input {
  display:none;
}
@keyframes fade
		{
		  from {
		    opacity: 0;
		  }

		  to {
		    opacity: 1;
		  }
		}

	.right{	
		width: 290px;
		height: 1000px;
		float: left;
		background-color: #e0ebeb;
		padding-top: 18px;
	}
	.right table{
		margin: 10px 0 20px 25px;
		border-collapse: collapse;
	}
	.right td{
		width: 235px;
		height: 100px;
		text-align: left;
	}
	.right th{
		width: 235px;
		height: 50px;
		max-height: 300px;
	}
	.right p{
		padding-left: 10px;
	}
	.right input[type="radio"] ~ p{
		max-height: 0;
		overflow: hidden;
		visibility: hidden;
		opacity: 0;
		display: none;
	}
	.right input[type="radio"]:checked ~ p{
		max-height: 1000px;
		margin-bottom: 10px;
		visibility: visible;
		opacity: 1;
		display: block;
	}
	.radio input[type="radio"] ~ p{
		max-height: 0;
		overflow: hidden;
		visibility: hidden;
		opacity: 0;
		display: none;
	}
	.radio input[type="radio"]:checked ~ p{
		max-height: 1000px;
		margin-bottom: 10px;
		visibility: visible;
		opacity: 1;
		display: block;
	}
	.footer{
		width: 1200px;
		height: 50px;
		background-color:black;
		color:white;
		margin:auto;
		text-align: center;
		margin-top: -20px;
	}
	.footer h2{
		padding-top: 10px;
	}
	.slider-bg{
		background: #e0ebeb;
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
		height: 50px;
		text-decoration: none;
		display: inline-block;
		list-style:none;
		text-align: center;
	}
	.menu ul li a{
		text-decoration: none;
		padding-top: 10px;
		padding-bottom: 9px;
		color:white;
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
			padding-top: 10px;
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
<script src="js/wow.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<script>
		 new WOW().init();
	</script>
</head>
<body>
		
		
<div class="wrapper">
	<div class="body">
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
				  <li class="current-menu-item"><a href="hmj.php">Home</a></li>
				  <li><a href="tentang.php">Tentang HMFH</a></li>
				  <li><a href="UKM.php">Unit Kegiatan Mahasiswa</a></li>
				  <li><a href="Kegiatan.php">Kegiatan</a></li>
				  <li><a href="glosarium.php">Glosarium</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="slider-bg">
				<ul id="css3-slider">
					<li >
						<input type="radio" id="s1" name="num" checked="true" class="mySlides"/>
						<label for="s1">1</label>
						<a href="javascript:void(0);">
							<img src="img/photo.jpg" class=" wow fadeInLeft animated">
							<span>Studi Banding HMFH Medan</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="body2">
				<div class="left">
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

					echo "<tr>";
					echo "<td><a href=\"news.html\"><img src=\"$url_image\" style=\"margin-top:10px\" width=\"200\" height=\"144\"><br>".
					$row['title']."</a></td>";
					echo"</tr>";
				}
					?>

					</table>
					<div class="advertise">
					<img src="img/ad.jpg">
					</div>
				</div>
				<div class="center">
					<div class="news-head">
						<h2>News</h2>
					</div>
					<?php
					require_once "db.php";

					$conn = konek_db();
					$query = $conn->prepare("select * from `website`.`news` ORDER BY date DESC");

					$result= $query->execute();

					if(!$result)
						echo "Gagal Koneksi";

					$rows = $query->get_result();
					while($row = $rows->fetch_array()){
									if($row['image'] == null || $row['image'] == "")
										$url_image = "img/none.png";
									else
										$url_image = "img/".$row['image'];
						$date = date_create($row['date']);
						echo "<div class=\"news-option\">";
						echo "<div class=\"img\">";
						echo "<a href=\"news.html\"><img src=\"$url_image\" width=\"150\"></a></div>";
						echo "<div class=\"news\"><h2><a href=\"news.html\">".$row['title']."</a></h2>";
						echo "<p style=\"color:#adad85;\">".date_format($date,"d F Y")."</p>";
						echo "<p>" . $row['content']."</p>";
						echo "</div></div>";
					}



					?>
					<!-- <div class="news-option">
						<div class="img">
						<a href="news.html"><img src="img/photo.jpg" width="150"></a>
						</div>
						<div class="news">
						<h2><a href="news.html">Studi Banding UPH Medan</a></h2>
						<p style="color:#adad85;">HMFH || Date time</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
					</div> -->
					
					<div class="row">
						<!-- <div class="news-nav">
							<input type="button" name="next" value="Next">
						</div> -->
					</div>
				</div>
				<div class="right">
					<table>
						<tr>
						<th>Contact Us</th>
						</tr>
						<tr>
						<td><p><img src="img/facebook.png">&nbsp: HMFH UPH MEDAN<br><img src="img/gmail.png">&nbsp: hmfhuphmedan@gmail.com<br><img src="img/twitter.png">&nbsp: @HMFHUPHmedan<br><img src="img/insta.png">&nbsp: hmfh_uphmedan</p></td>
						</tr>
						<tr>
						<th>Kritik dan Saran</th>
						</tr>
						<tr>
						<td>
							<form action="kritik.php" method="post">
								<input type="radio" name="ks">Kritik
								<br><p><input type="text" name="email" placeholder="Email Anda"><br><br><input type="text" name="kritik" placeholder="isi kritikan anda disini" >
								<br><input type="submit" value="Submit"></p>
								<br>
							</form>
							<form action="saran.php" method="post">
								<div class="radio">
								<input type="radio" name="ks">Saran
								<br><p><input type="text" name="email" placeholder="Email Anda"><br><br><input type="text" name="saran" placeholder="isi saran anda disini" >
								<br><input type="submit" value="Submit"></p></td>
								</div>
							</form>
							</td>
						</tr>
						<tr>
						<th>Upcoming event</th>
						</tr>
						<tr>
						<td><a href=""><img src="img/poster.jpg" width="200" height="250" style="padding:10px 8px 10px 15px;"></a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	<h2>&copy2016 by HMFH UPH MEDAN</h2>
	</div>
</div>
<script type="text/javascript">
var myIndex = 1;
	var time = 9000;
carousel();
	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	       x[i].checked = false;  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].checked = true;
	    setTimeout(carousel, time);
	}
</script>
</body>
</html>