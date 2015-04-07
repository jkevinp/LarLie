<div class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Summary</h1>
        <LEGEND>Transactions</LEGEND>
	    <table class="table-hover col-md-12 table-bordered text-center table-justified" style="padding:10px	">
        	<thead class="lead">
        		<tr>
        			<td><i class="fa fa-tag"></i> Transaction id</td>
        			<td><i class="fa fa-cart-plus"></i> Cart Id</td>
        			<td><i class="fa fa-plus-square"></i> Status</td>
        			<td><i class="fa fa-send"></i> Shipping Fee</td>	
        			<td><i class="fa fa-plus"></i> Tax</td>
        			<td><i class="fa fa-dollar"></i> Total Price</td>
        		</tr>
        	</thead>
        	<tbody>
 			<?php
			$orders = execSql('select * from transactions where transactions.userid="'.s_get('id').'"');
			while ($value = mysqli_fetch_assoc($orders)) {
					echo '<tr>';
					echo '<td>'.$value['id'].'</td>';
					echo '<td> <a href="'.URL.'?page=vieworder&cartid='.$value['cartid'].'">'.$value['cartid'].' <i class="fa  fa-external-link-square"></i> </a></td>';
					echo '<td>'.$value['status'].'</td>';
					echo '<td>'.number_format($value['shippingfee'],2).'</td>';
						echo '<td>'.number_format($value['tax'],2).'</td>';
					echo '<td>'.number_format($value['totalprice'],2).'</td>';
					echo '</tr>';
	        }
            ?>
			</tbody>
        </table>
        <legend></legend>
        
        	      </div>
    </div>
  </div>
</div>
