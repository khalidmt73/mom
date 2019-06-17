<?php
class Cpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
       
    }

    function index() {

		$data['title'] = 'لوحة التحكم';
		$this->load->view('header',$data);
		$this->load->view('cpanel/index');
        $this->load->view('footer');  
    }
}
