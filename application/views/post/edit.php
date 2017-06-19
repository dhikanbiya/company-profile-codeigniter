	<?php foreach($show as $sh):?>   
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12 panel-info">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit Page :: <?php echo $sh->page; ?></div>
	  					<div class="panel-options">
								<a href="<?php echo base_url()?>slides" data-rel="collapse"><span class="label label-success"><i class="glyphicon glyphicon-arrow-left"></i> back</span></a>								
							</div>
		  			</div>

		  			<div class="content-box-large box-with-header">
		  			<div class="row">
		  			<div class="col-md-6 col-sm-6 col-xs-6">
		  					<form method="post" action="<?php echo base_url()?>post/update" enctype="multipart/form-data">
		  					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
		  					<input type="hidden" name="page" value="<?php echo $sh->page;?>" />		  							  					 
		  						
		  					  <div class="form-group">
		  					    <label for="desc">Section One</label>
		  					  	<textarea class="form-control textarea" rows="5" name="section_one"><?php echo set_value('section_one',$sh->section_one); ?></textarea>  
		  					  </div>
		  					  <div class="form-group">
		  					    <label for="desc">Section Two</label>
		  					  	<textarea class="form-control textarea" rows="5" name="section_two"><?php echo set_value('section_two',$sh->section_two); ?></textarea>  
		  					  </div>		  					  		  					  
		  					  <div class="form-group">
		  					    <label for="image">Image</label>		  					    
		  					    <input type="file" name="userfile" value="<?php echo set_value('userfile',$sh->image);?>">
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
								<p>Image Preview</p>
								<img src="<?php echo base_url().'assets/images/pages/'.$sh->image;?>" class="img-responsive">
		  				</div>
		  			</div>			  			
					</div>
		  		</div>
		  	</div>

		  	
		</div>
    </div>
  <?php endforeach?>

    