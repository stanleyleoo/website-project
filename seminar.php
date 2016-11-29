<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <link rel='shortcut icon' type='image/x-icon' href='img/favicon.jpg' />

        <title>Seminar</title>
        <style>
            @font-face{
                font-family:'FontAwesome';src:url('Fonts/fonts/fontawesome-webfont.eot');
                src:url('Fonts/fonts/fontawesome-webfont.eot') format('embedded-opentype'),
                    url('Fonts/fonts/fontawesome-webfont.woff2') format('woff2'),
                    url('Fonts/fonts/fontawesome-webfont.woff') format('woff'),
                    url('Fonts/fonts/fontawesome-webfont.ttf') format('truetype'),
                    url(Fonts/fonts/fontawesome-webfont.svg) format('svg');
                font-weight:normal;
                font-style:normal
            }
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
                width: 200px;
                height: 300px;
                padding-top: 10px;
                padding-left: 80px;
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
                max-height: 2000px;
                font-size: 22px;
            }
            .description p{
                padding: 20px 40px 10px 30px;
                text-indent:50px;
            }
            .photo{
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
                margin-top: -28px;
            }
            .footer h2{
                padding-top:10px;
            }
            .mySlides{
                float: left;
            }
            .slidershow{
                width: 600px;
                margin: 6px ;
                position: relative;	
            }

            .slider{
                width:755px;
                height:383x;
                float:left;
                margin-right:15px
            }

            .slide{
                float: left;
                position: absolute;
                top: 1240px;
                color: white;
                padding: 15px 5px;

                background: rgba(0,0,0,0.5);
                display: none;
                cursor: pointer;
            }
            .slide:last-child{
                left: 1509px;
            }
            .slide:hover{
                background: rgba(0,0,0,0.8);
            }
            .slider:hover .slide{
                display: block;
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
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
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
                            <?php
                            require_once "db.php";

                            $conn = konek_db();
                            $query = $conn->prepare("select title, faculty, speaker, conclusion, location, date, poster, image from `website`.`kegiatan` LEFT JOIN gambar on gambar.id_kegiatan = kegiatan.id where kegiatan.id = ?");
                            $query->bind_param("i", $_GET["id"]);
                            $result = $query->execute();

                            if (!$result)
                                echo "Gagal Koneksi";

                            $rows = $query->get_result();
                            if ($rows->num_rows == 0)
                                die("<p>Informasi news tidak ditemukan</p>");
                            $data = $rows->fetch_object();
                            if ($data->poster == null)
                                $image = "img/none.png";
                            else
                                $image = "img/" . $data->poster;
                            $date = date_create($data->date);
                            ?>
                            <div class="row">
                                <div class="img">
                                    <img src="<?php echo $image; ?>">
                                </div>
                                <div class="info">
                                    <ul>
                                        <li><b>Seminar</b>  &nbsp: <?php echo $data->title; ?></li><br>
                                        <li><b>Faculty</b> &nbsp&nbsp&nbsp: <?php echo $data->faculty; ?></li><br>
                                        <li><b>Speaker</b>	&nbsp&nbsp: <?php echo $data->speaker; ?></li><br>
                                        <li><b>Location</b> &nbsp: <?php echo $data->location; ?></li><br>
                                        <li><b>Date</b> 	: <?php echo date_format($date,"d F Y"); ?></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="row">
                                <div class="des-header">
                                    <h2>Seminar Conclusion</h2>
                                </div>
                                <div class="description">
                                    <?php echo $data->conclusion; ?>
                                </div>
                                <div class="des-header">
                                    <h2>Photos</h2>
                                </div>
                                <div class="photo">



                                    <div class="slider">
                                        <!-- <div>
                                                <a class="slide" onclick="plusDivs(-1)"><i class="fa fa-2x  fa-chevron-left"></i></a>
                                                <a class= "slide" onclick="plusDivs(1)"><i class="fa fa-2x fa-chevron-right"></i></a>
                                        </div> -->
                                        <?php
                                        while($row = $rows->fetch_array()){

											// echo $row['image'] . " " . $i . "<br>";
											$images = $row['image'];
											if($row['image'] != null && $row['image'] != "" && file_exists($row['image'])){

												echo "<img class=\"mySlides\" src=\"$images\" width=\"1200\" height=\"600\" >";
											}
											// $i++;
										}
                                        // while ($row = $rows->fetch_array()) {
                                        //     if ($row['image'] == null)
                                        //         $image = "img/none.png";
                                        //     else
                                        //         $image = "img/" . $row['image'];
                                        //     echo "<img class=\"mySlides\" src=\"$image\" width=\"1200\" height=\"600\" >";
                                        // }
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
            <script type="text/javascript">
                var myIndex = 1;
                var i;
                var time = 5000;
                showDivs(myIndex);
                carousel();
                function carousel() {

                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, time);
                }
                function plusDivs(n) {
                    showDivs(myIndex += n);
                    time = 5000;
                }

                function showDivs(n) {
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {
                        myIndex = 1
                    }
                    if (n < 1) {
                        myIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[myIndex - 1].style.display = "block";

                }


            </script>

    </body>
</html>