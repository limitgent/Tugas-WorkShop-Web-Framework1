<!--membuat controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html')
	}
//-- unutk memanggil helper--//
	public function index(){
		$this->load->view('view_belajar');
	}
//--method halo ini kita pakai unutk menampilkan view_belajar
	public function halo(){
		$data['nama_web'] = "MalasNgoding.com";
		$this->load->view('view_belajar',$data);
	}

}