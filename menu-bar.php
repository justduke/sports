<header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="header-logo">
                              <a href="index.html"><img src="images/logo1.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           
                           <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                 <a data-toggle="modal" data-target="#login" id="login-modal" role="dialog"><i class="fa fa-user"></i>Login</a>
                              </li>
                              
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#"> Menu Ba</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <?php if(isset($_GET['home'])){?>
                                          <li class="active"><a href="index.php?home">Home</a></li>
                                          <?}
                                          else{ ?>
                                              <!-- <li ><a href="index.php?home">Home</a></li> -->
                                         <?php }?>
                                         <?php if(isset($_GET['about'])){?>
                                          <li><a class="active" href="index.php?about">About</a></li>
                                          <?}
                                          else{ ?>
                                              <!-- <li><a href="index.php?about">About</a></li> -->
                                         <?php }?>
                                         <?php if(isset($_GET['listing'])){?>
                                          <li><a class="active" href="index.php?listing">Listings</a></li>
                                          <?}
                                          else{ ?>
                                              <!-- <li><a href="index.php?listing">Listings</a></li> -->
                                         <?php }?>
                                          
                                          
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                       <div class="input-group stylish-input-group">
                                          <input type="text" class="form-control"  placeholder="Search" >
                                          <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                          </span>
                                       </div>
                                    </div>
                                 </div>

                              

                                <div class="modals-list mg-t-30">
                                 <div class="modals-single">
                                 <div class="modals-default-cl">

                                 <div class="modal fade" id="login" role="dialog">
                                  <div class="modal-dialog modals-default">
                                 <div class="modal-content"  >
                                 <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4>Login</h4> 
                                    </div>
                                    <form>
                                    <div class="modal-body">
                                       <input type="text" name="username" id="username" placeholder="Username">
                                       <input type="password" name="pass" id="pass" placeholder="Password">
                                    </div>
                                    <div class="modal-footer">
                                       <button class="btn btn-submit btn-submit" type="submit" id="submit" Value="LogIn">Login</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>  
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>