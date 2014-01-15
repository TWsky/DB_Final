
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>USER/show</title>
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
<body background="http://cdn.twitrcovers.com/wp-content/uploads/2014/01/Mirrors-Edge-l.jpg">
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
            <h2 align="center">user info</h2>
        </div>
    </div>
    <div class>
        <div class="span8 offset5">
            <div class="hero-unit">
	<h3>姓名: <?php echo $user['Name']; ?></h3>
    <h3>所屬學校系: <?php echo $school['school_name'].$school['dept']; ?></h3>
    <h3>就學年份: <?php echo $user_school['s_time']." ~ ".$user_school['d_time']; ?></h3>
    <h3>自我介紹: <br><?php echo $user['Background']; ?></h3>
    <h3>參與計畫:</h3>
    <?php

    for ($i=0; $i < sizeof($project); $i++) 
    { 
        echo '<h4>'.$project[$i]['P_Name'].'</h4>';
        echo '<h6>'.$project[$i]['Start_Time'].' ~ '.$project[$i]['Due_Time'].'</h6>';
        echo '<h6>'.$project[$i]['Content'].'</h6>';
    }
    ?>
       </div>
    </div>
    <?php //print_r($user); ?>
        
    

