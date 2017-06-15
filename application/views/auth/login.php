<!DOCTYPE html>
<html lang="en" style="background: url('http://cdn.backgroundhost.com/backgrounds/subtlepatterns/gplaypattern.png'); color: transparent;">
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

</head>
<body style="background-color: none;">
    <div id="main" style="margin-top: 100px; padding: 30px;">
    <div class="text-center">      
      <h1><?php echo lang('login_heading');?></h1>
      <div id="infoMessage"><?php echo $message;?></div>     
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-4">                       
            <?php echo form_open("auth/login", array('class'=>'login-form form-horizontal'));?>

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
        <div class="col-md-3 col visible-md visible-lg">
          <img src="https://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa3e4b03c7ec20696a1/1426726819527/Placeholder+Logo.png?format=300w" class="img-responsive" style="height: 170px; width: auto;">
        </div>
    </div>
      
    </div>


    </body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
