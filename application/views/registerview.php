<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php
                include_once('include/header.php');
            ?>
        <div id="layoutSidenav">
            
        <?php
                include_once('include/sidebar.php');
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Records List</h1>
                       
                          <form action="<?=base_url();?>index.php/register_ctr/search_keyword" method="post">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span>
                                <i class="icon-user"></i>
                              </span>
                            </div>
                            </div>
                            <table width="70%" border="1" align="center">
                             <input type="text" placeholder="Search.." name = "keyword" size="15px;" requerd/>
                            <input type="submit" value = "Search"/>
                            </form>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                View User Records
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email Id</th>
                                                <th>Passwords</th>
                                                <th>Gender</th>
                                                <?php 
                        
                                                $user_id=$this->session->userdata('login');
                                               
                                                if(!empty($user_id))
                                                 {
                                                  
                                                  $idd1=$user_id[0]->status;
                                              
                                                if($idd1==0)
                                                {
                                                    
                                              ?>
                                            <th>Action</th>

                                            <?php
                                              }
                                             }
                                                                                     
                                            ?>
                                            </tr>
                                        </thead>
                                        <?php
                                          foreach($record as $s)
                                          {
                                          $query=$this->db->query("select *from user");
                                         ?>
                                        <tbody>
                                            <tr>
                                               <td><?=$s->product?></td>
                                               <td><?=$s->mobile?></td>
                                               <td><?=$s->email?></td>
                                               <td><?=$s->pass?></td>
                                               <td><?=$s->Gender?></td>
                                            
                                            
                                             <?php

                                                
                                                $user_id=$this->session->userdata('login');
                                               
                                                if(!empty($user_id))
                                                 {
                                                  $idd1=$user_id[0]->status;
                                                    
                                                if($idd1==0)
                                                {
                                                  
                                                  ?>
                                            <td><a href="<?=base_url();?>index.php/register_ctr/clientedit/<?=$s->id?>"<button class="btn btn-primary" type="submit">Update</button></a>&nbsp;<a href="<?=base_url();?>index.php/register_ctr/deletclient/<?=$s->id?>"<button class="btn btn-danger" type="submit">Delete</button></a></td>
                                            <?php
                                              }
                                             }
                                           ?>
                                            </tr>
                                            
                                        </tbody>
                                        <?php
                                        }
                                    ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="<?=base_url()?>assets/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>assets/assets/demo/datatables-demo.js"></script>
    </body>
</html>
