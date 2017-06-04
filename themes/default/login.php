<!DOCTYPE html><html><head><meta content='登入' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>登录</title>
<?php $this->load->view('common/header-meta');?>
</head>
<body id="startbbs">

    <div class="mui-content">
        <div class="login_icon">
            <span class="mui-icon mui-icon-qq"></span>      
        </div>

        <div class="form_login">
			<form accept-charset="UTF-8" action="<?php echo site_url('user/login');?>" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
			<input type="hidden" name="<?php echo $csrf_name;?>" value="<?php echo $csrf_token;?>">
			    <ul class="mui-table-view login_list">
                    <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3"> 
                                <p class="item_name">账 号：</p>
                            </div>
				            <div class="mui-col-xs-9">
				                <input class="form-control item_ipt" id="user_nickname" name="username" size="50" type="text" value="<?php echo set_value('username'); ?>"/><span class="help-block red"><?php echo form_error('username');?></span>
				            </div>
                        </div>
                    </li>
                    <li class="mui-table-view-cell">
                        <div class="mui-row">
                            <div class="mui-col-xs-3">
                                <p class="item_name">密 码：</p>
                            </div>
                            <div class="mui-col-xs-9">
				                <input class="form-control item_ipt" id="user_password" name="password" size="50" type="password" value="<?php echo set_value('password'); ?>"/>
				                <span class="help-block red"><?php echo form_error('password');?></span>
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
				                <input class="form-control item_ipt" id="captcha_code" name="captcha_code" size="50" type="text"  value="<?php echo set_value('captcha_code'); ?>"/>
				                <span class="help-block red"><?php echo form_error('captcha_code');?></span>
				            </div>
            				<div class="mui-col-xs-5">
            				    <a href="javascript:reloadcode();" title="更换验证码"><img src="<?php echo site_url('captcha_code');?>" name="checkCodeImg" id="checkCodeImg" border="0" /></a>&nbsp;&nbsp;<a href="javascript:reloadcode();">换一张</a>
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
				<div class="list_btn">
					<button type="submit" name="commit" class="btn btn_list">登入</button>
                    <a href="<?php echo site_url('user/register');?>" class="btn btn_list_f mt20">现在注册</a>
                 </div>

			</form>
        </div> 
    </div> 

	<div style="display:none">
	   <?php $this->load->view('common/sidebar_login');?>
    </div>      

</body>
</html>