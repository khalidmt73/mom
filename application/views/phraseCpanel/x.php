<label class="" >&nbsp; نوع</label>
	<select class="" name="$type" id="$type">
		<option value="0">حدد النوع</option>	
		<?php foreach ($type as $valueType) {?>
			<option value="<?php echo $valueType->idType.'-'.$valueType->code; ?>"><?php echo $valueType->type; ?></option>
		<?php } ?>	
	</select>
