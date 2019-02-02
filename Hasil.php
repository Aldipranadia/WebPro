<html>
<head>
<title>Hasil</title>
<link rel="stylesheet" type"text/css" href="css/cHasil.css">
</head>
<body>
	<div class="container">
	<?php
		$Nama=$_POST['Nama'];
		$Email=$_POST['Email'];
		$TTL=$_POST['TTL'];
		$kerja=$_POST['kerja'];
		$bidang=$_POST['bidang'];
		echo"<h1>Hasil Seleksi</h1>";
		//1
		if ($bidang=="Accounting Assistant Manager"){
			if ($kerja=="Experience"){
				echo"<b>Selamat $Nama</b>";
				echo"<br>";
				echo"<b>Anda lolos di Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Pada Bidang Pekerjaan :</b>";
				echo"<br>";
				echo"<b>$bidang</b>";
			}
			else{
				echo"<b>Maaf $Nama, Anda Masih Belum Lolos</b>";
				echo"<br>";
				echo"<b>Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Karena Belum Memenuhi Persyaratan</b>";
				echo"<br>";
				echo"<b>Silahkan Mendaftar di Bidang Pekerjaan Yang Lain</b>";
				echo"<br>";
				echo"<b> TETAP SEMANGAT !</b>";
			}
		}
		//2
		else if ($bidang=="Associate Market Manager"){
			if ($kerja=="Experience"){
				echo"<b>Selamat $Nama</b>";
				echo"<br>";
				echo"<b>Anda lolos di Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Pada Bidang Pekerjaan :</b>";
				echo"<br>";
				echo"<b>$bidang</b>";
			}
			else{
				echo"<b>Maaf $Nama, Anda Masih Belum Lolos</b>";
				echo"<br>";
				echo"<b>Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Karena Belum Memenuhi Persyaratan</b>";
				echo"<br>";
				echo"<b>Silahkan Mendaftar di Bidang Pekerjaan Yang Lain</b>";
				echo"<br>";
				echo"<b> TETAP SEMANGAT !</b>";
			}
		}
		//3
		else if ($bidang=="Data Analyst"){
			if ($kerja=="Experience"){
				echo"<b>Selamat $Nama</b>";
				echo"<br>";
				echo"<b>Anda lolos di Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Pada Bidang Pekerjaan :</b>";
				echo"<br>";
				echo"<b>$bidang</b>";
			}
			else{
				echo"<b>Maaf $Nama, Anda Masih Belum Lolos</b>";
				echo"<br>";
				echo"<b>Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Karena Belum Memenuhi Persyaratan</b>";
				echo"<br>";
				echo"<b>Silahkan Mendaftar di Bidang Pekerjaan Yang Lain</b>";
				echo"<br>";
				echo"<b> TETAP SEMANGAT !</b>";
			}
		}
		//4
		else if ($bidang=="Admin Support Team"){
			if ($kerja=="Fresh Graduate"){
				echo"<b>Selamat $Nama</b>";
				echo"<br>";
				echo"<b>Anda lolos di Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Pada Bidang Pekerjaan :</b>";
				echo"<br>";
				echo"<b>$bidang</b>";
			}
			else{
				echo"<b>Maaf $Nama, Anda Masih Belum Lolos</b>";
				echo"<br>";
				echo"<b>Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Karena Belum Memenuhi Persyaratan</b>";
				echo"<br>";
				echo"<b>Silahkan Mendaftar di Bidang Pekerjaan Yang Lain</b>";
				echo"<br>";
				echo"<b> TETAP SEMANGAT !</b>";
			}
			
		}
		//5
		else if ($bidang=="Ticketing Agent"){
			if ($kerja=="Fresh Graduate"){
				echo"<b>Selamat $Nama</b>";
				echo"<br>";
				echo"<b>Anda lolos di Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Pada Bidang Pekerjaan :</b>";
				echo"<br>";
				echo"<b>$bidang</b>";
			}
			else{
				echo"<b>Maaf $Nama, Anda Masih Belum Lolos</b>";
				echo"<br>";
				echo"<b>Tahap Pertama Seleksi</b>";
				echo"<br>";
				echo"<b>Karena Belum Memenuhi Persyaratan</b>";
				echo"<br>";
				echo"<b>Silahkan Mendaftar di Bidang Pekerjaan Yang Lain</b>";
				echo"<br>";
				echo"<b> TETAP SEMANGAT !</b>";
			}
		}
	?>
	</div>
</body>
</html>