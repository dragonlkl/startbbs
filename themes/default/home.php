<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>9751 记账系统</title>
<meta name="keywords" content="<?php echo $settings['site_keywords']?>" />
<meta name="description" content="<?php echo $settings['short_intro']?>" />
<script type="text/javascript" src="<?php echo base_url('static/common/js/rem.js');?>"></script>

<?php $this->load->view('common/header-meta');?>
</head>
<body>

    <div class="mui-content">
        <div class="week_box">
            <a href="<?php echo site_url('Oneday/account_list')?>">
                <div class="day_box monday">
                    <p class="day">Monday</p>
                </div>
            </a>
            <a href="oneday.php">
                <div class="day_box tuesday">
                    <p class="day">Tuesday</p>
                </div>
            </a>
            <div class="day_box wednesday">
                <p class="day">Wednesday</p>
            </div>
            <div class="day_box thursday">
                <p class="day">Thursday</p>
            </div>
            <div class="day_box friday">
                <p class="day">Friday</p>
            </div>
            <div class="day_box saturday">
                <p class="day">Saturday</p>
            </div>
            <div class="day_box sunday">
                <p class="day">Sunday</p>
            </div>
        </div>

        <div class="foot_btn">
            <button class="btn_foot">周 结</button>
        </div>
        <div class="check_history"><a href="">查看历史账单</a></div>
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