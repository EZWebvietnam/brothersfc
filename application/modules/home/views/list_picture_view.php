<div class="cls_layout_inner col2" style="min-height: 693px;">
	
	<!-- box images news -->
	<div class="cls_box_wrapper clearfix cls_list_media_in_cat_wrapper cls_list_images_in_cat_wrapper clearfix">
		<div class="cls_box_inner">
			<div class="cls_box_content_wrapper">
				<div class="cls_box_content_inner">
					<div class="cls_box_content_row cls_first_content">
						<div class="cls-post-listing clearfix">
							<ul class="non-ajax clearfix">
							<?php 
							foreach($list as $picture)
							{
							
							?>
								<li class="cls-item-no0 cls-row0 cls-item cls-first-in-line clearfix">
									<div class="cls-field-image">
										<div class="cls-item-value"><a target="_blank" href="<?php echo base_url();?>file/uploads/fust_img/<?php echo $picture['image']?>" title="<?php echo $picture['title_image']?>">
										<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/fust_img/'.$picture['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/fust_img/'.$picture['image']) && $picture['image']!='')
										{
										
										?>
										<img width="300" height="167" src="<?php echo base_url();?>file/uploads/fust_img/<?php echo $picture['image']?>" class="attachment-ths_thumb wp-post-image" alt="<?php echo $picture['title_image']?>" title="<?php echo $picture['title_image']?>">
										<?php } else {?>	
										<img width="300" height="167" src="<?php echo base_url();?>file/uploads/no_image.gif" class="attachment-ths_thumb wp-post-image" alt="<?php echo $picture['title_image']?>" title="<?php echo $picture['title_image']?>">
										<?php } ?>
										</a></div>
									</div>
									<div class="group group cls_post_data clearfix ">
										<div class="cls-field-title">
											<div class="cls-item-value"><a target="_blank" href="<?php echo base_url();?>file/uploads/fust_img/<?php echo $picture['image']?>" title="<?php echo $picture['title_image']?>"><?php echo $picture['title_image']?></a></div>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /cls_box_content_wrapper -->
			<div class="cls_box_footer_wrapper">
														<div class="cls_box_footer_inner">
															<div class='cls-pagination'>
																<script type="text/javascript">
																	var url = window.location.href;
																	var res = url.split("/page/");
														                             jQuery(document).ready( function() {
														                                    jQuery('.cls-pagination').html(LoadPagging(<?php echo $page?>, <?php echo $total?>,res[0],<?php echo $total_page?>));
														                                });
														                            </script>
															</div>
														</div>
													</div>
			<!--/cls_box_footer_wrapper -->
		</div>
		<!--/cls_box_inner -->
	</div>
	<!--/cls_box_wrapper -->
	<!-- /box images -->
</div>
