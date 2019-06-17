<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fltr extends CI_Controller {

	public function index()
	{
		
		$data2['title'] = 'تصميم';
        $this->load->view('header',$data2);
		$this->load->view('fltr/index');
        $this->load->view('footer');   
	}
		
}
