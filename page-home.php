<?php get_header(); ?>

    <div class="parallax-container parallax-inicio valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0193-min2.jpg"></div>
      <div class="centrado center-align"><h1 class="white-text">Entrenamiento & Nutrición <br><small class="color3">Asesoría de Entrenamiento Fitness</small></h1>
      <a class="waves-effect waves-light fondo3 btn pulse" href="https://www.youtube.com/channel/UCVXPlwdVrdQ2ayeeh-XMb1w" target="_blank">Entra a mi canal de Youtube</a></div>
    </div>
    <div class="container margintop75 marginbot25">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 margintop50">
                <h2>Algunas personas quieren que algo ocurra, otras sueñan con que pasará, otras hacen que suceda <span class="color3">¡ENFOCATE!</span></h2>
                <p>Al querer un cambio en tu vida, la planificación solo representa el 1%, mientras que la ejecución del plan se lleva el 99% restante. Si de verdad quieres algo diferente para ti y para tu cuerpo, planifica y luego ejecuta tu plan.</p>
                <h4 class="color3">PROCESOS QUE MEJORARAN TU NIVEL DE VIDA</h4>
                <p>Con mi plan de transformación, no solo se verá reflejado el resultado en tu cuerpo, sino también en tu salud. El ejercicio físico es más importante por el nivel saludable que brinda y no tanto en la apariencia física que siempre has buscado tener. Enfocate en tu salud, no en tu cuerpo.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0322-min.jpg" class="responsive-img">
            </div>
        </div>
    </div>
    <div class="grey lighten-2">
        <div class="container paddingtop50 paddingbot50">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="center-align">Asesoría virtual de transformación</h2>
                </div>
            </div>
        <div class="row">
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
        </div>
    </div>
    <div class="parallax-container parallax-inicio2 valign-wrapper center-align">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0087-min.jpg"></div>
      <h2 class="centrado white-text center-align">¡Dale el cambio a tu vida que <span class="color3"> siempre</span> has buscado!</h2>
    </div>

<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>