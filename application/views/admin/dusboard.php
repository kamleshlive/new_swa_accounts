<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?=base_url();?>asests/img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?=base_url();?>asests/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?=base_url();?>asests/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?=base_url();?>asests/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?=base_url();?>asests/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?=base_url();?>asests/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?=base_url();?>asests/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?=base_url();?>asests/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?=base_url();?>asests/css/owl.carousel.css" type="text/css">
  <link href="<?=base_url();?>asests/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?=base_url();?>asests/css/fullcalendar.css">
  <link href="<?=base_url();?>asests/css/widgets.css" rel="stylesheet">
  <link href="<?=base_url();?>asests/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>asests/css/style-responsive.css" rel="stylesheet" />
  <link href="<?=base_url();?>asests/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?=base_url();?>asests/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

  <?php
     include_once('include/header.php');
    ?>
   
    <!--header end-->

    <!--sidebar start-->
    <aside>
       <?php
     include_once('include/sidebar.php');
    ?>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">6.674</div>
              <div class="title">Download</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">7.538</div>
              <div class="title">Purchased</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Order</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Stock</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
         
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?=base_url();?>asests/js/jquery.js"></script>
  <script src="<?=base_url();?>asests/js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?=base_url();?>asests/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?=base_url();?>asests/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?=base_url();?>asests/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?=base_url();?>asests/js/jquery.scrollTo.min.js"></script>
  <script src="<?=base_url();?>asests/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?=base_url();?>asests/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?=base_url();?>asests/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?=base_url();?>asests/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?=base_url();?>asests/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="<?=base_url();?>asests/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?=base_url();?>asests/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?=base_url();?>asests/js/calendar-custom.js"></script>
    <script src="<?=base_url();?>asests/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?=base_url();?>asests/js/jquery.customSelect.min.js"></script>
    <script src="<?=base_url();?>asests/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?=base_url();?>asests/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?=base_url();?>asests/js/sparkline-chart.js"></script>
    <script src="<?=base_url();?>asests/js/easy-pie-chart.js"></script>
    <script src="<?=base_url();?>asests/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?=base_url();?>asests/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url();?>asests/js/xcharts.min.js"></script>
    <script src="<?=base_url();?>asests/js/jquery.autosize.min.js"></script>
    <script src="<?=base_url();?>asests/js/jquery.placeholder.min.js"></script>
    <script src="<?=base_url();?>asests/js/gdp-data.js"></script>
    <script src="<?=base_url();?>asests/js/morris.min.js"></script>
    <script src="<?=base_url();?>asests/js/sparklines.js"></script>
    <script src="<?=base_url();?>asests/js/charts.js"></script>
    <script src="<?=base_url();?>asests/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
