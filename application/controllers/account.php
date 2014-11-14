<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('flexi_auth');
	}
	
	public function index()
	{
		$this->load->view('');
	}

	public function not_logged_in()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$data = $this->flexi_auth->login($user, $pass);

		if($data){
			redirect(site_url()."index.php/site/home");
		}else{
			redirect(site_url()."index.php/account/not_logged_in");
		}
	}

	public function logout()
	{
		$this->flexi_auth->logout();

		redirect(site_url()."index.php/account/not_logged_in");
	}

	// public function reg()
	// {
	// 	$data = new StdClass();
	// 	$data->user = $this->input->post('username');
	// 	$data->email = $this->input->post('email');
	// 	$data->pass = $this->input->post('password');

	// 	$insert = $this->flexi_auth->insert_user($data->email, $data->user, $data->pass, [], 1, TRUE);
	// 	if($insert){
	// 		echo "Successfully created user.";
	// 	}else {
	// 		echo "Err: Something went wrong.";
	// 	}

	// }
}

/* End of file accounts.php */
/* Location: ./application/controllers/accounts.php */