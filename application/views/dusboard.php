<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?=base_url()?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />
      <link href="<?=base_url()?>assets/css/main-style.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <?php
                include_once('include/header.php');
            ?>
        <!-- end navbar top -->

        <!-- navbar side -->
       <?php
                include_once('include/sidebar.php');
            ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Blank Page</h1>
                </div>
                <!--End Page Header -->
            </div>

            

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?=base_url()?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?=base_url()?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>assets/plugins/pace/pace.js"></script>
    <script src="<?=base_url()?>assets/scripts/siminta.js"></script>

</body>

</html>
