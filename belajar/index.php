<!DOCTYPE html>
<html>
<head>
	<title> Penggabungan</title>
</head>
<body>
	<h1> Judul Halaman</h1>
	<?php 
		include "tabel.php"; //mengkopikan halaman file lain ke dalam file ini
							//tetatap akan menjalankan fungsinya walaupun fungsi itu tidak ditemukan maksutnya dia tidak akan membaalkan perintah lain
		require "gambar.php"; //klau tidak ditemukakan maka dian akan membatalkan fungsinya dan fungsi di bawahnya
	 ?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<?php 
		include_once "tabel.php"; //tidak akan muncull dua kali agar side bara tidak diingklut lebuh dari sekali
	 ?>

</body>
</html>