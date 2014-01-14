
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>USER/show</title>
</head>
<body>

	<h3>姓名: <?php echo $user['Name']; ?></h3>
    <h3>所屬學校系: <?php echo $school['school_name'].$school['dept']; ?></h3>
    <h3>就學年份: <?php echo $user_school['s_time']." ~ ".$user_school['d_time']; ?></h3>
    <h3>自我介紹: <br><?php echo $user['Background']; ?></h3>
    
    

