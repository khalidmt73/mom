<?php
class FontCpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
       
    }

    function index() {

		$data['title'] = 'الخطوط';
		$data2['secPic'] = $this->model->get('sec_pic');
		$this->load->view('header',$data);
		$this->load->view('fontCpanel/index',$data2);
        $this->load->view('footer');  
    }

	 function upload() {
		$idSecFont = $_POST['idSecFont'];
		$where = 'idSecFont = '.$idSecFont;
      	$lastAdd = $this->model->get_where('sec_font',$where);
		foreach ($lastAdd as $valueLastAdd) {
			$nFont = $valueLastAdd->lastAdd+1;
			$data2['lastAdd'] = $nFont;
			$this->model->update('sec_font', $data2,'idSecFont',$idSecFont);
			}
		$target_dir  = 'public/img/font/';
		$nameFile    = $_POST['code'].'.'.basename($_FILES["fileUpload"]["type"]);	
		$target_file = $target_dir .$nameFile  ;
		
		move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
	
        $data['idSecFont'] = $_POST['idSecFont'];
        $data['code']      = $_POST['code'];
        $data['name']      = $_POST['name'];
        $data['nFont']     = $nFont;
        $data['nameFile']  = $nameFile;
		
        $this->model->create('font', $data);
      	?>
	       <script langauge="javascript" type="text/javascript">
            <!--
                    function goback()
            {
                location = "<?php echo base_url('fontCpanel/index'); ?>";
            }
            setTimeout('goback()', 150);
            //-->
        </script>
    <?php
	 }
}
