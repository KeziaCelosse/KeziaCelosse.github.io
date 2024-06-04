
	

	
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
              <h3>Register</h3>
            </div>
    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
			
				<label for="first_name">First Name</label>
                <input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                <?php echo form_error('first_name','<p style="color:red" class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
				<label for="last_name">Last Name</label>
                <input class="form-control" type="text" name="last_name" id="last_name"  value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                <?php echo form_error('last_name','<p style="color:red" class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
				<label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p style="color:red" class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
				<label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required>
                <?php echo form_error('password','<p style="color:red" class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
				<label for="conf_password">Confirm Password</label>
                <input class="form-control" type="password" name="conf_password" id="conf_password" required>
                <?php echo form_error('conf_password','<p style="color:red" class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
			
                <?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
				<table>
					<tr class="form-control" >
						<td style="vertical-align: middle; font-family: Roboto; font-size: 12px; color:#b3b3b3"><br/>Gender: </td>
						<td style="vertical-align: middle; font-family: Roboto; font-size: 12px; color:#b3b3b3"><br/>&nbsp; <input size="5px" type="radio" name="gender" value="Male" <?php echo $mcheck; ?>/>&nbsp; Male</td>
						<td style="font-family: Roboto; font-size: 12px; color:#b3b3b3"><br/>&nbsp; <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>&nbsp; Female</td>
					</tr>
				</table>
            </div>
            <div class="form-group">
				<label for="Phone">Phone</label>
                <input class="form-control" type="text" name="phone" id="phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT" class="btn btn-block btn-primary">
            </div>
        </form><br/>
        <p style="font-size: 14px" >Already have an account? <a href="<?php echo base_url('auth/login'); ?>"><b>Login here</b></a></p>

				</div>
			</div>
			</div>
		</div>
		</div>
    </div>
  </div>