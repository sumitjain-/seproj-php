<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngviews extends CI_Controller {

	public function index($value = 'default')
	{
		if($this->flexi_auth->is_logged_in()){
			$this->load->view('ngviews/'.$value);
		}else{
			echo "Forbidden.";
		}
	}

}

/* End of file accounts.php */
/* Location: ./application/controllers/ngviews
.php */