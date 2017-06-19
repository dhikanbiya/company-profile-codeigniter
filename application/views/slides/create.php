		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12 panel-info">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Create New Slides</div>
	  					<div class="panel-options">
								<a href="<?php echo base_url()?>slides" data-rel="collapse"><span class="label label-success"><i class="glyphicon glyphicon-arrow-left"></i> back</span></a>								
							</div>
		  			</div>

		  			<div class="content-box-large box-with-header">
		  			<div class="row">
		  			<div class="col-md-6 col-sm-6 col-xs-6">
		  					<form method="post" action="<?php echo base_url()?>slides/create" enctype="multipart/form-data">
		  					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
		  						<div class="form-group">
		  						    <label for="title">Title</label>
		  						    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo set_value('title'); ?>">
		  						</div>		  					 
		  						 <div class="form-group">
		  						    <label for="title">Link</label>
		  						    <input type="text" class="form-control" name="link" placeholder="slide link" value="<?php echo set_value('link'); ?>">
		  						    <p class="help-block">Ex: #home <span class="text-warning">(internal link)</span> or http://www.blabla.com <span class="text-warning">(external link)<span></p>
		  						</div>
		  					  <div class="form-group">
		  					    <label for="desc">Slide Caption</label>
		  					  	<textarea class="form-control textarea" rows="5" name="desc"><?php echo set_value('desc'); ?></textarea>  
		  					  </div>		  					  
		  					  <div class="form-group">
		  					    <label for="image">Image</label>		  					    
		  					    <input type="file" name="userfile" value="<?php echo set_value('userfile');?>">
		  					    <p class="help-block">Example block-level help text here.</p>
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

    