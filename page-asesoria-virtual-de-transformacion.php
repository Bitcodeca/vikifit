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
			<h2 class="center-align">Lorem ipsum dolor sit amet, <span class="color3">consectetur adipiscing elit...</span></h2>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 margintop25">
                <p>Este plan incluye un plan personalizado basado en tus metas, realizado para hombres  mujeres. La membresía incluye un programa personalizado basado en sus metas! Realizada específicamente para hombres y mujeres. Nuestro programa está diseñado para cumplir con sus objetivos individuales, si desea ganar músculo, bajar de peso o tonificar. Cada plan personalizado está garantizado para construir el músculo y quemar grasa! Con nuestro cuestionario se obtiene la información necesaria para crear un programa personalizado basado en sus objetivos específicos. Este proceso garantiza los mejores resultados posibles se alcanzan con nuestra capacitación en línea, no importa cuál es el objetivo que desea lograr!</p>
                
            </div>
        </div>
        <div class="row">
        	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<div class="card darken-1">
		            <div style="border-bottom:1px solid black;">
						<h2 class="color3 marginbot0 center-align paddingtop25">INCLUYE</h2>
						<h4 class="margintop0 center-align"><a class="color5">USD 89.99</a></h4>
		            </div>
					<div class="card-content white center-align marginbot0 margintop0">
				        <h5><i class="fa fa-caret-right" aria-hidden="true"></i> Estudio Indice de masa corporal</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Total de calorias</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Porcentaje de grasa de acuerdo a medidas</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Test de Biotipo (mesomorfo, ectomorfo, endomorfo)</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Calculo de macronutrientes</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Lista de sustitucion de alimentos </h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Plan de alimentacion</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Suplementacion</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Entrenamiento</h5>
						<h5><i class="fa fa-caret-right" aria-hidden="true"></i> Soporte 24/7</h5>
					</div>
					<div class="card-action fondo2 white-text center-align" style="padding:0px">
						<a class="color5 modal-trigger" href="#comprar" style="position: relative;">
							<h3 class="margintop15 marginbot10" style="padding: 36px 24px; position: relative; display: inline-block; width: 100%; margin: 0px;">COMPRAR</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
    </div>

  <div id="comprar" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
      jQuery('.modal').modal();
    });
</script>