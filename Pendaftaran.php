<html>
<head>
<title>Pendaftaran Karyawan</title>
<link rel="stylesheet" type"text/css" href="css/cPendaftaran.css">
</head>
<body>
	<?php
		$username=$_POST['username'];
		$password=$_POST['password'];

		if ($username=="nitsu.co" and $password==""){
			echo"<h1>Selamat Datang di NITSU.CO</h1>";
			echo"<h2>DAFTAR</h2>"
	?>
			<form method="POST" action="Hasil.php">
				<input type="text" name = "Nama" placeholder = "Full Name">
				<input type="email" name = "Email" placeholder = "Email">
				<input type="date_date_set" name = "TTL" placeholder = "(DD/MM/YYYY)">
				<div>
					<input type="radio" name="gender" value="Male"><label for="male">Male</label>
					<input type="radio" name="gender" value="Female"><label for="female">Female</label>
				</div>
				<select name="kerja" > 
					<option>-- Pick One--</option>
					<option value="Fresh Graduate">Fresh Graduate</option>
					<option value="Experience">Experience</option>
				</select>
				<br>
				<select name="bidang" >
					<option>-- Pick One--</option>
					<option value="Accounting Assistant Manager">Accounting Assistant Manager</option>
					<option value="Associate Market Manager">Associate Market Manager</option>
					<option value="Admin Support Team">Admin Support Team</option>
					<option value="Data Analyst">Data Analyst</option>
					<option value="Ticketing Agent">Ticketing Agent</option>
				</select>
		
				<input type="submit" name="daftar" value="Daftar">
			</form>
	<?php
		}
		else{
			echo "LOGIN GAGAL!";
			echo "<br>";
			echo "Silahkan Melakukan Login Ulang";
			include "Awal.php";
		}
	?>
	
</body>
</html>