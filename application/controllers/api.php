<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	
	public function create_course()
	{
		$data =array(
			'teacher_name' => $this->input->post('teacher_name')
			,'timings' => $this->input->post('timings')
			,'start_date' => $this->input->post('start_date')
			,'end_date' => $this->input->post('end_date')
			,'course_date' => $this->input->post('course_date')
			);

		$this->load->model('course_model');
		$this->course_model->insert_course($data);
	}
}

/* End of file accounts.php */
/* Location: ./application/controllers/accounts.php */