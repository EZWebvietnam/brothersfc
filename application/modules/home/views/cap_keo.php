<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/admin_cp/clockpicker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/admin_cp/clockpicker/jquery.timepicker.css" />
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/fust_home/wp-content/themes/futsalunitedsaigon.com/_javascripts/jquery.address.picker.js"></script>
 <script>
  jQuery(document).ready(function(){
    var addresspicker = jQuery( "#addresspicker" ).addresspicker({
      componentsFilter: 'country:VI'
    });
    var addresspickerMap = jQuery( "#addresspicker_map" ).addresspicker({
      regionBias: "vi",
      updateCallback: showCallback,
      mapOptions: {
        zoom: 4,
        center: new google.maps.LatLng(10.762622, 106.660172),
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      },
      elements: {
        map:      "#map",
        lat:      "#lat",
        lng:      "#lng",
      }
    });

    var gmarker = addresspickerMap.addresspicker( "marker");
    gmarker.setVisible(true);
    addresspickerMap.addresspicker( "updatePosition");

    jQuery('#reverseGeocode').change(function(){
      jQuery("#addresspicker_map").addresspicker("option", "reverseGeocode", (jQuery(this).val() === 'true'));
    });

    function showCallback(geocodeResult, parsedGeocodeResult){
      jQuery('#callback_result').text(JSON.stringify(parsedGeocodeResult, null, 4));
    }
    // Update zoom field
    var map = jQuery("#addresspicker_map").addresspicker("map");
    google.maps.event.addListener(map, 'idle', function(){
      jQuery('#zoom').val(map.getZoom());
    });

  });
  </script>
<script>
jQuery(document).ready(function(){
				jQuery( "#time" ).datepicker({ dateFormat: 'yy-mm-dd' });
			});
              jQuery(document).ready(function(){
                    jQuery('#time_').timepicker();
                });
            </script>
			 <style>
  	#map {
  border: 1px solid #DDD; 
  width:300px;
  height: 300px;
  margin: 10px 0 10px 92px;
  -webkit-box-shadow: #AAA 0px 0px 15px;
}
  </style>
<div class="cls_layout_inner col2">
	<!-- box teams -->
	<div class="cls_box_header_wrapper clearfix">
		<div  class="cls_box_header_inner_left">
			<div class="cls_box_header_inner_right">
				<div class="cls_box_header_left_wrapper">
					<div class="cls_box_header_left_inner">Cáp kèo thi đấu giao hữu</div>
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
			<div class="bbp-username">
				<label for="team_challenge">Tên đội: </label>
				<input type="text" name="team_challenge" value="" size="20" id="team_challenge" tabindex="101">
			</div>
			<div class="bbp-username">
				<label for="team_challenge">Đội trưởng: </label>
				<input type="text" name="leader_challenge" value="" size="20" id="leader_challenge" tabindex="102">
			</div>
			<div class="bbp-username">
				<label for="email_leader_challenge">Email đội trưởng: </label>
				<input type="text" name="email_leader_challenge" value="" size="20" id="email_leader_challenge" tabindex="103">
			</div>
			<div class="bbp-username">
				<label for="phone_leader_challenge">SĐT đội trưởng: </label>
				<input type="text" name="phone_leader_challenge" value="" size="20" id="phone_leader_challenge" tabindex="103">
			</div>
			<div class="bbp-username">
				<label for="phone_leader_challenge">Tên sân: </label>
				<input type="text" name="courtyard_challenge" value="" size="20" id="courtyard_challenge" tabindex="103">
			</div>
			<div class="bbp-username">
				<label for="addresspicker_map">Địa chỉ: </label>
				<input size="20" id="addresspicker_map" name="address" tabindex="103"/>
										  <input id="addresspicker" type="hidden"/>
										  <input id="lat" name="lat" type="hidden"/>
										  <input id="lng" name="lng" type="hidden"/>
			</div>
			<div class="bbp-username">
				<label for="map">Bản đồ</label>
				<div id="map"></div>
			</div>
			<div class="bbp-username">
				<label for="time">Thời gian: </label>
				<input type="text" name="time" value="" size="3" id="time" tabindex="104">
				
			</div>
			<div class="bbp-username">
				<label for="time">Giờ: </label>
				<input type="text" name="time_" value="" size="3" id="time_" tabindex="104">
				
			</div>
			
			<div class="bbp-username">
				<label for="phone_leader_challenge">Kèo: </label>
				<input type="text" name="keo" value="" size="20" id="keo" tabindex="105">
			</div>
			<div class="bbp-username">
				<label for="phone_leader_challenge"></label>
				<input type="submit"  value="Cáp kèo" size="20" id="keo" tabindex="106">
			</div>
		</fieldset>
	</form>
	<!-- /End teams -->
</div>