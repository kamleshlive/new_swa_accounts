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
                        <h1 class="mt-4">Add User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add New Registration</li>
                        </ol>
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-body">
                                        <form  action="clientadd" method="Post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName"> Name</label>
                                                        <input class="form-control py-4" id="inputFirstName"  placeholder="Enter  Name" type="text" name="product" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Mobile</label>
                                                        <input class="form-control py-4" id="inputLastName" placeholder="Enter Mobile No" type="text" name="mobile" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Email Id</label>
                                                        <input class="form-control py-4" id="inputLastName" placeholder="Enter Email Id" type="text" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Password</label>
                                                        <input class="form-control py-4" id="inputLastName" placeholder="Enter Password" type="Password" name="pass" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Gender</label>
                                                        <INPUT TYPE="Radio" Name="Gender" Value="Male">Male
                                                         <INPUT TYPE="Radio" Name="Gender" Value="Female">Female
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                         
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" >Add User</button></div>
                                        </form>
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
