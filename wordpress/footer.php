<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage creotopi
 * @since creotopi
 */
?>

<!-- Footer-section -->
<section class="bg-section">
    <div class="container">
      <div class="row">
        <h2>If you want any kind of Product details and Price<br>
        <strong>Just Contact with us<strong></h2>
        <button><a href="#">Contact Us</a></button>
      </div>
    </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col s12 l9 m12"><p>COPYRIGHT © 2017. globalforecourtsupplies all rights reserved <br>Designed by www.creotopi.com</p></div>
      <div class="col s12 l3 m12">
        <ul>
          <li class="social">
            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
            <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(".button-collapse").sideNav();
</script>

<script>
  $(document).ready(function () {
      $('.slider').slider({full_width: true});
  });
</script>  

<script>
  $(window).load(function() {
      // start up after 2sec no matter what
      window.setTimeout(function(){
          $('body').removeClass("loading").addClass('loaded');
      }, 2000);
  });
</script>

</body>
</html>
