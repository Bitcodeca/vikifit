<?php get_header(); ?>



        <div class="videoinicio">
          <div class="overlayvideo">
                <div class="container-fluid width100 heighthead overlay">
                    <div class="portada-logo">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 centrologo center-align">
                                <img src="<?php echo get_bloginfo('template_directory');?>/img/logosubsushi1989.png" class="responsive-img">
                            </div>
                        </div>
                    </div>
                    <div class="portada-footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 center-align hide-on-small-only">
                                <div class="slider">
                                    <ul class="slides">
                                        <?php
                                            $params = array("posts_per_page" => 5, "post_type" => "post", 'category_name'=>'Noticias');
                                            $wc_query = new WP_Query($params);

                                            if ($wc_query->have_posts()) :
                                                $x=0;
                                                while ($wc_query->have_posts()) :
                                                    $wc_query->the_post();
                                                    $id = get_the_ID();
                                                    ?>
                                                      <li <?php if ($x==0){ ?> class="active" <?php } ?>>
                                                        <div class="caption center-align">
                                                          <h4><?php the_title(); ?></h4>
                                                          <?php the_content(); ?>
                                                        </div>
                                                      </li>
                                                    <?php
                                                    $x++;
                                                endwhile;
                                            wp_reset_postdata(); 
                                            endif;
                                        ?>
                                    </ul>
                                  </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 center-align margintop25">
                                <?php
                                    if ( is_user_logged_in() ) {

                                    }
                                    else{
                                        ?>
                                        <div class="col-xs-6">
                                        <a class="waves-effect waves-light btn btn-portada hoverable z-depth-2 modal-trigger" href="#signin">INGRESAR</a>
                                        </div>
                                        <div class="col-xs-6">
                                        <a class="waves-effect waves-light btn btn-portada hoverable z-depth-2" href="<?php site_url(); ?>/registro/">REGISTRAR</a>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
            <video playsinline loop autoplay muted>
                <source src="<?php echo get_bloginfo('template_directory');?>/img/Time Lapse Santiago de Chile.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container-fluid padding0">
            <div class="row marginbot0">
                <div class="col-sm-12 col-md-4 padding0 fondospotify hide-on-large-only show-on-med-and-down">
                    <iframe width="100%" height="75" scrolling="no" frameborder="no" src="https://open.spotify.com/embed/user/subsushiawake/playlist/0UDhFNWwWvEpdvi3LT84Bm"></iframe>
                </div>
                <div class="col-sm-12 col-md-8 padding0 custom-tabs">
                    <ul class="tabs fondo4" id="scroll">
                        <li class="tab col s4 m4"><a href="#menu" onclick="filtrarini()"><img src="<?php echo get_bloginfo('template_directory');?>/img/barra1.png" class="responsive-img"></a></li>
                        <li class="tab col s4 m4"><a href="#test2"><img src="<?php echo get_bloginfo('template_directory');?>/img/barra2.png" class="responsive-img"></a></li>
                        <li class="tab col s4 m4"><a href="#test4"><img src="<?php echo get_bloginfo('template_directory');?>/img/barra3.png" class="responsive-img"></a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 padding0 fondospotify hide-on-med-and-down">
                    <iframe width="100%" height="75" scrolling="no" frameborder="no" src="https://open.spotify.com/embed/user/subsushiawake/playlist/0UDhFNWwWvEpdvi3LT84Bm"></iframe>
                </div>

                <!--
                    PRIMERA TAB
                -->
                <div id="menu" class="col s12 padding0 displaynone grey lighten-5 scrollspy arregloresponsive">


                    <div class="parallax-container parallax-tab1">
                        <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/safe_image (7).jpg"></div>
                        <div class="fusiona-overlay" style="position: relative;">
                            <div class="container-fluid valign-wrapper width100 home-bienvenido">
                                <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
                                    <div class="fusiona-img-prueba">
                                        <img src="<?php echo get_bloginfo('template_directory');?>/img/paraillustrator.png" class="responsive-img fusiona-texto-img">
                                    </div>
                                    <div class="white-text fusiona-texto padding15 displaygrid">
                                        <h2 class="margintop5 marginbot5">BIENVENIDO</h2>
                                        <p>Hoy gracias a nuestro sistema de personalización brindamos a nuestros clientes el empoderamiento necesario para tener en sus mesas un producto que se ajuste a sus necesidades y gustos personales en presentación de un servicio vanguardista y amigable con su entorno. Somos la iniciativa occidental de una receta con historia.</p>
                                        <h3 class="right-align marginbot0">CHEF BANZAI</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 hide-on-med-and-down">
                                    <div class="fusiona-img-prueba paddingtop10">
                                        <img src="<?php echo get_bloginfo('template_directory');?>/img/bolsa.png" class="responsive-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fondo1 width100" style="height: 32px;"></div>
                    <div class="fondo5 width100" style="height: 32px;"></div>
                    
                    <!--
                        +HD
                    -->
                    <div class="hide-on-med-and-down">
                        <div class="col-xs-12 col-sm-12 col-md-6 padding0 fondo1">
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <div class="paddingleft15 paddingtop25 paddingbot25">
                                    <div data-filter-group="main">
                                    <?php 
                                        $arraycategoriasushi=array();
                                        $taxonomyName = "product_cat";
                                        $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'order' => 'ASC', 'hide_empty' => false ) );
                                        foreach ( $parent_terms as $pterm ) {
                                            
                                            if($pterm->name=='CATEGORIAS SUSHI'){
                                                echo '<a class="control"><p class="white-text bold margintop10">' . $pterm->name . '</p></a>'; 
                                                $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
                                                if(!empty($terms)){
                                                    echo "<ul class='margintop0'>";
                                                    foreach ( $terms as $term ) {
                                                        array_push($arraycategoriasushi, $term->slug);
                                                        echo '<li><a class="control" data-filter=".' . $term->slug . '"><p class="grey-text text-lighten-2">' . $term->name . '</p></a></li>';   
                                                    }
                                                    echo "</ul>";
                                                }
                                            }
                                            else{
                                                echo '<a class="control" data-filter=".' . $pterm->slug . '"><p class="white-text bold margintop10">' . $pterm->name . '</p></a>'; 
                                            }
                                        }
                                        $categoriasushi=implode(" ",$arraycategoriasushi);
                                    ?>
                                    </div>
                                </div>                                
                            </div>

                            <?php
                                $multifiltrado=array();
                                $parent_terms = get_terms( 'product_tag', array( 'orderby'=>'title', 'order' => 'ASC', 'hide_empty' => false ) );
                                foreach ( $parent_terms as $oterm ) {
                                    $orden=$oterm->slug;
                                array_push($multifiltrado, $orden);
                                }
                                $mfiltrado=implode(" ",$multifiltrado);
                            ?>
                            <div class="col-md-7 menu-fondo padding0 primeratab" style="">
                                <div class="overlay-color2">
                                    <div data-filter-group="sub" data-logic="and">
                                        <div class="col-xs-6 switch center-align">
                                            <a><p class="white-text bold margintop10 marginbot5">TRADICIONALES</p></a>
                                            <label>
                                                OFF
                                                <input type="checkbox" value=".tradicionales">
                                                <span class="lever"></span>
                                                ON
                                            </label>
                                        </div>
                                        <div class="col-xs-6 switch center-align">
                                            <a><p class="white-text bold margintop10 marginbot5">ESPECIAL</p></a>
                                            <label>
                                                OFF
                                                <input type="checkbox" value=".especial">
                                                <span class="lever"></span>
                                                ON
                                            </label>
                                        </div>
                                        <div class="col-xs-6 switch center-align">
                                            <a><p class="white-text bold margintop10 marginbot5">VEGETARIANO</p></a>
                                            <label>
                                                OFF
                                                <input type="checkbox" value=".vegetariano">
                                                <span class="lever"></span>
                                                ON
                                            </label>
                                        </div>
                                        <div class="col-xs-6 switch center-align">
                                            <a><p class="white-text bold margintop10 marginbot5">VEGANO</p></a>
                                            <label>
                                                OFF
                                                <input type="checkbox" value=".vegano">
                                                <span class="lever"></span>
                                                ON
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-fusion-container">
                                        <ul class="margintop0 paddingtop10 center-align">
                                            <div data-ref='mixitup-container'>
                                                <?php

                                                    $parent_terms = get_terms( 'product_tag', array( 'orderby'=>'title', 'order' => 'ASC', 'hide_empty' => false ) );
                                                    foreach ( $parent_terms as $oterm ) {
                                                        $orden=$oterm->slug;
                                                        $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title', 'tax_query' => array( array( 'taxonomy' => 'product_tag', 'field' => 'slug', 'terms' => $orden )) );
                                                        $wc_query = new WP_Query($params);

                                                        if ($wc_query->have_posts()) :
                                                            ?>
                                                            <div class="margintop25">
                                                                <li><a><p class="white-text bold margintop10 marginbot5 <?php echo $categoriasushi.' '.$oterm->slug; ?>" data-ref='mixitup-target'><?php echo $oterm->name; ?></p></a></li>
                                                                <?php
                                                                    while ($wc_query->have_posts()) :
                                                                        $wc_query->the_post();
                                                                        $id = get_the_ID();
                                                                        $terms = wp_get_post_terms( $id, 'product_cat'); 
                                                                        $tag = wp_get_post_terms( $id, 'product_tag'); 
                                                                        $clases=array();
                                                                        foreach ($terms as $term) {
                                                                            $slug=$term->slug;
                                                                            array_push($clases, $slug);
                                                                        }
                                                                        foreach ($tag as $term) {
                                                                            $slug=$term->slug;
                                                                            array_push($clases, $slug);
                                                                        }
                                                                        if (in_array("categorias-sushi", $clases)) {}else{array_push($clases, $mfiltrado);}
                                                                        $clases=implode(" ",$clases);
                                                                        echo " <li><a class='waves-effect waves-light btn btn-fusion hoverableitem ".$clases."' data-ref='mixitup-target'>";the_title();echo "</a></li>";
                                                                    endwhile;
                                                                wp_reset_postdata(); 
                                                                ?>
                                                            </div>
                                                            <?php
                                                        endif;
                                                    }
                                                ?>
                                            </div>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                       
                        <div class="col-xs-12 col-sm-7 col-md-6 grey lighten-5 scroll" data-ref="mixitup-container2">
                        <?php
                            $categoria="CATEGORIAS SUSHI";
                            $main_array=array();
                            $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                            foreach ( $parent_terms as $pterm ) {
                                if($pterm->name!=$categoria){
                                    $categoria_slug=$pterm->slug;
                                    ?>
                                    <div class="fusion-contenido-tabla <?php echo $categoria_slug.' '.$mfiltrado; ?>" data-ref='mixitup-target2'>
                                        <table class="centered grey lighten-5">
                                            <thead>
                                                <tr class="theadenvoltorio">
                                                <?php
                                                $terms2 = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) ); 
                                                if(!empty($terms2)){
                                                    foreach ( $terms2 as $term2 ) {
                                                        $envoltorio=$term2->name;
                                                        $params = array('posts_per_page' => 1, 'post_type' => 'envoltorio', 'orderby' => 'title', 'title'  => $envoltorio );
                                                        $wc_query = new WP_Query($params);
                                                        if ($wc_query->have_posts()) {
                                                            while ($wc_query->have_posts()) :
                                                                $wc_query->the_post();
                                                                ?>
                                                                <th><span><?php the_post_thumbnail(); echo $term2->name;?></span></th>           
                                                                <?php
                                                            endwhile;
                                                            wp_reset_postdata(); 
                                                        }
                                                        else{
                                                            ?>
                                                            <th><span><?php echo $term2->name;?></span></th>           
                                                            <?php 
                                                        }
                                                    } 
                                                }
                                                ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                                $ordenterm = get_terms( 'product_tag', array( 'order' => 'ASC', 'hide_empty' => false ) );
                                                foreach ( $ordenterm as $oterm ) {
                                                    $orden=$oterm->slug;


                                                    $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title',
                                                                                'tax_query' => array(
                                                                                    'relation' => 'AND',
                                                                                    array( 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => $categoria_slug ),
                                                                                    array( 'taxonomy' => 'product_tag', 'field' => 'slug', 'terms' => $orden)
                                                                                ));
                                                    $wc_query = new WP_Query($params);
                                                    if ($wc_query->have_posts()) :
                                                        $margin=0;
                                                        while ($wc_query->have_posts()) :
                                                            $wc_query->the_post();
                                                            $id = get_the_ID();
                                                            $variations = find_valid_variations();
                                                            $longitud=count($variations);
                                                            if($margin==0){ 
                                                                ?>
                                                                    <td style="height: 50px"></td>
                                                                <?php
                                                            } 
                                                            ?>
                                                            <tr>
                                                                <?php
                                                                foreach ($terms2 as $term2) {
                                                                    $x=0;
                                                                    foreach ($variations as $key => $value) {
                                                                        $key = current($value['attributes']);
                                                                        $key2 = $key.'-'.$categoria_slug;
                                                                        if($key==$term2->slug || $key2==$term2->slug){
                                                                            $x++;
                                                                            if( !$value['variation_is_visible'] ) continue;
                                                                            if( $value['is_in_stock'] ) { 
                                                                               ?>
                                                                                <td>
                                                                                    <span class="botonesprecio">
                                                                                        $ <?php echo $value['display_price'];?>
                                                                                        <button type="submit" data-quantity="1" data-product_id="<?php echo $value['variation_id']; ?>" class="button alt ajax_add_to_cart add_to_cart_button product_type_simple">
                                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </span>
                                                                                </td>
                                                                            <?php } else { ?>
                                                                                <td>
                                                                                    <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
                                                                                </td>
                                                                            <?php }

                                                                        }
                                                                    }
                                                                    if($x==0){
                                                                        ?>
                                                                        <td>
                                                                            <?php echo 'key: '.$key.'<br>key2: '.$key2.'<br>slug>'.$term2->slug; print_r($value['attributes']); ?>
                                                                        </td>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </tr>
                                                            <?php
                                                            $margin++;
                                                        endwhile;
                                                        wp_reset_postdata(); 
                                                    endif;

                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php

                                }else{
                                    $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
                                    foreach ( $terms as $term ) {
                                        $subcategoria=$term->name;
                                        $subcategoria_slug=$term->slug;
                                        ?>
                                        <div class="fusion-contenido-tabla <?php echo $subcategoria_slug.' '.$mfiltrado; ?>" data-ref='mixitup-target2'>
                                            <table class="centered grey lighten-5">
                                                <thead>
                                                    <tr class="theadenvoltorio">
                                                    <?php
                                                    $terms2 = get_terms( $taxonomyName, array( 'parent' => $term->term_id, 'orderby' => 'slug', 'hide_empty' => false ) ); 
                                                    if(!empty($terms2)){
                                                        foreach ( $terms2 as $term2 ) {
                                                            $envoltorio=$term2->name;
                                                            $params = array('posts_per_page' => 1, 'post_type' => 'envoltorio', 'orderby' => 'title', 'title'  => $envoltorio );
                                                            $wc_query = new WP_Query($params);
                                                            if ($wc_query->have_posts()) {
                                                                while ($wc_query->have_posts()) :
                                                                    $wc_query->the_post();
                                                                    ?>
                                                                    <th><span><?php the_post_thumbnail(); echo $term2->name;?></span></th>           
                                                                    <?php
                                                                endwhile;
                                                                wp_reset_postdata(); 
                                                            }
                                                            else{
                                                                ?>
                                                                <th><span><?php echo $term2->name;?></span></th>           
                                                                <?php 
                                                            }
                                                        } 
                                                    }
                                                    ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <?php

                                                            $ordenterm = get_terms( 'product_tag', array( 'orderby'=>'title', 'order' => 'ASC', 'hide_empty' => false ) );
                                                            foreach ( $ordenterm as $oterm ) {
                                                                $orden=$oterm->slug;


                                                                $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title',
                                                                                'tax_query' => array(
                                                                                    'relation' => 'AND',
                                                                                    array( 'taxonomy' => 'product_cat', 'field' => 'name', 'terms' => $subcategoria),
                                                                                    array( 'taxonomy' => 'product_tag', 'field' => 'slug', 'terms' => $orden)
                                                                                ));
                                                                $wc_query = new WP_Query($params);
                                                                if ($wc_query->have_posts()) :
                                                                    $margin=0;
                                                                    while ($wc_query->have_posts()) :
                                                                        $wc_query->the_post();
                                                                        $id = get_the_ID();
                                                                        $variations = find_valid_variations();
                                                                        $longitud=count($variations);
                                                                        $tag = wp_get_post_terms( $id, 'product_tag'); 
                                                                        $tagclases='';
                                                                        foreach ($tag as $term) {
                                                                            $slug=$term->slug;
                                                                            $tagclases=$slug.' '.$tagclases;
                                                                        }
                                                                        if($margin==0){ 
                                                                            ?>
                                                                                <td class="<?php echo $oterm->slug.' '.$subcategoria_slug.' '.$tagclases; ?>" data-ref='mixitup-target2' style="height: 50px"></td>
                                                                            <?php
                                                                        } 
                                                                        ?>
                                                                        <tr class="<?php echo $subcategoria_slug.' '.$tagclases; ?>" data-ref='mixitup-target2'>
                                                                            <?php
                                                                            foreach ($terms2 as $term2) {
                                                                                $x=0;
                                                                                foreach ($variations as $key => $value) {
                                                                                    $key = current($value['attributes']);
                                                                                    $key2 = $key.'-'.$subcategoria_slug;
                                                                                    if($key==$term2->slug || $key2==$term2->slug){
                                                                                        $x++;
                                                                                        if( !$value['variation_is_visible'] ) continue;
                                                                                        if( $value['is_in_stock'] ) { 
                                                                                           ?>
                                                                                            <td>
                                                                                                <span class="botonesprecio">
                                                                                                    $ <?php echo $value['display_price'];?>
                                                                                                    <button type="submit" data-quantity="1" data-product_id="<?php echo $value['variation_id']; ?>" class="button alt ajax_add_to_cart add_to_cart_button product_type_simple">
                                                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                                                    </button>
                                                                                                </span>
                                                                                            </td>
                                                                                        <?php } else { ?>
                                                                                            <td>
                                                                                                <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
                                                                                            </td>
                                                                                        <?php }

                                                                                    }
                                                                                }
                                                                                if($x==0){
                                                                                    ?>
                                                                                    <td>
                                                                                        <?php echo 'key: '.$key.'<br>key2: '.$key2.'<br>slug>'.$term2->slug; print_r($value['attributes']); ?>
                                                                                    </td>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                            $margin++;
                                                                            ?>
                                                                        </tr>
                                                                        <?php
                                                                    endwhile;
                                                                    wp_reset_postdata(); 
                                                                endif;

                                                            }
                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                        ?>



                            <img src="<?php echo get_bloginfo('template_directory');?>/img/bandeja.jpg" class="responsive-img" style="width: 256px; left: 50%; position: relative;">




                        </div>
                    </div>

                    <!--
                        END +HD
                    -->

                    <!--
                        RESPONSIVE
                    -->
                    <div class="col-xs-12 padding0 show-on-medium-and-down hide-on-med-and-up">
                        <div class="row fondo1">
                            <div class="paddingleft15 paddingtop25 paddingbot25">
                                <div data-filter-group="mainm">
                                <?php 
                                    $arraycategoriasushi=array();
                                    $taxonomyName = "product_cat";
                                    $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'order' => 'ASC', 'hide_empty' => false ) );
                                    foreach ( $parent_terms as $pterm ) {
                                        
                                        if($pterm->name=='CATEGORIAS SUSHI'){
                                            echo '<a class="control"><p class="white-text bold margintop10">' . $pterm->name . '</p></a>'; 
                                            $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
                                            if(!empty($terms)){
                                                echo "<ul class='margintop0'>";
                                                foreach ( $terms as $term ) {
                                                    array_push($arraycategoriasushi, $term->slug);
                                                    echo '<li><a class="control" data-filter=".' . $term->slug . '"><p class="grey-text text-lighten-2">' . $term->name . '</p></a></li>';   
                                                }
                                                echo "</ul>";
                                            }
                                        }
                                        else{
                                            echo '<a class="control" data-filter=".' . $pterm->slug . '"><p class="white-text bold margintop10">' . $pterm->name . '</p></a>'; 
                                        }
                                    }
                                    $categoriasushi=implode(" ",$arraycategoriasushi);
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div data-filter-group="subm" data-logic="and">
                                <div class="col-xs-6 switch center-align">
                                    <a><p class="black-text bold margintop10 marginbot5">TRADICIONALES</p></a>
                                    <label>
                                        OFF
                                        <input type="checkbox" value=".tradicionales">
                                        <span class="lever"></span>
                                        ON
                                    </label>
                                </div>
                                <div class="col-xs-6 switch center-align">
                                    <a><p class="black-text bold margintop10 marginbot5">ESPECIAL</p></a>
                                    <label>
                                        OFF
                                        <input type="checkbox" value=".especial">
                                        <span class="lever"></span>
                                        ON
                                    </label>
                                </div>
                                <div class="col-xs-6 switch center-align">
                                    <a><p class="black-text bold margintop10 marginbot5">VEGETARIANO</p></a>
                                    <label>
                                        OFF
                                        <input type="checkbox" value=".vegetariano">
                                        <span class="lever"></span>
                                        ON
                                    </label>
                                </div>
                                <div class="col-xs-6 switch center-align">
                                    <a><p class="black-text bold margintop10 marginbot5">VEGANO</p></a>
                                    <label>
                                        OFF
                                        <input type="checkbox" value=".vegano">
                                        <span class="lever"></span>
                                        ON
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row"  data-ref="mixitup-container3">
                            <?php                        
                                $categoria="CATEGORIAS SUSHI";
                                $main_array=array();
                                $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
                                foreach ( $parent_terms as $pterm ) {
                                    if($pterm->name!=$categoria){
                                        $categoria_slug=$pterm->slug;

                                        ?>
                                            <div class="fusion-contenido-tabla <?php echo $categoria_slug.' '.$mfiltrado; ?>" data-ref='mixitup-target3'>
                                                <table class="responsive-table centered grey lighten-5">
                                                    <thead>
                                                        <tr>
                                                            <th><span> </span></th>
                                                            <?php
                                                            $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title', 'tax_query' => array( array( 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => $categoria_slug )));
                                                            $wc_query = new WP_Query($params);
                                                            if ($wc_query->have_posts()) :
                                                                while ($wc_query->have_posts()) :
                                                                    $wc_query->the_post();
                                                                    $id = get_the_ID();
                                                                    ?>
                                                                    <th><p><?php echo get_the_title(); ?></p></th>
                                                                    <?php
                                                                endwhile;
                                                                wp_reset_postdata(); 
                                                            endif; ?>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
                                                            foreach ( $terms as $term2 ) {

                                                                ?>
                                                                <tr>
                                                                    <?php
                                                                    $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title', 'tax_query' => array( array( 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => $categoria_slug )));
                                                                    $wc_query = new WP_Query($params);
                                                                    if ($wc_query->have_posts()) {

                                                                        $envoltorio=$term2->name;
                                                                        $params2 = array('posts_per_page' => 1, 'post_type' => 'envoltorio', 'orderby' => 'title', 'title'  => $envoltorio );
                                                                        $wc_query2 = new WP_Query($params2);
                                                                        if ($wc_query2->have_posts()) {
                                                                            while ($wc_query2->have_posts()) :
                                                                                $wc_query2->the_post();
                                                                                ?>
                                                                                <td>
                                                                                    <span>
                                                                                        <?php the_post_thumbnail(); echo $term2->name;?>
                                                                                    </span>
                                                                                </td>
                                                                                <?php
                                                                            endwhile;
                                                                            wp_reset_postdata(); 
                                                                        }
                                                                        else{
                                                                            ?>
                                                                            <td>
                                                                                <span>
                                                                                    <?php echo $term2->name;?>
                                                                                </span>
                                                                            </td>
                                                                            <?php
                                                                        }
                                                                        while ($wc_query->have_posts()){
                                                                            $wc_query->the_post();
                                                                            $id = get_the_ID();
                                                                            $variations = find_valid_variations();
                                                                            $longitud=count($variations);
                                                                            foreach ($variations as $key => $value) {
                                                                                $key = current($value['attributes']);
                                                                                $key2 = $key.'-'.$categoria_slug;
                                                                                if($key==$term2->slug || $key2==$term2->slug){
                                                                                    $x++;
                                                                                    if( !$value['variation_is_visible'] ) continue;
                                                                                    if( $value['is_in_stock'] ) { 
                                                                                       ?>
                                                                                        <td>
                                                                                    <span class="botonesprecio">
                                                                                        $ <?php echo $value['display_price'];?>
                                                                                        <button type="submit" data-quantity="1" data-product_id="<?php echo $value['variation_id']; ?>" class="button alt ajax_add_to_cart add_to_cart_button product_type_simple">
                                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </span>
                                                                                        </td>
                                                                                    <?php } else { ?>
                                                                                        <td>
                                                                                            <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
                                                                                        </td>
                                                                                    <?php }

                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                    ?>
                                                                </tr>
                                                                <?php

                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php

                                    }else{
                                        $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
                                        foreach ( $terms as $term ) {

                                            $terms2 = get_terms( $taxonomyName, array( 'parent' => $term->term_id, 'orderby' => 'slug', 'hide_empty' => false ) ); 
                                            $subcategoria=$term->name;
                                            $subcategoria_slug=$term->slug;
                                            ?>
                                            <div class="fusion-contenido-tabla <?php echo $subcategoria_slug.' '.$mfiltrado; ?>" data-ref='mixitup-target3'>
                                                <table class="responsive-table centered grey lighten-5">
                                                    <thead>
                                                        <tr>
                                                            <th><span> </span></th>
                                                            <?php
                                                                $ordenterm = get_terms( 'product_tag', array( 'orderby'=>'title', 'order' => 'ASC', 'hide_empty' => false ) );
                                                                foreach ( $ordenterm as $oterm ) {
                                                                    $orden=$oterm->slug;
                                                                    $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title', 'tax_query' => array(
                                                                                        'relation' => 'AND',
                                                                                        array( 'taxonomy' => 'product_cat', 'field' => 'name', 'terms' => $subcategoria),
                                                                                        array( 'taxonomy' => 'product_tag', 'field' => 'slug', 'terms' => $orden)
                                                                                    ));
                                                                    $wc_query = new WP_Query($params);
                                                                    if ($wc_query->have_posts()) :
                                                                        $categoriaxs=0;
                                                                        while ($wc_query->have_posts()) :
                                                                            $wc_query->the_post();
                                                                            $id = get_the_ID();
                                                                            $tag = wp_get_post_terms( $id, 'product_tag'); 
                                                                            $tagclases='';
                                                                            foreach ($tag as $term) {
                                                                                $slug=$term->slug;
                                                                                $tagclases=$slug.' '.$tagclases;
                                                                            }
                                                                            if($categoriaxs==0){
                                                                                ?>
                                                                                <th class="<?php echo $tagclases.' '.$subcategoria_slug; ?>" data-ref='mixitup-target3'><p><?php echo $oterm->name; ?></p></th>
                                                                                <?php
                                                                            }
                                                                            $categoriaxs++;
                                                                            ?>
                                                                            <th class="<?php echo $tagclases.' '.$subcategoria_slug; ?>" data-ref='mixitup-target3'><p><?php echo get_the_title(); ?></p></th>
                                                                            <?php
                                                                        endwhile;
                                                                        wp_reset_postdata(); 
                                                                    endif; 
                                                                } 
                                                                ?>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($terms2 as $term2) {
                                                                    $envoltorioxs=0;
                                                            ?>
                                                            <tr>
                                                                <?php

                                                                $ordenterm = get_terms( 'product_tag', array( 'orderby'=>'title', 'order' => 'ASC', 'hide_empty' => false ) );
                                                                foreach ( $ordenterm as $oterm ) {
                                                                    $orden=$oterm->slug;

                                                                    $params = array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'title', 'tax_query' => array(
                                                                                        'relation' => 'AND',
                                                                                        array( 'taxonomy' => 'product_cat', 'field' => 'name', 'terms' => $subcategoria),
                                                                                        array( 'taxonomy' => 'product_tag', 'field' => 'slug', 'terms' => $orden)
                                                                                    ));
                                                                    $wc_query = new WP_Query($params);
                                                                    if ($wc_query->have_posts()) {
                                                                        $envoltorio=$term2->name;
                                                                        if($envoltorioxs==0){
                                                                            $params2 = array('posts_per_page' => 1, 'post_type' => 'envoltorio', 'orderby' => 'title', 'title'  => $envoltorio );
                                                                            $wc_query2 = new WP_Query($params2);
                                                                            if ($wc_query2->have_posts()) {
                                                                                while ($wc_query2->have_posts()) :
                                                                                    $wc_query2->the_post();
                                                                                    ?>
                                                                                    <td>
                                                                                        <span>
                                                                                            <?php the_post_thumbnail(); echo $term2->name;?>
                                                                                        </span>
                                                                                    </td>
                                                                                    <?php
                                                                                endwhile;
                                                                                wp_reset_postdata(); 
                                                                            }
                                                                            else{
                                                                                ?>
                                                                                <td>
                                                                                    <span>
                                                                                        <?php echo $term2->name;?>
                                                                                    </span>
                                                                                </td>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        $envoltorioxs++;
                                                                        while ($wc_query->have_posts()){
                                                                            $wc_query->the_post();
                                                                            $id = get_the_ID();
                                                                            $variations = find_valid_variations();
                                                                            $longitud=count($variations);
                                                                            $tag = wp_get_post_terms( $id, 'product_tag'); 
                                                                            $tagclases='';
                                                                            foreach ($tag as $term) {
                                                                                $slug=$term->slug;
                                                                                $tagclases=$slug.' '.$tagclases;
                                                                            }
                                                                            foreach ($variations as $key => $value) {
                                                                                $key = current($value['attributes']);
                                                                                $key2 = $key.'-'.$subcategoria_slug;
                                                                                if($key==$term2->slug || $key2==$term2->slug){
                                                                                    $x++;
                                                                                    if( !$value['variation_is_visible'] ) continue;
                                                                                    if( $value['is_in_stock'] ) { 
                                                                                       ?>
                                                                                       <td class="<?php echo $tagclases.' '.$subcategoria_slug; ?>" data-ref='mixitup-target3'><span></span></td>
                                                                                        <td class="<?php echo $tagclases.' '.$subcategoria_slug; ?>" data-ref='mixitup-target3'>
                                                                                    <span class="botonesprecio">
                                                                                        $ <?php echo $value['display_price'];?>
                                                                                        <button type="submit" data-quantity="1" data-product_id="<?php echo $value['variation_id']; ?>" class="button alt ajax_add_to_cart add_to_cart_button product_type_simple">
                                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </span>
                                                                                        </td>
                                                                                    <?php } else { ?>
                                                                                       <td class="<?php echo $tagclases.' '.$subcategoria_slug; ?>" data-ref='mixitup-target3'><span></span></td>
                                                                                        <td class="<?php echo $tagclases.' '.$subcategoria_slug; ?>" data-ref='mixitup-target3'>
                                                                                            <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
                                                                                        </td>
                                                                                    <?php }

                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                            </tr>
                                                                <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>

                    <!--
                        END RESPONSIVE
                    -->
                </div>
                <!--
                    SEGUNDA TAB
                -->
                <div id="test2" class="col s12 padding0 displaynone grey lighten-5">
                    <div class="primeratab">
                        <div class="fusiona-overlay" style="position: relative;">
                            <div class="container-fluid valign-wrapper width100 home-bienvenido">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 center-align borde margintop25 marginbot25 paddingleft50 paddingright50 paddingtop25">
                                    <?php 
                                        echo do_shortcode('[wpforms id="50"]');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="fondo1 width100" style="height: 32px;"></div>
                    <div class="fondo5 width100" style="height: 32px;"></div>
                </div>
                <!--
                    TERCERA TAB
                -->
                <div id="test4" class="col s12 displaynone padding0">
                    <div class="primeratab">
                        <div class="fusiona-overlay paddingbot75 paddingtop75" style="position: relative;">
                            <div class="container home-bienvenido marginbot25">
                                <div class="col-xs-12">
                                    <?php
                                        echo do_shortcode("[arrow_sf id='49']"); 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="fondo1 width100" style="height: 32px;"></div>
                    <div class="fondo5 width100" style="height: 32px;"></div>
                </div>
        </div>

<?php get_footer(); ?>

    <script>
        jQuery(document).ready(function () {
            jQuery('.slider').slider({height:152});
            var containerEl = document.querySelector('[data-ref~="mixitup-container"]');
            var mixer = mixitup(containerEl, {
                selectors: {
                    target: '[data-ref~="mixitup-target"]'
                },
                animation: {
                    duration: 200
                },
                load: {
                    filter: '.fritos'
                },
                 multifilter: {
                    enable: true // enable the multifilter extension for the mixer
                }
            });
            var containerEl2 = document.querySelector('[data-ref~="mixitup-container2"]');
            var mixer2 = mixitup(containerEl2, {
                selectors: {
                    target: '[data-ref~="mixitup-target2"]'
                },
                animation: {
                    duration: 200
                },
                load: {
                    filter: '.fritos'
                },
                 multifilter: {
                    enable: true // enable the multifilter extension for the mixer
                }
            });

            var containerEl3 = document.querySelector('[data-ref~="mixitup-container3"]');
            var mixer3 = mixitup(containerEl3, {
                selectors: {
                    target: '[data-ref~="mixitup-target3"]'
                },
                animation: {
                    duration: 200
                },
                load: {
                    filter: '.fritos'
                },
                 multifilter: {
                    enable: true // enable the multifilter extension for the mixer
                }
            });


            mixer.setFilterGroupSelectors('main', '.frito');
            mixer2.setFilterGroupSelectors('main', '.frito');
            mixer3.setFilterGroupSelectors('mainm', '.frito');
        
        });

        jQuery( "#scroll" ).click(function(e) {
            var windowScrollTop = jQuery(window).scrollTop();
            if(windowScrollTop <= 5){
                setTimeout(myFunction, 100)
            }else{
                e.preventDefault();
            }
        });
        function myFunction() {
            jQuery("html, body").animate({ scrollTop: jQuery('#scroll').offset().top-96 }, 700);
        }
    </script>

    <script>
      'use strict';
      var video = document.querySelector('video');
      var promise = video.play();
      if (promise === undefined) {
        console.log('Promisified video play() not supported');
      } else {
        promise.then(function() {
          console.log('Video playback successfully initiated, returning a promise');
        }).catch(function(error) {
          console.log('Error initiating video playback: ', error);
        });
      }
    </script>