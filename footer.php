<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="site-footer" role="contentinfo">
<footer class="demo-site-footer">
  <div class="row medium-unstack">
    <div class="medium-4 columns">
      <h4 class="demo-site-footer-name"><?php bloginfo( 'name' ); ?></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita dolorem accusantium architecto id quidem, itaque nesciunt quam ducimus atque.</p>
    </div>
    <div class="medium-4 columns">
    
    </div>
    <div class="medium-4 columns">

    </div>
  </div>
  <div class="demo-site-footer-bottom">
    <div class="row large-unstack align-middle">
      <div class="column">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
      </div>





      <div class="column">
        <ul class="menu demo-site-footer-bottom-links">
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
  </div>
</footer>


</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
