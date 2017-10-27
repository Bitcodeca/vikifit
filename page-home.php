<?php get_header(); ?>

    <div class="parallax-container parallax-inicio valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0193-min2.jpg"></div>
      <h1 class="centrado white-text">Lorem ipsum dolor sit amet</h1>
    </div>
    <div class="container margintop75 marginbot25">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 class="color3">Lorem ipsum</h4>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                    <h2 class="center-align">Lorem Ipsum</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/230-min.jpg" class="responsive-img">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/731-min.jpg" class="responsive-img">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/180278-OWMGK8-135-min.jpg" class="responsive-img">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container margintop75 marginbot25">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/IMG_7930.jpg" class="responsive-img">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 class="color3">Lorem ipsum</h4>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <div class="parallax-container parallax-inicio2 valign-wrapper">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/img/00_DSC0087-min.jpg"></div>
      <h2 class="centrado white-text">This should be vertically aligned</h2>
    </div>

<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });
</script>