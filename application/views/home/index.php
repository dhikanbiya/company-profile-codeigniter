     <div id="fullpage">      
   <div class="section" id="intro">
       <div id="mycarousel" class="carousel slide" data-ride="carousel">        
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <?php foreach($slides as $sl):?>  
                  <div class="item">
                     <img src="http://dki-sites.danbiya.net/slides/xtwny0QKku9471pzrXGOT11ZXIW7aFr11t34yWCN.jpeg" data-color="lightblue" alt="First Image">
                     <div class="carousel-caption">
                        <h1><?php echo $sl->title;?> </h1>
                        <p class="intro-text"><?php echo $sl->description?></p>
                        <a href="<?php echo $sl->link;?>" class="btn btn-default page-scroll">More</a>
                     </div>
                 </div>
                <?php endforeach ?>                   
               </div>

               <!-- Controls -->
               <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                 <!-- <span class="fa fa-chevron-left" aria-hidden="true"></span> -->
                 <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                 <!-- <span class="fa fa-chevron-right" aria-hidden="true"></span> -->
                 <span class="sr-only">Next</span>
               </a>
             </div>
           <!-- end -->
     
   </div>  
   <div class="section" id="ab">
    <div class="col-md-12">
      <div class="container">
        <div class="content">
         <h1>About Us</h1>
         <hr>
         <div class="col-md-12">
           <div class="row">
           <?php foreach($about as $ab):?>
             <div class="col-md-4"> 
             <?php echo $ab->section_one;?>                           
             </div>             
             <div class="col-md-4">
               <?php echo $ab->section_two;?>
             </div>
             <div class="col-md-4">
             <img src="<?php echo base_url().'assets/images/pages/'.$ab->image; ?>" class="img-responsive align-image">
             </div>
           <?php endforeach ?>
           </div>
         </div>
        </div>             
      </div>           
    </div>
   </div>
   
   
   <div class="section" id="vimis">
     <div class="container">
       <div class="content">
           <div class="col-md-12">
           <h1>Vision and Misson</h1>
                      <hr>
             <div class="row">
             <?php foreach($vision as $vs):?>
               <div class="col-md-4">
                 <img src="<?php echo base_url().'assets/images/pages/'.$vs->image?>" class="img-responsive align-image">
               </div>
               <div class="col-md-8">
                 <div class="row">
                   <div class="col-md-6">
                   <?php echo $vs->section_one;?>
                   </div>
                   <div class="col-md-6">
                     <?php echo $vs->section_two;?>                    
                   </div>
                 </div>
               </div>
             <?php endforeach ?>
             </div>
           </div>  
         </div>         
       </div>
     </div>
     
     <div class="section" id="prod">
      <div class="col-md-12">
         <div class="container">
           <div class="content">
             <h1>Products</h1>
             <hr>
             <div class="col-md-3">      
               <div class="categories">                      
                  <ul class="cat">
                    <li>                     
                      <ol class="type">
                      <li><a href="#" data-filter="*" class="active">All</a></li> 
                                                                
                      <?php foreach($categories as $cat):?>                        
                        <!--  -->
                        <li><a href="#" data-filter=".<?php echo $cat->id;?>"><?php echo $cat->name ?></a></li>
                      <?php endforeach?>
                      </ol>                      
                    </li>
                  </ul>
               </div>  
             </div>
             <div class="col-md-9">
               <div class="grid">
                <?php foreach($products as $pr):?>
               <div class="col-md-3 col-xs-6 col-sm-6 items <?php echo $pr->category_id;?>" data-category="<?php echo $pr->category_id;?>">
               <a href="<?php echo (isset($pr->file_link) ? base_url().'assets/files/'.$pr->file_link : $pr->link);?>" target="_new">
                 <div class="portfolio-item">
                    <div class="hover-bg">
                      <div class="hover-text">
                        <h5><?php echo $pr->title;?></h5>                          
                      </div>
                      <img src="<?php echo base_url().'assets/images/products/'.$pr->image?>" class="img-responsive"></div>
                  </div>
                </a>
               </div>
             <?php endforeach ?>                
                                  
               </div>                      
             </div>                  
           </div>                
         </div>
      </div>
     </div>
     <div class="section" id="conts">
      <div class="col-md-12">
       <div class="container">
         <div class="content">
             <h1>Contact us</h1>
             <hr>
             <div class="col-md-12">
               <p class="text-center">
                 Fixie flexitarian irony yr bitters occupy schlitz, kale chips tbh you probably haven't heard of them normcore hexagon locavore copper mug. 
               </p><br><br>
             </div>                  
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-6  col-md-offset-1">
                   <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                   </div>                        
                 </div>
                 <div class="col-md-4">
                   <h4>Data Komunikasi Internusa</h4>
                   <address>                          
                     The Plaza <br>
                     Thamrin, Central Jakarta<br>
                     <abbr title="Phone"><i class="fa fa-phone"> </i>:</abbr> (123) 456-7890
                   </address>                        
                 </div>
               </div>
               <div class="col-md-12 social">
                 <h5>Follow Us</h5>
                   <ul class="list-inline">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                   </ul>
               </div>
             </div>
         </div>

       </div>
      </div>
     </div>
     <div class="section fp-auto-height" id="foot">
         <div class="footer">                  
             <p>Data Komunikasi Internusa &copy; 2017.</p>
         </div>
     </div>            
   </div>
         
