<div class="blurb bright">
  <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h3>Look at all those products~</h3>
        <br>
         <a href="<?php echo URL;?>?page=cart" class="btn btn-lg btn-success btn-block" value=""><i class="fa fa-cart-plus"> </i> Go to Cart</a>
         <hr> 
      </div>
  </div>
  
  <div class="row">
    <?php
	$products=products();
	while($row = mysqli_fetch_assoc($products)){

		echo '
		<form action="'.URL.'?page=addtocart" method="POST">
		<div class="col-sm-4">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2><i class="icon-chevron-left"></i>'.$row['name'].'</h2></div>
         <div class="panel-body text-center">
         <input type="hidden" value="'.$row['name'].'" name="name"/ >
         <input type="hidden" value="'.$row['id'].'" name="id" />
         <input type="hidden" value="'.$row['price'].'" name="price" />
         <input type="hidden" value="'.$row['quantity'].'" name="max" />
         <center>
         <img src="'.IMG.$row['name'].'.jpg" class="img-responsive img-circle" align=""  style="max-width: 300px;max-height: 300px;"/>
         </center>
         Price: '.$row['price'].'<br/>
         Available Quantity: '.$row['quantity'].' <br/>
         Category: '.$row['category'].'
         <hr>
         Order Details~
         <input type="number" name="orderquantity" placeholder="How many?" class="form-control"/>
         <hr>
          <button type="submit" class="btn btn-lg btn-success btn-block" value="Add To Cart"><i class="fa fa-cart-plus"></i> Add To Cart</button> 
          </div>
         </div>
 		</div>
 		</form>
 		';
	}
	?>
  </div>
</div>
