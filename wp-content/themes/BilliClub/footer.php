    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/my_main.js"></script>

    <?php if(is_home()): ?>    

        <script src='https://cdnjs.cloudflare.com/ajax/libs/tone/0.9.0/Tone.min.js'></script>

        <!-- Maps google -->

        <script src="<?php bloginfo('template_url'); ?>/mapsGoogle.js"></script>

        <script async

        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuWeUkm284E498gBltUFS4BqM691IcsAQ&callback=initMap" async defer>

        </script>

        <!-- fullScreen JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/fullScreen.js"></script>

        <!-- audio JavaScript -->

        <!-- Backend Bundle JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/libs.min.js"></script>

        

        <!-- widgetchart JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/charts/widgetcharts.js"></script>

        

        <!-- mapchart JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/charts/vectore-chart.js"></script>

        <script src="<?php bloginfo('template_url'); ?>/assets/js/charts/dashboard.js"></script>

        

        <!-- fslightbox JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/fslightbox.js"></script>

        

        <!-- settings JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/setting.js"></script>

        <!-- app JavaScript -->

        <script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>

        <script src="<?php bloginfo('template_url'); ?>/assets/js/app2.js"></script>

        <script>

         /mobile/i.test(navigator.userAgent) && setTimeout(function () {

          window.scrollTo(0, 1);

          }, 1000);

        </script>
        

    <?php endif; ?>

    <?php if(is_page('exchange-page')): ?>
             
              <!-- fullScreen JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/fullScreen.js"></script>
              <!-- audio JavaScript -->
              <!-- Backend Bundle JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/libs.min.js"></script>
              
              <!-- widgetchart JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/charts/widgetcharts.js"></script>
              
              <!-- mapchart JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/charts/vectore-chart.js"></script>
              <script src="<?php bloginfo('template_url'); ?>/assets/js/charts/dashboard.js"></script>
              
              <!-- fslightbox JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/fslightbox.js"></script>
              
              <!-- settings JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/setting.js"></script>
              <!-- app JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>
              <script src="<?php bloginfo('template_url'); ?>/assets/js/app2.js"></script>
              <script>
                /mobile/i.test(navigator.userAgent) && setTimeout(function () {
                 window.scrollTo(0, 1);
                 }, 1000);
               </script>
            
    <?php endif; ?>

    <?php if(!is_home()): ?>
             
              <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
              <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
              <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
              <!-- Appear JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/jquery.appear.js"></script>
              <!-- Countdown JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/countdown.min.js"></script>
              <!-- Counterup JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/waypoints.min.js"></script>
              <script src="<?php bloginfo('template_url'); ?>/js/jquery.counterup.min.js"></script>
              <!-- Wow JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
              <!-- Apexcharts JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/apexcharts.js"></script>
              <!-- Slick JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
              <!-- Select2 JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/select2.min.js"></script>
              <!-- Owl Carousel JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
              <!-- Magnific Popup JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
              <!-- Smooth Scrollbar JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/smooth-scrollbar.js"></script>
              <!-- Chart Custom JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/chart-custom.js"></script>
              <!-- Custom JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
              <!-- lottie JavaScript -->
              <script src="<?php bloginfo('template_url'); ?>/js/lottie.js"></script>

              <script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>

              <script src="<?php bloginfo('template_url'); ?>/assets/js/app2.js"></script>
                <!-- settings JavaScript -->

              <script src="<?php bloginfo('template_url'); ?>/assets/js/setting.js"></script>
    <?php endif; ?>    

  </body>

</html>