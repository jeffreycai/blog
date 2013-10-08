<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->

<!-- main stylesheet -->
<link rel='stylesheet' id='main-style'  href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all' />
<!-- google font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome/css/font-awesome.min.css">

<?php wp_head(); ?>

<!-- main js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</head>

<body <?php body_class(); ?>>
  <header id="header" class="row">
    
    <div class="responsive-S-col-1 responsive-M-col-6 responsive-L-col-12">
      <div class="padding-top margin-down margin-right margin-left relative">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>

        <nav id="main-navigation" role="navigation" class="margin-top">
          <h3 class="menu-toggle"><i class="icon-align-justify"></i><span class="hidden"><?php _e( 'Menu', 'jeffreyc' ); ?></span></h3>
          <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'jeffreyc' ); ?>"><?php _e( 'Skip to content', 'jeffreyc' ); ?></a>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
        
        <section id="social-top">
          <ul>
            <li><a href="https://www.facebook.com/jeffreycaizhenyuan"><i class="icon-facebook"></i><span class="hidden">Facebook</span></a></li>
            <li><a href="https://twitter.com/jeffreycai"><i class="icon-twitter"></i><span class="hidden">Twitter</span></a></li>
            <li><a href="http://www.linkedin.com/profile/view?id=102350626"><i class="icon-linkedin"></i><span class="hidden">Linkedin</span></a></li>
            <li><a href="#"><i class="icon-rss"></i><span class="hidden">RSS</span></a></li>
          </ul>
        </section>
      </div>
    </div>
    
    <div class="clear"></div>
  </header>
  