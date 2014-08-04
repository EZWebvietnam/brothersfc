<meta charset='utf-8'/>
<form method="POST">
<select name="id_new">
	<?php 
	foreach($list_new as $new)
	{
	?>
	<option value="<?php echo $new['id_new']?>"><?php echo $new['title_new']?></option>
	<?php } ?>
</select>
<input type="submit" value="Post lên fanpage"/>
</form>