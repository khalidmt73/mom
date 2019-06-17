<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function index()
	{
		$id = 3;//عدد زوار صفحة الموقع
		$where = "id = " . $id;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$id);}

		$data2['title'] = 'كيف تحدد موقعك';
        $data2['counter'] = $counter;
        $this->load->view('header',$data2);
		$this->load->view('location/index');
        $this->load->view('footer');   
	}
	
}
