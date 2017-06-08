<?php 

/**
* 
*/
class View1
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()//construct adalah fungsi yang pertama dijalankan ketika pertama kali di buat
	{
		include_once 'template/navigasi.php';
		include_once 'template/header.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/sidebar.php';
		include 'template/footer.php';
	}
	
}


 ?>