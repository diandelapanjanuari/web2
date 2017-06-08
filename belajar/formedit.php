<?php 

$id = $_GET['id'];
echo $id;

$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = ' ';
$db = '';


try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id"); //melewatkan nilai adalah denga titik dua kemusdian diikuti nama parameternya. kemudian di ikat dengan bindparam menggnakan fariabel id
	$stmt->bindparam(":id",$id);
	$stmt->execute();
	$data = $stmt->fetch(); //tranfer dalam bentk array "FETCH" kalau pakai fetch alla makaka gunakan forcit
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}

try {
	$stmt2 = $db->prepare("SELECT * FROM kategori"); 
	$stmt2->bindparam(":id",$id);
	$stmt2->execute();
	$data2 = $stmt2->fetchAll(); 
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}


?>


 <form action="ubah_berita.php?id=<?php echo $id ?>" method="POST">
 	
 		<label for="judul">Judul</label><br><br>
 		<input type="text" name="judul" value="<?php echo $data['judul']; ?>" name="judul"><br><br>
 	
 		<label for="isi">Isi</label><br>
 		<textarea name="isi" cols="100" rows="10">
 			"<?php echo $data['isi']; ?>"
 		</textarea><br><br>
 	
 	<label for="kategori">kategori</label><br>
 		<select name="kategori" id="kategori">
		 	<?php foreach ($data2 as $kat): ?>
			<option value="<?php echo $kat['id_kategori'] ?>"
			<?php 
			if ($kat['id_kategori']==$data['kategori_id']) echo "selected"; 
			?>
			><?php echo $kat['nama_kategori'] ?></option>	
			<?php endforeach ?>
 		</select><br><br>
 	
 	<input type="submit" value="Submit">
 </form>
