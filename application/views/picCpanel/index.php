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
		<button type="button" class="btn btn-dark btn-sm">
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
  <a href="<?php echo base_url('mailCpanel/index');?>">
	<button type="button" class="btn btn-light btn-sm">
		<i class="fa fa-plus" aria-hidden="true">&nbsp;الرسائل</i>
	</button>
  </a>
</div>
<!------------------------------------------------------------------------------------------------- -->
<br />
<div class="card text-white bg-dark mb-3" style="max-width:20rem;">
	<div class="card-header">
		<h6><i class="fa fa-plus" aria-hidden="true">&nbsp;الصور</i></h6>
	</div>
	<div class="card-body">
		<form action="<?php echo base_url('picCpanel/upload');?>" method="post" enctype="multipart/form-data">
			<label class="" for="">قسم</label>
			<select class="" name="idSecPic" id="idSecPic">
				<option value="0">حدد القسم</option>	
				<?php foreach ($secPic as $valuesecPic) {?>
					<option  <?php if(($valuesecPic->idSecPic) == 12)echo('selected="selected"')?> value="<?php echo $valuesecPic->idSecPic;?>" ><?php echo $valuesecPic->nameAr; ?></option>
				<?php } ?>	
			</select>
			<select class="" name="color" id="color">
			<option value ="ko" selected="selected"/>koktel</option>
			<option value ="bl" style="background:blue;" />blue</option>
			<option value ="or" style="background:orange;" />orange</option>
			<option value ="pi" style="background:pink;" />pink</option>
			<option value ="pu" style="background:purple;" />purple</option>
			<option value ="re" style="background:red;" />red</option>
			<option value ="wh" style="background:white;" />white</option>
			<option value ="ye" style="background:yellow;" />yellow</option>
			</select>
			<div class="form-group">
				<br />
				<input type="file" class="form-control-file"required="required" name="fileUpload" id="fileUpload" aria-describedby="fileHelp">
			</div>
			<button type="submit" class="btn btn-sm">حفظ
		</form>	
	</div>
	<div class="card-footer">
		<small id="fileHelp" class="form-text text-muted">رفع الصورة</small>
	</div>
</div>
<!-- End file ----------------------------------------------------------------------------------------------------------- -->


