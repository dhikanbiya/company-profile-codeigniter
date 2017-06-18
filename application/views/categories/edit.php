

<?php foreach($show as $sh): ?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="<?php echo base_url()?>dashboard"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li class="current"><a href="<?php echo base_url()?>slides"><i class="glyphicon glyphicon-picture"></i>Slides</a></li>
                    <li><a href="<?php echo base_url()?>post/page/vision"><i class="fa fa-paper-plane-o"></i>Vision and Mission</a></li>
                    <li><a href="<?php echo base_url()?>post/pages/about"><i class="glyphicon glyphicon-book"></i>About</a></li></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Products
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Category</a></li>
                            <li><a href="signup.html">Create New Products</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12 panel-info">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit Category</div>
	  					<div class="panel-options">
								<a href="<?php echo base_url()?>category" data-rel="collapse"><span class="label label-success"><i class="glyphicon glyphicon-arrow-left"></i> back</span></a>								
							</div>
		  			</div>

		  			<div class="content-box-large box-with-header">
		  			<div class="row">
		  			<div class="col-md-6 col-sm-6 col-xs-6">
		  					<form method="post" action="<?php echo base_url()?>category/update">
		  					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
		  					<input type="hidden" name="slug" value="<?php echo $sh->slug;?>">
		  						<div class="form-group">
		  						    <label for="title">Name</label>
		  						    <input type="text" class="form-control" name="name" placeholder="Category name" value="<?php echo set_value('name',$sh->name); ?>">
		  						</div>		  
		  					  <div class="form-group">
		  					    <label for="desc">Description</label>
		  					  	<textarea class="form-control textarea" rows="5" name="desc"><?php echo set_value('desc',$sh->description); ?></textarea>  
		  					  </div>		  					  		  					  		  					  
		  					  <button type="submit" class="btn btn-success">Submit</button>
		  					</form>
		  				</div>	
		  			  <div class="col-md-6 col-sm-6 col-xs-6">
		  			  	<p><?php echo validation_errors(); ?></p>
		  			  	<?php echo $this->session->flashdata('message'); ?>
		  					<p>Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								</p>
		  				</div>
		  			</div>			  			
					</div>
		  		</div>
		  	</div>

		  	
		</div>
    </div>
<?php endforeach?>
    