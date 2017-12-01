<?php get_header(); ?>

    <div class="parallax-container parallax-contacto valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0243-min2.jpg"></div>
      <h1 class="centrado center-align white-text">Checkout</h1>
    </div>
	<div class="container">
		<div class="row margintop75">
        	<?php echo do_shortcode('[woocommerce_checkout]'); ?>
		</div>
	</div>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
      jQuery('select').material_select();
    });
</script>