<!DOCTYPE html>
<html>
	<head>
<meta content='注册' name='description'>
<meta charset='UTF-8'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>注册</title>
<?php $this->load->view('common/header-meta');?>
</head>
<body id="startbbs">
    <div class="mui-content">
        <div class="login_icon">
            <span class="mui-icon mui-icon-qq"></span>      
        </div>
        <div class="form_login">

			<form accept-charset="UTF-8" action="<?php echo site_url('user/register');?>" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
			    <input type="hidden" name="<?php echo $csrf_name;?>" value="<?php echo $csrf_token;?>">
			    <ul class="mui-table-view login_list">
                    <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3"> 
                                <p class="item_name">用户名：</p>
                            </div>
                            <div class="mui-col-xs-9">
				                <input class="form-control item_ipt" id="user_nickname" name="username" type="text" value="<?php echo set_value('username'); ?>" /><span class="help-block red"><?php echo form_error('username');?></span>
                            </div>
			            </div>
                    </li>
                    <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3"> 
                                <p class="item_name">邮 件：</p>
                            </div>
			
                            <div class="mui-col-xs-9">
				                <input class="form-control item_ipt" id="user_email" name="email" size="50" type="email" value="<?php echo set_value('email'); ?>" />
				                <span class="help-block red"><?php echo form_error('email');?></span>
                            </div>
                        </div>
                    </li>
                    <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3"> 
                                <p class="item_name">密 码：</p>
                            </div>
                            <div class="mui-col-xs-9">
				                <input class="form-control item_ipt" id="user_password" name="password" type="password" value="<?php echo set_value('password'); ?>" />
				                <span class="help-block red"><?php echo form_error('password');?></span>
				            </div>
			            </div>
                    </li>
                    <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3"> 
                                <p class="item_name">密码确认:</p>
                            </div>
                            <div class="mui-col-xs-9">
				                <input class="form-control item_ipt" id="user_password_confirmation" name="password_confirm" type="password" value="<?php echo set_value('password_confirm'); ?>" /><span class="help-block red"><?php echo form_error('password_confirm');?></span>
            				</div>
            			</div>
                    </li>
			        <?php if($this->config->item('show_captcha')=='on'){?>
        			 <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3"> 
                                <p class="item_name">验证码：</p>
                            </div>
                            <div class="mui-col-xs-4"> 

        				        <input class="form-control item_ipt" id="captcha_code" name="captcha_code" size="50" type="text" value="<?php echo set_value('captcha_code'); ?>" />
        				        <span class="help-block red"><?php echo form_error('captcha_code');?></span>
        				    </div>
                            <div class="mui-col-xs-5"> 
        				        <a href="javascript:reloadcode();" title="更换验证码"><img src="<?php echo site_url('captcha_code');?>" name="checkCodeImg" id="checkCodeImg" border="0" /></a> <a href="javascript:reloadcode();">换一张</a>
        				    </div>
        			    </div>
            			<script language="javascript">
            			//刷新图片
            			function reloadcode() {//刷新验证码函数
            			 var verify = document.getElementById('checkCodeImg');
            			 verify.setAttribute('src', '<?php echo site_url('captcha_code?');?>' + Math.random());
            			}
            			</script>
                    </li>
                    <?php }?>
                </ul>
    			<div class='list_btn'>
					<button type="submit" name="commit" class="btn btn_list">注册</button>
    			</div>
			</form>
                    
            <div style="display:none">
				<?php $this->load->view('common/sidebar_login');?>
				<?php $this->load->view('common/sidebar_ad');?>
            </div><!-- /.col-md-4 -->
        </div><!-- /.col-md-4 -->

    </div><!-- /.container -->

</body>
</html>