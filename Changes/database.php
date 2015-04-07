<?php
	function execsql($sql ){
		 $con =  new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die('could not establish database connection');
		 if (mysqli_connect_errno()){
        	printf("Connect failed: %s\n", mysqli_connect_error());
        	error();
        	exit();
    	}
		$result = mysqli_query($con , $sql) or die('<br/><br/><br/><br/><br/><br/><br/>ERROR');
		return $result;
	}
	function buildSql($mode,$table,$input){
		$sql = $mode .' INTO `'.$table.'`(';
		$count = 0;
		$values = ' values(';
		$max =count($input);
		foreach ($input as $key => $value) {
			$sql = $sql."".$key."";
			$values = $values."'".$value."'";
			if($count < $max -1){
				$values = $values.",";
				$sql = $sql.',';
			}else{
				$sql = $sql.')';
				$values = $values.')';
			}
			$count++;
		}
		return $sql.$values;
	}
	function execMultiSql($sql){
				 $con =  new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die('could not establish database connection');
		 if (mysqli_connect_errno()){
        	printf("Connect failed: %s\n", mysqli_connect_error());
        	error();
        	exit();
    	}
		$result = mysqli_multi_query($con , $sql) or die('<br/><br/><br/><br/><br/><br/><br/>ERROR');
		return $result;
	}
	function buildArraySql($table, $key , $input){
		/*$count = 0;
		$max = count($cart);
		$sql = 'insert into '.$table.'(';
		$keycount = count($key);
		foreach ($key => $value) {
			$sql .= $key
			if($count < $keycount -1){
				$sql = $sql.',';
			}
			$count++;
		}
		$sql .= ') values';
		$count = 0;
		//(cartid,productid,productname,price,quantity,totalprice)
		foreach ($input as $key => $value) {
		$sql = $sql. '('.$cartid.','.$value['id'].','.
			$value['name'] .','.
			$value['price'] .','.
			$value['quantity'] .','.
			$value['quantity'] * $value['price'];
			$sql .= ')';
			if($count < $max -1){
				$sql = $sql.',';
			}
			$count++;
	}	
	return $sql;
	*/
	}
	function buildUpdateSql($table, $input , $flag){
		$count = 0;
		$max =count($input);
		$sql = "update ".$table." set ";
		foreach ($input as $key => $value) {
			$sql  .= $key."='".$value."'";
			if($count < $max -1){
				$sql = $sql.',';
			}else{
				$sql = $sql.' where '.$flag;
			}
			$count++;
		}
		return $sql;
	}
	function buildParam($input){
		$param = "";
		foreach ($input as $key => $value) {
				$param = $param.'s';
			}
			return $param;
	}
	function showProducts($category =false){
		
		$notin = '';
		$count = count(s_get('cart'));
		$ctr =0 ;
		if($count > 0){
			foreach (s_get('cart') as $key => $value) {
				$notin = $notin.' '.$value['id'];
				if($ctr < $count -1){
					$notin = $notin.',';
				}
				$ctr++;
			}
			$sql = $sql = "SELECT * FROM products where quantity > 0 and id not in(".$notin.")" ;
		}else{
			$sql = "SELECT * FROM products where quantity > 0";
		}
		if ($category){
			$sql .= " where";
		}
		if($category) $sql .= " category ='".$category."' ";
		$result = execsql($sql);
		return ($result);
	}
 	function executeSql($sql ,$input){
 		if(defined('DEBUG')){
 			var_dump($sql);
 			var_dump($input);
 		}
   		$db =new PDO(PDO_DSN, DB_USER, DB_PASS, []);
   	 	$statement = $db->prepare($sql);
        $statement->execute($input);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $output = $statement->fetchAll();
        return $output;
   }  
   function findUser($email, $password){
   		$sql = "SELECT * FROM user where email='".$email."' and password='".$password."' limit 1";
   		$result = execsql($sql);
   		$row = mysqli_fetch_row($result);
        return $row;
   }
   function updateUser($id , $input){
		$sql = buildUpdateSql('user', $input , "id='".$id."'");
		$result = execsql($sql);
		if(defined('DEBUG')){
			var_dump($sql);
			var_dump($id);
			var_dump($input);
		}
		return $result;
   }
   function countUser($email){
   		$sql = "SELECT count(*) FROM user where email='".$email."'";
   		$result = execsql($sql);

   		$row = mysqli_fetch_row($result);
   		if(defined('DEBUG')){
   			var_dump($sql);
   			var_dump($email);
   			var_dump($result);
   			var_dump($row);
   		}
        return $row[0];

   }

?>