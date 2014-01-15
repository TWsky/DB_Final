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
<body background="http://cdn.twitrcovers.com/wp-content/uploads/2013/12/Iron-Man-black-Background-l.jpg">
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
            <h2 align="center">Add new user</h2>
        </div>
    </div>
    <div class="span8 offset5">
        <div class="hero-unit">
            <h3><?php if(isset($exist) && $exist == 1) echo "User already exist!!"; ?></h3>
            <?php echo form_open_multipart('user/create', array('id' => 'user_create')); ?>
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
                    <label for="user_name">姓名：</label><br>
                    <?php 
                        echo form_input(form_input_attr('user_name')); 
                    ?>
                </p>

                <p>
                    <label for="user_school">所屬學校：</label><br>
                    <?php 
                        $options = array();
                        for ($i=0; $i < sizeof($school); $i++) { 
                            $temp = array($school[$i]['school_id'] => $school[$i]['school_name'].$school[$i]['dept']);
                            $options += $temp;
                        }
                        
                                            
                        echo form_dropdown('user_school', $options, 1 );
                     ?>
                </p>
                <p>
                    <label for="user_sch_time">就學時間(西元年分) : </label><br>
                    <?php 
                        echo form_input(form_input_attr('sch_Stime'));
                    ?>
                    ~
                    <?php 
                        echo form_input(form_input_attr('sch_Dtime'));
                    ?>
                </p>

                <p>
                    <label for='user_PHnum'>手機號碼：</label><br>
                    <?php 
                        echo form_input(form_input_attr('user_PHnum'));
                     ?>
                </p>


                <p>
                    <label for='user_background'>背景介紹：</label><br>
                    <?php 
                        echo form_textarea(form_input_attr('user_background'));
                     ?>
                </p>

                
                <p>
                    <?php echo form_submit(array('class' => 'ff blue'), '建立') ?>
                </p>
            </div>
        </div>
<?php echo form_close(); ?>
