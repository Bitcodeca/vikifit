<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="theme-color" content="#940849">
        <meta name="msapplication-navbutton-color" content="#940849">
        <meta name="apple-mobile-web-app-status-bar-style" content="#940849">

		<title>SUB SUSHI</title>

        <meta name="robots" content="NOFOLLOW, NOINDEX">

        <link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico" />
        <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.png" />
        <link rel="icon" type="image/gif" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.gif" />

        <?php wp_head(); ?>


        
        <?php
            $params = array("posts_per_page" => 5, "post_type" => "post", 'category_name'=>'Navbar');
            $wc_query = new WP_Query($params);

            if ($wc_query->have_posts()) :
                $nav_implode='';
                while ($wc_query->have_posts()) :
                    $wc_query->the_post();
                    $id = get_the_ID();

                    $nav_implode='<li><a class="modal-trigger" href="#'.$id.'">'.get_the_title().'</a></li>'.$nav_implode;
                endwhile;
            wp_reset_postdata(); 
            endif;
        ?>
	</head>
    <body ng-app="contactApp">
         <header>
            <div class="navbar-fixed">
                <nav id="site-navigation" class="main-navigation black" role="navigation">
                    <div class="nav-wrapper z-depth-2 fondo1">
                        <div class="container-fluid">

                            <a href="<?php site_url(); ?>" class="brand-logo show-on-medium-and-down">
                                <img src="<?php echo get_bloginfo('template_directory');?>/img/logosubsushi1989.png" class="responsive-img">
                            </a>
                                
                            <a href=# data-activates=mobile-demo class=button-collapse>
                                <i class="fa fa-bars color3 fa-2x" aria-hidden="true"></i>
                            </a>

                            <?php
                                wp_nav_menu( array( 'theme_location' => 'admin', 
                                    'menu_id' => 'nav-mobile', 
                                    'menu_class' => 'left hide-on-med-and-down', 
                                    'walker' => new Materialize_Walker_Desktop_Nav_Menu(),
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">
                                                        <li class="logoli">
                                                            <a href="'. site_url().'" class="brand-logo">
                                                                <img src="'.get_bloginfo('template_directory').'/img/logosubsushi1989.png" class="responsive-img" alt="logo">
                                                            </a>
                                                        </li>
                                                        %3$s
                                                        '.$nav_implode.'
                                                    </ul>' ) 
                                );
                            ?> 

                            <?php
                                wp_nav_menu( array( 'theme_location' => 'admin', 
                                    'menu_id' => 'mobile-demo', 
                                    'menu_class' => 'side-nav fondo1', 
                                    'walker' => new Materialize_Walker_Desktop_Nav_Menu(),
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">
                                                        <li><a href="'.site_url().'" class="center-align margintop10"><img src="'.get_bloginfo('template_directory').'/img/logosubsushi1989.png" class="responsive-img"></a></li>
                                                            %3$s
                                                        '.$nav_implode.'
                                                    </ul>'  ) 
                                );
                            ?>
                            <ul class="right">

                                <?php 
                                if ( is_user_logged_in() ) {
                                    $user_logged=user_logged();
                                    echo '<li class="hide-on-med-and-down"><a href="'.site_url().'/mi-cuenta/"><i class="fa fa-user fa-2x" aria-hidden="true"></i> '.$user_logged['login'].'</a></li>';
                                }
                                else{
                                    echo '<li class="hide-on-med-and-down"><a href="#signin" class="modal-trigger"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i> Inicie sesión</a></li>';
                                }
                                ?>
                                <li>
                                    <a href="<?php site_url(); ?>/carro/">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bag.svg" height="30px">
                                        <!--<i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i>-->
                                        <span class="badge custom-badge cart-customlocation" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </header>  
		<main>

        <?php 
        if ( is_user_logged_in() ) {
        }
        else{
            ?>
            <div id="signin" class="modal">
                <div class="modal-content white-text">
                    <div class="row">
                        <h3 class="center-align">Inicio de sesión</h3>
                        <?php 
                            echo do_shortcode( '[ultimatemember form_id=7]' ); 
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

        
        <?php
            $params = array("posts_per_page" => 5, "post_type" => "post", 'category_name'=>'Navbar');
            $wc_query = new WP_Query($params);

            if ($wc_query->have_posts()) :
                $nav_implode='';
                while ($wc_query->have_posts()) :
                    $wc_query->the_post();
                    $id = get_the_ID();
                    ?>
                    <div id="<?php echo $id; ?>" class="modal modal-fixed-footer">
                        <div class="modal-content white-text">
                            <h4 class="color3"><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat white-text">Cerrar</a>
                        </div>
                    </div>
                    <?php
                endwhile;
            wp_reset_postdata(); 
            endif;
        ?>