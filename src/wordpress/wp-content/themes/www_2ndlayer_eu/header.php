<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?> — <?php bloginfo('description'); ?></title>
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon-196x196.png"
          sizes="196x196" />
    <link rel="icon" type="image/png"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon-96x96.png"
          sizes="96x96" />
    <link rel="icon" type="image/png"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon-32x32.png"
          sizes="32x32" />
    <link rel="icon" type="image/png"
          href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon-16x16.png"
          sizes="16x16" />
    <link rel="icon" type="image/png" 
          href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon-128.png"
          sizes="128x128" />
    <meta name="application-name" content="2nd Layer"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" 
          content="<?php echo get_bloginfo('template_directory'); ?>/images/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo"
          content="<?php echo get_bloginfo('template_directory'); ?>/images/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo"
          content="<?php echo get_bloginfo('template_directory'); ?>/images/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo"
          content="<?php echo get_bloginfo('template_directory'); ?>/images/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo"
          content="<?php echo get_bloginfo('template_directory'); ?>/images/mstile-310x310.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <!-- Bulma Version 0.7.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <!-- jQuery Version 3.4.1 -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <?php wp_head(); ?>

  </head>
  <body id="site">
    <header>
      <div>
        <!-- START HEADER NAV -->
        <nav class="navbar is-spaced" role="navigation" aria-label="dropdown main navigation">
          <div class="navbar-brand">
            <!-- navbar items, navbar burger... -->
            <img class="navbar-item" 
                 src="<?php echo get_bloginfo('template_directory'); ?>/images/2nd-layer-logo-blue.png"
                 style="height: 100px;"
            />
          </div>
          <div class="navbar-end">
            <?php
              wp_nav_menu(
                array (
                'menu'           => 'header-menu',
                'theme_location' => 'header-menu',
                'container'      => false,
                'walker'         => new Bulma_Nav_Walker(),
                'items_wrap'     => '%3$s',
                )
              );
            ?>

            <a class="navbar-item" href="https://www.facebook.com/2ndlayer.eu/">
              <i class="fab fa-facebook-square title"></i>
            </a>
            <a class="navbar-item" href="https://www.linkedin.com/company/2ndlayer/">
              <i class="fab fa-linkedin title"></i>
            </a>
            <a class="navbar-item" href="https://github.com/2nd-Layer">
              <i class="fab fa-github-square title"></i>
            </a>
            <a class="navbar-item" href="https://www.youtube.com/channel/UCncyGaCH5emsxroa3-YIb_A/">
              <i class="fab fa-youtube-square title"></i>
            </a>
          </div>
        </nav>
        <!-- END HEADER NAV -->
      </div>
    </header>
