<div class="cls_layout_inner col2">
											
											<!-- box lastest videos -->
											<div class="cls_box_wrapper clearfix cls_list_media_in_cat_wrapper cls_list_videos_in_cat_wrapper clearfix">
												<div class="cls_box_inner">
													<div class="cls_box_content_wrapper">
														<div class="cls_box_content_inner">
															<div class="cls_box_content_row cls_first_content">
																<div class="cls-post-listing clearfix">
																	<ul class="non-ajax clearfix">
																	<?php 
																	$i = 0;
																	$first = array('0','3','6','9','12');
																	$last = array('2','5','8','11');
																	foreach($list as $clip)
																	{
																		if(in_array($i,$first))
																		{
																			$class = "cls-first-in-line";	
																		}
																		else
																		{
																			if(in_array($i,$last))
																			{
																				$class = "cls-last-in-line";	
																			}
																			else 
																			{
																				$class = "";
																			}
																		}
																		if(0<=$i and $i<=2)
																		{
																			$row = 0;	
																		}
																		if(3<=$i and $i<=5)
																		{
																			$row = 1;	
																		}
																		if(6<=$i and $i<=8)
																		{
																			$row = 2;	
																		}
																		if(9<=$i and $i<=11)
																		{
																			$row = 3;	
																		}
																		if($i>=12)
																		{
																			$row = 4;	
																		}
																	?>
																	
																		<li class="cls-item-no<?php echo $i;?> cls-row<?php echo $row;?> cls-item <?php echo $class?> clearfix">
																			<div class="cls-field-video_thumb">
																				<div class="cls-item-value"><a class="video_player<?php echo $i;?>" target="_blank" href="https://www.youtube.com/watch?v=<?php echo $clip['code_youtube']?>&feature=youtu.be?rel=0&amp;wmode=transparen" title="<?php echo $clip['title_youtube']?>"><img src="http://img.youtube.com/vi/<?php echo $clip['code_youtube']?>/mqdefault.jpg" alt="<?php echo $clip['title_youtube']?>" title="<?php echo $clip['title_youtube']?> " class=""></a></div>
																			</div>
																			<div class="group group cls_post_data clearfix ">
																				<div class="cls-field-title">
																					<div class="cls-item-value"><a class="video_player<?php echo $i;?>" target="_blank" href="https://www.youtube.com/watch?v=<?php echo $clip['code_youtube']?>&feature=youtu.be?rel=0&amp;wmode=transparen" title="<?php echo $clip['title_youtube']?>"><?php echo $clip['title_youtube']?></a></div>
																				</div>
																			</div>
																		</li>
																		<script>
																				$('.video_layer'+<?php echo $i;?>).colorbox({iframe:true, innerWidth:640, innerHeight:390});
																				</script>												
																		<?php $i++;} ?>										</ul>
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
											<!-- /End box lastest news -->
										</div>