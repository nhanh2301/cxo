<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <title>Đăng nhập quản trị website</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/reset.css'); ?>" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/style.css'); ?>" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/invalid.css'); ?>" type="text/css"
          media="screen"/>

    <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/ie.css'); ?>" type="text/css" media="screen"/>
    <![endif]-->
    <script type="text/javascript" src="<?php echo site_url('assets/admin/js/jquery-1.11.1.min.js'); ?>"></script>
    <script type="text/javascript"
            src="<?php echo site_url('assets/admin/js/simpla.jquery.configuration.js'); ?>"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo site_url('assets/admin/js/DD_belatedPNG_0.0.7a.js'); ?>"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.png_bg, img, li');
    </script>
    <![endif]-->
</head>

<body id="login">

<div id="login-wrapper" class="png_bg">
    <div id="login-top">
        <h1>Cẩm Xuyên Online - camxuyen.com</h1>
        <?php echo image('assets/admin/img/logo.png'); ?>
    </div>
    <!-- End #logn-top -->

    <div id="login-content">
        <?php if (!empty($message)): ?>
            <div class="notification information png_bg">
                <div>
                    <?php echo $message; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php echo form_open("admin/auth/login"); ?>

        <p>
            <?php echo lang('login_identity_label', 'identity'); ?>
            <?php echo form_input($identity); ?>
        </p>

        <div class="clear"></div>
        <p>
            <?php echo lang('login_password_label', 'password'); ?>
            <?php echo form_input($password); ?>
        </p>

        <div class="clear"></div>
        <p id="remember-password">
            <?php echo form_checkbox('remember', '1', FALSE); ?>
            <?php echo lang('login_remember_label'); ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_submit('submit', lang('login_submit_btn'), 'class="button"'); ?>
        </p>

        <div class="clear"></div>
        <p>&nbsp;</p>

        <p id="remember-password"><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
        <?php echo form_close(); ?>
</body>
</html>