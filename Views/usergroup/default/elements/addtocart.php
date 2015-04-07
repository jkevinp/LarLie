<?php
	addtocart();

?>
<div class="featurette" id="sec2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Added new product to cart!</h1>
      </div>
    </div>
    <div class="row">
      	<?php
		
				echo '<p class="lead text-center">Now .. now... now.. What to do next?</p>';
				echo '<a href="'.URL.'?page=products" class ="btn btn-block btn-success">Show me moreeee Products</a>';
				echo '<a href="'.URL.'?page=cart" class ="btn btn-block btn-success">Check out my cart!</a>';	
			
		?>
    </div>
  </div>
</div>