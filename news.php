<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />
	<title>HMFH NEWS</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>HMJ HUKUM UPH MEDAN</title>
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
	.header{
		width: 1200px;
		height: 120px;
		background-color: #002b80;
		margin: auto;
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
		text-align: center;
		margin: auto;
	}
	.body{
		padding : 0px;
	}
	.body2{
		width: 1200px;
		height: 1200px;
		max-height: 3000px;
		background-color: #e0ebeb;
		margin:auto;
		margin-top: -1px;
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
	.left{
		width: 850px;
		height: 1150px;
		max-height: 1500px;
		float: left;
		background-color: white;
		margin-top: 29px;
		margin-left:40px;
	}
	.left h3{
		padding-left: 40px;
		padding-top: 15px;
		color: white;
	}
	.left .button{
		width: 150px;
		float: left;
	}
	.left .button img{
		margin-left: 20px;
		margin-top: 26px;
	}
	.left .button img:hover{
		transition: 0.3s ease;
		background-color: white;
		opacity: 0.5;
	}
	.left .news{
		width: 650px;
		text-align: left;
		float: left;
		padding-right: 20px;
	}
	.left .news-head{
		width: 850px;
		height: 56px;
		background-color: #003cb3;
		margin-top: -20px;
		border-bottom: 5px solid #ffa31a;
	}
	.news p{
		
		font-size: 20px;
		font-family: "Times New Roman";
	}
	.komentar{
		width: 700px;
		max-height: 800px;
		background-color: white;
		float: left;
		padding-left: 150px;
		padding-bottom: 10px;
	}
	.komentar input[type=text] {
		width: 400px;
		height: 30px;
		font-size: 20px;
		border-radius: 4px;
		font-size: 20px;
	}
	.komentar textarea{
		border-radius: 4px;
		font-size: 20px;
	}
	.komentar input[type=submit] {
		border:1px solid white;
		height: 50px;
		width: 100px;
		background-color: #0047b3;
		color:white;
		font-size: 20px;
		margin-top: -10px;
	}
	.komentar p{
		font-size: 20px;
		padding-left: 190px;
	}
	.footer{
		width: 1200px;
		height: 50px;
		background-color:black;
		color:white;
		margin:0px auto;
		text-align: center;
		margin-top: -20px;
	}
	.footer h2{
		padding-top: 10px;
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
</head>
<body>
<div class="wrapper">
	<div class="row">
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
				  <li class="current-menu-item"><a href="hmj.html">Home</a></li>
				  <li><a href="tentang.html">Tentang HMFH</a></li>
				  <li><a href="UKM.html">Unit Kegiatan Mahasiswa</a></li>
				  <li><a href="Kegiatan.html">Kegiatan</a></li>
				  <li><a href="glosarium.html">Glosarium</a>
					  <!-- <ul>
					      <li class="dir"><a href="#">Sub Menu 1</a>
					      	<ul>
					          <li><a href="#">Category 1</a></li>
					          <li><a href="#">Category 2</a></li>
					          <li><a href="#">Category 3</a></li>
					          <li><a href="#">Category 4</a></li>
					          <li><a href="#">Category 5</a></li>
					        </ul>
					      </li>
					      <li class="dir"><a href="#">Sub Menu 2</a>
					        <ul>
					          <li><a href="#">Category 1</a></li>
					          <li><a href="#">Category 2</a></li>
					          <li><a href="#">Category 3</a></li>
					          <li><a href="#">Category 4</a></li>
					          <li><a href="#">Category 5</a></li>
					        </ul>
					      </li>
					      <li><a href="#">Sub Menu 3</a></li>
					      <li><a href="#">Sub Menu 4</a></li>
					      <li><a href="#">Sub Menu 5</a></li>
				    </ul> -->
				  </li>
				</ul>
			</div>
			</div>
			<div class="row">
				<div class="body2">
					<div class="left">
						<div class="row">
							<div class="news-head">
								<h3>MEMAHAMI SENGKETA TERITORIAL DI LAUT CINA SELATAN</h3>
							</div>
							<img src="img/MEMAHAMI SENGKETA TERITORIAL DI LAUT CINA SELATAN.jpg" width="900">
						</div>	
						<div class="row">
							<div class="button">
								<a href="https://www.facebook.com/hmfh.medan?fref=ts"><img src="img/fb-button.jpg" width="100" height="100"></a>
								<a href="https://www.instagram.com/hmfh_uphmedan/"><img src="img/insta-button.png" width="100" height="100"></a>
								<a href="https://twitter.com/HMFH_UPH"><img src="img/twitter-button.png" width="100" height="100"></a>
							</div>
							<div class="news">
								<p>Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.</p>

								<p>Pada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll. </p>

								<p>Dalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman  (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.</p>

								<p>Keesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan.
								</p>
								<p>Penulis : Admin</p>
							</div>
							
						</div>
						<!-- <div class="row">
						<hr style="height:5px;background-color:#e0ebeb;">
							<div class="komentar">
								<label>Email anda :</label><br><input type="text" name="email"><br>
								<label>Komentar anda :</label><br><textarea rows="5" cols="40" placeholder="insert your comments here"></textarea><br>
									<input type="submit" name="submit" value="Submit">
							</div>
						</div> -->
					</div>
					<div class="right">
						<table>
							<tr>
							<th>Latest News</th>
							</tr>
							<tr>
							<td><a href="news.html"><img src="img/MEMAHAMI SENGKETA TERITORIAL DI LAUT CINA SELATAN.jpg" style="margin-top:10px" width="200" height="144"><br>
							MEMAHAMI SENGKETA TERITORIAL DI LAUT CINA SELATAN</a></td>
							</tr>
							<tr>
						<td><a href="news2.html"><img src="img/studibanding.jpg" style="margin-top:10px" width="200" height="144"><br>
						STUDI BANDING FH UPH MEDAN</a></td>
						</tr>
						</table>
						<div class="advertise">
						<img src="img/ad.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="footer">
		<h2>&copy2016 by HMFH UPH MEDAN</h2>
		</div>
	</div>
</div>
</body>
</html>
</body>
</html>