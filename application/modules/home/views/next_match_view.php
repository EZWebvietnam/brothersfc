<link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_stylesheets/colorbox.css" />
<script src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/jquery.colorbox.js"></script>
<style>
	#cboxLoadedContent
	{
		background:#fff !important;	
	}
	
</style>
<script>
	jQuery(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements

				jQuery(".ajax").colorbox();
			});

	
</script>
	<div class="cls_layout_inner col2">
											<!-- box teams -->
											<div class="cls_box_header_wrapper clearfix">
												<div  class="cls_box_header_inner_left">
													<div class="cls_box_header_inner_right">
														<div class="cls_box_header_left_wrapper">
															<div class="cls_box_header_left_inner">FUST vs <?php echo $detail_next_match[0]['team_challenge'];?></div>
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
											
											<form method="post" class="bbp-login-form">
	<fieldset class="bbp-form">
		<br>
		<p><b>Tên đội</b>: <?php echo $detail_next_match[0]['team_challenge'];?></p>
		<br>
		<p><b>Thời gian thi đấu</b>: <?php $d = strtotime($detail_next_match[0]['time']); echo date('d/m/Y H:i:s',$d);?></p>
		<br>
		<p><b>Địa điểm</b>: <?php echo $detail_next_match[0]['courtyard_challenge'];?></p>
		<br>
		<p><b>Địa chỉ</b>: <?php echo $detail_next_match[0]['address'];?></p>
		<br>
		<p><b>Kèo</b>: <?php echo $detail_next_match[0]['keo'];?></p>
		<br>
		Bản đồ:
		<div id="map" style="height: 512px;">
		  <noscript>
		    <!-- http://code.google.com/apis/maps/documentation/staticmaps/ -->
		    <img src="http://maps.google.com/maps/api/staticmap?center=1%20infinite%20loop%20cupertino%20ca%2095014&amp;zoom=16&amp;size=512x512&amp;maptype=roadmap&amp;sensor=false" />
		  </noscript>
		</div>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">

		// Define the address we want to map.
		var address = "<?php echo $detail_next_match[0]['address'];?>";

		// Create a new Geocoder
		var geocoder = new google.maps.Geocoder();

		// Locate the address using the Geocoder.
		geocoder.geocode( { "address": address }, function(results, status) {

		  // If the Geocoding was successful
		  if (status == google.maps.GeocoderStatus.OK) {

		    // Create a Google Map at the latitude/longitude returned by the Geocoder.
		    var myOptions = {
		      zoom: 16,
		      center: results[0].geometry.location,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    };
		    var map = new google.maps.Map(document.getElementById("map"), myOptions);

		    // Add a marker at the address.
		    var marker = new google.maps.Marker({
		      map: map,
		      position: results[0].geometry.location
		    });

		  } else {
		    try {
		      console.error("Geocode was not successful for the following reason: " + status);
		    } catch(e) {}
		  }
		});
		</script>
	</fieldset>
</form>
<?php 
$time = date('Y').'-'.date('m').'-20 00:00:00';
		$this->load->model('users');
		if(strtotime('now')>strtotime($time))
		{
		?> 
		<p><a class='ajax' href="<?php echo base_url();?>doi-bong/ket-qua-bau-chon" title="Homer Defined">Kết quả</a></p>
		<?php
		}
?>

											<!-- /End teams -->
											
										</div>
										