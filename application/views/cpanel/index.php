<?php 
if ($this->session->userdata('userCC') != TRUE) {
    redirect(base_url('login/index'));
}	
?>
<!------------------------------------------------------------------------------------------------- -->
<div class="btn-group mb-3 btn-group-sm " role="group" aria-label="Basic example">
 <a href="<?php echo base_url('filterCpanel/index');?>">
	<button type="button" class="btn btn-light btn-sm">
		<i class="fa fa-plus" aria-hidden="true">&nbsp;فلاتر</i>
	</button>
  </a>
   <a href="<?php echo base_url('picCpanel/index');?>">
	<button type="button" class="btn btn-light btn-sm">
		<i class="fa fa-plus" aria-hidden="true">&nbsp;صور</i>
	</button>
  </a>
 <a href="<?php echo base_url('fontCpanel/index');?>">
	<button type="button" class="btn btn-light btn-sm">
		<i class="fa fa-plus" aria-hidden="true">&nbsp;خطوط</i>
	</button>
  </a>
<a href="<?php echo base_url('phraseCpanel/index');?>">
	<button type="button" class="btn btn-light btn-sm">
		<i class="fa fa-plus" aria-hidden="true">&nbsp;العبارات</i>
	</button>
  </a>
  <a href="<?php echo base_url('mails/index');?>">
	<button type="button" class="btn btn-light btn-sm">
		<i class="fa fa-plus" aria-hidden="true">&nbsp;الرسائل</i>
	</button>
  </a>
</div>
<!-- End file ----------------------------------------------------------------------------------------------------------- -->


