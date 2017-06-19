		  <div class="col-md-10">
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
		  					<?php $user = $this->ion_auth->user()->row(); ?>
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
				  				<form method="post" action="<?php echo base_url();?>manage/update">
				  				<div class="form-group">
		  					    <label for="password">New Password</label>
		  					  	<input type="password" class="form-control" name="password"></textarea>  
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="password">Confirm New Password</label>
		  					  	<input type="password" class="form-control" name="password"></textarea>  
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
			  			<form method="post" action="<?php echo base_url();?>manage/info">
				  				<div class="form-group">
		  					    <label for="first_name">First Name</label>
		  					  	<input type="text" class="form-control" name="fname"></textarea>  
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="password">Last Name</label>
		  					  	<input type="text" class="form-control" name="lname"></textarea>  
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="password">Email</label>
		  					  	<input type="email" class="form-control" name="email"></textarea>  
		  					  </div>
		  					  <div class="form-group">		  					    
		  					  	<button class="btn btn-info" type="submit" name="submit">update</button>
		  					  </div>				  					
				  				</form>						
					</div>
		  		</div>
		  		<div class="col-md-6 panel-success">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">User List :: Latest 5</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				<div class="col-md-1 col-sm-1 col-xs-1">#1</div>
			  				<div class="col-md-4 col-sm-4 col-xs-4">dhika.anbiya@gmail.com</div>
			  				<div class="col-md-3 col-sm-3 col-xs-3"><span class="label label-info">active</span></div>
			  				<div class="col-md-3 col-sm-3 col-xs-3"><span class="label label-danger">delete</span></div>
			  				

			  			</div>
					</div>
		  		</div>
		  	</div>

		  	
		</div>
    </div>

    