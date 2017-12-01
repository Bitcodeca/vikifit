<?php get_header(); ?>


    <div class="parallax-container parallax-contacto valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0243-min2.jpg"></div>
      <h1 class="centrado center-align white-text">Checkout<br>
      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</small></h1>
    </div>
	<div class="container">
		<div class="row margintop75">
		    <?php
		        $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title');
		        $wc_query = new WP_Query($params);
		        if ($wc_query->have_posts()) :
		            while ($wc_query->have_posts()) :
		                $wc_query->the_post();
		                $id = get_the_ID();
		                $product = new WC_Product($id);
		                ?>
					    $ <?php echo $product->get_price_html(); ?>
					    <form class="cart" action="?" method="post" enctype="multipart/form-data">
						     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
						     <button type="submit"><?php echo $product->single_add_to_cart_text(); ?></button>
						</form>
					    <?php
		            endwhile;
		            wp_reset_postdata(); 
		        endif;
		    ?>
            <?php echo do_shortcode('[woocommerce_cart]'); ?>
		</div>
	</div>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>