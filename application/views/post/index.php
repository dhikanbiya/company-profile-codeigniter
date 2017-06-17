<?php foreach($view as $v): ?>


    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="<?php echo base_url()?>dashboard"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url()?>slides"><i class="glyphicon glyphicon-picture"></i>Slides</a></li>
                    <li><a href="<?php echo base_url()?>post/page/vision"><i class="fa fa-paper-plane-o"></i>Vision and Mission</a></li>
                    <li><a href="<?php echo base_url()?>post/page/about"><i class="glyphicon glyphicon-book"></i>About</a></li>
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
    