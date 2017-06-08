<?php 

require_once 'View1.php';
/**
* 
*/
class Tampilan extends View1
{
	
	public function tampilkanBuku()
	{
		include_once 'model/Buku.php';
		$Buku = new Buku();

		$isi_halaman = $Buku->ambilBuku();
		include_once 'pages/beranda1.php';
		$this->end();//this funsinya untuk meghentkan fungdi di kelasnya dan fungsi end ada di view
	}
}


 ?>