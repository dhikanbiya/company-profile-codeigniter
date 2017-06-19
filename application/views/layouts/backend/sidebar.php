 <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li <?php echo ($this->uri->segment(1)=="dashboard"?"class='current'":"")?>><a href="<?php echo base_url()?>dashboard"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li <?php echo ($this->uri->segment(1)=="slides"?"class='current'":"")?>><a href="<?php echo base_url()?>slides"><i class="glyphicon glyphicon-picture"></i>Slides</a></li>
                    <li <?php echo ($this->uri->segment(3)=="vision"?"class='current'":"")?>><a href="<?php echo base_url()?>post/page/vision"><i class="fa fa-paper-plane-o"></i>Vision and Mission</a></li>
                    <li <?php echo ($this->uri->segment(3)=="about"?"class='current'":"")?>><a href="<?php echo base_url()?>post/page/about"><i class="glyphicon glyphicon-book"></i>About</a></li></li>
                    <li class="submenu <?php echo($this->uri->segment(1)=='products'?'open':'')?> <?php echo($this->uri->segment(1)=='category'?'open':'')?>">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Products
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li <?php echo($this->uri->segment(1)=='category'?"class='current'":"")?>><a href="<?php echo base_url();?>category">Category</a></li>
                            <li <?php echo($this->uri->segment(1)=='products'?"class='current'":"")?>><a href="<?php echo base_url()?>products">Manage Products</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>