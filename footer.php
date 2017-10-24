	
	</main>
    <footer>
        <div class=fondo1>
            <div class=container-fluid>
                <div class="row marginbot5 magrintop10">
                    <div class="col-xs-12 col-sm-3">
                        <div class="center-align">
                            <a href="#" class=""><i class="fa fa-facebook fa-2x padding15" aria-hidden="true" style=" position: relative!important; top: inherit !important; right: inherit!important; background: inherit!important; padding: inherit!important; border-radius: inherit!important; color: inherit!important; margin:25px 15px;border:0px!important;"></i></a>
                            <a href="#" class=""><i class="fa fa-twitter fa-2x padding14" aria-hidden="true" style=" position: relative!important; top: inherit !important; right: inherit!important; background: inherit!important; padding: inherit!important; border-radius: inherit!important; color: inherit!important; margin:25px 15px;border:0px!important;"></i></a>
                            <a href="#" class=""><i class="fa fa-instagram fa-2x padding15" aria-hidden="true" style=" position: relative!important; top: inherit !important; right: inherit!important; background: inherit!important; padding: inherit!important; border-radius: inherit!important; color: inherit!important; margin:25px 15px;border:0px!important;"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="center-align  grey-text text-lighten-2 paddingbot10 paddingtop15">
                            <p>En SUB Sushi tenemos el mejor sushi de Santiago. Despacho a domicilio y retiro en la Florida.</p>
                            <p>Horario de atención: Lunes a sábado en locales de 12:00 a 17:00 y 18:00 a 24:00 hrs y online de 12:00 a 17:00 y 18:00 a 23:00 hrs.</p>
                            <p>&#9400; SUB Sushi. Todos los derechos reservados. Diseñado por <a href="http://www.ouctupus.com" class="color2"> Ouctupus</a>.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="center-align  grey-text text-lighten-2">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/redcompra.svg" class="responsive-img margintop15" style="max-height: 36px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
    <script>
        jQuery(document).ready(function () {
            jQuery(".button-collapse").sideNav();
            jQuery('.parallax').parallax();
            jQuery('.carousel.carousel-slider').carousel({fullWidth: true, height: 128});
            jQuery('.modal').modal({
                inDuration: 100, // Transition in duration
                outDuration: 100, // Transition out duration
            });
        });
    </script>
	</body>
</html>