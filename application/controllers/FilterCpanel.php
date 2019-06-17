<?php
class FilterCpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
       
    }

    function index() {

		$data['title'] = 'الفلاتر';
		$data2['section'] = $this->model->get('section');
		$this->load->view('header',$data);
		$this->load->view('filterCpanel/index',$data2);
        $this->load->view('footer');  
    }

	 function x() {
		$id = $this->uri->segment(3);
		$where = 'idSection ='.$id;
		$data['title'] = 'الفلاتر';
		$data3['type'] = $this->model->get_where('type',$where);
		$this->load->view('filterCpanel/x',$data3);
    }

	 function upload() {
		
		
		if(isset($_POST['idSection']) AND ($_POST['idSection']!=0) OR ($_POST['type']!=0))
		 {
	
		$idTypePost  = explode('-',$_POST['$type']);
		$idType  = $idTypePost[0];
		$code    = $idTypePost[1];
	    

		$dic = $code[0];     
		
		$where = 'idType ='.$idType;
      	$lastAdd = $this->model->get_where('type',$where);
		foreach ($lastAdd as $valueLastAdd) {
			$nFilter = $valueLastAdd->lastAdd+1;
			$data2['lastAdd'] = $nFilter;
			$this->model->update('type', $data2,'idType',$idType);
			}
		$target_dir  = 'public/img/filters/'.$dic.'/';
		$nameFile    = $code.$nFilter.'.'.basename($_FILES["fileUpload"]["type"]);	
		$target_file = $target_dir .$nameFile  ;

		move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
		
		
		
		$data['idSection'] = $_POST['idSection'];
        $data['idType']    = $idType;
        $data['code']      = $code;
        $data['nFilter']   = $nFilter;
        $data['name']      = $code.$nFilter;
        $data['nameFile']  = $nameFile;
		
	
        $this->model->create('filter', $data);
		
		?>
	       <script langauge="javascript" type="text/javascript">
            <!--
                    function goback()
            {
                location = "<?php echo base_url('filterCpanel/index'); ?>";
            }
            setTimeout('goback()', 150);
            //-->
        </script>
        <?php
		
		}
		$data2['title'] = 'الفلاتر';
		$data2['error'] = '*';
		$data2['section'] = $this->model->get('section');
		$this->load->view('header',$data2);
		$this->load->view('filterCpanel/index',$data2);
        $this->load->view('footer');  
    }
}
