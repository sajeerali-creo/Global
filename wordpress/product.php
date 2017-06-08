 <?php
/* Template Name: product */
?>
<?php get_header(); ?>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  <h3>Product</h3>
  </div>
</section>


<!-- about -->
<section class="service each-padding">
  <div class="container">
    <div class="row">
      <div class="col l3 s12 m12">
        <div class="product-category">
           <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="#tab1" data-toggle="tab">Construction Building <br>Materials</a></li>
                <li><a href="#tab2" data-toggle="tab">Oil & Gas Products</a></li>
                <li><a href="#tab3" data-toggle="tab">Petrol Pump Accessories</a></li>
                <li><a href="#tab4" data-toggle="tab">Electrical Materials</a></li>
                <li><a href="#tab5" data-toggle="tab">All Kinds of Technical Products</a></li>
                <li><a href="#tab6" data-toggle="tab">Surgical Products</a></li>
                <li><a href="#tab7" data-toggle="tab">Tyers & Spare Parts</a></li>
            </ul>
        </div>
      </div>
      <div class="col l9 s12 m12">
        <div class="tab-content products">
              <div class="tab-pane active" id="tab1">
                  <div class="row">     

                  <?php
                    query_posts('category_name=Construction-Building-Materials' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>

              </div>


              <div class="tab-pane fade" id="tab2">
                     <div class="row">     

                  <?php
                    query_posts('category_name=Oil-&-Gas-Products' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>       
              </div>


              <div class="tab-pane fade" id="tab3">
                  <div class="row">     

                  <?php
                    query_posts('category_name=Petrol-Pump-Accessories' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>
              </div>

              <div class="tab-pane fade" id="tab4">
                  <div class="row">     

                  <?php
                    query_posts('category_name=Electrical-Materials' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>
              </div>

              <div class="tab-pane fade" id="tab5">
                 <div class="row">     

                  <?php
                    query_posts('category_name=All-Kinds-of-Technical-Products' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>
              </div>

              <div class="tab-pane fade" id="tab6">
                 <div class="row">     

                  <?php
                    query_posts('category_name=Surgical-Products' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>
              </div>

              <div class="tab-pane fade" id="tab7">
                  <div class="row">     

                  <?php
                    query_posts('category_name=Tyers-&-Spare-Parts' );
                    while ( have_posts() ) : the_post();
                  ?>

                  <div class="col s12 m6 l4">
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

                  </div>
              </div>

          </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>