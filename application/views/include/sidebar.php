<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="<?=base_url();?>index.php/register_ctr/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link" href="<?=base_url();?>index.php/register_ctr/registerlist" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                View User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                           <?php 
                        
                        $user_id=$this->session->userdata('login');
                       
                        if(!empty($user_id))
                         {
                          //$idd1=$user_id[0]->id;
                          $idd1=$user_id[0]->status;
                       /* print_r($idd1);
                        die();*/
                            
                        if($idd1==0)
                        {
                            
                      ?>
                            <a class="nav-link" href="<?=base_url();?>index.php/register_ctr/registerform" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Add User 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                                   
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                            <!-- <a class="nav-link" href="<?=base_url();?>index.php/register_ctr/user">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Add Gest User
                            </a> -->
                             <?php
                                  }
                              }
                            ?>
                        </div>
                    </div>
                   <!--  <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav> -->
            </div>