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
		<button type="button" class="btn btn-dark btn-sm">
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
<!------------------------------------------------------------------------------------------------- -->
<br />
<div class="card text-white bg-dark mb-3" style="max-width:20rem;">
	<div class="card-header">
		<h6><i class="fa fa-plus" aria-hidden="true">&nbsp;الخطوط</i></h6>
	</div>
	<div class="card-body">
		<form action="<?php echo base_url('fontCpanel/upload');?>" method="post" enctype="multipart/form-data">
			<input type="radio" id="idSecFont" name="idSecFont" value="1" /> عربي 
			<input type="radio" id="idSecFont" name="idSecFont" value="2" /> English
			<br /><br />
			<input type="text" name="name" id="name"  value="" placeholder="اسم الخط"        
			class ="form-control form-control-sm" required="required"><br />
			<input type="text" name="code" id="code"  value="" placeholder="رمز الخط"        
					class ="form-control form-control-sm" required="required"><br />
		  <br />
			<div class="form-group">
			<input type="file" class="form-control-file" required="required" name="fileUpload" id="fileUpload">
			</div>
			<button type="submit" class="btn btn-sm">حفظ
		</form>	
	</div>
	<div class="card-footer">
		<small id="fileHelp" class="form-text text-muted">رفع صورة</small>
	</div>
</div>
<!-- End file ----------------------------------------------------------------------------------------------------------- -->


