<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

	public function index()
	{
		$id = 7;//عدد زوار صفحة الموقع
		$where = "id = " . $id;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$id);}

		$data2['title'] = 'مكتبة التصميم';
        $data2['counter'] = $counter;
        $this->load->view('header',$data2);
		$this->load->view('library/index');
        $this->load->view('footer');   
	}
	public function pic()
	{
		$id =8;


		$where = "id = " . $id;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$id);}

      //-------------------------------------------------------------
		$data2['sec_pic'] = $this->model->get('sec_pic');//اسماء اقسام الصور


		$id           = $this->uri->segment(3);//name filde in db
		if(!$id){$id =4;}
		$whereId         = "idSecPic = ".$id;

		$data2['secPic']  = $this->model->get_where('sec_pic',$whereId);
			
		$data2['pic']     = $this->model->get_where('pic',$whereId);

		
		$data2['title']   = 'الصور';
        $this->load->view('header',$data2);
		$this->load->view('library/pic');
        $this->load->view('footer');   
	}
	
//----------------------------------------------------------------------------------------------------

public function jxLove()
	{
		$id     = $this->uri->segment(3);//name filde in db
		$idPic  = $this->uri->segment(4);//id for idFilter in db
		
		
		$where  = "idPic = " . $idPic;
		$love   = $this->model->get_one('pic',$where);
		foreach ($love as $value){
		$love   = $value->love + 1;
		$data3['love'] = $love;
		
		}
		$this->model->update('pic', $data3,'idPic',$idPic);
		 $id=4;
		$whereIdSecPic = "idSecPic = ".$id;
		$data4['secPic'] = $this->model->get_where('sec_pic',$whereIdSecPic);
		
		$wherePic = "idSecPic = ".$id;
		$data4['pic'] = $this->model->get_where('pic',$wherePic);

		$this->load->view('library/pic',$data4);
		
	}
//----------------------------------------------------------------------------------------------------

	public function font()
	{
		$data2['title'] = 'الخطوط';
		$data2['font'] = $this->model->get('font');
        $this->load->view('header',$data2);
		$this->load->view('library/font');
        $this->load->view('footer');   
	}
//----------------------------------------------------------------------------------------------------

	public function phrase()
	{
		$data2['title'] = 'العبارات';
        $this->load->view('header',$data2);
		$this->load->view('library/phrase');
        $this->load->view('footer');   
	}

	
}
