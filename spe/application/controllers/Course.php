<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    } 

	public function index()
	{	
		$this->load->view('Course/index');
	}
}