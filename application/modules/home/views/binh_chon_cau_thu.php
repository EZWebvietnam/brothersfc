<link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/colorbox.css" />
<script src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/jquery.colorbox.js"></script>
<style>
	#cboxLoadedContent
	{
		background:#fff !important;	
	}
	
</style>
<script>
	jQuery(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements

				jQuery(".ajax").colorbox();
			});

	
</script>
	<div class="cls_layout_inner col2">
											<!-- box teams -->
											<div class="cls_box_header_wrapper clearfix">
												<div  class="cls_box_header_inner_left">
													<div class="cls_box_header_inner_right">
														<div class="cls_box_header_left_wrapper">
															<div class="cls_box_header_left_inner">Bình chọn cầu thủ xuất sắc tháng <?php $m = date('m');echo $m-1;?></div>
														</div>
														<div class="cls_box_header_right_wrapper">
															<div class="cls_box_header_right_inner">
															</div>
														</div>
													</div>
												</div>
												<!-- /cls_box_header_inner -->
											</div>
											<!-- /cls_box_header_wrapper -->
											
											<form method="post" class="bbp-login-form">
	<fieldset class="bbp-form">
		<legend>Bình chọn cầu thủ xuất sắc tháng <?php echo date('m-1');?></legend>
		<?php 
		foreach($list_mem as $mem)
		{
		
		?>
		<div class="bbp-remember-me">
			<input type="radio" name="radio" value="<?php echo $mem['id']?>" id="rememberme" tabindex="103">
			<label for="rememberme"><?php echo $mem['full_name']?></label>
		</div>
		<?php } ?>
		<div class="bbp-submit-wrapper">
			<button type="submit" tabindex="104" name="user-submit" class="button submit user-submit">Bình chọn</button>
		
		</div>
	</fieldset>
</form>
<?php 
$time = date('Y').'-'.date('m').'-20 00:00:00';
		$this->load->model('users');
		if(strtotime('now')>strtotime($time))
		{
		?> 
		<p><a class='ajax' href="<?php echo base_url();?>doi-bong/ket-qua-bau-chon" title="Homer Defined">Kết quả</a></p>
		<?php
		}
?>

											<!-- /End teams -->
											
										</div>
										