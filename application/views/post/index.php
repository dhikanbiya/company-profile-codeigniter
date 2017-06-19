<?php foreach($view as $v): ?>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12"><h5 class="text-center text-danger"><?php echo $this->session->flashdata('message'); ?></h5></div>
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Manage Pages:: <b><?php echo $v->page;?></b></div>	  					
		  			</div>

		  			<div class="content-box-large box-with-header">
		  			
		  			<div class="row">		  			
		  			
		  				<div class="col-md-6 col-sm-6 col-xs-6">
		  					<h5><span class="label label-success">Section One</span>  <?php echo $v->section_one;?></h5>
		  					<br><br>
		  					<h5><span class="label label-warning">Section Two</span> <?php echo $v->section_two;?></h5>
		  				</div>
		  				<div class="col-md-4 col-sm-4 col-xs-4">
		  					<img src="<?php echo base_url().'assets/images/pages/'.$v->image;?>" class="img-responsive">
		  				</div>
		  				<div class="col-md-2 col-sm-2 col-xs-2">
		  					 <a href="<?php echo base_url().'post/edit/'.$v->page?>"><span class="label label-info">edit</span></a>
		  				</div>
		  			</div>		  				  			
					</div>
		  		</div>
		  	</div>

		  	
		</div>
    </div>
  <?php endforeach?>
    