<!-- /cls_box_header_wrapper -->
													<div class="cls_box_content_wrapper">
														<div class="cls_box_content_inner">
															<div class="cls_box_content_row cls_first_content">
																<div class="cls-post-listing clearfix">
																	<ul class="non-ajax clearfix">
																		<li class="cls-item-no0 cls-row0 cls-item cls-first-in-line clearfix cls-last-in-line cls-only-in-line">
																			<div class="cls-field-image">
																				<div class="cls-item-value"><a href="<?php echo base_url();?>post/<?php echo $last_new[0]['id_new']?>-<?php echo  mb_strtolower(url_title(removesign($last_new[0]['title_new'])))?>" title="<?php echo $last_new[0]['title_new']?>">
																				<?php 
																				if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/new/'.$last_new[0]['image_new']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/new/'.$last_new[0]['image_new']) && $last_new[0]['image_new']!='')
																				{
																				
																				?>
																				<img width="640" height="360" src="<?php echo base_url();?>file/uploads/new/<?php echo $last_new[0]['image_new'] ?>" class="attachment-full wp-post-image" alt="<?php echo $last_new[0]['title_new']?>" title="<?php echo $last_new[0]['title_new']?>" />
																				<?php } else {?>
																				<img width="640" height="360" src="<?php echo base_url();?>file/uploads/no_image.gif" class="attachment-full wp-post-image" alt="<?php echo $last_new[0]['title_new']?>" title="<?php echo $last_new[0]['title_new']?>" />
																				<?php } ?>
																				</a></div>
																			</div>
																			<div class="group group cls_post_data clearfix ">
																				<div class="cls-field-title">
																					<div class="cls-item-value"><a href="<?php echo base_url();?>post/<?php echo $last_new[0]['id_new']?>-<?php echo  mb_strtolower(url_title(removesign($last_new[0]['title_new'])))?>" title="<?php echo $last_new[0]['title_new']?>"><?php echo $last_new[0]['title_new']?></a></div>
																				</div>
																				<div class="cls-field-intro">
																					<div class="cls-item-value"><?php echo sub_string(loaibohtmltrongvanban($last_new[0]['content_new']),204);?></div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="cls_box_content_row cls_second_content">
																<div class="cls-post-listing clearfix">
																	<ul class="non-ajax clearfix">
																	<?php 
																	$i = 0;
																	foreach($list as $list_new)
																	{
																	
																	?>
																		<li class="cls-item-no<?php echo $i;?> cls-row<?php echo $i;?> cls-item cls-first-in-line clearfix cls-last-in-line cls-only-in-line">
																			<div class="cls-field-image">
																				<div class="cls-item-value"><a href="<?php echo base_url();?>post/<?php echo $list_new['id_new']?>-<?php echo  mb_strtolower(url_title(removesign($list_new['title_new'])))?>" title="<?php echo $list_new['title_new']?>">
																				<?php 
																				if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/new/'.$list_new['image_new']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/new/'.$list_new['image_new']) && $list_new['image_new']!='')
																				{
																				?>
																				<img width="300" height="168" src="<?php echo base_url();?>file/uploads/new/<?php echo $list_new['image_new'] ?>" class="attachment-ths_thumb wp-post-image" alt="<?php echo $list_new['title_new']?>" title="<?php echo $list_new['title_new']?>" />
																				<?php } else {?>
																				<img width="300" height="168" src="<?php echo base_url();?>file/uploads/no_image.gif" class="attachment-ths_thumb wp-post-image" alt="<?php echo $list_new['title_new']?>" title="<?php echo $list_new['title_new']?>" />
																				<?php } ?>
																				
																				</a></div>
																			</div>
																			<div class="group group cls_post_data clearfix ">
																				<div class="cls-field-title">
																					<div class="cls-item-value"><a href="<?php echo base_url();?>post/<?php echo $list_new['id_new']?>-<?php echo  mb_strtolower(url_title(removesign($list_new['title_new'])))?>" title="<?php echo $list_new['title_new']?>"><?php echo $list_new['title_new']?></a></div>
																				</div>
																			</div>
																		</li>
																	<?php $i++;} ?>	
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