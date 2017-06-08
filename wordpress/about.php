 <?php
/* Template Name: about */
?>
<?php get_header(); ?>  

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
  <h3>About us</h3>
  </div>
</section>


<!-- about -->
<section class="about-sec each-padding">
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12">
        <div class="white-box">
          <h1><strong>About</strong> globalforecourtsupplies</h1>
          <?php
           query_posts('category_name=about' );
          while ( have_posts() ) : the_post();
          ?>
                  
          <?php the_content(); ?>
       
           <?php
              endwhile;
           ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>