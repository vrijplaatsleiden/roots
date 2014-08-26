<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <div class="main col-md-8 <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <!-- <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar col-md-2 <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <!-- <?php endif; ?> -->
        <aside class="sidebar col-md-2">
          <div class="thumb">
            <img width="180" height="180" src="/wp-content/uploads/static/KWJreunie.-sept2013-71.jpg"></img>
          </div>

          <div class="thumb">
            <img width="180" height="180" src="/wp-content/uploads/static/421815_138013896397880_935531121_n.jpg"></img>
          </div>

          <div class="thumb slogan">
	    <h2>Elke zaterdag veganistisch eetcafé</h2>
          </div>

          <div class="thumb">
            <img width="180" height="180"src="/wp-content/uploads/static/KWJreunie.-sept2013-71.jpg"></img>
          </div>

          <div class="thumb">
            <img width="180" height="180"src="/wp-content/uploads/static/KWJ4.jpg"></img>
          </div>

        </aside>
        <aside class="sidebar col-md-2">
          <div class="thumb slogan">
            <h2>Doneer nu voor de concertzaal</h2>
          </div>

         <div class="thumb">
           <img width="180" height="180" src="/wp-content/uploads/static/KWJreunie.-sept2013-71.jpg"></img>
         </div>
          <div class="thumb">
            <img width="180" height="180" rc="/wp-content/uploads/static/KWJ4.jpg"></img>
          </div>

          <div class="thumb">
            <img width="180" height="180" rc="/wp-content/uploads/static/KWJreunie.-sept2013-71.jpg"></img>
          </div>
          
          <div class="thumb">
            <img width="180" height="180" rc="/wp-content/uploads/static/KWJreunie.-sept2013-71.jpg"></img>
          </div>

        </aside>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
