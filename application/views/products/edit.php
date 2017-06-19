<?php foreach($show as $sh): ?>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12 panel-info">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit Products:: <?php echo $sh->title;?></div>
	  					<div class="panel-options">
								<a href="<?php echo base_url()?>products" data-rel="collapse"><span class="label label-success"><i class="glyphicon glyphicon-arrow-left"></i> back</span></a>								
							</div>
		  			</div>

		  			<div class="content-box-large box-with-header">
		  			<div class="row">
		  			<div class="col-md-6 col-sm-6 col-xs-6">
		  					<form method="post" action="<?php echo base_url()?>products/update" enctype="multipart/form-data">
		  					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
		  					<input type="hidden" name="slug" value="<?php echo $sh->slug;?>" />
		  					<input type="hidden" name="img" value="<?php echo $sh->image;?>" />
		  					<input type="hidden" name="filenm" value="<?php echo $sh->file_link;?>" />
		  						<div class="form-group">
		  						    <label for="title">Title</label>
		  						    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo set_value('title',$sh->title); ?>">
		  						</div>
		  						<div class="form-group">
		  						  <label for="sel1">Category</label>
		  						  <select class="form-control" id="category" name="category">
		  						    <?php foreach($category as $cat): ?>
		  						    <option <?php echo ($cat->id == $cat->id ? 'selected':'')?> value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>		  						    
		  						    <?php endforeach ?>
		  						  </select>
		  						</div>		  					 
		  						 <div class="form-group">
		  						    <label for="title">Link</label>
		  						    <input type="text" class="form-control" name="link" placeholder="slide link" value="<?php echo set_value('link',$sh->link); ?>">
		  						    <p class="help-block"> http://www.blabla.com <span class="text-warning">(external link)<span></p>
		  						</div>
		  						<div class="form-group">
		  					    <label for="image">File</label>		  					    
		  					    <input type="file" name="file">
		  					    <p class="help-block">Upload file (internal link)</p>
		  					  </div>		  					  
		  					  <div class="form-group">
		  					    <label for="desc">Description</label>
		  					  	<textarea class="form-control textarea" rows="5" name="desc"><?php echo set_value('desc',$sh->description); ?></textarea>  
		  					  </div>		  					  
		  					  <div class="form-group">
		  					    <label for="image">Image</label>		  					    
		  					    <input type="file" name="userfile">
		  					    <p class="help-block">Example block-level help text here.</p>
		  					  </div>		  					  
		  					  <button type="submit" class="btn btn-success">Submit</button>
		  					</form>
		  				</div>	
		  			  <div class="col-md-6 col-sm-6 col-xs-6">
		  			  	<p><?php echo validation_errors(); ?></p>
		  			  	<?php echo $this->session->flashdata('message'); ?>
		  					<h5>Image preview</h5>
		  					<img src="<?php echo base_url().'assets/images/products/'.$sh->image?>" class="img-responsive">
		  					<?php if($sh->file_link):?>
		  					<h5>File</h5>
		  					<p><?php echo $sh->file_link; ?>
		  					<a href="<?php echo base_url().'assets/files/'.$sh->file_link;?>"><span class="label label-success">download</span></a></p>
		  				<?php endif?>
		  				</div>
		  			</div>			  			
					</div>
		  		</div>
		  	</div>

		  	
		</div>
    </div>
<?php endforeach ?>
    