<?php
	$result = changePassword();
	if($result){
		redirect(URL.'?page=myprofile');
	}else{
		redirect(URL.'?page=myprofile');
	}
?>