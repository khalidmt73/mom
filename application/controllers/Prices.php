<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prices extends CI_Controller {

	public function index()
	{
		$id = 2;//عدد زوار صفحة الأسعار
		$where = "id = " . $id;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$id);}

		$data2['title'] = 'الأسعار';
		$data2['counter'] = $counter;
        $this->load->view('header',$data2);
		$this->load->view('prices/index');
        $this->load->view('footer');   
	}
	public function add()
	{
		$data['title'] = 'الأسعار';
        $this->load->view('header',$data);
		$this->load->view('prices/add');
        $this->load->view('footer');   
	}
	
}
