<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php echo $header['title']?></title>
		<meta property="og:title" content="<?php echo $header['title']?>" />
		<meta property="og:description" content="<?php echo str_replace('"','',$header['description'])?>" />
		<link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=2.6.0" type="text/css" media="all" />
		<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
		<meta name='robots' content='noindex,nofollow' />
		<link rel='stylesheet' id='bbp-child-bbpress-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/css/bbpress.css?ver=2.4.1' type='text/css' media='screen' />
		<link rel='stylesheet' id='bp-parent-css-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/buddypress/css/buddypress.css?ver=1.8.1' type='text/css' media='screen' />
		
		<link rel='stylesheet' id='tsnfc2013-style-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/style.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-myreset-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/myreset.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-fonts-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/fonts/RobotoCondensed-Bold/styles.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-icon-fonts-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/ico-fonts/style.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-animate-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/animatecss/animate.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-main-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/main.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tablepress-default-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/tablepress/css/default.min.css?ver=1.2' type='text/css' media='all' />
		<link rel='stylesheet'   href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/match.css' type='text/css' media='screen' />
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
		<script type='text/javascript'>
			/* <![CDATA[ */
			var BP_DTheme = {"my_favs":"My Favorites","accepted":"Accepted","rejected":"Rejected","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all %d comments","show_all":"Show all","comments":"comments","close":"Close","view":"Xem","mark_as_fav":"Favorite","remove_fav":"Remove Favorite","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost."};
			/* ]]> */
		</script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/buddypress/js/buddypress.js?ver=1.8.1'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-includes/js/comment-reply.min.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/modernizr.custom.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/browserdetect.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/jquery.bxslider/jquery.bxslider.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/jquery.dlmenu.js?ver=3.7.3'></script>
		<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&#038;language=en&#038;ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/gmap3v5.1.1/gmap3.min.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/bootstrap/js/bootstrap.min.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/scripts.js?ver=3.7.3'></script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/sitepress-multilingual-cms/res/js/jquery.cookie.js?ver=2.6.0'></script>
		<script type='text/javascript'>
			/* <![CDATA[ */
			var wpml_browser_redirect_params = {"pageLanguage":"vi","languageUrls":{"vi":"http:\/\/www.futsalunitedsaigon.com\/","en":"http:\/\/www.futsalunitedsaigon.com\/"},"cookie":{"name":"_icl_visitor_lang_js","domain":"www.futsalunitedsaigon.com","path":"\/","expiration":24}};
			/* ]]> */
		</script>
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/sitepress-multilingual-cms/res/js/browser-redirect.js?ver=2.6.0'></script>
		<meta name="generator" content="WordPress 3.7.3" />
		<script type="text/javascript">
			/* <![CDATA[ */
						jQuery(document).ready( function() {
				/* Use backticks instead of <code> for the Code button in the editor */
				if ( typeof( edButtons ) !== 'undefined' ) {
					edButtons[110] = new QTags.TagButton( 'code', 'code', '`', '`', 'c' );
					QTags._buttonsInit();
				}
				/* Tab from topic title */
				jQuery( '#bbp_topic_title' ).bind( 'keydown.editor-focus', function(e) {
					if ( e.which !== 9 )
						return;
					if ( !e.ctrlKey && !e.altKey && !e.shiftKey ) {
						if ( typeof( tinymce ) !== 'undefined' ) {
							if ( ! tinymce.activeEditor.isHidden() ) {
								var editor = tinymce.activeEditor.editorContainer;
								jQuery( '#' + editor + ' td.mceToolbar > a' ).focus();
							} else {
								jQuery( 'textarea.bbp-the-content' ).focus();
							}
						} else {
							jQuery( 'textarea.bbp-the-content' ).focus();
						}
						e.preventDefault();
					}
				});
				/* Shift + tab from topic tags */
				jQuery( '#bbp_topic_tags' ).bind( 'keydown.editor-focus', function(e) {
					if ( e.which !== 9 )
						return;
					if ( e.shiftKey && !e.ctrlKey && !e.altKey ) {
						if ( typeof( tinymce ) !== 'undefined' ) {
							if ( ! tinymce.activeEditor.isHidden() ) {
								var editor = tinymce.activeEditor.editorContainer;
								jQuery( '#' + editor + ' td.mceToolbar > a' ).focus();
							} else {
								jQuery( 'textarea.bbp-the-content' ).focus();
							}
						} else {
							jQuery( 'textarea.bbp-the-content' ).focus();
						}
						e.preventDefault();
					}
				});
			});
						/* ]]> */
		</script>
		
		<script type="text/javascript">var icl_lang = 'vi';var icl_home = 'http://www.futsalunitedsaigon.com/';</script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js"></script>
		<meta name="generator" content="WPML ver:2.6.0 stt:59,1;0" />
		<!-- WP-Mobilizer 1.0.6 by Kilukru Media (www.wp-mobilizer.com)-->
		<!-- /WP-Mobilizer -->
		
		<script type="text/javascript">
			jQuery( document ).ready( function() {
				jQuery( 'a.confirm').click( function() {
					if ( confirm( 'Are you sure?' ) )
						return true; else return false;
				});
			});
		</script>
		<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/html5shiv.js"></script>
		<![endif]-->
		<!--[if lte IE 7]>
		<script src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/ico-fonts/lte-ie7.js"></script>
		<![endif]-->
	</head>
	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=771797639499496&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<!-- platform wrapper -->
		<div id="pf-platform" class="">
			<!-- browser wrapper -->
			<div id="pf-browser" class="">
				<!-- site-wrapper -->
				<div id="pf-site-wrapper" class="single single-post postid-4360 single-format-standard full-width custom-background-empty custom-font-enabled cls-panel-close no-js">
					<!-- site-inner -->
					<div id="pf-site-inner" class="vi">
						<script type="text/javascript">
							// for adding classes based on platform and browser
							BrowserDetect.init();
							var objPlatform = document.getElementById('pf-platform');
							var objBrowser = document.getElementById('pf-browser');
							if (objPlatform)
							{
								objPlatform.className += objPlatform.className ? ' ' : '';
								objPlatform.className += BrowserDetect.OS + ' ' + BrowserDetect.OS+BrowserDetect.OSTech;
							}
							if (objBrowser)
							{
								objBrowser.className += objBrowser.className ? ' ' : '';
								objBrowser.className += BrowserDetect.browser + ' ' + BrowserDetect.browser+BrowserDetect.version;
							}
							document.body.className = 'js';
						</script>
						<!-- all html elements put below here -->
						<!-- pf-container -->
						<div id="pf-container">
							<header>
								<div class="cls_headr">
									<div class="cls_headr_top">
										<div class="cls_language cls_right">
											<ul>
												<li class="cls_bg_none"><a href="http://www.futsalunitedsaigon.com/2014/06/giai-vo-dich-futsal-tphcm-2014-cac-doi-dau-bang-toan-thang/" class="cls_active">Vietnamese</a></li>
												<li class=""><a href="http://www.futsalunitedsaigon.com/en/" >English</a></li>
											</ul>
										</div>
										<div class="cls_headr_members cls_right">
										<?php 
										if(!$this->tank_auth->is_logged_in())
										{
										?>
											<span><a href="<?php echo base_url();?>dang-ky-fb">Thành viên CLB đăng nhập</a></span>
											<?php } else { ?>
											<span><?php echo $this->session->userdata('full_name');?></span>
											<span><a href="<?php echo base_url();?>logout">Đăng xuất</a></span>
											<?php } ?>
										</div>
										<div class="cls_headr_top_web_link cls_right">
											<ul>
												<li class="cls_bg_none">
													Website liên kết:&nbsp;
													<a target="_blank" href="http://saigonfutsal.com">Saigon Futsal</a>
												</li>
												<li><a target="_blank" href="http://www.saigonfootball.org/">Saigon Football</a></li>
												
											</ul>
										</div>
									</div>
									<div class="cls_headr_bottom">
										<div class="cls_headr_bg clearfix">
											<div class="cls_headr_bg_inner_left">
												<div class="cls_headr_bg_inner_right">
													<div class="cls_headr_content clearfix">
														<div class="logo">
															<a href="http://www.futsalunitedsaigon.com" class="cls_logo">
															<img src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_images/fust_logo.png" width="144" height="143" alt="logo" />
															</a>
														</div>
														<div class="cls_headr_right_wrapper">
															<div class="cls_headr_top_right_wrapper clearfix">
																<div class="cls_search_form_wrapper cls_right clearfix">
																	<form role="search" method="get" id="searchform" action="http://www.futsalunitedsaigon.com/">
																		<div class="cls-input-wrapper">
																			<input type="text" value="" name="s" id="s" placeholder="Tìm kiếm…" />
																			<input type="submit" id="searchsubmit" value="" />
																		</div>
																	</form>
																</div>
																<!--/cls_search_form_wrapper-->
																<div class="cls_link_home cls_right">
																	<a href="http://www.futsalunitedsaigon.com">Đặt làm trang chủ</a>
																</div>
															</div>
															<div class="cls_top_menu_wrapper clearfix">
																<div class="cls_top_menu_inner">
																	<div class="menu-bottom-menu-container">
																		<ul id="menu-bottom-menu" class="cls_top_menu">
																			<li id="menu-item-309" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor menu-item-has-children menu-item-309">
																				<a href="<?php echo base_url();?>tin-tuc">Tin Tức</a>
																				<ul class="sub-menu">
																					<?php 
																					foreach($list_cate as $l_cate)
																					{
																					
																					?>
																					<li id="menu-item-<?php echo $l_cate['id_cate']?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $l_cate['id_cate']?>"><a href="<?php echo base_url();?>c/<?php echo $l_cate['id_cate']?>-<?php echo  mb_strtolower(url_title(removesign($l_cate['title_cate'])))?>"><?php echo $l_cate['title_cate']?></a></li>
																					<?php } ?>
																				</ul>
																			</li>
																			<li id="menu-item-633" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-633">
																				<a href="<?php echo base_url();?>doi-bong/danh-sach/">Đội bóng</a>
																				<ul class="sub-menu">
																					<li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-248 current_page_item menu-item-271"><a href="<?php echo base_url();?>doi-bong/danh-sach/">Danh sách</a></li>
																					<li id="menu-item-634" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-634"><a href="<?php echo base_url();?>doi-bong/ket-qua-thi-dau">Kết quả thi đấu</a></li>
																					<li id="menu-item-272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-272"><a href="http://www.futsalunitedsaigon.com/doi-bong/cau-thu-ghi-ban/">Cầu thủ ghi bàn</a></li>
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
																			<li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-has-children menu-item-280">
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
																			<li id="menu-item-287" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-287"><a href="http://www.futsalunitedsaigon.com/forums/">Forum</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!--/cls_top_menu_wrapper-->
														</div>
														<!--/cls_headr_right_wrapper-->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</header>
							<div class="cls_main_bg">
								
								<div class="cls_main_content clearfix">
									
											<!-- box single news display -->
											<?php echo $this->load->view($main_content);?>
											<!--/cls_box_wrapper -->
											<!-- /End single news display -->
											<!-- box related news display -->
											
											<!--/cls_box_wrapper -->
											<!-- /End related news display -->
										</div>
										<div class="cls_layout_inner col3">
											<!--box most read posts-->
											<div class="cls_box_wrapper clearfix cls_most_read_wrapper clearfix">
												<div class="cls_box_inner">
													<div class="cls_box_header_wrapper clearfix">
														<div  class="cls_box_header_inner_left">
															<div class="cls_box_header_inner_right">
																<div class="cls_box_header_left_wrapper">
																	<div class="cls_box_header_left_inner">
																		Tin đọc nhiều						
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
															<div class="cls_box_content_row cls_first_content">
																<div class="cls-post-listing clearfix">
																	<ul class="non-ajax clearfix">
																	<?php 
																	$i = 1;
																	foreach($doc_nhieu as $d_n)
																	{
																	
																	?>
																		<li class="cls-item-no<?php echo $i?> cls-row<?php echo $i?> cls-item cls-first-in-line clearfix cls-last-in-line cls-only-in-line">
																			<div class="cls_item_num"><?php echo $i?>.</div>
																			<div class="group group cls_post_data clearfix ">
																				<div class="cls-field-title">
																					<div class="cls-item-value"><a href="<?php echo base_url();?>post/<?php echo $d_n['id_new']?>-<?php echo  mb_strtolower(url_title(removesign($d_n['title_new'])))?>" title="<?php echo $d_n['title_new']?>"><?php echo $d_n['title_new']?></a></div>
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
													</div>
													<!--/cls_box_footer_wrapper -->
												</div>
												<!--/cls_box_inner -->
											</div>
											<!--/cls_box_wrapper -->
											<!--end box most read posts-->
											<!--box next match-->
											<div class="cls_box_wrapper clearfix cls_next_match_wrapper clearfix">
												<div class="cls_box_inner">
													<div class="cls_box_header_wrapper clearfix">
														<div  class="cls_box_header_inner_left">
															<div class="cls_box_header_inner_right">
																<div class="cls_box_header_left_wrapper">
																	<div class="cls_box_header_left_inner">
																		Trận đấu sắp tới						
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
														<div class="main-width" id="next-match" data-event-id="1506174">
                                 <?php 
								 if(isset($next_match[0]))
								 {
								 
								 ?>
                                 <div class="date" title="Monday 12 May">
                                    <?php
                                    $date =  strtotime($next_match[0]['time']);
                                    echo date('D d/m/Y',$date);
                                    ?>
                                 </div>
                                 <div id="button-left">
                                    
                                 </div>
                                 <div class="logo_team">
                                    <div class="team_home" style="margin-right:3px;">
                                       <img width="46" height="60" src="http://saigonfutsal.com/beta/file/uploads/teams/fust_logo.png" alt="Elche">
                                    </div>
                                    <div class="vs ">
                                       <a href="#" target="_blank">
                                       <?php 
                                       echo date('H:i',$date);
                                       ?></a>
                                       <span title="Not started">
                                       VS                    </span>
                                    </div>
                                    <div class="team_away" style="margin-left: 3px;">
                                    <?php 
                                    if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/team/'.$next_match[0]['team_challenge_logo']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/team/'.$next_match[0]['team_challenge_logo']) && $next_match[0]['team_challenge_logo']!='')
                                    {
                                    ?>
                                       <img width="46" height="60" src="<?php echo base_url();?>file/uploads/team/<?php echo $next_match[0]['team_challenge_logo']?>" alt="<?php echo $next_match[0]['team_challenge']?>">
                                       <?php } else {?>
                                        <img width="46" height="60" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $next_match[0]['team_challenge']?>" alt="<?php echo $next_match[0]['team_challenge']?>">
                                       <?php } ?>
                                    </div>
                                    <p class="teams-names">
                                       <span title="FUST">FUST</span> vs <span title="<?php echo $next_match[0]['team_challenge']?>"><?php echo $next_match[0]['team_challenge']?></span>
                                    </p>
                                 </div>
								 <center><span style="color:red !important;"> <b>Đăng ký thi đấu giao hữu với FUST<a  href="<?php echo base_url();?>doi-bong/cap-keo"> tại đây</a></b></span></center>
                                 <div id="button-right">
                                   
                                 </div>
								 <?php } ?>
                              </div>
														</div>
													</div>
													<!-- /cls_box_content_wrapper -->
													<div class="cls_box_footer_wrapper">
													</div>
													<!--/cls_box_footer_wrapper -->
												</div>
												<!--/cls_box_inner -->
											</div>
											<!--/cls_box_wrapper -->
											<!--end box next match-->
											<!--box live match-->
											
											<!--/cls_box_wrapper -->
											<!--end box live match-->
											<!--man of month-->
											<div class="cls_box_wrapper clearfix cls_man_of_month_wrapper clearfix">
												<div class="cls_box_inner">
													<div class="cls_box_content_wrapper">
														<div class="cls_box_content_inner">
															<a href="<?php echo base_url();?>doi-bong/cau-thu-xuat-sac-nhat-thang">
																<div class="cls-post-listing clearfix">
																	<ul class="non-ajax clearfix">
																		<li class="cls-item-no0 cls-row0 cls-item cls-first-in-line clearfix cls-last-in-line cls-only-in-line">
																			<div class="cls-field-image">
																				<div class="cls-item-value"><img width="300" height="300" src="<?php echo base_url();?>file/uploads/BCCTCT.jpg" class="attachment-ths_thumb wp-post-image" alt="Hãy bình chọn cho cầu thủ futsal hay nhất tháng" title="Hãy bình chọn cho cầu thủ futsal hay nhất tháng" /></div>
																			</div>
																			<div class="group group cls_post_data clearfix ">
																				<div class="cls-field-title">
																					<div class="cls-item-value">Bình chọn cầu thủ của tháng</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</a>
														</div>
													</div>
													<!-- /cls_box_content_wrapper -->
													<div class="cls_box_footer_wrapper">
													</div>
													<!--/cls_box_footer_wrapper -->
												</div>
												<!--/cls_box_inner -->
											</div>
											<!--/cls_box_wrapper -->
											<!--box forum-->
									
											<!--/cls_box_wrapper -->
											<!--end forum-->
										</div>
									</div>
								</div>
								<!-- / cls_main_content -->
							</div>
							<!-- pf-footer -->
							<?php include('footer.php');?>
							<!-- / pf-footer -->
						</div>
						<!-- / pf-container -->
					</div>
					<!-- /site-inner -->
				</div>
				<!-- /site-wrapper -->
			</div>
			<!-- /browser wrapper -->
		</div>
		<!-- /platform wrapper -->
		<!-- Generated in 0.187 seconds. (283 q) -->
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/navigation.js?ver=1.0'></script>
	</body>
</html>