<div class="well well-lg lead text-center">
	Congratulations! <br/>You have forgotten your password, to prevent that from happening click <a href="<?php echo URL;?>?page=memory">here!</a>	
</div>
        <form action='?page=basicforgotpasswordcoztheprogrammerislazytomakeasecuredforgotpasswordprocess' method='post'>
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
            <div class='col-md-12'>
              <div class='btn-group btn-group-justified' role='group' aria-label='...'>
              <div class='btn-group'>
                <button  type="submit" value='Forgot Password' class='btn btn-warning'><i class='fa fa-question'></i> Forgot Password</button>
              </div>
              </div>
            </div>  
          </div>
        </form>
