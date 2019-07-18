<?php require'header.php';?>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloade ">
         <img class="preloader" src="images/loading.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         
         <?php require'menu-bar.php';?>

         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Time Listing</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Listings</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-8">
                  

                  <div class="feature-post small-blog col-md-9">
                     
                     <div class="col-md-12 ">
                        <div style="overflow-x:auto;" class="feature-cont ">
                           <table class="post-heading table">
                           <thead>
                              <th>Nationality</th>
                              <th>Name</th>
                              <th>Time</th>
                              <th>Place</th>
                              <th>Race Type</th>
                              <th>More</th>

                           </thead>
                           <?php
                              require'core/cnn.php';

                              $sq="select a.*,t.*,h.*,r.* from athletes a join time t on a.a_id=t.a_id join host h on a.a_id=h.a_id join  race_category r on r.a_id=a.a_id";

                              $rst=$cnn->query($sq);
                              echo $cnn->error;
                              while($row=$rst->fetch_assoc()){
                                 
                              

                           ?>
                           <tbody>
                              <?php echo'
                              <tr>
                              <td><img src="images/img-06.png" height="20px"alt=""></td>
                              <td><a style="color:blue;" href="#list'.$row['a_id'].'" data-toggle="modal" data-target="#myModalone">'.$row['fname'].' '.$row['lname'].'</a></td>
                              <td>'.$row['time'].'</td>
                              <td>'.$row['host_name'].'</td>
                              <td>'.$row['race_type'].'</td>
                              <td><a style="color:blue;" href="#list'.$row['a_id'].'" data-toggle="modal" data-target="#myModalone">More</a></td>
                              </tr>';
                              }
                              ?>

                             
                              
                           </tbody>   
                           

                           </table>
                        </div>
                     </div>
                  
                 
                  
                  
               </div>
               </div>
               
               <div class="col-md-3">
                  <div class="blog-sidebar">
                     <div class="search-bar-blog color-theme">
                        <form>
                           <input type="text" placeholder="Search Athlete" />
                           <button class="color-theme"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                     </div>
                  </div>
                  <div class="blog-sidebar">
                     <h4 class="heading">Top Categories</h4>
                     <div class="category-menu display-flexible">
                        <ul>
                           <li><a href="#">100 Meters</a></li>
                           <li><a href="#">4 X 4 Relay</a></li>
                           <li><a href="#">400 Meters</a></li>
                           <li><a href="#">5,000 Meters</a></li>
                           <li><a href="#">10,000 Meters</a></li>
                           <li><a href="#">Half Marathon</a></li>
                           <li><a href="#">40km Marathon</a></li>
                           
                        </ul>
                     </div>
                  </div>
               

                  
                  

                  
                  
                  <div class="modals-list mg-t-30">
                  <div class="modals-single">
                  <div class="modals-default-cl">
                                
                  <?php
                  // while ($row['a_id']== !''){
                    ?>
                  
                                
                                <div class="modal fade" id="myModalone" role="dialog">
                                    <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                            <div class="modal-header">
                                                
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <div class="post-info">
                                                    <img src="images/profile-img.png" alt="#" />
                                                    <span>
                                                     <h4>Duke</h4>
                                                      <h5><?php echo''.$row['date'].'';?></h5>
                                                      <?php echo''.$row['a_id'].'';?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                
                                                   <div class="feature-post small-blog">
                                                   <div class="col-md-5">
                                                      <div class="feature-img">
                                                         <img src="images/post2.jpg" class="img-responsive img-rounded" alt="#" />
                                                      </div>
                                                   </div>
                                                   <div class="col-md-7" id="list">
                                                      <div class="feature-cont">
                                                         
                                                         <div class="post-heading">
                                                            <h3>A. FELIX RECORD <span class="color-yellow">10:45 sec</span></h3>
                                                            <p><?php
                                                               echo $row['a_run_det'];
                                                            ?></p>
                                                            
                                                         </div>
                                                      </div>
                                                   </div>    
                                                   </div>
                                            
                                             </div>
                                            <div class="modal-footer">
                                                
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                  <?php
                  // }
                  ?>
                           
                  </div>
                  </div>
                 
                  </div>
               </div>

               
            </div>
         </div>
      </section>
      
      <?php require'footer.php';
                              
      ?>

      