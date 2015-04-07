<?php
    if(count(getCart()) === 0){
        error();
       }
?>
<div id="sec1" class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Summary</h1>
        <p class="lead">Cart items</p>
        <hr/>
        <table class="table-hover col-md-12 table-bordered">
        	<thead class="lead">
        		<tr>
        			<td>Product ID</td>
        			<td>Product Name</td>
        			<td>Price per unit</td>
        			<td>Order Quantity</td>
        			<td>Total Price</td>
        		</tr>
        	</thead>
        	<tbody>

 			<?php
 			$total = 0;
			$cartitems = getCart();
			if($cartitems){
				foreach ($cartitems as $key => $value) {
                    
					echo '<tr>';
					echo '<td>'.$value['id'].'</td>';
					echo '<td>'.$value['name'].'</td>';
					echo '<td>'.$value['price'].'</td>';
					echo '<td>'.$value['quantity'].'</td>';
					echo '<td>'.($value['quantity'] * $value['price']).'</td>';
					$total += ($value['quantity'] * $value['price']);
					
					echo '</tr>';
				}
			}else{
				echo '<p class="lead text-center">No Items in cart!</p>';
				echo '<a href="'.URL.'?page=products" class ="btn btn-block btn-success"><i class="fa fa-flask"></i> Go To Products</a>';
			}

		?>
			</tbody>
        </table>
        <legend></legend>
        	<div class='pull-right lead text-right'>
        		<div class='row'>Sub-Total: <?php echo number_format($total,2);?>
        		</div>
        		<div class='row'>Tax: 12%
        		</div>
        		<hr style="color:black"/>
        		<div class='row'><font color='red'>Total: <?php echo number_format(($total * 1.12),2 );?>(w/o shipping fee)</font>	
        		</div>
        	</div>
        	
      </div>
    </div>
  </div>
</div>
        
		<div class='col-md-10 col-md-offset-1'>
			<LEGEND class='lead'>Shipping Details</LEGEND>
			<div class='row'>
        		<div class='col-md-4'>
        			Select Location: 
        		</div>
        	   <form action="<?php echo URL;?>?page=finalizecheckout" method="post">
            	<div class='col-md-6'>
        			<select class='form-control' name="shippingfee">
        				<option value="110">Luzon - ADD. PHP 110.00</option>
        				<option value="130">Visayas - ADD. PHP 130.00</option>
        				<option value="150">Mindanao - ADD. PHP 150.00</option>
        			</select>
        		</div>
        		<div class='col-md-2'>
        			<input type='submit' class='btn btn-block btn-success' value="Proceed!"/>
        		</div>
            </form>
        	</div>
        </div>	