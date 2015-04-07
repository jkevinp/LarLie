<?php
if(session_id() === ''){
	session_start();
}
function s_addUser($p){
	s_set('email' , $p['1']);
	s_set('givenname' , $p['3']);
	s_set('middlename' , $p['4']);
	s_set('lastname' , $p['5']);
	s_set('title' , $p['7']);
	s_set('id' , $p['0']);
	s_set('contactnumber' , $p['9']);
	s_set('address' , $p['10']);
	s_set('birthdate' , $p['11']);

}

function s_set($key, $val){
	$_SESSION[$key] = $val;
}
function s_remove($key){
	unset($_SESSION[$key]);
}
function s_remove_cart($index){
	unset($_SESSION['cart'][$index]);
}
function s_get($key){
	if(isset($_SESSION[$key])){
		return $_SESSION[$key];
	}else{
		return null;	
	}
	
}
function s_clear(){
	session_destroy();
	session_start();
}
?>