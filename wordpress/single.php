<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
get_header(); ?>

</head>
<body class="loading">

<!-- Responsive Menu -->
<ul id="slide-out" class="side-nav">
  <li><div class="userView">
    <div class="background">
      </div>
    <a href="#!user"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg"></a>
    <a href="#!email"><span class="white-text email">info@globalforecourtsupplies.com</span></a>
  </div></li>
  <?php wp_nav_menu( array( 'primery' => 'header-menu' ) ); ?>
</ul>

<!-- header -->
<header class="home-header">
  <div class="subheader">
    <div class="container">
      <div class="row">
        <div class="col s6 m6 l6">
          <span><i class="zmdi zmdi-phone"></i>&nbsp;+971 553776176</span>
        </div>
        <div class="col s6 m6 l6">
          <span class="right"><i class="zmdi zmdi-email"></i>&nbsp;info@globalforecourts.com</span>
        </div>
      </div>
    </div>
  </div>
  <div class="home-haeder">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="logo-header">
          <i><img src="<?php bloginfo('template_url'); ?>/images/logo.svg"></i>
          <a href="#" data-activates="slide-out" class="button-collapse right">
              <span class="zmdi zmdi-menu"></span>
            </a>
          </div>
          <div class="menu-header">
            <ul>
              <?php wp_nav_menu( array( 'primery' => 'header-menu' ) ); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Banner -->
<section class="inner-banner">
  <div class="conatiner">
  <h3>Product Detail</h3>
  </div>
</section>






<!-- about -->
<section class="service each-padding">
  <div class="container">
    <div class="row">
      <div class="col l16 s12 m4">
        <div class="Product-detal-image">
          <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image'
              );
          endif; ?>
        </div>
      </div>

      <div class="col l16 s12 m8">
        <div class="Product-detal-descri">
          <h2><?php echo get_the_title(); ?></h2>
          <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
         
              <?php /* The loop */ ?>
              <?php while ( have_posts() ) : the_post(); ?>
         
                <?php get_template_part( 'content', get_post_format() ); ?>
               
         
              <?php endwhile; ?>
         
            </div><!-- #content -->
          </div><!-- #primary -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>