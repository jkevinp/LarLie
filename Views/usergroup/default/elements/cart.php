<div class="featurette" id="sec2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>My Cart~</h1>
      </div>
    </div>
    <div class="row">
      	<?php
			$cartitems = getCart();
      $ctr =0;
			if($cartitems){
			foreach ($cartitems as $key => $value) {

				echo '<div class="col-md-2 text-center">';
		        echo '<a href="?page=removecart&id='.$ctr.'" class="btn btn-danger"><i class="fa fa-remove"></i> Remove</a>
		        <br/><br/>
		        <div class="featurette-item">
		            <img src="'.IMG.$value['name'].'.jpg" class="img-responsive img-circle" align=""  style="max-width: 150px;max-height: 150px;"/>
		        ';
		         echo '<h4>'.$value['name'].'</h4>';
		         echo '<p>Quantity: '.$value['quantity'].'</p>';
		         echo '<p>Price: '.$value['price'].'</p>';
		         echo '
		        </div>
		      </div>';
          $ctr++;
			}
			}else{
				echo '<p class="lead text-center">No Items in cart!</p>';
				echo '<a href="'.URL.'?page=products" class ="btn btn-block btn-success">Go To Products</a>';
			}
		?>
    </div>

  </div>
</div>

<div class="blurb bright">
  
  <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h3>Choose your Destiny~</h3>
        <br>
      </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2><i class="icon-chevron-left"></i> I need more items!</h2></div>
         <div class="panel-body text-center">
         	Pressing me will just redirect you to a page where you'll find many products you may want. Why not try clicking me so that
         	<strike> we can earn more~</strike> you can select more items that you want to buy.
          <br/><br/>
         <hr>
          <a href="<?php echo URL;?>?page=products" class="btn btn-lg btn-primary btn-block"><i class='fa fa-flask'></i> Go to products</a> 
          </div>
         </div>
 	</div>
    <div class="col-sm-4">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2>I am READY! <i class="icon-chevron-right"></i></h2></div>
         <div class="panel-body text-center">If you're ready, <sub> and also your wallet</sub> Click Me to help you
         	compute your bills and find a way to deliver your items to your place!
         	<br/><br/><br/>
         <hr>
         <?php
         		if($cartitems){
         			echo ' <a href="'.URL.'?page=checkout" class="btn btn-lg btn-success btn-block"><i class="fa fa-cc"></i>  Proceed to Checkout</a> ';
         		}else{
         				echo ' <a href="'.URL.'?page=checkout" class="btn btn-lg btn-success btn-block disabled"><i class="fa fa-stop"></i> Not so fast! Bro~</a> ';
         		
         		}
           ?>
          </div>
         </div>
 	</div>
  </div>
</div>