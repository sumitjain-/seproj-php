<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->flexi_auth->is_logged_in()){
			redirect(site_url()."index.php/site/home");
		}else{
			redirect(site_url()."index.php/account/not_logged_in");
		}
	}

	public function home()
	{
		if($this->flexi_auth->is_logged_in()){
			$this->load->view('site/home');
		}else{
			redirect(site_url()."index.php/account/not_logged_in");
		}
	}

	public function register()
	{
		$this->load->view('register');
	}
}

/* End of file accounts.php */
/* Location: ./application/controllers/accounts.php */