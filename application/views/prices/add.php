<?php
if ($this->session->userdata('userCC') != TRUE) {
    redirect(base_url('login/index'));
	 echo  $this->session->userdata('userUser');

}
else{

 echo "no"; } 
 ?>


