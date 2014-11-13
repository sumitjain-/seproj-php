<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Course_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function insert_course($new_course)
    {
    	// new course added as an associative array
    	$this->db->insert('courses', $new_course);
    }

    
}