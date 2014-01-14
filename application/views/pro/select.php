<h1>User <?php echo $user_id; ?> Select Exist Project</h1>
<br><br>
<?php 
echo form_open('pro/'.$user_id.'/update', array('name'=>'user_pro_update'));
for ($i=0; $i < sizeof($all_pro); $i++) 
    {   
        $check_value = 0;
        for ($j=0; $j < sizeof($pid_exist); $j++) { 
            if($all_pro[$i]['P_id'] == $pid_exist[$j])
                $check_value = 1;
        }
        echo form_checkbox('pro_check[]', $all_pro[$i]['P_id'], $check_value);
        echo '<h4>'.$all_pro[$i]['P_Name'].'</h4>';
        echo '<h6>'.$all_pro[$i]['Start_Time'].' ~ '.$all_pro[$i]['Due_Time'].'</h6>';
        echo '<h6>'.$all_pro[$i]['Content'].'</h6>';
        echo '<br>';
    }
?>
    <p>
        <?php echo form_submit(array('class' => 'ff blue'), '更新') ?>
    </p>

<?php echo form_close(); ?>

