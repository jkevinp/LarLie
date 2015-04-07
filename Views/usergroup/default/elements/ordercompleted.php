<div class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Summary</h1>
        <LEGEND>Shipping Details</LEGEND>
	Email : <?php echo s_get('email');?><br/>
	Full Name : <?php echo s_get('givenname').' '.s_get('middlename').' '.s_get('lastname');?><br/>
	Contact # : <?php echo s_get('contactnumber');?><br/>
	Address: <?php echo s_get('address');?>
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
        		<div class='row'>Shipping Fee: <?php echo number_format(( s_get('shippingfee')),2 );?>
        		</div>
        		<hr style="color:black"/>
        		<div class='row'><font color='red'>Total: <?php echo number_format(($total * 1.12 + s_get('shippingfee')),2 );?>(with shipping fee)</font>	
        		</div>
        	</div>
      </div>
    </div>
  </div>
</div>
<?php	completetransaction();?>
<script type="text/javascript">print();</script>