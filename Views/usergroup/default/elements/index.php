<!--Section 1-->
<div id="register" class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><i class="fa fa-user-plus"> </i> Fill up the Form like a glass of wine~</h1>
        <p class="lead"> </i> Registration Form</p>
        <hr/>
        <form action="?page=register" method='POST'>
          <input type='hidden' value='?page=index#sec1' name='redirect' />
          <div class='row'>
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
              <input type='password' class='form-control' name='password' placeholder='password' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Confirm Password</label>
            </div>
            <div class='col-md-8'>
              <input type='password' class='form-control' name='password1' placeholder='connfirm password' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Title</label>
            </div>
            <div class='col-md-8'>
              <select class='form-control' name='title'>
                <option value='Mr'>Mr</option>
                <option value='Ms'>Ms</option>
                <option value='Mrs'>Mrs</option>
              </select>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Given Name</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='givenname' placeholder='John' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Middle Name</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='middlename' placeholder='Mona' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Last Name</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='lastname' placeholder='Doe' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Birthdate</label>
            </div>
            <div class='col-md-8'>
              <input type='date' class='form-control' name='birthdate' placeholder='Doe' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Contact #</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='contactnumber' placeholder='639-9999' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Delivery Address</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='address' placeholder='Doe' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class='btn-group'>
                <button type='submit' value='Create Account' class='btn btn-primary' ><i class="fa fa-user-plus"></i> Create Account</button>
              </div>
              <div class='btn-group'>
                <input type='Reset' value='Reset' class='btn btn-danger' />
              </div>
              </div>
            </div>  
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>



<!--Section 2-->
<div class="featurette" id="sec2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Amazing Features</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-2 text-center">
        <div class="featurette-item">
          <i class="icon-rocket"></i>
          <h4>Rocket</h4>
          <p>Up-up-and-away with this starter template.</p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-magnet"></i>
          <h4>Magnet</h4>
          <p>For you are a magnet and I am steel.</p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-shield"></i>
          <h4>Shield</h4>
          <p>Protect yourself. Don't design like it's 1999.</p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-pencil"></i>
          <h4>Scholar</h4>
          <p>Because lead pencils are pretty smart looking.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Section 3-->
<div class="callout" id="sec3">
  <div class="vert">
    <div class="col-md-12 text-center"><h2>OMG! Look at the Background! Makes you wanna drink wine eh?</h2></div>
    <div class="col-md-12 text-center">&nbsp;</div>
    <div class="col-md-12">
      <div class="row ">
         <?php
  $products=products();
  while($row = mysqli_fetch_assoc($products)){

    echo '  
    <div class="col-md-4">
      <div class="panel panel-default">
         <div class="panel-heading text-center"><h2><i class="icon-chevron-left"></i>'.$row['name'].'</h2></div>
          <div class="panel-body text-center" style="color:black;">
            <input type="hidden" value="'.$row['name'].'" name="name"/ >
            <input type="hidden" value="'.$row['id'].'" name="id" />
            <input type="hidden" value="'.$row['price'].'" name="price" />
           <center>
           <img src="'.IMG.$row['name'].'.jpg" class="img-responsive" align=""  style="max-width: 300px;max-height: 300px;"/>
           </center>
           <hr/>
           Price: '.$row['price'].'<br/>
           Available Quantity: '.$row['quantity'].' <br/>
           Category: '.$row['category'].'
          
        </div>
      </div>
    </div>
    ';
  }
  ?>
  
      </div>
    </div>
  </div>
</div>

<!--Section 4-->
<div class="blurb well well-lg" id="sec4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Contact US</h1>
        
      </div>
    </div>
  </div>
</div>

<hr>


<div class="blurb bright">
  <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h3>Connect with us!</h3>
        <br>
      </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2><i class="fa fa-facebook-square"></i> Share a like?</h2></div>
         <div class="panel-body text-center">
          Like us on facebook!
          <hr>
          <button class="btn btn-lg btn-primary btn-block"><i class="fa fa-thumbs-up"></i> Like</button> 
          </div>
         </div>
 	</div>
    <div class="col-sm-4">
         <div class="panel panel-default">
         <div class="panel-heading text-center"><h2><i class="fa fa-twitter-square"></i> Get updates</h2></div>
         <div class="panel-body text-center">
          Follow us on twitter
          <hr>
          <button class="btn btn-lg btn-primary btn-block"><i class="fa fa-twitter"> </i> Follow</button> 
           
          </div>
         </div>
 	</div>
  </div>
</div>




