<?php
class PhraseCpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
       
    }

    function index() {

		$data['title'] = 'العبارات';
		$data2['type'] = $this->model->get('type');
		$this->load->view('header',$data);
		$this->load->view('phraseCpanel/index',$data2);
        $this->load->view('footer');  
    }

	 function create() {
		$idType         = $_POST['idType'];
		$phrase         = $_POST['phrase'];
	
      
        $data['idType'] = $idType;
        $data['phrase'] = $phrase;
		
        $this->model->create('phrase', $data);
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
