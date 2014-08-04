<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php echo $header['title']?></title>
		<link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=2.6.0" type="text/css" media="all" />
		
		<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
		<link rel="pingback" href="<?php echo base_url();?>template/ezwebvietnam/fust_home/xmlrpc.php" />
		<meta name='robots' content='noindex,nofollow' />
		
		<link rel="alternate" type="application/rss+xml" title="Thai Son Nam FC &raquo; Thành viên đăng nhập Comments Feed" href="<?php echo base_url();?>template/ezwebvietnam/fust_home/thanh-vien-dang-nhap/feed/" />
		<link rel='stylesheet' id='bbp-child-bbpress-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/css/bbpress.css?ver=2.4.1' type='text/css' media='screen' />
		<link rel='stylesheet' id='bp-parent-css-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/buddypress/css/buddypress.css?ver=1.8.1' type='text/css' media='screen' />
		<link rel='stylesheet' id='mblzr_common-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/wp-mobilizer/css/styles.css?ver=1.0.6' type='text/css' media='screen' />
		<link rel='stylesheet' id='tsnfc2013-style-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/style.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-myreset-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/myreset.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-fonts-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/fonts/RobotoCondensed-Bold/styles.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-icon-fonts-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/ico-fonts/style.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-animate-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_assets/animatecss/animate.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tsnfc2013-main-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/main.css?ver=3.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='tablepress-default-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/tablepress/css/default.min.css?ver=1.2' type='text/css' media='all' />
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
		<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
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
	
		<link type="text/css" href="http://jscrollpane.kelvinluck.com/style/jquery.jscrollpane.css" rel="stylesheet" media="all" />
		<script type="text/javascript" src="http://jscrollpane.kelvinluck.com/script/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="http://jscrollpane.kelvinluck.com/script/jquery.jscrollpane.min.js"></script>
		<style type="text/css" id="page-css">
			/* Styles specific to this particular page */
			.scroll-pane
			{
				width: 200%;
				height: 200px;
				overflow: auto;
			}
			.horizontal-only
			{
				height: auto;
				max-height: 200px;
			}
		</style>
		<script type="text/javascript" id="sourcecode">
			jQuery(document).ready( function() {
			
				jQuery('.scroll-pane').jScrollPane();
			});
		</script>
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
		<script type="text/javascript">var ajaxurl = '<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-admin/admin-ajax.php';</script>
		<script type="text/javascript">var icl_lang = 'vi';var icl_home = '<?php echo base_url();?>template/ezwebvietnam/fust_home/';</script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js"></script>
		<meta name="generator" content="WPML ver:2.6.0 stt:59,1;0" />
		<!-- WP-Mobilizer 1.0.6 by Kilukru Media (www.wp-mobilizer.com)-->
		<!-- /WP-Mobilizer -->
		<!-- WordPress Most Popular --><script type="text/javascript">/* <![CDATA[ */ jQuery.post("<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-admin/admin-ajax.php", { action: "wmp_update", id: 2004, token: "b9ff16a051" }); /* ]]> */</script><!-- /WordPress Most Popular -->
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
		<!-- platform wrapper -->
		<div id="pf-platform" class="">
		<!-- browser wrapper -->
		<div id="pf-browser" class="">
			<!-- site-wrapper -->
			<div id="pf-site-wrapper" class="page page-id-2004 page-template page-template-page-user-login-php full-width custom-background-empty custom-font-enabled cls-panel-close no-js">
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
											<li class="cls_bg_none"><a href="<?php echo base_url();?>template/ezwebvietnam/fust_home/thanh-vien-dang-nhap/" class="cls_active">Vietnamese</a></li>
											<li class=""><a href="<?php echo base_url();?>template/ezwebvietnam/fust_home/en/" >English</a></li>
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
																<form role="search" method="get" id="searchform" action="<?php echo base_url();?>template/ezwebvietnam/fust_home/">
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
																		<li id="menu-item-309" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-309">
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
																		<li id="menu-item-287" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-287"><a href="<?php echo base_url();?>template/ezwebvietnam/fust_home/forums/">Forum</a></li>
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
								<div id="bbp-container">
									<div id="bbp-content" role="main">
										<div id="bbp-login" class="bbp-login">
											<h1 class="entry-title">Thành viên đăng nhập</h1>
											<div class="entry-content">
												<div id="bbpress-forums">
													<div class="bbp-breadcrumb">
														<p><a href="<?php echo base_url();?>template/ezwebvietnam/fust_home/" class="bbp-breadcrumb-home">Home</a> <span class="bbp-breadcrumb-sep">&#47;</span> <a href="<?php echo base_url();?>template/ezwebvietnam/fust_home/forums/" class="bbp-breadcrumb-root">Forums</a> <span class="bbp-breadcrumb-sep">&#47;</span> <span class="bbp-breadcrumb-current">Thành viên đăng nhập</span></p>
													</div>
													<form method="post" id="form_register" name="form_register" class="bbp-login-form">
														<fieldset class="bbp-form">
															<legend>Log In</legend>
															<div class="bbp-username">
																<label for="user_login"></label>
																<div id="notice_message"></div>
															</div>
															<div class="bbp-username">
																<label for="user_login"></label>
																<input  type="radio" name="radio" id="radio" value="1" checked=""/>Đã đăng ký<input  type="radio" name="radio" id="radio2" value="0"/>Chưa đăng ký
															</div>
															<div class="bbp-username">
																<label for="user_login">Username: </label>
																<input type="text" name="username_1" value="" size="20" id="user_login_1" tabindex="101"/>
																<input type="hidden" name="username" value="" size="20" id="user_login" tabindex="101"/>
																<p id="warning_sess" style="color:red;"><b>
																<?php 
																	if(isset($_SESSION['item']))
																	{
																		echo $_SESSION['item'];
																		unset($_SESSION['item']);
																	}
																?></b>
																</p>
																<input type="hidden" value="<?php echo $token; ?>" name="access_token" id="access_token"/>
																<input type="hidden" value="" name="id_login" id="id_login"/>
																<input type="hidden" value="" name="case_" id="case_action"/>
															</div>
															<div id="register_info">
															<div class="bbp-username">
																<label for="user_login">Họ và tên: </label>
																<input type="text" name="full_name" value="" size="20" id="full_name" tabindex="101" />
															</div>
															<div class="bbp-username">
																<label for="user_login">Ngày tháng năm sinh: </label>
																<input type="text" name="dob" value="" size="20" id="dob" tabindex="101" />
															</div>
															<div class="bbp-username">
																<label for="user_login">Số CMND: </label>
																<input type="text" name="cmnd" value="" size="20" id="cmnd" tabindex="101" />
															</div>
															<div class="bbp-username">
																<label for="user_login">Tỉnh: </label>
																<?php 
																$this->load->model('provincehomemodel');
																$l_province = $this->provincehomemodel->list_province();
																?> 
																<select name="tinh">
																<?php
																foreach($l_province as $l_p)
																{
																	
																?>
																<option value="<?php echo $l_p['provinceid']?>"><?php echo $l_p['name']?></option>
																<?php } ?>
																</select>
															</div>
															<div class="bbp-username">
																<label for="user_login">SĐT: </label>
																<input type="text" name="phone" value="" size="20" id="phone" tabindex="101" />
															</div>
															<div class="bbp-username">
																<label for="user_login">Vị trí thi đấu: </label>
																<select name="vi_tri">
																
																<option value="2"> Cầu thủ</option>
																<option value="3"> Thủ môn</option>
																</select>
															</div>
															<div class="bbp-username">
																<label for="user_login">Địa chỉ: </label>
																<input type="text" name="address" value="" size="20" id="phone" tabindex="101" />
															</div>
															<div class="bbp-username" style="text-align: left !important;">
																<div class="scroll-pane"><?php echo $noi_quy[0]['content_about']?>
			</div>
															</div>
															<div class="bbp-username">
																
																<input type="checkbox" name="agree" id="isCheck">Tôi đã đọc và đồng ý với nội quy ban lãnh đạo đội bóng đã đề ra.
															</div>
															</div>
															<div class="bbp-submit-wrapper">
																<button id="submit_button" onclick="submit_form();" type="button" tabindex="104" name="user-submit" class="button submit user-submit" disabled="">Đăng ký</button>
																<button id="login_button" onclick="login_form();" type="button" tabindex="104" name="user-submit" class="button submit user-submit">Đăng nhập</button>
															</div>
														</fieldset>
														<script>
															jQuery(document).ready(function(){
																
																jQuery('#register_info').hide();
																jQuery('#radio').click(function(){
																	if(jQuery(this).val()==1)
																	{
																		jQuery('#submit_button').attr('disabled','disabled');
																		jQuery('#login_button').attr('disabled',false);
																		jQuery('#register_info').hide();
																	}
																});
																jQuery('#radio2').click(function(){
																	if(jQuery(this).val()==0)
																	{
																			jQuery('#submit_button').attr('disabled',false);
																			jQuery('#login_button').attr('disabled','disabled');
																			jQuery('#warning_sess').hide();
																			if(jQuery('#user_login_1').val()=='')
																			{
																				jQuery('#user_login_1').attr('disabled',false);
																			}
																			jQuery('#register_info').show();
																	}
																});
																jQuery( "#dob" ).datepicker({dateFormat: 'yy-mm-dd'});
																var a = jQuery('#access_token').val();
																jQuery.ajax({
														        url: "https://graph.facebook.com/me?access_token="+a,
														        dataType: 'json',
														        success: function(response) {
														            jsonData = response;
														            if(typeof(response.email)  === "undefined")
														            {
																		jQuery('#user_login_1').attr('disabled',false);
																	}
																	else
																	{
																		jQuery('#user_login_1').attr('disabled','disabled');
																	}
																	jQuery('#user_login_1').val(response.email);
														            jQuery('#user_login').val(response.email);
														            jQuery('#id_login').val(response.id);
														            /*
																	document.forms.fb_login.uid.value=response.id;
																	document.forms.fb_login.email.value=response.email;
																	document.forms.fb_login.firstname.value=response.first_name;
																	document.forms.fb_login.lastname.value=response.last_name;
																	document.forms.fb_login.middlename.value=response.middle_name;
																	document.forms.fb_login.access_token.value=a;*/
														        	}
																});
																
																
															});
															function submit_form()
															{
																if(jQuery("#isCheck").is(':checked'))
																{
																	if(document.getElementById('user_login_1').value=='')
																	{
																		alert('Hệ thống không lấy được thông tin email của bạn từ tài khoản facebook. Vui lòng điền thông tin email của bạn !');
																		
																	}
																	else
																	{
																		oFormObject = document.forms['form_register'];
																		oFormObject.elements["case_action"].value = 0;
																		document.forms.form_register.submit();
																	}
																	
																}	
																else
																{
																	alert('Bạn chưa đồng ý với nội quy của đội bóng');	
																}
															}
															function login_form()
															{
																document.forms.form_register.case_action.value=1;
																document.forms.form_register.submit();
															}
														</script>
													</form>
												</div>
											</div>
										</div>
										<!-- #bbp-login -->
									</div>
									<!-- #bbp-content -->
								</div>
								<!-- #bbp-container -->
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
		<!-- Generated in 0.140 seconds. (202 q) -->
		<script type='text/javascript' src='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/navigation.js?ver=1.0'></script>
	</body>
</html>