<?php
include_once 'import.php';
$allowedPages = ['basicforgotpasswordcoztheprogrammerislazytomakeasecuredforgotpasswordprocess', 'memory', 'vieworder', 'myorders','ordercompleted', 'finalizecheckout' ,'removecart', 'checkout' ,'editprofile', 'hidden', 'home' ,'index', 'changepassword', 'forgotpassword', 'register','login' , 'session' ,'products' ,'addtocart', 'cart' ,'myprofile' ,'clearcart' ,'omg-idonthavemoneysoiamforcedtologoutwithoutbuyingthisawesomeitems'];//array of pages that are available to access
$securedPages = [ 'vieworder', 'myorders','ordercompleted', 'finalizecheckout' ,'removecart', 'checkout' ,'editprofile', 'hidden', 'home' , 'changepassword' , 'session' ,'products' ,'addtocart', 'cart' ,'myprofile' ,'clearcart' ,'omg-idonthavemoneysoiamforcedtologoutwithoutbuyingthisawesomeitems'];
if(count($_GET) == 0){
	makeView('index');//This is the default page to be shown
}else{
	if(isset($_GET['page'])){
		$page =strtolower($_GET['page']);
		if(in_array($page, $allowedPages)){
			if(!in_array($page, $securedPages)){
			makeView($page);
			}else{
				if(s_get('id')){
					makeView($page);
				}else{
					error();
				}
			}
		}else{
			echo makeView('404');//404 error when page is found.
		}	
	}else{
		echo makeView('error');//404 error when page is found.
	}
	
}
?>