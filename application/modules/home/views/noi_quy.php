<script>
	jQuery(document).ready(function(){
		jQuery('#menu-item-309').removeClass('current-menu-item');
		jQuery('#menu-item-309').removeClass('menu-item');
		jQuery('#menu-item-309').removeClass('menu-item-type-taxonomy');
		jQuery('#menu-item-309').removeClass('menu-item-object-category');
		jQuery('#menu-item-309').removeClass('current-post-ancestor');
		   
		jQuery('#menu-item-309').removeClass('current-menu-ancestor');
		jQuery('#menu-item-633').addClass('current-menu-item');
		jQuery('#menu-item-633').addClass('current-menu-ancestor');
	})
</script>
<div class="cls_breadcrumb_wrapper">
										<!-- Breadcrumb NavXT 4.4.0 -->
										<a title="Go to Futsal United Saigon FC." href="http://www.futsalunitedsaigon.com" class="home">Trang Chủ</a> &#047; <a title="Go to the Tin Tức category archives." href=<?php echo base_url();?>tin-tuc" class="category">Nội quy</a> &#047;
									</div>
									<div class="cls_layout_wrapper three_col_layout clearfix">
										<div class="cls_layout_inner col1">
											<div class="cls_left_panel_menu_wrapper">
												<div class="menu-left-menu-news-container">
													<ul id="menu-left-menu-news" class="cls_left_panel_menu">
														<?php 
																					foreach($list_cate as $l_cate)
																					{
																						$id_cate = $l_cate['id_cate'];
																						if($l_cate['id_cate'] == $active)
																						{
																							
																							$class = "current-menu-item menu-item-$id_cate";
																						}
																						else
																						{
																							$class = "menu-item-$id_cate";
																						}
																					?>
														<li id="menu-item-<?php echo $id_cate;?>" class="menu-item menu-item-type-taxonomy menu-item-object-category <?php echo $class;?>"><a href="<?php echo base_url();?>c/<?php echo $l_cate['id_cate']?>-<?php echo  mb_strtolower(url_title(removesign($l_cate['title_cate'])))?>"><?php echo $l_cate['title_cate'] ?></a></li>
														<?php } ?>
													</ul>
												</div>
												
											</div>
										</div>
										<div class="cls_layout_inner col2">
<div class="cls_box_wrapper clearfix cls_single_news_wrapper clearfix">
												<div class="cls_box_inner">
													<div class="cls_box_header_wrapper clearfix">
														<div  class="cls_box_header_inner_left">
															<div class="cls_box_header_inner_right">
																<div class="cls_box_header_left_wrapper">
																	<div class="cls_box_header_left_inner">
																		<a href="<?php echo full_url_($_SERVER);?>">Nội quy đội bóng</a>
																	</div>
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
													<div class="cls_box_content_wrapper">
														<div class="cls_box_content_inner">
															<article id="post-4360" class="post-4360 post type-post status-publish format-standard hentry category-futsal-trong-nuoc">
																<div class="cls-post-listing clearfix">
																	<ul class="non-ajax clearfix">
																		<li class="cls-item-no0 cls-row0 cls-item cls-first-in-line clearfix cls-last-in-line cls-only-in-line">
																			<div class="cls-field-title">
																				<div class="cls-item-value">Nội quy đội bóng</div>
																			</div>
																			
																			<div class="cls-field-content">
																			<?php echo $new_detail[0]['content_about']?>
																			
																			</div>
																			
																		</li>
																	</ul>
																</div>
															</article>
															<!-- #post -->
														</div>
													</div>
													<!-- /cls_box_content_wrapper -->
													<div class="cls_box_footer_wrapper">
													</div>
													<!--/cls_box_footer_wrapper -->
												</div>
												<!--/cls_box_inner -->
											</div>