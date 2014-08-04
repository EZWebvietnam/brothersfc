	<div class="cls_layout_inner col2">
											<!-- box teams -->
											<div class="cls_box_header_wrapper clearfix">
												<div  class="cls_box_header_inner_left">
													<div class="cls_box_header_inner_right">
														<div class="cls_box_header_left_wrapper">
															<div class="cls_box_header_left_inner">Lịch thi đấu tháng <?php echo date('m');?></div>
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
											
											<div id="tablepress-1_wrapper" class="dataTables_wrapper" role="grid">
												<table id="tablepress-1" class="tablepress tablepress-id-1 dataTable" aria-describedby="tablepress-1_info">
													<thead>
														<tr class="row-1 odd" role="row">
															<th class="column-1 sorting" role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Ngày: activate to sort column ascending" style="width: 56px;">
																<div>Ngày</div>
															</th>
															<th class="column-2 sorting_desc" role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" style="width: 100px;" aria-sort="descending" aria-label="Đội: activate to sort column ascending">
																<div>Đội</div>
															</th>
															<th class="column-3 sorting" role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Sân tập: activate to sort column ascending" style="width: 211px;">
																<div>Sân</div>
															</th>
														</tr>
													</thead>
													<tbody class="row-hover" role="alert" aria-live="polite" aria-relevant="all">
													<?php
													$i = 0; 
													foreach($list as $team_c)
													{
														if($i%2==0)
														{
															$row = "even";
														}
														else
														{
															$row = "odd";
														}
													?>
														<tr class="row-2 <?php echo $row;?>">
															<td class="column-1 "><?php $d = strtotime($team_c['time']); echo date('d/m/Y H:i',$d);?></td>
															<td class="column-2 "><?php echo $team_c['team_challenge'];?></td>
															<td class="column-3 "><?php echo $team_c['courtyard_challenge'];?></td>
														</tr>
													<?php $i++;} ?>
														
													</tbody>
												</table>
											</div>
											<!-- /End teams -->
											
										</div>
										<script type='text/javascript' src='http://www.thaisonnamfc.vn/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=1.2'></script>
										<script type="text/javascript">
jQuery(document).ready(function($){
$('#tablepress-1').dataTable({"aaSorting":[],"bSortClasses":false,"asStripeClasses":['even','odd'],"bPaginate":false,"bFilter":false});
});
</script>