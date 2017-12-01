<?php get_header(); ?>

    <div class="parallax-container parallax-biografia valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/IMG_5707-min2.jpg"></div>
      <div class="container">
      	<h1 class="centrado center-align white-text">ASESORÍA</h1>
	      <div class="col-xs-12 center-align">
	      	<h2 class="white-text">8 SEMANAS <span class="fondo3 white-text paddingleft15 paddingright15">¡COMPRAR AHORA!</span></h2>
	      </div>
	   </div>
    </div>

    <div class="container margintop75 marginbot50">
        <div class="row">
			<h2 class="center-align"> ¡El cambio es  <span class="color3">ahora!</span></h2>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 margintop25">
                <p>Este paquete incluye un plan personalizado basado en tus metas, realizado para hombres y mujeres. Nuestro programa está diseñado para cumplir con sus objetivos individuales, ya sea ganar músuclo, bajar de peso o tonificar, cada plan garantiza la construcción del músuclo y el quemar grasa. Gracias a nuestro cuestionario obtenemos la información necesaria para crear un programa especial basado en sus necesidades. Este proceso garantiza los mejores resultados posibles, gracias a nuestra capacitación en línea.</p>
                
            </div>
        </div>
        <div class="row center-align">
	    <?php
	        $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title');
	        $wc_query = new WP_Query($params);
	        if ($wc_query->have_posts()) :
	            while ($wc_query->have_posts()) :
	                $wc_query->the_post();
	                $id = get_the_ID();
	                $product = new WC_Product($id);
	                ?>
		        	<div class="col-xs-12 col-sm-6">
						<div class="card darken-1">

				            <div style="border-bottom:1px solid black;">
								<h2 class="color3 marginbot0 center-align paddingtop25"><?php echo get_the_title();?></h2>
								<h4 class="margintop0 center-align"><a class="color5"><?php echo $product->get_price_html(); ?></a></h4>
				            </div>
							<div class="card-content white center-align marginbot0 margintop0">
								<?php the_content(); ?>
							</div>
							<div class="card-action fondo2 white-text center-align" style="padding:0px">
							    <form class="cart" action="<?php echo get_page_link( get_page_by_title( "checkout" )->ID ); ?>" method="post" enctype="multipart/form-data">
								     <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
								     <button type="submit" class="color5 fondo2 width100"><h3 class="margintop15 marginbot10" style="padding: 36px 24px; position: relative; display: inline-block; width: 100%; margin: 0px;">COMPRAR</h3></button>
								</form>
							</div>
						</div>
					</div>
				    <?php
	            endwhile;
	            wp_reset_postdata(); 
	        endif;
	    ?>
		</div>
    </div>


<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>