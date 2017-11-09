<?php get_header(); ?>

    <div class="parallax-container parallax-biografia valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0322-min2.jpg"></div>
      <h1 class="centrado center-align white-text">SHOP/SPONSORS<br>
      <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</small></h1>
    </div>

    <div class="container margintop75 marginbot50">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="center-align">A continuacion podras visitar las paginas de mis patrocinantes donde recomiendo todos losproductos y prendas que han sido aleados para mantener mi vida saludable</h3>
            </div>
        </div>
    </div>
    <div class="parallax-sponsors valign-wrapper fondo5">
    	<div class="container">
	    	<div class="col-xs-6 col-sm-3 margintop25"><img src="<?php echo get_bloginfo('template_directory');?>/img/FORZAGEN.png" class="responsive-img"></div>
	    	<div class="col-xs-6 col-sm-6 center-align">
		      <h2 class="centrado center-align white-text">Forzagen</h2>
		      <h4 class="white-text center-align">Forzagen is a supplements line developed for the international market.</h4>
		      <a class="waves-effect waves-light btn paddingleft15 paddingright15" style="background-color:#2e70ff;" href="http://www.forzagen.com" target="_blank">Visitar</a>
	    	</div>
	    	<div class="col-xs-6 col-sm-3 margintop25"><img src="<?php echo get_bloginfo('template_directory');?>/img/image1.jpeg" class="responsive-img"></div>
    	</div>
    </div>
    <div class="parallax-sponsors valign-wrapper fondo2">
    	<div class="container">
	    	<div class="col-xs-6 col-sm-3 margintop25"><img src="<?php echo get_bloginfo('template_directory');?>/img/GOFIT STYLE.png" class="responsive-img"></div>
	    	<div class="col-xs-6 col-sm-6 center-align">
		      <h2 class="centrado center-align white-text">GOFITSTYLE</h2>
		      <h4 class="white-text center-align">BD by BB brings a fresh look with a defined sense of self-being.</h4>
		      <a class="waves-effect waves-light btn fondo5 paddingleft15 paddingright15" href="http://bdbybbjewelry.com/product-category/workout-apparel/ " target="_blank">Visitar</a>
	    	</div>
	    	<div class="col-xs-6 col-sm-3 margintop25"><img src="<?php echo get_bloginfo('template_directory');?>/img/GoFit.jpeg" class="responsive-img"></div>
    	</div>
    </div>


<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>