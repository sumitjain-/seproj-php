<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	
	public function create_course()
	{
		if($this->flexi_auth->is_logged_in()){
			$data = array(
				'course_name' => $this->input->post('course_name')
				,'teacher_name' => $this->input->post('teacher_name')
				,'timings' => $this->input->post('timings')
				,'start_date' => $this->input->post('start_date')
				,'end_date' => $this->input->post('end_date')
				,'schedule' => $this->input->post('schedule')
				);

			$this->load->model('course_model');
			$this->course_model->insert_course($data);
		}

		$this->load->view("site/home", array("view_name"=> "create_course", "message" => "New course created"));
	}
}

/* End of file accounts.php */
/* Location: ./application/controllers/accounts.php */