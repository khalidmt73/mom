<?php
class PicCpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
       
    }

    function index() {

		$data['title'] = 'الصور';
		$data2['secPic'] = $this->model->get('sec_pic');
		$this->load->view('header',$data);
		$this->load->view('picCpanel/index',$data2);
        $this->load->view('footer');  
    }
	
	function upload() {
		
		if(isset($_POST['idSecPic']) AND ($_POST['idSecPic']!=0))
		 {
	
		     
		$idSecPic = $_POST['idSecPic'];
		$where = 'idSecPic ='.$_POST['idSecPic'];
      	$lastAdd = $this->model->get_where('sec_pic',$where);
		foreach ($lastAdd as $valueLastAdd) {
			$nPic = $valueLastAdd->lastAdd+1;
			$data2['lastAdd'] = $nPic;
			$this->model->update('sec_pic', $data2,'idSecPic',$idSecPic);
			$code = $valueLastAdd->code;
			$dic = $valueLastAdd->nameEn;
			}
		
		$target_dir  = 'public/img/pic/'.$dic.'/';
		$color = $_POST['color'];
		if ($_POST['idSecPic'] == 5){
		$nameFile    = $code.$color.$nPic.'.'.basename($_FILES["fileUpload"]["type"]);	
		}
		else{
		$nameFile    = $code.$nPic.'.'.basename($_FILES["fileUpload"]["type"]);	
		}
		$target_file = $target_dir .$nameFile  ;

		move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
		
		
		
		$data['idSecPic']  = $_POST['idSecPic'];
        $data['code']      = $code;
        $data['nPic']      = $nPic;
		if ($_POST['idSecPic'] == 5){
        $data['name']      = $code.$color.$nPic;
		}
		else{
        $data['name']      = $code.$nPic;
		}
        $data['nameFile']  = $nameFile;
		
        $this->model->create('pic', $data);
		
		?>
	       <script langauge="javascript" type="text/javascript">
            <!--
                    function goback()
            {
                location = "<?php echo base_url('picCpanel/index'); ?>";
            }
            setTimeout('goback()', 150);
            //-->
        </script>
        <?php
		
		}
		
    }
}
