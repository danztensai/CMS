<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
 	{
 		parent::__construct();


 		/* Standard Libraries */
 		$this->load->database();
 		$this->load->helper('url');
 		$this->load->model('Users_model');
 		$this->load->model('Dashboard_model');
 		$this->load->model('Menu_model');
 		$this->load->model('Simpeg_model');
		$this->load->model('Ion_auth_model');
 		/* ------------------ */

 		$this->load->library('grocery_CRUD');
		$this->load->library('ion_auth');
 	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function createUser()
	{
		$phone=$this->input->get('phone');
		$name=$this->input->get('name');
		$instansi=$this->input->get('instansi');
		$nip=$this->input->get('nip');
		$name=$this->input->get('name');
		$pass=$this->input->get('pass');
			$data = array(
				'phone' => $phone,
				'first_name' => $name,
				'last_name' => '',
				'company' =>$instansi,
				'profile_pic' =>'placeholder.png',
				'nip' =>$nip
			);

$arr = explode(' ',trim($name));
	log_message('debug',$arr[0]);

	$arrayInsertinstansi = array();
	$arrayInsertGroup = array();
			$insertId=  $this->Ion_auth_model->register($nip, $pass, $nip.'@gmail.com', $data);
			$instansiId = $this->Simpeg_model->getIdInstansiByName($instansi);
				$arrayPush1 = array('users_id'=>$insertId,'instansi_id'=>$instansiId);
				$arrayPush2 = array('user_id'=>$insertId,'group_id'=>4);
				array_push($arrayInsertGroup,$arrayPush2);
				array_push($arrayInsertinstansi,$arrayPush1);
				$this->Users_model->insertUser_instansiBatch($arrayInsertinstansi);
					$this->Users_model->insertUser_groupsBatch($arrayInsertGroup);

	}
}
