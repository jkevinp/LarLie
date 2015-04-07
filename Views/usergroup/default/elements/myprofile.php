<?php

?>
<div id="sec1" class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Remember this?</h1>
        <p class="lead">My Profile</p>
        <hr/>
        <form action="?page=editprofile" method='POST'>
          <input type='hidden' value='?page=index#sec1' name='redirect' />
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Email</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' placeholder='youremailaddress@website.com' name='email' value="<?php echo s_get('email'); ?>" />
            </div>
          </div>
         
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Title</label>
            </div>
            <div class='col-md-8'>
              <select class='form-control' name='title' value="<?php echo s_get('title'); ?>">
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
              <input type='text' class='form-control' name='givenname' placeholder='John' value="<?php echo s_get('givenname'); ?>" />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Middle Name</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='middlename' placeholder='Mona' value="<?php echo s_get('middlename'); ?>" />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Last Name</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='lastname' placeholder='Doe' value="<?php echo s_get('lastname'); ?>" />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Birthdate</label>
            </div>
            <div class='col-md-8'>
              <input type='date' class='form-control' name='birthdate' placeholder='Doe' value="<?php echo s_get('birthdate'); ?>"/>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Contact #</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='contactnumber' placeholder='639-9999' value="<?php echo s_get('contactnumber'); ?>" />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
              <label class='lead'>Delivery Address</label>
            </div>
            <div class='col-md-8'>
              <input type='text' class='form-control' name='address' placeholder='Doe' value="<?php echo s_get('address'); ?>" />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class='btn-group'>
                <input type='submit' value='Save Changes.' class='btn btn-primary' />
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



<div id="sec1" class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Security bish~</h1>
        <p class="lead">Change Password</p>
        <hr/>
        <form action="?page=changepassword" method='POST'>
          <div class='row'>
            <div class='col-md-4'>
                  <label class='lead'>Old Password</label>
            </div>
            <div class='col-md-8'>
                <input type='password' class='form-control' name='password' placeholder='Password' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
                  <label class='lead'>New Password</label>
            </div>
            <div class='col-md-8'>
                <input type='password' class='form-control' name='newpassword' placeholder='Password' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-4'>
                  <label class='lead'>Confirm Password</label>
            </div>
            <div class='col-md-8'>
                <input type='password' class='form-control' name='newpassword1' placeholder='Password' />
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <div class='btn-group btn-group-justified' role='group' aria-label='...'>
                <div class='btn-group'>
                  <button type='submit' class='btn btn-primary'><i class='fa fa-gears'></i> Change Password</button>
                </div>
                <div class='btn-group'>
                <button type='button'  class='btn btn-danger'><i class='fa fa-remove'></i> Reset</button>
              </div>
            </div></div></div>
        </form>
        
      </div>
    </div>
  </div>
</div>
