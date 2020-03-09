<!-- sintak di bawah ini di gunakan untuk mengaktifkan helper-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}

	public function index(){
		$this->load->view('welcome');
	}
}