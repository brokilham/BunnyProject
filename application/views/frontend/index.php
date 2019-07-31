
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aoko</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/foundation.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/slick.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/slick-theme.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/app.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/responsive.css')?>">
    <link href="<?php echo base_url('assets/frontend/static/css/fontello.css')?>" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/frontend/static/css/font-awesome.css')?>" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/linea-styles.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/static/css/linea-arrows-styles.css')?>" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,400,400i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>

  <body>
    <div class="logo">
      <a href="index.html">AOKO.</a>
    </div>
    <?php $this->load->view("frontend/_partials/about.php") ?> 
    <?php $this->load->view("frontend/_partials/blog.php") ?> 
    <?php $this->load->view("frontend/_partials/contact.php") ?> 
    <?php $this->load->view("frontend/_partials/work.php") ?> 
    <nav>
      <a href="#" id='back' class="hide">
        <i class="fa fa-close"></i>
      </a>
    </nav>


    <script src="<?php echo base_url('assets/frontend/bower_components/jquery/dist/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/frontend/bower_components/foundation-sites/dist/js/foundation.js')?>"></script>
    <script src="<?php echo base_url('assets/frontend/bower_components/countto/jquery.countTo.js')?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/jquery.appear.js')?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/jquery.validate.js')?>"></script>    
    <script src="<?php echo base_url('assets/frontend/js/slick.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/frontend/js/app.js')?>"></script>
  </body>
</html>