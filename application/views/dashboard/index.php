		  <div class="col-md-10">
		  <h5 class="text-center text-success"><?php echo $this->session->flashdata('message'); ?></h5>
		  <h5 class="text-center text-danger"><?php echo validation_errors(); ?></h5>
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Welcome</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">		  					
		  					<h3>Hello, <?php echo $user->username;?></h3>
		  					This is your backend page to manage all the content on the frontend. Have yourself at home, for any question or issues don't mind to contact my email by <a href="mailto:dhika.anbiya@gmail.com?Subject=[dk-internusa]issues" target="_top"><h4><span class="label label-info"><i class="fa fa-envelope-o"> </i> clicking this</span></h4></a>
							<br />
		  				</div>
		  			</div>
		  		</div>


		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Update Password</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				<form method="post" action="<?php echo base_url();?>dashboard/update">
				  				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				  				<div class="form-group">
		  					    <label for="password">New Password</label>
		  					  	<input type="password" class="form-control" name="password"></textarea>  
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="password">Confirm New Password</label>
		  					  	<input type="password" class="form-control" name="passwordconf"></textarea>  
		  					  </div>
		  					  <div class="form-group">		  					    
		  					  	<button class="btn btn-info" type="submit" name="submit">update</button>
		  					  </div>				  					
				  				</form>									
							</div>
		  				</div>
		  			</div>		  			
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-md-6 panel-info">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Update Basic Information</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<form method="post" action="<?php echo base_url();?>dashboard/info">
			  			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				  				<div class="form-group">
		  					    <label for="first_name">First Name</label>
		  					  	<input type="text" class="form-control" name="fname" value="<?php echo set_value('fname',$user->first_name);?>"></textarea>  
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="password">Last Name</label>
		  					  	<input type="text" class="form-control" name="lname" value="<?php echo set_value('lname',$user->last_name);?>">
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="password">Email</label>
		  					  	<input type="email" class="form-control" name="email" value="<?php echo set_value('email',$user->email);?>">  
		  					  </div>
		  					  <div class="form-group">		  					    
		  					  	<button class="btn btn-info" type="submit" name="submit">update</button>
		  					  </div>				  					
				  				</form>						
					</div>
		  		</div>
		  		<?php if ($this->ion_auth->in_group(1)): ?>
		  		<div class="col-md-6 panel-success">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">User List :: Latest 5</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
		  			<?php $i=1; ?>
		  			<?php foreach($ulist as $u): ?>
			  			<div class="row">
			  				<div class="col-md-1 col-sm-1 col-xs-1"><?php echo $i++ ?></div>
			  				<div class="col-md-4 col-sm-4 col-xs-4"><?php echo $u->email?></div>
			  				<div class="col-md-3 col-sm-3 col-xs-3"><span class="label label-info">active</span></div>
			  				<?php if($u->id != $user->id): ?>
			  				<div class="col-md-3 col-sm-3 col-xs-3"><span class="label label-danger">delete</span></div>
			  			<?php endif?>
			  			</div>
			  		<?php endforeach ?>
					</div>
		  		</div>
		  	<?php endif?>
		  	</div>

		  	
		</div>
    </div>

    