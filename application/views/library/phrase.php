<!------------------------------------------------------------------------------------------------- -->
<div class="btn-group mb-3 btn-group-sm " role="group" aria-label="Basic example">
	<a href="<?php echo base_url('library/pic');?>">
		<button type="button" class="btn btn-light btn-sm">
			<i class="fa fa-file-image-o" aria-hidden="true">&nbsp; الصور</i>
		</button>
	</a>
	<a href="<?php echo base_url('library/font');?>">
		<button type="button" class="btn btn-light btn-sm">
			<i class="fa fa-font" aria-hidden="true">&nbsp;الخطوط</i>
		</button>
	</a>
	<a href="<?php echo base_url('library/phrase');?>">
		<button type="button" class="btn btn-dark btn-sm">
			<i class="fa fa-font" aria-hidden="true">&nbsp;العبارات</i>
		</button>
	</a>
</div>
<!------------------------------------------------------------------------------------------------- -->
<?php 


?>
<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
	<div class="card-header">
		<h6>العبارات</h6>
		<h6 lang="en">
			
		</h6>
	 </div>	

	<div class="card-body  text-center ">
			قريباسيتم توفير عبارات لمناسبتك
		<hr />
		
	
	</div>
	<div class="card-footer">
		
	<div id="result" ></div>
		
	</div>
</div>


<script>
document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

</script>

