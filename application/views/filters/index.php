<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
ul li{
  display: inline;
}
</style>
<script>
$(document).ready(function(){
    $("#buttonId1").click(function(){$(".bg-color").css("background-color", "#fff");});
    $("#buttonId2").click(function(){$(".bg-color").css("background-color", "#000");});
    $("#buttonId3").click(function(){$(".bg-color").css("background-color", "#e0accf");});
    $("#buttonId4").click(function(){$(".bg-color").css("background-color", "#9c9999");});
    $("#buttonId5").click(function(){$(".bg-color").css("background-color", "#626262");});
});
</script>


<?php

foreach ($section as $valueSection);
?>
<div class="btn-group mb-3 btn-group-sm " role="group" aria-label="Basic example">
 <a href="<?php echo base_url('filters/index/'.$valueSection->idSection.'/0');?>">
	<button type="button" class="btn btn-light btn-sm">
		<small>الكل</small>
	</button>
  </a>

<?php
foreach ($type as $valueType){
?>
 <a href="<?php echo base_url('filters/index/'.$valueType->idSection.'/'.$valueType->idType);?>">
	<button type="button" class="btn btn-light btn-sm">
		<small><?php echo $valueType->type ?></small>
	</button>
  </a>
<?php }?>

</div>
<ul>
<li><button id="buttonId1" style="background-color:#fff;">&nbsp;</button></li>
<li><button id="buttonId2" style="background-color:#000;">&nbsp;</button></li>
<li><button id="buttonId3" style="background-color:#e0accf;">&nbsp;</button></li>
<li><button id="buttonId4" style="background-color:#9c9999;">&nbsp;</button></li>
<li><button id="buttonId5" style="background-color:#626262;">&nbsp;</button></li>
<li><button id="buttonId5" style="background-color:#fafafa;">&nbsp;</button></li>
<ul>
<br />
<?php
if($filter){
foreach ($filter as $valueFilter){
?>


<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
	<div class="card-header">
		<h6><?php echo $valueSection->section;?></h6>
		<h6 lang="en">
			<?php foreach ($type as $valueType){if ($valueFilter->idType == $valueType->idType) 
			echo  $valueType->type;} ?>
			-
			<?php echo $valueFilter->name; ?>
		</h6>

	 </div>	

	<div class="card-body text-center ">
		
		<img class="img-fluid card-img-top  bg-color" alt="image" border="1" src="<?php echo base_url('public/img/filters/'.$valueSection->code.'/'.$valueFilter->nameFile);?>">
	</div>
	<div class="card-footer">
		<a class="dm" href="#" >
			<i class="fa fa-heart-o fa-lg "  onclick="AjaxSearch('love', 'result', '', 'filters/x/love/<?php echo $valueFilter->idFilter; ?>')"
		   aria-hidden="true" style="cursor:pointer;">
			</i>
		 </a>
		 &nbsp;<?php echo $valueFilter->love;?>
		<a class="dm" href="#" >
			<i class="fa fa-download fa-lg " onclick="AjaxSearch('download', 'result', '', 'filters/x/download/<?php echo $valueFilter->idFilter; ?>')"
		    aria-hidden="true" style="cursor:pointer;">
			</i>
	   </a>&nbsp;<?php echo $valueFilter->download;?>
	   <a class="dm" href="#" >
			<i class="fa fa-eye fa-lg " onclick="AjaxSearch('view', 'result', '', 'filters/x/view/<?php echo	
				$valueFilter->idFilter; ?>')"
				aria-hidden="true" style="cursor:pointer;">
			</i>
		</a> &nbsp;<?php echo $valueFilter->view;?>
		<a class="dm" href="#" >
			<i class="fa fa-picture-o fa-lg" onclick="AjaxSearch('view', 'result', '', 'filters/x/view/<?php echo 
				$valueFilter->idFilter; ?>')"
				aria-hidden="true" style="cursor:pointer;">
			</i>
		</a>
	<div id="result" ></div>
		
	</div>
</div>

<?php }

} ?>