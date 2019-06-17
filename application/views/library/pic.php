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


<!--------------------------------------------------------------------------------------- -->
<div class="btn-group mb-3 btn-group-sm " role="group" aria-label="Basic example">
	<a href="<?php echo base_url('library/pic');?>">
		<button type="button" class="btn btn-dark btn-sm">
			<i class="fa fa-file-image-o" aria-hidden="true">&nbsp; الصور</i>
		</button>
	</a>
	<a href="<?php echo base_url('library/font');?>">
		<button type="button" class="btn btn-light btn-sm ">
			<i class="fa fa-font" aria-hidden="true">&nbsp;الخطوط</i>
		</button>
	</a>
	<a href="<?php echo base_url('library/phrase');?>">
		<button type="button" class="btn btn-light btn-sm">
			<i class="fa fa-book" aria-hidden="true">&nbsp;العبارات</i>
		</button>
	</a>
</div>
<!------------------------------------------------------------------------------------------------- -->
	<div class="">
		<ul>
			<li><button id="buttonId1" style="background-color:#fff;">&nbsp;</button></li>
			<li><button id="buttonId2" style="background-color:#000;">&nbsp;</button></li>
			<li><button id="buttonId3" style="background-color:#e0accf;">&nbsp;</button></li>
			<li><button id="buttonId4" style="background-color:#9c9999;">&nbsp;</button></li>
			<li><button id="buttonId5" style="background-color:#626262;">&nbsp;</button></li>
		<ul>
<br />
	<?php
	$i =1;
	foreach ($sec_pic as $valueSec_pic){
	if ($i == 5){echo "<br/>";$i=1;} 	
	?>
	<a href="<?php echo base_url('library/pic/'.$valueSec_pic->idSecPic);?>">
		<button type="button" class="btn btn-light btn-sm">
			<?php echo $valueSec_pic->nameAr."(".$valueSec_pic->lastAdd.")"; ?>
		</button>
	</a>
	<?php $i++; } ?>
</div>
<?php
if($pic){
foreach ($pic as $valuePic){
foreach ($secPic as $valueSecPic);

?>
<div class="card  mb-3" style="max-width: 20rem;">
	<div class="card-header">
		<h6><?php echo $valueSecPic->nameAr;?></h6>
		<h6 lang="en">
			
			<?php echo $valuePic->name; ?>
		</h6>
	 </div>	

	<div class="card-body crdBodyBgPic text-center ">
		<img class="img-fluid card-img-top img-thumPic bg-color" alt="image" border="1" src="<?php echo base_url('public/img/pic/'.$valueSecPic->nameEn.'/'.$valuePic->nameFile);?>">
	</div>
	<div class="card-footer">
		<a class="pic" href="#" >
			<i class="fa fa-heart-o fa-lg "  onclick="AjaxSearch('love', 'result', '', 'library/jxLove/love/<?php echo $valuePic->idPic; ?>')"
		   aria-hidden="true" style="cursor:pointer;">
			</i>
		 </a>
		 &nbsp;<?php echo $valuePic->love;?>
	   <a class="pic" href="#" >
			<i class="fa fa-eye fa-lg " onclick="AjaxSearch('view', 'result', '', 'filters/x/view/<?php echo	
				$valuePic->idPic; ?>')"
				aria-hidden="true" style="cursor:pointer;">
			</i>
		</a> &nbsp;<?php echo $valuePic->view;?>
		<a class="pic" href="#" >
			<i class="fa fa-picture-o fa-lg" onclick="AjaxSearch('view', 'result', '', 'filters/x/view/<?php echo 
				$valuePic->idPic; ?>')"
				aria-hidden="true" style="cursor:pointer;">
			</i>
		</a>
	<div id="result" ></div>
		
	</div>
</div>


<script>
document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

</script>

<?php }
} ?>