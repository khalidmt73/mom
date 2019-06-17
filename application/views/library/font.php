<!------------------------------------------------------------------------------------------------- -->
<div class="btn-group mb-3 btn-group-sm " role="group" aria-label="Basic example">
	<a href="<?php echo base_url('library/pic');?>">
		<button type="button" class="btn btn-light btn-sm">
			<i class="fa fa-file-image-o" aria-hidden="true">&nbsp; الصور</i>
		</button>
	</a>
	<a href="<?php echo base_url('library/font');?>">
		<button type="button" class="btn btn-dark btn-sm">
			<i class="fa fa-font" aria-hidden="true">&nbsp;الخطوط</i>
		</button>
	</a>
	<a href="<?php echo base_url('library/phrase');?>">
		<button type="button" class="btn btn-light btn-sm">
			<i class="fa fa-font" aria-hidden="true">&nbsp;العبارات</i>
		</button>
	</a>
</div>
<!------------------------------------------------------------------------------------------------- -->
<?php 
if($font){
foreach ($font as $valueFont){

?>
<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
	<div class="card-header">
		<h6>الخطوط</h6>
		<h6 lang="en">
			
			<?php echo $valueFont->name.'-'.$valueFont->code;?>
		</h6>
	 </div>	

	<div class="card-body  text-center ">
		<img class="img-fluid card-img-top" alt="image" border="0" src="<?php echo base_url('public/img/font/'.$valueFont->nameFile);?>">
	</div>
	<div class="card-footer">
		<a class="dm" href="#" >
			<i class="fa fa-heart-o fa-lg "  onclick="AjaxSearch('love', 'result', '', 'library/x/love/<?php echo $valueFont->idFont; ?>')"
		   aria-hidden="true" style="cursor:pointer;">
			</i>
		 </a>
		 &nbsp;<?php echo $valueFont->love;?>
		
	   <a class="dm" href="#" >
			<i class="fa fa-eye fa-lg " onclick="AjaxSearch('view', 'result', '', 'library/x/view/<?php echo	
				$valueFont->idFont; ?>')"
				aria-hidden="true" style="cursor:pointer;">
			</i>
		</a> &nbsp;<?php echo $valueFont->view;?>
		<a class="dm" href="#" >
			<i class="fa fa-picture-o fa-lg" onclick="AjaxSearch('view', 'result', '', 'library/x/view/<?php echo 
				$valueFont->idFont; ?>')"
				aria-hidden="true" style="cursor:pointer;">
			</i>
		</a>
	<div id="result" ></div>
		
	</div>
</div>


<script>
document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

</script>

<?php }} ?>