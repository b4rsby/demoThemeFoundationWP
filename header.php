<?php
/**
 * Default Header Template
 *
 */
?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php bloginfo('name');?> |
                <?php wp_title('', 'true', 'right');?>
        </title>
        <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
        <?php wp_head(); ?>
    </head>





    <body <?php body_class(); ?>>

<!-- This demo uses float grid but you can use flex grid too -->
<header>

<nav class="top-bar topbar-responsive">
  <div class="top-bar-title">
    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>

 
    <a class="topbar-responsive-logo" href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
  </div>
  <div id="topbar-responsive" class="topbar-responsive-links">
    <div class="top-bar-right">
      <ul class="menu vertical medium-horizontal mobile-menu-list">

            <?php
          wp_nav_menu( array(
            'container'      => false,
            'menu'           => 'Primary Menu',
            'menu_class'     => 'vertical medium-horizontal menu',
            'theme_location' => 'primary',
            //Recommend setting this to false, but if you need a fallback...
            'fallback_cb'    => 'f6_drill_menu_fallback',
            'walker'         => new F6_DRILL_MENU_WALKER()
          ) );

          ?>
      </ul>


    </div>
  </div>
</nav>




</header><!-- /header -->



