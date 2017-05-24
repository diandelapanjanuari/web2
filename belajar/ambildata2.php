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

	
<table border="1">
	<tr>
		<th>id</th>
		<th>Tanggal</th>
		<th>Judul</th>
	</tr>

<?php foreach ($data as $ib) { ?>
	<tr>
		<td><?php echo $ib['id_berita'] ?></td>
		<td><?php echo $ib['tanggal'] ?></td>
		<td><?php echo $ib['judul'] ?></td>
	</tr>
	
 <?php }?>
</table>

