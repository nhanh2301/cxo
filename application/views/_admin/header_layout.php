<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title; ?></title>
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
<body>
<div id="body-wrapper">
    <div id="sidebar">
        <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
            <a href="#"><?php echo image('assets/admin/img/logo.png', 'logo', 'Administrator Control Panel'); ?></a>
            <!-- Sidebar Profile links -->
            <div id="profile-links">
                Xin chào, <a href="#" title="Sửa thông tin cá nhân">Admin</a>!<br/>
                <br/>
                <a href="<?php echo site_url('/') ?>" title="Xem nội dung website">Xem website</a> | <a href="<?php echo site_url('admin/auth/logout'); ?>" title="Thoát khỏi trang quản trị">Thoát</a>
            </div>

            <ul id="main-nav">  <!-- Accordion Menu -->

                <li>
                    <a href="http://www.google.com" class="nav-top-item no-submenu">
                        <!-- Add the class "no-submenu" to menu items with no sub menu -->
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
                        Articles
                    </a>
                    <ul>
                        <li><a href="#">Write a new Article</a></li>
                        <li><a class="current" href="#">Manage Articles</a></li>
                        <!-- Add class "current" to sub menu items also -->
                        <li><a href="#">Manage Comments</a></li>
                        <li><a href="#">Manage Categories</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-top-item">
                        Pages
                    </a>
                    <ul>
                        <li><a href="#">Create a new Page</a></li>
                        <li><a href="#">Manage Pages</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-top-item">
                        Image Gallery
                    </a>
                    <ul>
                        <li><a href="#">Upload Images</a></li>
                        <li><a href="#">Manage Galleries</a></li>
                        <li><a href="#">Manage Albums</a></li>
                        <li><a href="#">Gallery Settings</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-top-item">
                        Events Calendar
                    </a>
                    <ul>
                        <li><a href="#">Calendar Overview</a></li>
                        <li><a href="#">Add a new Event</a></li>
                        <li><a href="#">Calendar Settings</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-top-item">
                        Settings
                    </a>
                    <ul>
                        <li><a href="#">General</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Your Profile</a></li>
                        <li><a href="#">Users and Permissions</a></li>
                    </ul>
                </li>

            </ul>
            <!-- End #main-nav -->

            <div id="messages" style="display: none">
                <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

                <h3>3 Messages</h3>

                <p>
                    <strong>17th May 2009</strong> by Admin<br/>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet
                    congue.
                    <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                </p>

                <p>
                    <strong>2nd May 2009</strong> by Jane Doe<br/>
                    Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis,
                    tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                    <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                </p>

                <p>
                    <strong>25th April 2009</strong> by Admin<br/>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet
                    congue.
                    <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                </p>

                <form action="" method="post">

                    <h4>New Message</h4>

                    <fieldset>
                        <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
                    </fieldset>

                    <fieldset>

                        <select name="dropdown" class="small-input">
                            <option value="option1">Send to...</option>
                            <option value="option2">Everyone</option>
                            <option value="option3">Admin</option>
                            <option value="option4">Jane Doe</option>
                        </select>

                        <input class="button" type="submit" value="Send"/>

                    </fieldset>

                </form>

            </div>
            <!-- End #messages -->

        </div>
    </div>
    <!-- End #sidebar -->

    <div id="main-content"> <!-- Main Content Section with everything -->