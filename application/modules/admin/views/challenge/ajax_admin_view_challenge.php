<script type="text/javascript">
    $(document).ready(function() {
        $( "#exp_date_" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $("input").each(function() {
            $("input.readonly").css('background-color', '#f2f2f2');
        });
    });
</script>
<script src="<?php echo base_url()?>js_upload/ajaxfileupload.js"></script>
<div class="h-pop">
    <div class="h-icon"></div>
    <h3>Sửa</h3>
</div>
<div class="m-pop">
    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
    <form action="<?php echo base_url(); ?>admin/categoryadmin/edit/<?php echo $challenge_detail[0]['id_challenge']?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="adminform">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên đội</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['team_challenge']?>"/>
                </td>
            </tr>
            <tr>
                <td class="label">Logo đội</td>
                <td colspan="3">
                    <img width="50" height="50" src="<?php echo base_url();?>file/uploads/team/<?php echo $challenge_detail[0]['team_challenge_logo']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Người cáp</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['leader_challenge']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Email người cáp</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['email_leader_challenge']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Điện thoại người cáp</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['phone_leader_challenge']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Sân</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['courtyard_challenge']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Địa chỉ</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['address']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Kèo</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['keo']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Thời gian</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $challenge_detail[0]['time']?>"/>
                </td>
            </tr>
            

        </table>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //$('#cost_').priceFormat();
		$('#parent_lable').change(function(){
			var lable = $(this).val();	
			if(lable == 1)
			{
				$('#lable').attr('disabled','disabled');
				$('#radio').attr('disabled','disabled');
				$('#id_product').attr('disabled','disabled');
			}
			else
			{
				$('#lable').attr('disabled',false);
				$('#radio').attr('disabled',false);
				$('#id_product').attr('disabled',false);
			}
			
		});
        $("#adminform").validate({
            rules: {
                title: "required",
               
                cost: "required",
                description: "required",
                content: "required",
                hoa_hong: "required"
            },
            messages: {
                title: "Vui lòng nhập tên",
                cost: "Vui lòng nhập giá",
               
                description: "Vui lòng nhập giới thiệu",
                content: "Vui lòng nhập nội dung",
                hoa_hong: "Vui lòng nhập hoa hồng"

            }
            , submitHandler: function(form) {
                var page = 1;
                dataString = $("#adminform").serialize();
                $.ajax({
                    type: "POST",
                    url: $("#adminform").attr('action'),
                    data: {title:$('#title_').val()},
                    mimeType: "multipart/form-data",
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        $.fancybox.close();
                        reload_callback("<?php echo base_url(); ?>admin/categoryadmin/list_cate", page, 'category_content');
                        show_msg(data.msg);
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("a.grouped_elements").fancybox({
            'padding': 0,
            'titleShow': false,
            'autoScale': false,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'hideOnOverlayClick': false,
            'hideOnContentClick': false,
            'overlayShow': true,
            'type': 'ajax'
        });
    });
</script>