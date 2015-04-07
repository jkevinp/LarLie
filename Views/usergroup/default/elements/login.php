<?php
 	if(login()){
			redirect(URL.'?page=products');
		}else{

			redirect(URL.'?page=index');
		}
?>