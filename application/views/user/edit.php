<h1>
    edit the User
</h1>
    
<?php echo form_open_multipart('user/'.$user['U_id'].'/update', array('id' => 'user_update')); ?>
<?php 
    function form_input_attr($attr)
    {
        $basic_attr = array(
            'id' => $attr,
            'name' => $attr,
        );
        return $basic_attr;
    }
    form_hidden('user_id', $user['U_id']);
?>

    
   <h3>姓名: <?php echo $user['Name']; ?></h3>

    <p>
        <label for="user_school">所屬學校：</label><br>
        <?php 
            
            $options = array();
            for ($i=0; $i < sizeof($school); $i++) { 
                $temp = array($school[$i]['school_id'] => $school[$i]['school_name'].$school[$i]['dept']);
                $options += $temp;
            }
            /*
            $options = array( $school[0]['school_id'] => $school[0]['school_name'].$school[0]['dept'],
                                $school[1]['school_id'] => $school[1]['school_name'].$school[1]['dept'],
                                $school[2]['school_id'] => $school[2]['school_name'].$school[2]['dept'],
                                $school[3]['school_id'] => $school[3]['school_name'].$school[3]['dept'],
                                $school[4]['school_id'] => $school[4]['school_name'].$school[4]['dept'],
                                $school[5]['school_id'] => $school[5]['school_name'].$school[5]['dept'],
                                $school[6]['school_id'] => $school[6]['school_name'].$school[6]['dept'],
                                $school[7]['school_id'] => $school[7]['school_name'].$school[7]['dept'],
                                $school[8]['school_id'] => $school[8]['school_name'].$school[8]['dept'],
                                $school[9]['school_id'] => $school[9]['school_name'].$school[9]['dept']);
             */                   
            echo form_dropdown('user_school', $options, $user_school['school_id'] );
         ?>
    </p>
    <p>
        <label for="user_sch_time">就學時間 : </label><br>
        <?php 
            echo form_input(form_input_attr('sch_Stime'),$user_school['s_time']);
        ?>
        ~
        <?php 
            echo form_input(form_input_attr('sch_Dtime'),$user_school['d_time']);
        ?>
    </p>

    <p>
        <label for='user_PHnum'>手機號碼：</label><br>
        <?php 
            echo form_input(form_input_attr('user_PHnum'),$user['Phone_number']);
         ?>
    </p>


    <p>
        <label for='user_background'>背景介紹：</label><br>
        <?php 
            echo form_textarea(form_input_attr('user_background'),$user['Background']);
         ?>
    </p>

    
    <p>
        <?php echo form_submit(array('class' => 'ff blue'), '更新') ?>
    </p>

<?php echo form_close(); ?>
