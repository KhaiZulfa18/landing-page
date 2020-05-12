<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('aboutme');
	}

	public function index(){
		$data = array(
			'name' => 'Khai Zulfa',
			'date_of_birth' => '18 July 2002',
			'age' => '18 y.o',
			'site' =>  'mondayy.site'
		);
		$data['mycv'] = $this->aboutme->getCuriculumVitae()->result();

		$this->load->view('myprofile',$data);	
	}
}