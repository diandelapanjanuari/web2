<?php
	$host = "localhost";
	$dbname = "sisfonews";
	$username = "root";
	$password = " ";
	$db = "";//db adalah objek dari class PDO
	try {
		$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
		catch (PDOException $exception){
		die("Connection error: ".$exception->getMessage());
	}

		$query = $db->prepare("SELECT * FROM berita");//prepare konsepnya hanyalah mempersiapkan bahan bahan yang di perlukan 
		$query->execute();
		$data = $query->fetchAll();?>

	
<?php foreach ($data as $ib) { ?>
	<h1> <?php echo $ib['judul'] ?> </h1>
	<p> <?php echo $ib ['isi'] ?> </p>
 <?php }?>

