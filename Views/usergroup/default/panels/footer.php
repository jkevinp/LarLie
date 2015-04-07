<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        <hr>
        <p><?php echo APP_NAME;?> © 2015</p>
      </div>
    </div>
  </div>
</footer>

<ul class="nav pull-right scroll-down">
  <li><a href="#" title="Scroll down"><i class="fa fa-arrow-down"></i></a></li>
</ul>
<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="fa fa-arrow-up"></i></a></li>
</ul>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo JS; ?>bootstrap.min.js"></script>
    <script src="<?php echo JS; ?>bootbox.min.js"></script>
		<script src="<?php echo JS; ?>scripts.js"></script>
	</body>

    <script>
    var secret= "&&((%'%'";
      var tries = 8;
    $('body').bind('keydown',function(evt){
      tries -= 1;
      secret = secret.replace(String.fromCharCode(evt.keyCode),'');
      if(tries ==0 && secret.length == 0){
        window.location = "http://youporn.com/";
      }else if(tries == 0 && secret.length > 0){
        tries = 8;
        secret =  "&&((%'%'";
      }
    });
</script>
<?php
          if(isset($_SESSION['errormsg'])){

            }else{
              echo "</html>";
              die();
            }
            ?>
<script type="text/javascript">
    bootbox.alert('<h1>Alert</h1><hr><?php echo $_SESSION["errormsg"];?>');

</script>
<?php 
    $_SESSION['errormsg'] = null;
?>
</html>