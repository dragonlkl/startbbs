<!DOCTYPE html>
<html>
<head>
<meta content='<?php echo $title?> - ' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>Acoount Add</title>
<?php $this->load->view('common/header-meta');?>
<script type="text/javascript" src="<?php echo base_url('static/common/js/rem.js');?>"></script>
<link href="<?php echo base_url('static/common/css/icons-extra.css');?>" media="screen" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('static/common/js/plugins.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('static/common/js/jquery.upload.js')?>" type="text/javascript"></script>
<?php if($this->config->item('storage_set')=='local'){?>
<script src="<?php echo base_url('static/common/js/local.file.js')?>" type="text/javascript"></script>
<?php } else{?>
<script src="<?php echo base_url('static/common/js/qiniu.js')?>" type="text/javascript"></script>
<?php }?>
</head>
<body id="startbbs">
    <div class="mui-content">
        <div class="add_detail">
            <ul class="mui-table-view add_item">
                <li class="mui-table-view-cell">
                    <div class="mui-row">
                        <div class="mui-col-xs-3 item_left">
                            事&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项
                        </div>
                        <div class="mui-col-xs-9 item_right">
                            <input type="text" class="ipt_txt" placeholder="支出事项">
                        </div>
                    </div>
                </li>
                <li class="mui-table-view-cell">
                    <div class="mui-row">
                        <div class="mui-col-xs-3 item_left">
                            支&nbsp;出&nbsp;人
                        </div>
                        <div class="mui-col-xs-9 item_right">
                            <div class="mui-radio">
                                <input name="radio1" type="radio"  checked="">
                                <span class="radio_txt">G</span>
                            </div>
                            <div class="mui-radio">
                                <input name="radio1" type="radio">
                                <span class="radio_txt">Y</span>
                            </div>
                            <div class="mui-radio">
                                <input name="radio1" type="radio" >
                                <span class="radio_txt">L</span>
                            </div>
                            <div class="mui-radio">
                                <input name="radio1" type="radio">
                                <span class="radio_txt">S</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mui-table-view-cell">
                    <div class="mui-row">
                        <div class="mui-col-xs-3 item_left">
                            支出今额
                        </div>
                        <div class="mui-col-xs-9 item_right">
                            <input type="text" class="ipt_txt" placeholder="请输入金额">
                        </div>
                    </div>
                </li>
                <li class="mui-table-view-cell">
                    <div class="mui-row">
                        <div class="mui-col-xs-3 item_left">
                            消&nbsp;费&nbsp;人&nbsp;
                        </div>
                        <div class="mui-col-xs-9 item_right">
                            <div class="mui-checkbox">
                                <input name="checkbox" value="Item 1" type="checkbox" checked="">
                                <span class="radio_txt">G</span>
                            </div>
                            <div class="mui-checkbox">
                                <input name="checkbox" value="Item 2" type="checkbox" >
                                <span class="radio_txt">Y</span>
                            </div>
                            <div class="mui-checkbox">
                                <input name="checkbox" value="Item 2" type="checkbox" >
                                <span class="radio_txt">L</span>
                            </div>
                            <div class="mui-checkbox">
                                <input name="checkbox" value="Item 2" type="checkbox" >
                                <span class="radio_txt">S</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="txt_express">
            注：G代表睿晗，Y代表坤燕，L代表坤龙，S代表胜平
        </div>

        <div class="list_btn">
            <button class="btn_list">提交</button>
        </div>

        <?php if($this->session->userdata('uid')){ ?>
            <div class="person">
                <span class="mui-icon mui-icon-contact mui-icon-icon-contact"></span>
                <span class="user_name"><?php echo $this->session->userdata('username');?></span>
                <a href="<?php echo site_url('user/logout')?>">退出</a>
            </div>
        <?php }else{?>
            <div class="person">
        
                <a href="<?php echo site_url('user/login')?>">登录</a>
            </div>

        <?php }?>

    </div>
        
        
              
</body>
</html>