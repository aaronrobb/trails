<header class="banner">
<div class="header-wrapper">
  <div class="header-top container">
      <div class="d-flex justify-content-between align-items-center">
        <a href="<?php echo site_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/rivertraillogo.png" alt="River Trail logo" class="brand"></a>
        <div class="socialtop"><a href="<?php echo site_url(); ?>my-river-trail/">#myRiverTrail</a></div>
      </div>  
      <div class="container-header">
  			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <span class="sr-only sr-only-focusable"><?php bloginfo('name'); ?></span>

        <?php
            wp_nav_menu( array(
              'theme_location' => 'primary_navigation',
              'container'      => false,
              'menu_class'     => 'nav navbar-nav',
              'fallback_cb'    => '__return_false',
              'items_wrap'     => '<ul id="%1$s" class="%2$s mx-auto">%3$s</ul>',
              'depth'          => 3,
              'walker'         => new bootstrap_4_walker_nav_menu()
           ) );
        ?>
        <?php get_template_part('templates/navbar-search'); ?>
      </div>
    </nav>
  			</div>
  </div>

</div>  
  <div class="container-fluid no-gutters">
    
<?php if(is_front_page()) { ?>
    <?php 
    $images = get_field('frontimagegallery');
    $rand = array_rand($images, 1);
    	
    if( $images ): ?>
    	<div class="fronthero" style="background: url('<?php echo $images[$rand]['url']; ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="tagline">
          Experience the Trail<br>
          <span>#myrivertrail</span>
        </div>
    	</div>
  <?php endif; ?>
<?php } ?>


  </div>
</header>