<?php
	$host = "localhost";
	$dbname = "dian_buku";
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

		$query = $db->prepare("SELECT * FROM Buku");//prepare konsepnya hanyalah mempersiapkan bahan bahan yang di perlukan 
		$query->execute();
		$data = $query->fetchAll();?>

	
<table border="1">
	<tr>
		<th>judul</th>
		<th>penulis</th>
	</tr>

<?php foreach ($data as $bk) { ?>
	<tr>
		<td><?php echo $bk['id_buku'] ?></td>
		<td><?php echo $bk['judul'] ?></td>
		<td><?php echo $bk['penulis'] ?></td>
	</tr>
	
 <?php }?>
</table>

