<?php
		require_once 'db.php';

		$conn = konek_db();

		$query = $conn->prepare("select * from tentang where id=1");
		$result = $query->execute();

		if(!$result)
			die("Gagal query");
		$rows = $query->get_result();
		if($rows->num_rows == 0)
			die("tentang tidak ditemukan");

		// if(!isset($_POST['visi']) || !isset($_POST['misi']) || !isset($_POST['deskripsi']))
		  $visi = $_POST['visi'];
		  $misi = $_POST['misi'];
		  $deskripsi = $_POST['deskripsi'];

		$tentang = $rows->fetch_object();
		if ($_FILES['image1']['error']== 0) {

		//hapus gambar lama
		$image1 = $tentang->cover;
		if($image1 = null && file_exists("img/$image1")){
			unlink("img/$image1");
		}

		//salin gambar yang diupload ke folder images
		$file_gambar1='';
		        if(isset($_FILES['image1'])){
		        if($_FILES['image1']['error'] == 0) {
		            $image1 = $_FILES['image1'];

		            $extension = new SplFileInfo($image1['name']);
		            $extension = $extension->getExtension();
		            $file_gambar1 = 'cover.' . $extension;
		            copy($image1['tmp_name'], 'img/' . $file_gambar1);
		        }
		    }
		} else {
			//tetap file yang lama
			$file_gambar1 = $tentang->cover;
		}
		if ($_FILES['image2']['error']== 0) {
		$image2 = $tentang->struktur;
		if($image2 != null && file_exists("img/$image2")){
			unlink("img/$image2");
		}

		//salin gambar yang diupload ke folder images
		$file_gambar2='';
		        if(isset($_FILES['image2'])){
		        if($_FILES['image2']['error'] == 0) {
		            $image2 = $_FILES['image2'];

		            $extension = new SplFileInfo($image2['name']);
		            $extension = $extension->getExtension();
		            $file_gambar2 = 'struktur.' . $extension;
		            copy($image2['tmp_name'], 'img/' . $file_gambar2);
		        }
		    }
		} else {
			//tetap file yang lama
			$file_gambar2 = $tentang->struktur;
		}


		$query = $conn->prepare("update tentang set cover=?,visi=?,misi=?,deskripsi=?,struktur=? where id=1");
		$query->bind_param("sssss",$file_gambar1,$visi,$misi,$deskripsi,$file_gambar2);
		$result=$query->execute();


		if($result)
				header("Location:input-tentang1.php");
		else
				echo "<p>Gagal mengupdate tentang</p>";


		// $id = mysqli_insert_id($conn);
		?>