<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$id = 6;//عدد زوار صفحة الموقع
		$where = "id = " . $id;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$id);}

		$data2['title'] = 'راسلنا';
        $data2['counter'] = $counter;
        $this->load->view('header',$data2);
		$this->load->view('email/index');
        $this->load->view('footer');   
	}
	
}
