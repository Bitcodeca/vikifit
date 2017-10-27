<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="theme-color" content="#940849">
        <meta name="msapplication-navbutton-color" content="#940849">
        <meta name="apple-mobile-web-app-status-bar-style" content="#940849">

		<title>Viki Fit</title>

        <meta name="robots" content="NOFOLLOW, NOINDEX">

        <link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico" />
        <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.png" />
        <link rel="icon" type="image/gif" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.gif" />

        <?php wp_head(); ?>

	</head>
    <body ng-app="contactApp">
         <header>
                <nav id="site-navigation" class="main-navigation" role="navigation" style="position: absolute; z-index: 1000; top: 32px;">
                    <div class="nav-wrapper">
                        <div class="container">

                            <a href="<?php site_url(); ?>" class="brand-logo show-on-medium-and-down">
                                <img src="<?php echo get_bloginfo('template_directory');?>/img/VICKY BERGER PNG BLANCO.png" style="height: 112px;">
                            </a>
                                
                            <a href=# data-activates=mobile-demo class=button-collapse>
                                <i class="fa fa-bars color3 fa-2x" aria-hidden="true"></i>
                            </a>


                            <?php
                                wp_nav_menu( array( 'theme_location' => 'admin', 
                                    'menu_id' => 'nav-mobile', 
                                    'menu_class' => 'right hide-on-med-and-down', 
                                    'walker' => new Materialize_Walker_Desktop_Nav_Menu(),
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">
                                                        %3$s
                                                    </ul>' ) 
                                );
                            ?> 
                            <?php
                                wp_nav_menu( array( 'theme_location' => 'admin', 
                                    'menu_id' => 'mobile-demo', 
                                    'menu_class' => 'side-nav fondo1', 
                                    'walker' => new Materialize_Walker_Desktop_Nav_Menu(),
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">
                                                            %3$s
                                                    </ul>'  ) 
                                );
                            ?>

                        </div>
                    </div>
                </nav>
        </header>  
		<main>

