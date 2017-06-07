<!DOCTYPE html><html><head><meta content='登入' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>Oneday</title>
<link href="<?php echo base_url('static/common/css/icons-extra.css');?>" media="screen" rel="stylesheet" type="text/css" />
<?php $this->load->view('common/header-meta');?>
<script type="text/javascript" src="<?php echo base_url('static/common/js/rem.js');?>"></script>
</head>
<body id="startbbs">

    <div class="mui-content">
        <div class="ac_add">
            <?php if($topic_list):?>
                <div class="record">
                    <ul class="mui-table-view record_list">
                        <?php foreach ($topic_list as $v):?>
                            <a href="<?php echo url('topic_show',$v['topic_id']);?>">
                                <li class="mui-table-view-cell">
                                    <div class="mui-row">
                                        <div class="mui-col-xs-1 list_icon">
                                            <span class="mui-icon-extra mui-icon-extra-dictionary"></span>
                                        </div>
                                        <div class="mui-col-xs-6 list_content">
                                            <span class="user"><?php echo $v['username'];?>:</span>
                                            <span class="item"><?php echo $v['title'];?></span>
                                        </div>
                                        <div class="mui-col-xs-5 list_right">
                                            <span class="time"><?php echo friendly_date($v['updatetime'])?></span>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        <?php endforeach;?>
                    </ul>
                    <div class="add_day">
                        <a href="<?php echo site_url('topic/add');?>"><span class="mui-icon mui-icon-compose"></span>增加当天账单</a>
                    </div>
                </div>
            <?php else : ?>
                <div class="record">
                    <p class="express">今天还没有人记账呢。</p>
                    <p class="express">快来记下今天的帐吧~</p>
                    <a href="<?php echo site_url('topic/add');?>"><button class="btn_small_add">去记账</button></a>
                </div>
            <?php endif;?>
        </div>
                
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

    <div style="display:none">
       <?php $this->load->view('common/sidebar_login');?>
    </div>      

</body>
</html>