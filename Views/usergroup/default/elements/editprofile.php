<?php
	$result = editUser();
	if($result){
		redirect(URL.'?page=omg-idonthavemoneysoiamforcedtologoutwithoutbuyingthisawesomeitems');
	}else{
		redirect(URL.'?page=myprofile');
		msg('Something went wrong :(');
	}
?>