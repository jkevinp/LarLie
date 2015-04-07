<?php
function redirect($x){
	//$_SESSION['r'] = $x;
	if(headers_sent()){

	}else{
		header('Location: '.$x);
		exit;
	}
}
function products(){
	return showProducts();
}
function addtocart(){
	if(isset($_POST['orderquantity'])){
		if($_POST['orderquantity'] > 0 && $_POST['orderquantity'] <= $_POST['max'])
		array_push($_SESSION['cart'], ['id' => $_POST['id'] , 'price' => $_POST['price'] , 'quantity' => $_POST['orderquantity'] , 'name' => $_POST['name']]);
		else {
			msg('Invalid quantity');
			redirect(URL.'?page=products');	
		}
	}
}
function removefromcart(){
	s_remove_cart($_GET['id']);
	redirect(URL.'?page=cart');
}
function getCart(){
	return s_get('cart');
}
function login(){
	$required = ['redirect' , 'email' ,'password'];
	$test = validate($required, $_POST);
	if($test){
		$r = findUser($_POST['email'] , $_POST['password']);
		if($r){
			s_addUser($r);
			s_set('cart' , array());
			msg('Login Successful');
			return true;
		}else{
			msg('Incorrect Id or Password');
		}
	}else{
		msg('All fields are required and must be greater than 6 characters');
	}	
	return false;
}
function gender($title){
	if($title === 'Mr' || $title === 'MR'){
		return 'Male';
	}else{
		return 'Female';
	}
}
function changePassword(){
	$required = ['password' , 'newpassword' , 'newpassword1'];
	$test = validate($required, $_POST);
	if($_POST['newpassword'] !== $_POST['newpassword1']){msg('Password does not match!');return false;}
	if($test){
		if(s_get('email')){
			$user = findUser(s_get('email'), $_POST['password']);
			if(!$user){msg('Incorrect Password!'); return false;}
			$input = array('password' => $_POST['newpassword']);
			$r = updateUser($user[0], $input);
			if($r){
				msg('Password has been updated!');
				return true;
			}else error();
		}else{
			msg('Please login to continue');
			return false;
		}	
	}else{
		msg('Please fill all fields.');
		return false;
	}
	return false;	
}
function register(){
	$required =array('redirect', 'title', 'email','password','password1','givenname','middlename','lastname' ,'birthdate', 'contactnumber', 'address');
	$test =validate($required , $_POST);
	if($test){
		if(match('password',$_POST['password'], $_POST['password1'])){
			if(checkEmail($_POST['email'])){
				if(countUser($_POST['email']) == 0){
					$input = $_POST;
					unset($input['password1']);
					unset($input['redirect']);
					$sql = buildSql('insert' ,'user', $input);
					$param =buildParam($input);
					if(execsql($sql)){
						msg('Registration Successful!');
						return true;
					}else{
						error();
					}
				}else{
					msg('Email-Address is already in use!');
				}
			}
		}
	}
	return false;
}
function checklen($string, $no){
	if(strlen($string) >= $no){
		return true;
	}else{
		return false;
	}
}
function editUser(){
	$required =array('redirect', 'title', 'email','givenname','middlename','lastname' ,'birthdate', 'contactnumber', 'address' , 'gender');
	if(validate($required , $_POST)){
			$id = s_get('id');
			if(checkEmail($_POST['email'])){
				$input = $_POST;
				$input['gender'] = gender($_POST['title']);
				unset($input['redirect']);
				if(updateUser($id , $input)){
					msg('Successfully updated profile!');
					return true;	
				}
			}
	}
	return false;
}
function msg($m){
		$_SESSION['errormsg'] = $m;
}
function p($t){
	return $_POST[$t];
}
function validate($required, $input){
	$exep = ['title' , 'redirect', 'givenname' ,'lastname' ,'middlename'];
	foreach ($input as $key => $value) {
		if(!in_array($key, $required) || empty($value)){
			$_SESSION['errormsg'] = 'The '. $key. ' is required and must be at greater than 6 characters';
			return false;
		}

		if(!checklen($value, 6) && !in_array($key, $exep)){
			$_SESSION['errormsg'] = 'The '.$key .' must be greater than 6 characters';
			return false;
		}
	}
	return true;
}
function checkEmail($str){
	$email = $str;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['errormsg'] = 'Invalid Email-Address format';
  		return false;
	}
	return true;
}
function match($key,$a,$b){
	if ($a === $b){
		return true;
	}else{
		$_SESSION['errormsg'] = 'The '. $key. ' is must be the same!';
		return false;
	}
}
function getDir($usergroup){
	return VIEWS.$usergroup;
}
function makeView( $page, $nooutput = false){
	$page = DEF_ELE.$page.'.php';
	if(file_exists($page)){
		if($nooutput){
			include_once $page;
		}else{
		include_once DEF_PANELS.'header.php';
		include_once $page;
		include_once DEF_PANELS.'footer.php';
		}
	}else{ 
		die('VIEW CANNOT BE FOUND! <br/> page : '.$page);
	}
}
function completetransaction(){
	$cartid = sha1(rand());
	$input = [];
	$cart = s_get('cart');
	$insertcart = [];
	echo '<br/><br/><br/><br/>';
	foreach ($cart as $key => $value) {
		array_push($insertcart, [
			'cartid' =>$cartid,
			'id' =>$value['id'] ,
			'name' => $value['name'] ,
			'price'=>$value['price'] ,
			 'quantity' =>$value['quantity'] , 
			'totalprice' =>	$value['quantity'] * $value['price']
			]);
	}
	$sql = 'insert into cart(cartid,productid,productname,price,quantity,totalprice) values';
	$max = count($cart);
	$count=0;
	$updateSql = [];
	foreach ($insertcart as $key => $value) {
		$sql .= '("'.$cartid.'","'.
			$value['id'] .'","'.
			$value['name'] .'","'.
			$value['price'] .'","'.
			$value['quantity'] .'","'.
			$value['quantity'] * $value['price'].'")';	
		if($count < $max -1){
				$sql = $sql.',';
			}
			$count++;
				array_push($updateSql, 'UPDATE `products` set `products`.`quantity`=quantity-'.$value['quantity'].' WHERE `products`.`id`="'.$value['id'].'" limit 1');
	
	}
	$result = execsql($sql);
	$newSql = '';
	foreach ($updateSql as $strsql) {
		$newSql = $newSql.$strsql.'; ';
	}
	$result = execMultiSql($newSql);
	yolo($cartid);
}

function yolo($cartid){
	$sql1 = 'insert into transactions(id,cartid,totalprice,subtotal,shippingfee,tax,status,userid) values';
	$sql1 .= '("'.sha1(rand()).'","'.$cartid.'","'.$_POST['totalprice'].'","'.$_POST['subtotal'].'","'.s_get('shippingfee').'",
		"'.$_POST['tax'].'","created","'.s_get('id').'")';
	$result = execsql($sql1);
	s_remove('shippingfee');
	s_remove('cart');
	s_set('cart' , array());


}
function error(){
	makeView('error');
}
?>
