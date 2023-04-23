<!--Сайт разработан компанией JustCode Development Company - https://justcodedigital.com/-->
<!doctype html>

<html translate="no" dir="ltr">

  <head>

    <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Billionaire Club</title>

      <meta name="viewport" content="width=device-width, minimal-ui">

      <meta name="apple-mobile-web-app-status-bar-style" content="black">

      <meta name="apple-mobile-web-app-capable" content="yes">

      <!-- Favicon -->

      <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.0.0/fonts/remixicon.css" rel="stylesheet">
      

      <?php if(is_home()): ?>

      <!-- Library / Plugin Css Build -->

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/libs.min.css">

      <!-- Library / styleMaps -->

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/styleMaps.css">

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/menubottom1.css">

      <!-- Custom Css -->

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/hope-ui.css?v=1.0.2">  

      <?php endif; ?>

      <?php if(is_page('exchange-page')): ?>
      
            <!-- Library / Plugin Css Build -->
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/libs.min.css">
            <!-- Library / styleMaps -->
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/styleMaps.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/menubottom1.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/birga.css">
            <!-- Custom Css -->
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/hope-ui.css?v=1.0.2">  
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font/fontawesome-free/css/all.min.css"> 

      <?php endif; ?>

      <?php if(!is_home()): ?>
           
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
          <!-- Typography CSS -->
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/typography.css">
          <!-- Style CSS -->
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/chat/css/style.css">
          <!-- Responsive CSS -->
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css"> 
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/chat/css/line-awesome.min.css">
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/hope-ui.css?v=1.0.2">
          <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/menubottom1.css">
         
      <?php endif; ?>
    

  <body>
  <script>
      var ajaxUrl =  "<?php  echo esc_url( admin_url('admin-ajax.php')); ?>";    
  </script>    
         