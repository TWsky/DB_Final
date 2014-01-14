<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login Page :)</h1>
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
    <p>
        <?php echo form_submit(array('class' => 'ff blue'), '建立') ?>
    </p>

    <?php echo form_close();?>
    <h3><?php if(isset($exist) && $exist == 0) echo "查無此User!!"; ?></h3>
</body>
</html>