<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container d-flex justify-content-between h-100">
    <?php if ( ! has_custom_logo() ) { ?>
      <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
    <?php } else {
      the_custom_logo();
    } ?>

    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-navbar" 
      aria-controls="header-navbar" aria-expanded="false" 
      aria-label="<?php esc_attr_e( 'Toggle navigation', 'underscores-bootstrap' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'header-navbar',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
  </div>
</nav>