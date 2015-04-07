<?php
	$result= execsql('SELECT * from user where email="'.$_POST['email'].'" limit 1');
	$data = mysqli_fetch_assoc($result);
	if($data !== null){
		echo '<div class="well well-lg lead text-center">Your forgotten password is '.$data['password'].'</div>';
	}else{
		echo '<div class="well well-lg lead text-center"> The Email-Address does not belong to any account!</div>';
	}
?>