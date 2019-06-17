<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filters extends CI_Controller {

	public function index()
	{
		$idSection = $this->uri->segment(3);
		$idType    = $this->uri->segment(4);


		$where = "id = " . $idSection;
		$counter = $this->model->get_one('counter',$where);
		foreach ($counter as $value){
		$counter = $value->counter + 1;
		
		$data['counter'] = $counter;
	    $this->model->update('counter', $data,'id',$idSection);}


		$data2['title'] = 'فلاتر الزوجات';
		$data2['counter'] = $counter;
		
		$whereSection = "idSection = ".$idSection;
		$data2['section'] = $this->model->get_where('section',$whereSection);
		
		$whereType = "idSection = ".$idSection;
		$data2['type'] = $this->model->get_where('type',$whereType);

		if ($idType == 0){
				$whereFilter = "idSection = ".$idSection;
			}
		else{
				$whereFilter = "idType = ".$idType;
			}
		$data2['filter'] = $this->model->get_where('filter',$whereFilter);
       
		$this->load->view('header',$data2);
		$this->load->view('filters/index');
        $this->load->view('footer');   	
	}

	 public function x() {
		$id            = $this->uri->segment(3);//name filde in db
		$idFilter      = $this->uri->segment(4);//id for idFilter in db
		
		
		$where = "idFilter = " . $idFilter;
		$love = $this->model->get_one('filter',$where);
		foreach ($love as $value){
		$love = $value->love + 1;
		$data3['love'] =$love;
		
		}
		$this->model->update('filter', $data3,'idFilter',$idFilter);

    }
	
}
