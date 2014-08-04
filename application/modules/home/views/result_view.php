<link rel='stylesheet' id='tsnfc2013-myreset-css'  href='<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/result.css' type='text/css' media='all' />
<div class="cls_layout_inner col2">
	<!-- box teams -->
	<div class="cls_box_header_wrapper clearfix">
		<div  class="cls_box_header_inner_left">
			<div class="cls_box_header_inner_right">
				<div class="cls_box_header_left_wrapper">
					<div class="cls_box_header_left_inner">Kết quả thi đấu</div>
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
			<?php 
			$this->load->model('newshomemodel');
			foreach($list as $l_result)
			{
			?>
			<div class="fixture-info post-match" data-competition="100" data-channel="" data-location="A">
		<table>
			<tbody>
				<tr>
					<td class="against">
						<a href="#"><?php echo $l_result['team_challenge']?></a>            
					</td>
					<td class="away"><span>A</span></td>
					<td class="fixture-competition">Giao hữu</td>
					<td class="final-score">
						<table>
							<tbody>
								<tr>
									<td class="left-score"><span class="red"><?php echo $l_result['team_home']?></span></td>
									<td class="center-score"> - </td>
									<td class="right-score"><span class="grey"><?php echo $l_result['team_visit']?></span></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				</tbody>
		</table>
	</div>
	<ul class="fixture-page fixture-extra-info">
		<li class="extra-comp small-only">Barclays Premier League</li>
		<li class="fixture-news-btn post-match">
		<?php 
		$match_review = $this->newshomemodel->match_review($l_result['id_result']);
		
		if(empty($match_review))
		{
		?>
			<a href="#" onclick="alert('Bài viết đang được cập nhập');" title="Read match news for this fixture" class="red-arrow-link">>>[Match Review]</a>
			<?php } else {?>
			<a href="<?php echo base_url();?>post/<?php echo $match_review[0]['id_new']?>-<?php echo mb_strtolower(url_title(removesign($match_review[0]['title_new'])))?>" title="Read match news for this fixture" class="red-arrow-link">>>[Match Review]</a>
			<?php } ?>
		</li>
	</ul>
			<?php } ?>
			
	<!-- /End teams -->
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
</div>
