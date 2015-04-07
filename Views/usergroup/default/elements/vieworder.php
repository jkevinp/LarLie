<?php if(!isset($_GET['cartid']) || empty($_GET['cartid']))die('<br/><br/><br/><br/><br/>No id provided');
?>
<div class="featurette" id="sec2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>View Order~</h1>
      </div>
    </div>
    <div class="row">
      	<?php
      		$transaction = execSql('SELECT * FROM transactions where `cartid`="'.$_GET['cartid'].'" limit 1');
      		$transaction=  mysqli_fetch_row($transaction);
      		echo '<div class="well" style="color:black"> ';
      		echo 'Transaction ID: '.$transaction[0].'<br/>';
      		echo 'Cart ID: '.$transaction[1].'<br/>';
      		echo 'Total Price: '.$transaction[2].'<br/>';
      		echo 'Sub-total: '.$transaction[3].'<br/>';
      		echo 'Shipping Fee:'.$transaction[4].'<br/>';
      		echo 'Tax:'.$transaction[5].'<br/>';

      		echo 'Status: '.$transaction[6].'<br/></div>';
			$cartitems = execSql('SELECT * from cart where cartid="'.$_GET['cartid'].'"');
      		$ctr =0;
			if($cartitems){
			foreach ($cartitems as $key => $value) {
				echo '<div class="col-md-2 text-center">';
		        echo '
		        <div class="featurette-item">
		            <img src="'.IMG.$value['productname'].'.jpg" class="img-responsive img-circle" align=""  style="max-width: 150px;max-height: 150px;"/>
		        ';
		         echo '<h4>'.$value['productname'].'</h4>';
		         echo '<p>Quantity: '.$value['quantity'].'</p>';
		         echo '<p>Price: '.$value['price'].'</p>';
		         echo '
		        </div>
		      </div>';
          $ctr++;
			}
			}else{
				echo '<p class="lead text-center">No Items in order!</p>';
			}
		?>
    </div>
  </div>
</div>
<a href="<?php echo URL;?>?page=myorders" class ="btn btn-block btn-success"><i class="fa fa-send"></i> Go To Orders</a>

