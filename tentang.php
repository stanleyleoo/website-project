<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />

	<title>About HMFH</title>
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
		max-height: 6000px;
		margin:auto;
		margin-top: -1px;
	}
	.image{
		background-image: url();
		height: 600px;
		width: 1200px;
		max-height: 1500px;
		margin-top: -50px;
	}
	
	.image p{
		text-align: center;
		font-size: 50px;
		padding-top: 250px;
	}
	.image .text{
		width: 1200px;
		height: 600px;
		max-height: 1500px;
		opacity: 0;
	}
	.image .text:hover{
		transition: 0.5s ease;
		opacity: 1;
		color:#ffa31a;
	}
	.about-head{
		width: 1200px;
		height: 80px;
		background-color: #002b80;
		text-align: center;
		color:white;
		font-size: 35px;
		margin-top: -30px;
	}
	.about-head p{
		padding-top: 15px;
	}
	.about{
		width: 800px;
		max-height: 400px;
		text-align: center;
		margin:auto;
		font-size: 20px;
	}
	.about p{
		margin-top: 40px;
		margin-bottom: 70px;
	}
	.wrapper-team{
		width: 100%;
		max-height: 4100PX;
		margin: auto;
		background-color: #e0ebeb;
	}
	.member{
		width: 350px;
		height: 500px;
		background-color: white;
		color:white;
		float: left;
		margin: 20px 10px 10px 33px;
	}
	.member img{
		margin: 50px 70px 0 50px;
		width: 250px;
		height: 300px;
	}
	.member p{
		color:black;
		font-size: 20px;
		text-align: center;
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
		padding-top:10px;
	}
	.menu ul
		{
			font-size: 15px;
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
		font-size: 15px;
		color:white;
		text-decoration: none;
		padding-top: 10px;
		padding-bottom: 9px;
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
		o{
			color:#9c9c63;font-size:16px;
		}
		.visi{
			width: 50%;
			max-height: 500px;
			float: left;
			background-color: #e0ebeb;
		}
		.visi-head p{
			font-size: 35px;
			padding-top: 17px;
		}
		.visi-head{
			width: 100%;
			height: 80px;
			background-color: #002b80;
			text-align: center;
			color:white;
		}
		.misi{
			width: 50%;
			max-height: 500px;
			float: left;
			background-color: #e0ebeb;
		}
		.misi-head p{
			font-size: 35px;
			padding-top: 17px;
		}
		.misi-head{
			width: 100%;
			height: 80px;
			background-color: #002b80;
			text-align: center;
			color:white;
		}
		.visi-body {
			width: 400px;
			text-align: center;
			padding-left: 110px;
			font-size: 18px;
		}
		.misi-body {
			width: 400px;
			text-align: left;
			padding-left: 110px;
			font-size: 18px;
		}

	</style>
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
						  <li><a href="hmj.php">Home</a></li>
						  <li  class="current-menu-item"><a href="tentang.php">Tentang HMFH</a></li>
						  <li><a href="UKM.php">Unit Kegiatan Mahasiswa</a></li>
						  <li><a href="Kegiatan.php">Kegiatan</a></li>
						  <li><a href="glosarium.php">Glosarium</a>
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
		</div>
		<div class="row">
			<div class="body2">
				<div class="row">
					<div class="image">
						<div class="text">
						<p>Tentang HMFH</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="visi">
						<div class="visi-head">
						<p>Visi</p>
						</div>
						<div class="visi-body">
						<p>Mengembangkan sumber daya manusia yang beriman dan bertaqwa
					kepada Tuhan Yang Maha ESA dan berbudi pekerti luhur, Memiliki pengetahuan dan
					keterampilan,   kesehatan   jasmani   dan   rohani   yang   mantap   dan   mandiri   serta   rasa
					tanggung jawab kemasyarakatan dan kebangsaan.</p>
						</div>
					</div>
					<div class="misi">
						<div class="misi-head">
						<p>Misi</p>
						</div>
						<div class="misi-body">
						<p>
						<ol>
							<li>Membangun organisasi jurusan yang berorientasi akademik dengan pengembangan diri yang optimal.</li>
							<li>Membangun organisasi jurusan dengan dilatarbelakangi oleh pola pengkaderan yang jelas dan berkesinambungan.</li>
							<li>Memberikan pelayanan kemahasiswaan yang baik.</li>
							<li>Mengadakan pelatihan-pelatihan praktik kemahiran di dalam bidang hukum, politik, social dan ekonomi untuk membentuk mahasiswa jurusan yang yang berkualitas.</li>
							<li>Membangun hubungan dan kerja-sama yang baik dengan pihak birokrasi.</li>
						</ol>
						</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="about-head">
						<p>Tentang HMFH</p>
					</div>
				</div>
				<div class="row">
					<div class="about">
						<p>Himpunan Mahasiswa Fakultas Hukum, adalah lembaga kemahasiswaan di lingkungan Universitas Pelita Harapan Medan yang diselenggarakan, oleh, dan untuk mahasiswa di bawah bimbingan dan arahan Dekan guna melaksanakan kegiatan ekstra-kurikuler di bidang pemberdayaan mahasiswa, informasi dan komunikasi, bakat, minat dan  sosial kemasyarakatan khususnya Fakultas Hukum. HMFH UPH Medan disahkan pada tanggal 2 April 2016. Himpunan Mahasiswa Fakultas Hukum Universitas Pelita Harapan Medan berasaskan Pancasila dan berlandaskan UUD 1945. Membentuk manusia yang bertaqwa kepada Tuhan Yang Maha Esa, berwawasan luas dan ilmiah, cendekia, memiliki integritas kepribadian, kepedulian sosial dan keadilan. HMFH ini bertujuan untuk mencapai tujuan pengabdian kepada Masyarakat dan Negara.</p>
					</div>
					<div class="about-head">
						<p>Daftar Anggota</p>
					</div>
				<div class="row">
					<div class="wrapper-team">
						<div class="team">
							<div class="member">
								<img src="img/anggota/budiman.jpg">
								<p><b>Budiman</b><br><o>Ketua HMFH Medan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/josua.jpg">
								<p><b>Josua Dariusman Zendrato </b><br><o>Wakil Ketua HMFH Medan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/irene.jpg">
								<p><b>Irene Putri Alfani Sofia Sinaga </b><br><o>Sekretaris HMFH Medan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/jeslyn.jpg">
								<p><b>Jeslyn Tannia</b><br><o>Wakil Sekretaris HMFH Medan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/stephanie.jpg">
								<p><b>Stephanie Ciputra </b><br><o>Bendahara HMFH Medan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/avrilliany.jpg">
								<p><b>Avrilliany Cynthia </b><br><o>Wakil Bendahara HMFH Medan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/louis.jpg">
								<p><b>Louis Fernando</b><br><o>Koordinator Departemen Hukum & Pendidikan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/Bethany.jpg">
								<p><b>Bethany Fortunatan </b><br><o>Anggota Departemen Hukum & Pendidikan</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/sylvia.jpg">
								<p><b>Sylvia Lona</b><br><o>Koordinator Departemen Sosial</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/nurul.jpg">
								<p><b> Nurul Fitria </b><br><o>Anggota Departemen Sosial</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/Yordan.jpg">
								<p><b>Yordan Gabriel N.G Sidabutar</b><br><o>Koordinator Departemen Olahraga</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/Benita.jpg">
								<p><b>Benita Yamaesitari Zagoto </b><br><o>Anggota Departemen Olahraga</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/Natalia.jpg">
								<p><b>Natalia</b><br><o>Anggota Departemen Olahraga</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/Angeline.jpg">
								<p><b>Angeline Darsono</b><br><o>Koordinator Departemen Seni & Budaya </o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/Ananda.jpg">
								<p><b> Ananda Namira Wilar</b><br><o>Anggota Departemen Seni & Budaya </o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/meilani.jpg">
								<p><b>Meilani Josephine</b><br><o>Anggota Departemen Seni & Budaya</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/luise.jpg">
								<p><b>Luise Elsa Agusta Siregar </b><br><o>Koordinator Departemen Kerohanian</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/evelyn.jpg">
								<p><b>Evelyn</b><br><o>Anggota Departemen Kerohanian</o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/martin.jpg">
								<p><b>Martin Winata</b><br><o>Koordinator Departemen Keanggotaan & Kaderisasi </o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/novelia.jpg">
								<p><b>Novelia Novotna</b><br><o>Anggota Departemen Keanggotaan & Kaderisasi </o><br>Faculty of Law, 2015</p>
							</div>
							<div class="member">
								<img src="img/anggota/tasya.jpg">
								<p><b>Tasya Putri</b><br><o>Anggota Departemen Keanggotaan & Kaderisasi </o><br>Faculty of Law, 2015</p>
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
		</div>
	</div>
</div>
</body>
</html>