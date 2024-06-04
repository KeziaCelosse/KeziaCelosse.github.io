


  

  <div class="d-lg-flex half">
    <div class="bg order-2 order-md-1" style="background-image: url('<?php echo base_url();?>assets/login/images/bg_1.jpg');"></div>
    <div class="contents order-1 order-md-2">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
    
	<!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success btn btn-block btn-outline-success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error btn btn-block btn-outline-danger">'.$error_msg.'</p>'; 
        } 
    ?>
            <div class="mb-4">
              <h3>Reset Password</h3>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
               
				<label for="email">Email</label>
				<input type="email" name="email" ="" class="form-control" id="email">
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
				

              </div>
              
              <div class="d-flex mb-5 align-items-center">
					<p style="font-size: 14px" >Already have an account? <a href="<?php echo base_url('auth/login'); ?>"><b>Login here</b></a></p>
              </div>

			  <div class="send-button">
				<input type="submit" name="loginSubmit" value="Reset" class="btn btn-block btn-primary">
			  </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
