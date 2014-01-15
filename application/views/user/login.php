<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="http://140.112.106.152/exchange/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body background="http://cdn.twitrcovers.com/wp-content/uploads/2013/04/Music-Headphones-l.jpg">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                
                <a class="brand" href="<?php echo base_url('/main/index/');?>">SKILTOP</a>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
            <h2 align="center">Login Page =D</h2>
        </div>
    </div>
    <div class="span6 offset5">
            <div class="hero-unit">
               <?php echo form_open_multipart('user/logged', array('id' => 'user_login')); ?>
                <?php 
                function form_input_attr($attr)
                {
                    $basic_attr = array(
                        'id' => $attr,
                        'name' => $attr
                    );
                    return $basic_attr;
                }
                ?>
                <p>
                    <label for="login_name">使用者姓名：</label>
                    <?php 
                        echo form_input(form_input_attr('login_name')); 
                    ?>
                </p>
                <p>
                   <label for="login_name">使用者手機：</label>
                    <?php 
                        echo form_input(form_input_attr('login_ph')); 
                    ?> 
                </p>
                <p align="center">
                    <?php echo form_submit(array('class' => 'ff blue'), '建立') ?>
                </p>

                <?php echo form_close();?>
                <h3><?php if(isset($exist) && $exist == 0) echo "查無此User!!"; ?></h3>
            </div>
        </div>
   
</html>