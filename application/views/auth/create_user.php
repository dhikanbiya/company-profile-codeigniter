<div class="col-md-3">
  <div class="content-box-large">
    <div class="panel-heading">
      <div class="panel-title"><?php echo lang('create_user_heading');?></div>    
    </div>
    <div class="panel-body"> 
      <p><?php echo $message;?></p>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="content-box-large">
    <div class="panel-heading">
       
  </div>
    <div class="panel-body">                
      <?php echo form_open("auth/create_user",array('class'=>'form-horizontal'));?>

            <div class="form-group">
                  <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                  <?php echo form_input($first_name);?>
            </div>

            <div class="form-group">
                  <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                  <?php echo form_input($last_name);?>
            </div>
            
            <?php
            if($identity_column!=='email') {
                echo '<p>';
                echo lang('create_user_identity_label', 'identity');
                echo '<br />';
                echo form_error('identity');
                echo form_input($identity);
                echo '</p>';
            }
            ?>

            <div class="form-group">
                  <?php echo lang('create_user_company_label', 'company');?> <br />
                  <?php echo form_input($company);?>
            </div>

            <div class="form-group">
                  <?php echo lang('create_user_email_label', 'email');?> <br />
                  <?php echo form_input($email);?>
            </div>

            <div class="form-group">
                  <?php echo lang('create_user_phone_label', 'phone');?> <br />
                  <?php echo form_input($phone);?>
            </div>

            <div class="form-group">
                  <?php echo lang('create_user_password_label', 'password');?> <br />
                  <?php echo form_input($password);?>
            </div>

            <div class="form-group">
                  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                  <?php echo form_input($password_confirm);?>
            </div>


            <p><?php echo form_submit('submit', lang('create_user_submit_btn'), array('class'=>'btn btn-success'));?></p>

      <?php echo form_close();?>    
    </div>
  </div>
</div>







