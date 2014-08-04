<div id="pf-footer">
								<footer>
									<div class="cls_bg_footer">
										<div class="cls_bg_footer_left">
											<div class="cls_bg_footer_right">
												<div class="cls-inner cls_footer_content_wrapper clearfix">
													<div class="cls_footer_top clearfix">
														<!--box footer sponsors-->
														<div class="clearfix cls_footer_sponsors_wrapper">
															<div class="cls_box_inner">
																<div class="cls_box_content_wrapper">
																	<div class="cls_box_content_inner">
																		<div class="cls_box_content_row cls_first_content">
																			<div class="cls-post-listing clearfix">
																				<ul class="non-ajax clearfix">
																					<li class="cls-item-no0 cls-row0 cls-item cls-first-in-line clearfix">
																						<div class="cls-field-meta-small_image">
																							<div class="cls-item-value"><a target="_blank" href="http://saigonfutsal.com" title="Saigon Futsal Community"><img src="<?php echo base_url();?>file/uploads/saigonfutsal.png" alt="Saigon Futsal Community" title="Saigon Futsal Community" /></a></div>
																						</div>
																					</li>
																					<li class="cls-item-no1 cls-row0 cls-item clearfix cls-last-in-line">
																						<div class="cls-field-meta-small_image">
																							<div class="cls-item-value"><a href="<?php echo base_url();?>file/uploads/saigonmasterleague.png" title="Saigon Master League"><img src="<?php echo base_url();?>file/uploads/saigonmasterleague.png" alt="Saigon Master League" title="Saigon Master League" /></a></div>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- /cls_box_content_wrapper -->
															</div>
															<!--/cls_box_inner -->
														</div>
														<!--/cls_box_wrapper -->												    	<!--box footer sponsors-->
													</div>
													<!-- / cls_footer_top -->
													<div class="cls_footer_info clearfix">
														<div class="menu-bottom-menu-container">
															<ul id="menu-bottom-menu-1" class="cls_bottom_menu">
																<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item current-menu-ancestor current-menu-parent menu-item-has-children menu-item-309">
																	<a href="<?php echo base_url();?>tin-tuc">Tin Tức</a>
																	<ul class="sub-menu">
																	<?php 
																					foreach($list_cate as $l_cate)
																					{
																					
																					?>
																		<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-<?php echo $l_cate['id_cate']?>"><a href="<?php echo base_url();?>c/<?php echo $l_cate['id_cate']?>-<?php echo  mb_strtolower(url_title(removesign($l_cate['title_cate'])))?>"><?php echo $l_cate['title_cate']?></a></li>
																		<?php } ?>
																	</ul>
																</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-633">
																	<a href="<?php echo base_url();?>doi-bong/danh-sach/">Đội bóng</a>
																	<ul class="sub-menu">
																					<li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-248 current_page_item menu-item-271"><a href="<?php echo base_url();?>doi-bong/danh-sach/">Danh sách</a></li>
																					<li id="menu-item-634" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-634"><a href="<?php echo base_url();?>doi-bong/ket-qua-thi-dau">Kết quả thi đấu</a></li>
																					
																					<li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273"><a href="<?php echo base_url();?>doi-bong/cau-thu-xuat-sac-nhat-thang">Cầu thủ của tháng</a></li>
																					<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-274"><a href="<?php echo base_url();?>doi-bong/lich-thi-dau">Lịch thi đấu</a></li>
																					<li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-275"><a href="<?php echo base_url();?>doi-bong/noi-quy">Nội quy Câu Lạc Bộ</a></li>
																					<li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-276"><a href="<?php echo base_url();?>dang-ky-fb">Đăng ký gia nhập</a></li>
																					<li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-276"><a href="<?php echo base_url();?>doi-bong/cap-keo">Đăng ký giao hữu</a></li>
																				</ul>
																</li>
																<li id="menu-item-632" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-632">
																				<a href="<?php echo base_url();?>doi-bong/lich-thi-dau">Lịch đấu &#8211; Kết quả</a>
																				<ul class="sub-menu">
																					<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="<?php echo base_url();?>doi-bong/lich-thi-dau">Lịch thi đấu</a></li>
																					<li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-278"><a href="<?php echo base_url();?>doi-bong/ket-qua-thi-dau">Kết quả</a></li>
																					
																				</ul>
																			</li>
																<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-280">
																	<a href="<?php echo base_url();?>doi-bong/gioi-thieu">Về Câu Lạc Bộ</a>
																	<ul class="sub-menu">
																					<li id="menu-item-281" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-264 current_page_item menu-item-281"><a href="<?php echo base_url();?>doi-bong/gioi-thieu">Giới thiệu Câu Lạc Bộ</a></li>
																					
																					
																					<li id="menu-item-283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-283"><a href="<?php echo base_url();?>doi-bong/nha-tai-tro">Nhà tài trợ</a></li>
																				</ul>
																</li>
																<li id="menu-item-284" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-284">
																				<a href="<?php echo base_url();?>media/hinh-anh">Thư Viện</a>
																				<ul class="sub-menu">
																					<li id="menu-item-285" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-285"><a href="<?php echo base_url();?>media/clip">Video Clip</a></li>
																					<li id="menu-item-286" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-286"><a href="<?php echo base_url();?>media/hinh-anh">Ảnh đẹp</a></li>
																				</ul>
																			</li>
																<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-287"><a href="http://www.futsalunitedsaigon.com/forums/">Forum</a></li>
															</ul>
														</div>
													</div>
													<!--/cls_footer_info -->
													<div class="cls_footer_bottom clearfix">
														<span style="height:15px; background: black !important; " class="address">
															<center>Copyright © 2013 futsalunitedsaigon.com - Design by <a style="color:white;" target="_blank" href="https://www.facebook.com/ezwebvietnam">EZWeb Việt Nam</a> </center>
														</span>
													</div>
												</div>
												<!-- / cls_footer_content_wrapper -->
											</div>
											<!-- / cls_bg_footer_right -->
										</div>
										<!-- / cls_bg_footer_left -->
									</div>
									<!-- / cls_bg_footer -->
								</footer>
							</div>