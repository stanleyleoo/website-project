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
	}
	.body2{
		background-color: #e0ebeb;
		width: 1200px;
		height: 800px;
		max-height: 5000px;
		margin:auto;
		margin-top: -1px;
	}
	.img{
		width: 400px;
		height: 300px;
		float: left;
	}
	.img img{
		width: 300px;
		height: 300px;
		padding-top: 20px;
		padding-left: 60px;
	}
	.info{
		width: 700px;
		height: 200px;
		padding-top:20px;
		float: left;
	}
	.info ul{
		font-size: 22px;
	}
	.info li{
		list-style: none;
	}
	.des-header{
		width: 1200px;
		height: 50px;
		background-color: #003cb3;
		border-bottom: 5px solid #ffa31a;
	}
	.des-header h2{
		padding-top:10px;
		padding-left: 40px;
		color: white;
	}
	.description {
		width: 1200px;
		max-height: 500px;
		font-size: 22px;
	}
	.description,.join p{
		padding: 20px 40px 10px 30px;
		text-indent:50px;
	}
	.join{
		width: 1200px;
		max-height: 500px;
		font-size: 22px;
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
							<h1>Himpunan Mahasiswa Fakultas Hukum<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUPH Medan</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="menu">
						<ul>
						  <li><a href="hmj.html">Home</a></li>
						  <li><a href="tentang.html">Tentang HMFH</a></li>
						  <li class="current-menu-item"><a href="UKM.html">Unit Kegiatan Mahasiswa</a></li>
						  <li><a href="Kegiatan.html">Kegiatan</a></li>
						  <li><a href="glosarium.html">Glosarium</a>
							 <!--  <ul>
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
				</div>
				<div class="row">
					<div class="body2">
						<div class="row">
							<div class="img">
								<img src="img/debate.png">
							</div>
							<div class="info">
								<ul>
								<li><b>Name</b> 	: Debate club</li><br>
								<li><b>Faculty</b>	: Law</li><br>
								<li><b>Leader</b>	: Ramoti Taori Menauli Putri Joi Silalahi</li><br>
								<li><b>Location</b> : Kampus Lippo Plaza UPH Medan</li><br>
								<li><b>Time</b> 	: Pukul 15.00, Setiap 2 minggu sekali</li>
								</ul>

							</div>
						</div>
						<div class="row">
							<div class="des-header">
								<h2>Description</h2>
							</div>
							<div class="description">
								<p>Debate Club merupakan salah satu Unit Kegiatan Mahasiswa (UKM) yang bertujuan agar mahasiswa Fakultas Hukum dapat mengembangkan diri terutama dalam hal berpikir kritis dalam menyikapi suatu kasus, melatih mahasiswa agar dapat menyampaikan argumen mereka dengan baik dan benar serta melatih mahasiswa untuk selalu mencari fakta dan data suatu kasus sebelum menanggapi kasus tersebut</p>
							</div>
							<div class="des-header">
								<h2>How to join??</h2>
							</div>
							<div class="join">
								<p>Bagi yang berminat untuk mendaftar, silahkan menghubungi : 
								Ramoti Menauli (15L1) 0853 7318 5056 / ID Line : menauli
								</p>
							</div>
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
</body>
</html>