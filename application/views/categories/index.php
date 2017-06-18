


    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="<?php echo base_url()?>dashboard"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url()?>slides"><i class="glyphicon glyphicon-picture"></i>Slides</a></li>
                    <li><a href="<?php echo base_url()?>post/page/vision"><i class="fa fa-paper-plane-o"></i>Vision and Mission</a></li>
                    <li><a href="<?php echo base_url()?>post/page/about"><i class="glyphicon glyphicon-book"></i>About</a></li></li>
                    <li class="submenu current">
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
	  					<div class="panel-title ">Manage Category</div>
	  					<div class="panel-options">
								<a href="<?php echo base_url()?>category/add" data-rel="collapse"><span class="label label-success"><i class="glyphicon glyphicon-plus"></i> Add New Category</span></a>								
							</div>
		  			</div>

		  			<div class="content-box-large box-with-header">
		  			<?php $i = 1; ?>
		  			<?php foreach($view as $v): ?>
		  			<div class="row">
		  			
		  			<div class="col-md-1 col-sm-1 col-xs-1">
		  					<h1>#<?php echo $i++?></h1>
		  				</div>
		  				<div class="col-md-9 col-sm-9 col-xs-9">
		  					<h5><span class="label label-success">name</span>  <?php echo $v->name;?></h5>
		  					<p><span class="label label-warning">description</span> <?php echo $v->description;?></p>
		  				</div>		  			
		  				<div class="col-md-2 col-sm-2 col-xs-2">
		  					 <a href="<?php echo base_url().'category/edit/'.$v->slug?>"><span class="label label-info">edit</span></a> <a href="<?php echo base_url().'category/destroy/'.$v->slug;?>"><span class="label label-danger">delete</span></a>	
		  				</div>
		  			</div>
		  			<?php endforeach ?>			  			
					</div>
		  		</div>
		  	</div>

		  	
		</div>
    </div>

    