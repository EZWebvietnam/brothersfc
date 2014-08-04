<script type="text/javascript">
    $(document).ready(function() {
        $("input").each(function() {
            $("input.readonly").css('background-color', '#f2f2f2');
        });
    });
</script>
<!--<script src="<?php echo base_url() ?>js_upload/jquery.fileUploader.js"></script>-->
<!--<script src="<?php echo base_url()?>js_upload/ajaxfileupload.js"></script>-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#upload_file').click(function(){
            var input = $('input[type=submit]');
            var form = input.length > 0 ? $(input[0].form) : $();
           
            fileUpload(input[0].form,"<?php echo base_url();?>upload/do_upload_new",'upload',"<?php echo base_url(); ?>admin/newsadmin/edit/"+<?php echo $detail[0]['id_new']?>); 
            return false;
        });
        $("a.grouped_elements").fancybox({
            'padding': 0,
            'titleShow': false,
            'autoScale': false,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'hideOnOverlayClick': false,
            'hideOnContentClick': false,
            'overlayShow': true,
            'type': 'ajax',
            'cache':false
        });
    });
</script>

<div class="h-pop">
    <div class="h-icon"></div>
    <h3>Sửa tin tức</h3>
</div>
<div class="m-pop">
    
    <form action="<?php echo base_url(); ?>admin/newsadmin/edit/<?php echo $detail[0]['id_new']?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="adminform" name="adminform">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên bài viết</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $detail[0]['title_new']?>"/>
                </td>
            </tr>
			<tr>
                <td class="label">Danh mục</td>
				<?php 
				$this->load->model('categorymodel');
				$list_cate = $this->categorymodel->list_cate();
				?>
                <td colspan="3">
                    <select name="category" id="category">
						<?php 
						foreach($list_cate as $l_c)
						{
							if($detail[0]['id_cate'] == $l_c['id_cate'])
							{
								$seleted ='selected=""';
							}
							else
							{
								$seleted ='';
							}
						?>
						<option <?php echo $seleted;?> value="<?php echo $l_c['id_cate']?>"><?php echo $l_c['title_cate']?></option>
						<?php } ?>
					</select>
                </td>
            </tr>
			<tr>
                <td class="label">Nổi bật</td>
				<td colspan="3">
				<?php 
				if($detail[0]['noi_bat']==1)
				{
				?>
				<input type="radio" id="radio_3" name="noi_bat" checked=""/>Có<input type="radio" id="radio_4" name="noi_bat"/>Không
				<?php } else { ?>
				<input type="radio" id="radio_3" name="noi_bat"/>Có<input type="radio" id="radio_4" name="noi_bat" checked=""/>Không
				<?php } ?>	
					
				</td>
            </tr>
			<tr>
                <td class="label">Loại bài</td>
				<td colspan="3">
				<?php 
				if($detail[0]['match_review']==0)
				{
				?>
				<input type="radio" id="radio_1" name="radio" value="1"/>Match Review<input type="radio" id="radio_2" name="radio" value="1" checked=""/>Bài viết thường
				<?php } else { ?>
				<input type="radio" id="radio_1" name="radio" value="1" checked=""/>Match Review<input type="radio" id="radio_2" name="radio" value="1" />Bài viết thường
				<?php } ?>
				</td>
            </tr>
			<tr>
                <td class="label">Trận đấu</td>
				<td colspan="3">
				<select name="match_review" id="match_review">
				<?php 
				$this->load->model('challengemodel');
				$list_match = $this->challengemodel->list_challenge_result();
				foreach($list_match as $l_result)
				{
					if($detail[0]['match_review'] == $l_result['id_result'])
					{
						$selected = "selected =''";	
					}
					else 
					{
						$selected = "";	
					}
				?>
				<option <?php echo $selected;?> value="<?php echo $l_result['id_result']?>">FUST vs <?php echo $l_result['team_challenge']?> - <?php echo $l_result['team_home']?>:<?php echo $l_result['team_visit']?></option>
				<?php } ?>
				</select>
				</td>
            </tr>
            <tr>
                <td class="label">Hình ảnh</td>
                <td colspan="3">
                    <input type="file" name="userfile"/>
                    <input id="upload_file"  type="button" class="bt100" value="Upload" onClick="">
                    <div id="iframeId">
                        <div id="upload"></div>
                    </div>
                    <input type='hidden' name='file' id='file'/>
                  
                    
                </td>
            </tr>
			<tr>
                <td class="label">Tóm tắt (Post lên facebook)</td>
                <td colspan="3">
                    <textarea style="margin: 2px; width: 1027px; height: 117px;" id="tom_tat" name="tom_tat"><?php echo $detail[0]['des']?></textarea>
                    
                </td>
            </tr>
            <tr>
                <td class="label">Nội dung</td>
                <td colspan="3">
                    <textarea id="editor2" name="editor2"><?php echo $detail[0]['content_new']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('editor2');
                    </script>
                </td>
            </tr>
            <td><input class="bt100" type="submit" value="Update"></td>

            </tr>

        </table>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
		<?php 
		if($detail[0]['match_review']!=0)
		{
		?>
		$('#match_review').attr('disabled',false);
		<?php } else { ?>
		$('#match_review').attr('disabled','disabled');
		<?php } ?>
		$('#radio_1').click(function(){
			$('#match_review').attr('disabled',false);
			$('#radio_1').val(1);
			$('#radio_2').val(0);
		})
		$('#radio_2').click(function(){
			$('#match_review').attr('disabled','disabled');
			$('#radio_2').val(1);
			$('#radio_1').val(0);
			
		})
		$('#radio_3').click(function(){
			$('#radio_3').val(1);
			$('#radio_4').val(0);
			
		})
		$('#radio_4').click(function(){
			$('#radio_4').val(1);
			$('#radio_3').val(0);
			
		})
        $("#adminform").validate({
            rules: {
                title: "required"
            },
            messages: {
                title: "Vui lòng nhập tên"                
            }
            , submitHandler: function(form) {
                var page = 1;
                dataString = $("#adminform").serialize();
                var content = CKEDITOR.instances['editor2'].getData();
				if($('#radio_2').val() == 1)
				{
					match_review = 0;	
				}
				else
				{
					match_review = $('#match_review').val();
				}
                $.ajax({
                    type: "POST",
                    url: $("#adminform").attr('action'),
                    data: {file:$('#file').val(),editor2:content,title:$('#title_').val(),category:$('#category').val(),radio_1:$('#radio_1').val(),radio_2:$('#radio_2').val(),match_review:match_review,desc:$('#tom_tat').val(),radio_3:$('#radio_3').val(),radio_4:$('#radio_4').val()},
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        $.fancybox.close();
                        reload_callback("<?php echo base_url(); ?>admin/newsadmin/list_new/?nocache="+Math.random(), page, 'new_content');
                        show_msg(data.msg);
                    }
                });
            }
        });
    });
</script>

