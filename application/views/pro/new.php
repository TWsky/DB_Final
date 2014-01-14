<h2>Add new Project by USER <?php echo $user_id; ?></h2>
<p></p>

<h3><?php if(isset($exist) && $exist == 1) echo "User already exist!!"; ?></h3>
<?php echo form_open_multipart('pro/'.$user_id.'/make', array('id' => 'pro_create')); ?>
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
        <label for="pro_name">計畫名稱：</label><br>
        <?php 
            echo form_input(form_input_attr('P_Name')); 
        ?>
    </p>

    
    <p>
        <label for="user_sch_time">Project Time : </label><br>
        <?php 
            echo form_input(form_input_attr('Start_Time'));
        ?>
        ~
        <?php 
            echo form_input(form_input_attr('Due_Time'));
        ?>
    </p>

    <p>
        <label for='user_background'>背景介紹：</label><br>
        <?php 
            echo form_textarea(form_input_attr('Content'));
         ?>
    </p>

    
    <p>
        <?php echo form_submit(array('class' => 'ff blue'), '建立') ?>
    </p>

<?php echo form_close(); ?>
