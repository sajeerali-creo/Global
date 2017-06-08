 <?php
/* Template Name: Home */
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
<section class="banner">

  <div class="slider">
  <ul class="slides">
    <li>
      <img src="<?php bloginfo('template_url'); ?>/images/banner.png"> <!-- random image -->
      <div class="caption center-align">
        <h3>Welcome to</h3>
        <h5 class="light grey-text text-lighten-3">Globalforecourtsupplies</h5>
      </div>
    </li>
    <li>
      <img src="<?php bloginfo('template_url'); ?>/images/banner2.png"> <!-- random image -->
      <div class="caption center-align">
        <h3>Welcome to</h3>
        <h5 class="light grey-text text-lighten-3">Globalforecourtsupplies</h5>
      </div>
    </li>
    <li>
      <img src="<?php bloginfo('template_url'); ?>/images/banner3.png"> <!-- random image -->
      <div class="caption center-align">
        <h3>Welcome to</h3>
        <h5 class="light grey-text text-lighten-3">Globalforecourtsupplies</h5>
      </div>
    </li>
  </ul>
  </div>


</section>

<!-- services -->
<section class="services">
  <div class="container">
    <div class="row">
      <div class="col s12 m6 l3 serv1">
        <a href="#">
          <i class="icon-design"></i>
          <h2>DESIGN</h2>
          <p>Quality & Sefty</p>
        </a>
      </div>
      
      <div class="col s12 m6 l3 serv2">
        <a href="#">
          <i class="icon-develop"></i>
          <h2>DEVELOP</h2>
          <p>Cost Saving Product</p>
        </a>
      </div>
      <div class="col s12 m6 l3 serv3">
        <a href="#">
          <i class="icon-delivery"></i>
          <h2>DELIVERY</h2>
          <p>Productivity & Drive</p>
        </a>
      </div>
      <div class="col s12 m6 l3 serv4">
        <a href="#">
          <i class="icon-trinning"></i>
          <h2>TRAIN</h2>
          <p>Skills & Knowledge</p>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section class="abt each-padding">
  <div class="container">
    <div class="row">
      <div class="col s12 l12 m12">
        <h2><strong>About</strong> globalforecourtsupplies</h2>

         <?php
           query_posts('category_name=about' );
          while ( have_posts() ) : the_post();
          ?>
                  
          <?php the_content(); ?>
       
           <?php
              endwhile;
           ?>
           <br>
        <button class="waves-effect waves-light"><a href="http://globalforecourtsupplies.com/about-us/">More</a></button>
      </div>
    </div>
  </div>
</section>

<!-- our service -->
<section class="ourservice each-padding">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l6">
        <i><img src="<?php bloginfo('template_url'); ?>/images/s-logo.svg"></i>
      </div>
      <div class="col s12 m12 l6">
        <h2>Our <strong>Services</strong></h2>
        <ul>
          <li>Construction Building Materials</li>
          <li>Oil & Gas Products</li>
          <li>Petrol Pump Accessories</li>
          <li>Electrical Materials</li>
          <li>All Kinds of Technical Products</li>
          <li>Surgical Products</li>
          <li>Tyers & Spare Parts</li>
        </ul>
        <button class="waves-effect waves-light left margin-top-10"><a href="http://globalforecourtsupplies.com/services/">More details</a></button>
      </div>
      
    </div>
  </div>
</section>

<!-- our products -->
<section class="products each-padding">
  <div class="container">
    <div class="row">
      <div class="col s12 l12 m12">
        <h2><strong>Our</strong> Best Selling Products</h2>
      </div>

        <?php
            query_posts(array('category_name'=>'best-selling-product','posts_per_page' => 8));
            while ( have_posts() ) : the_post();
        ?>
        <div class="col s12 m6 l3">
          <div class="product-box">
            <a href="<?php the_permalink();?>">
              <div class="over-box">
                <h3><?php echo get_the_title(); ?></h3>
              </div>
              <i><?php the_post_thumbnail('full',array("class"=>"img_fit")); ?></i>
            </a>
          </div>
        </div>
     
        <?php
            endwhile;
        ?>

        
      <!-- more -->
      <div class="col s12 l12 m12">
        <button class="waves-effect waves-light"><a href="http://globalforecourtsupplies.com/products/">More</a></button>
      </div>

    </div>
  </div>
</section>


<?php get_footer(); ?>