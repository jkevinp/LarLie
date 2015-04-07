<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo APP_NAME;?></title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo CSS; ?>bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo CSS; ?>font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo CSS; ?>styles.css" rel="stylesheet">

  </head>
<body>

<div class="navbar navbar-fixed-top navbar-bold" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo URL;?>" class="navbar-brand"><i class="fa fa-leaf"></i> <?php echo APP_NAME;?></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <?php 
          if(s_get('email')){
            echo '

                  <li><a href="'.URL.'?page=myorders"><i class="fa fa-send"> </i> My Orders</a></li>
                  <li><a href="'.URL.'?page=cart"><i class="fa fa-cart-plus"></i> My Cart</a></li>
                  <li><a href="'.URL.'?page=products"><i class="fa fa-flask"></i> Products</a></li>

                  <li><a href="'.URL.'?page=myprofile"><i class="fa fa-user"> </i> Profile</a></li>
                  <li><a href="'.URL.'?page=omg-idonthavemoneysoiamforcedtologoutwithoutbuyingthisawesomeitems">
                  <i class="fa fa-sign-out"></i>
                  Logout</a></li>';
          }else{
            echo '
                  <li><a href="'.URL.'?page=index#register"><i class="fa fa-user-plus"></i> Create Account</a></li>
                  <li><a href="'.URL.'?page=index#sec3"><i class="fa fa-book"></i> View Menu</a></li>
                  <li><a href="'.URL.'?page=index#sec4"><i class="fa fa-phone"></i> Contact</a></li>';
          }
        ?>
        
      </ul>
    </div>
   </div>
  
   
</div>
<?php
if(s_get('email')){

}else{
  echo "<br/><br/><div class='header vert'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-6'>
    <h1> <i class='fa fa-leaf'> </i> ".APP_NAME."</h1>
      <p class='lead'>".APP_DESC."</p>
      <div>&nbsp;</div>
    </div>
    <div class='col-md-6'>
      <LEGEND class='lead'><i class='fa fa-sign-in'> </i> I have an account!</LEGEND>
        <form action='?page=login' method='post'>
          <div class='row'>
            <input type='hidden' name='redirect' value='?page=index' />
            <div class='col-md-4'>
              <label class='lead'>Email</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' placeholder='youremailaddress@website.com' name='email' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Password</label>
            </div>
            <div class='col-md-8'>
              <input type='password' class='form-control' name='password' placeholder='Password' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <div class='btn-group btn-group-justified' role='group' aria-label='...'>
                <div class='btn-group'>
                  <button type='submit' value='Sign-in' class='btn btn-primary'><i class='fa fa-sign-in'></i> Sign-In</button>
                </div>
                <div class='btn-group'>
                <a href='".URL."#register' type='button' value='Create Account' class='btn btn-success'><i class='fa fa-user-plus'></i> Create Account</a>
              </div>
              <div class='btn-group'>
                <a href='".URL."?page=forgotpassword' value='Forgot Password' class='btn btn-warning'><i class='fa fa-question'></i> Forgot</a>
              </div>
              </div>
            </div>  
          </div>
        </form>
    </div>
    </div>
  </div>
</div>";
}
?>
