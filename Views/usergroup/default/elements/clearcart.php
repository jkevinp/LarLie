<?php
	s_remove('cart');
	s_set('cart' , array()	);
	redirect('?page=cart');
?>