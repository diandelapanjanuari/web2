<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()//construct adalah fungsi yang pertama dijalankan ketika pertama kali di buat
	{
		include_once 'template/header.php';
		include_once 'template/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/footer.php';
	}
	
}


 ?>