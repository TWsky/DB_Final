<h2>Add new user</h2>
<p></p>

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
        <label for="user_sch_time">就學時間 : </label><br>
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

<?php echo form_close(); ?>
