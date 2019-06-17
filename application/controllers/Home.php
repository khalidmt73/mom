<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$id = 1;//عداد الزوار للصفحة الرئيسية
		$where = 'id ='.$id;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$id);}
	
		$data2['title'] = 'الرئيسية';
		$data2['counter'] = $counter;
		$data2['section'] = $this->model->get('section');

		$this->load->view('header',$data2);
		$this->load->view('home/index');
        $this->load->view('footer');   
	}
	
}
