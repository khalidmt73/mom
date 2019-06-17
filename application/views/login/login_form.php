

<div class="card text-white bg-danger mb-3" style="max-width:20rem;">
	<div class="card-header">
		<h5><i class="fa fa-sign-in ">&nbsp;&nbsp;دخول</i></h5>
	</div>

	<div class="card-body align-items-center">
	
	 <form method="post" action="<?php echo base_url('login'); ?>" >
		<div class="container">
			<div class="row row justify-content-md-center">
				<div class="col">
				
				</div>
				<div class="col col-auto">
   					<input type="text" name="userUser" id="userUser"  value="" placeholder="اسم المستخدم"        
					class ="form-control form-control-sm"><br />
					<input type="password" name="userPass" id="userPass"  value="" placeholder="الرقم السري"        
					class ="form-control form-control-sm"><br />
					<button type="submit" class="btn btn-sm">دخول
				</div>
				<div class="col ">
				
				</div>
		    </div>
		</div>

		</form>

	 </div>
	<div class="card-footer">
		
	</div>

</div>
