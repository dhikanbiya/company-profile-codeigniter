<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login: DK-Internusa</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <style type="text/css">
        html,body{
            background: url('http://cdn.backgroundhost.com/backgrounds/subtlepatterns/gplaypattern.png');
        }
        #logo{
            height: 170px;
            width: auto; 
            margin: 0px auto;  
            clip-path: circle(85px at center);
            margin-top: 30px;
        }
    </style>

</head>
<body">
    <div class="container">    
        <div class="row">  
            <div class="col-md-12 col-xs-12 col-sm-12">
                <p><img src="<?php echo base_url();?>assets/images/pp.jpeg" class="img-responsive" id="logo"></p>
            </div>    
            <div class="col-md-3 col-md-offset-3">
              <h3><?php echo lang('login_heading');?></h3>
              <p>Please login with a valid credentials</p>
              <p><?php echo $message;?></p>
            </div>  
            <div class="col-md-3 col-xs-12 col-sm-12"> 
                <div style="padding: 15px;">
                    <?php echo form_open("auth/login", array('class'=>'login-form form-horizontal'));?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="form-group">
                        <?php echo lang('login_identity_label', 'identity');?>
                            <?php echo form_input($identity);?>
                    </div>
                    <div class="form-group">
                        <?php echo lang('login_password_label', 'password');?>
                        <?php echo form_input($password);?>
                    </div>
                    <div class="form-group">
                        <?php echo lang('login_remember_label', 'remember');?>
                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                    </div>

                    <div class="form-group">
                        <?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-success"');?>
                         <a href="forgot_password" class="pull-right"><?php echo lang('login_forgot_password');?></a>
                    </div>

                    <?php echo form_close();?>  
                </div>     
            </div>            
        </div>
      
    </div>



    </body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
