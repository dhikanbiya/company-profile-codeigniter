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
    <div class="container">    
        <div class="row">  
        	<div class="col-md-6" id="frg">
        		<h1><?php echo lang('forgot_password_heading');?></h1>
        		<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

        		<p><?php echo $message;?></p>

        		<?php echo form_open("auth/forgot_password",array('class'=>'form-horizontal'));?>

        		      
        		      
        		      	<div class="col-xs-6">
        		      		<?php echo form_input($identity);?>	
        		      	</div>
        		      	
        		      

        		      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),array('class'=>'btn btn-success'));?></p>

        		<?php echo form_close();?>
        	</div>
				</div>
			</div>
	</body>
</html>
