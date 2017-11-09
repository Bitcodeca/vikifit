<?php get_header(); ?>

    <div class="parallax-container parallax-contacto valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0151-min2.jpg"></div>
      <h1 class="centrado center-align white-text">CONTACTO</h1>
    </div>

    <div class="container margintop75 marginbot50">
        <div class="row">
            <div class="col-xs-12 col-sm-12 center-align">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="row">
      <h2 class="center-align">Lorem ipsum dolor sit amet, <span class="color3">consectetur adipiscing elit...</span></h2>
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 margintop75">
                <div ng-controller="ContactController">
                    <form ng-submit="submit(contactform)" name="contactform" method="post" role="form">
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-field">
                              <input id="nombre" type="text" class="validate" ng-model="formData.nombre" name="nombre" required>
                              <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="input-field">
                              <input id="numero" type="number" class="validate" ng-model="formData.numero" name="numero" required>
                              <label for="numero">Número</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="input-field">
                              <input id="email" type="email" class="validate" ng-model="formData.email" name="email" required>
                              <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="input-field">
                              <textarea id="message" class="materialize-textarea" ng-model="formData.message" name="message" required></textarea>
                              <label for="message">Comentario</label>
                            </div>
                        </div>
                        <div class="col-xs-12 center-align margintop25">
                            <button type="submit" class="waves-effect waves-light btn fondo3 hoverable" ng-disabled="submitButtonDisabled">Enviar Mensaje</button>
                        </div>
                    </form>
                    <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                </div>
            </div>

        </div>
    </div>



<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>