<?php get_header(); ?>

    <div class="parallax-container parallax-biografia valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0151-min2.jpg"></div>
      <h1 class="centrado center-align white-text">CONTACTO<br>
      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</small></h1>
    </div>


<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>