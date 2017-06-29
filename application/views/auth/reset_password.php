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
        #frg{
            
            margin-top: 50px;              
        }
    </style>

</head>
<body>
<div class="container" id="frg">
		<h1><?php echo lang('reset_password_heading');?></h1>

		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open('auth/reset_password/' . $code);?>
			<div class="form-group">
				<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
			</div>
			<div class="form-group row">
				<div class="col-md-4">
					<?php echo form_input($new_password);?>	
				</div>				
			</div>

			<div class="form-group">
				<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
			</div>
			<div class="form-group row">
				
				<div class="col-md-4">
					<?php echo form_input($new_password_confirm);?>
				</div>
				
			</div>

			<?php echo form_input($user_id);?>
			<?php echo form_hidden($csrf); ?>

			<p><?php echo form_submit('submit', lang('reset_password_submit_btn'), array('class'=>'btn btn-success'));?></p>

		<?php echo form_close();?>
</div>

</body>
</html>