<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		//i
		include_once 'pages/beranda.php';

		$this->end();//this funsinya untuk meghentkan fungsi di kelasnya dan fungsi end ada di view
	}
}



 ?>