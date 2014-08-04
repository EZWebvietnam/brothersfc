	<div class="cls_layout_inner col2">
											<!-- box teams -->
											<div class="cls_box_header_wrapper clearfix">
												<div  class="cls_box_header_inner_left">
													<div class="cls_box_header_inner_right">
														<div class="cls_box_header_left_wrapper">
															<div class="cls_box_header_left_inner">Danh sách</div>
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
											<ul class="nav nav-tabs" id="myTab">
												<li><a data-toggle="tab" href="#team-19">FUST</a></li>
												<!--<li><a data-toggle="tab" href="#team-20">TSN2</a></li>
												<li><a data-toggle="tab" href="#team-22">TSN Trẻ</a></li>
												<li><a data-toggle="tab" href="#team-24">TSB</a></li>-->
											</ul>
											<div class="tab-content">
												<div class="tab-pane" id="team-19">
													<div class="cls_team_info_wrapper">
														<div class="cls_team_info_inner">
															<div class="cls-field-image">
																<div class="cls-item-value"></div>
															</div>
															<div class="cls-field-content">
																<div class="cls-item-value">
																	<div id="attachment_3839" style="width: 510px" class="wp-caption aligncenter">
																		<a href="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10325561_1445071755745876_3058295760812569024_n.jpg"><img class="size-medium wp-image-3839" alt="Futsal United Saigon" src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10325561_1445071755745876_3058295760812569024_n.jpg" width="500" height="281" /></a>
																		<p class="wp-caption-text">Futsal United Saigon</p>
																	</div>
																</div>
															</div>
														</div>
														<!--End cls_team_info_inner-->
													</div>
													<!--End cls_team_info_wrapper-->
													<div class="cls_box_wrapper clearfix cls_list_players_in_position clearfix">
														<div class="cls_box_inner">
															<div class="cls_header_title_wrapper clearfix">
																<h2>Huấn Luyện Viên</h2>
															</div>
															<!-- /cls_header_title_wrapper -->
															<div class="cls_box_content_wrapper">
																<div class="cls_box_content_inner">
																	<div class="cls_box_content_row cls_first_content">
																		<div class="cls-post-listing clearfix">
																			<ul class="non-ajax clearfix">
																			<?php
																			$i = 0; 
																			$j = 0;
																			foreach($list_user_1 as $h_l_v)
																			{
																				if($i == 0)
																				{
																					$class ="cls-first-in-line";
																				}
																				else 
																				{
																					if($i == 2)
																					{
																						$class ="cls-last-in-line";
																					}	
																					else
																					{
																						$class ="";
																					}
																				}
																			?>
																				<li class="cls-item-no<?php echo $j;?> cls-row0 cls-item <?php echo $class;?> clearfix">
																					<div class="cls-field-image">
																						<div class="cls-item-value"><a target="_blank" href="https://www.facebook.com/<?php echo $h_l_v['login_id']?>" title="<?php echo $h_l_v['full_name']?>"><img width="300" height="168" src="http://graph.facebook.com/<?php echo $h_l_v['login_id']?>/picture?type=large" class="attachment-ths_thumb wp-post-image" alt="<?php echo $h_l_v['full_name']?>" title="<?php echo $h_l_v['full_name']?>" /></a></div>
																					</div>
																					<div class="group group cls_post_data clearfix ">
																						<div class="cls-field-title">
																							<div class="cls-item-value"><a target="_blank" href="https://www.facebook.com/<?php echo $h_l_v['login_id']?>" title="<?php echo $h_l_v['full_name']?>"><?php echo $h_l_v['full_name']?></a></div>
																						</div>
																					</div>
																				</li>
																				<?php 
																					if($i<2)
																					{
																					$i++;
																					}
																					else
																					{
																						$i = 0;	
																					}
																					$j++;
																				} ?>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<!-- /cls_box_content_wrapper -->
															<div class="cls_box_footer_wrapper">
																<div class="cls_box_footer_inner">
																</div>
															</div>
															<!--/cls_box_footer_wrapper -->
														</div>
														<!--/cls_box_inner -->
													</div>
													<!--/cls_box_wrapper -->
													<div class="cls_box_wrapper clearfix cls_list_players_in_position clearfix">
														<div class="cls_box_inner">
															<div class="cls_header_title_wrapper clearfix">
																<h2>Thủ môn</h2>
															</div>
															<!-- /cls_header_title_wrapper -->
															<div class="cls_box_content_wrapper">
																<div class="cls_box_content_inner">
																	<div class="cls_box_content_row cls_first_content">
																		<div class="cls-post-listing clearfix">
																			<ul class="non-ajax clearfix">
																				<?php
																				$j = 0;
																			$i = 0; 
																			foreach($list_user_3 as $tm)
																			{
																				if($i == 0)
																				{
																					$class ="cls-first-in-line";
																				}
																				else 
																				{
																					if($i == 2)
																					{
																						$class ="cls-last-in-line";
																					}	
																					else
																					{
																						$class ="";
																					}
																				}
																			?>
																				<li class="cls-item-no<?php echo $j;?> cls-row0 cls-item <?php echo $class;?> clearfix">
																					<div class="cls-field-image">
																						<div class="cls-item-value"><a target="_blank" href="https://www.facebook.com/<?php echo $tm['login_id']?>" title="<?php echo $tm['full_name']?>"><img width="300" height="168" src="http://graph.facebook.com/<?php echo $tm['login_id']?>/picture?type=large" class="attachment-ths_thumb wp-post-image" alt="<?php echo $tm['full_name']?>" title="<?php echo $tm['full_name']?>" /></a></div>
																					</div>
																					<div class="group group cls_post_data clearfix ">
																						<div class="cls-field-title">
																							<div class="cls-item-value"><a target="_blank" href="https://www.facebook.com/<?php echo $tm['login_id']?>" title="<?php echo $tm['full_name']?>"><?php echo $tm['full_name']?></a></div>
																						</div>
																					</div>
																				</li>
																				<?php
																				if($i<2)
																					{
																					$i++;
																					}
																					else
																					{
																						$i = 0;	
																					}
																					$j++;
																				} ?>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<!-- /cls_box_content_wrapper -->
															<div class="cls_box_footer_wrapper">
																<div class="cls_box_footer_inner">
																</div>
															</div>
															<!--/cls_box_footer_wrapper -->
														</div>
														<!--/cls_box_inner -->
													</div>
													<!--/cls_box_wrapper -->
													<div class="cls_box_wrapper clearfix cls_list_players_in_position clearfix">
														<div class="cls_box_inner">
															<div class="cls_header_title_wrapper clearfix">
																<h2>Cầu thủ</h2>
															</div>
															<!-- /cls_header_title_wrapper -->
															<div class="cls_box_content_wrapper">
																<div class="cls_box_content_inner">
																	<div class="cls_box_content_row cls_first_content">
																		<div class="cls-post-listing clearfix">
																			<ul class="non-ajax clearfix">
																				<?php
																			$i = 0; 
																			$j = 0;
																			foreach($list_user_2 as $ct)
																			{
																				if($i == 0)
																				{
																					$class ="cls-first-in-line";
																				}
																				else 
																				{
																					if($i == 2)
																					{
																						$class ="cls-last-in-line";
																					}	
																					else
																					{
																						$class ="";
																					}
																				}
																				
																			?>
																				<li class="cls-item-no<?php echo $j;?> cls-row0 cls-item <?php echo $class;?> clearfix">
																					<div class="cls-field-image">
																						<div class="cls-item-value"><a target="_blank" href="https://www.facebook.com/<?php echo $ct['login_id']?>" title="<?php echo $ct['full_name']?>"><img width="300" height="168" src="http://graph.facebook.com/<?php echo $ct['login_id']?>/picture?type=large" class="attachment-ths_thumb wp-post-image" alt="<?php echo $ct['full_name']?>" title="<?php echo $ct['full_name']?>" /></a></div>
																					</div>
																					<div class="group group cls_post_data clearfix ">
																						<div class="cls-field-title">
																							<div class="cls-item-value"><a target="_blank" href="https://www.facebook.com/<?php echo $ct['login_id']?>" title="<?php echo $ct['full_name']?>"><?php echo $ct['full_name']?></a></div>
																						</div>
																					</div>
																				</li>
																				<?php if($i<2)
																					{
																					$i++;
																					}
																					else
																					{
																						$i = 0;	
																					}$j++;} ?>
																				
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<!-- /cls_box_content_wrapper -->
															<div class="cls_box_footer_wrapper">
																<div class="cls_box_footer_inner">
																</div>
															</div>
															<!--/cls_box_footer_wrapper -->
														</div>
														<!--/cls_box_inner -->
													</div>
													<!--/cls_box_wrapper -->
												</div>
												
												
												
											</div>
											<!-- /End teams -->
											<script type="text/javascript">
												jQuery(function () {
												jQuery('#myTab a:first').click();
												if(window.location.hash)
												{
												  jQuery('#myTab a[href="'+window.location.hash+'"]').click();
												}
												})
											</script>
										</div>