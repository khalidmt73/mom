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
	<button type="button" class="btn btn-dark btn-sm">
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
		<h6><i class="fa fa-plus" aria-hidden="true">&nbsp;العبارات</i></h6>
	</div>
	<div class="card-body">
		<form action="<?php echo base_url('phraseCpanel/create');?>" method="post" >
			<label class="" >&nbsp; نوع</label>
	<select class="" name="idType" id="idType">
		<option value="0">حدد النوع</option>	
		<?php foreach ($type as $valueType) {?>
			<option value="<?php echo $valueType->idType;?>"><?php echo $valueType->type; ?></option>
		<?php } ?>	
	</select>
			<input type="text" name="phrase" id="phrase"  value="" placeholder="العبارة"        
			class ="form-control form-control-sm" required="required"><br />
			
			<button type="submit" class="btn btn-sm">حفظ
		</form>	
	</div>
	<div class="card-footer">
		<small id="fileHelp" class="form-text text-muted">العبارت</small>
	</div>
</div>
<!-- End file ----------------------------------------------------------------------------------------------------------- -->


