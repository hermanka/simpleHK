<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    </div><!-- /.container -->
	<div class="container">
    <div class="blog-footer">
    
      <?php //get_sidebar( 'footer' ); ?>
      
	  
      <p class="copyright">Powered by <a href="https://wordpress.org/" target="_blank">Wordpress</a> and <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> | <a href="#"><?php _e( 'Back to top', 'bootstrapcanvaswp' ); ?></a>
      </p>
    </div>
    </div>

    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
  </body>
</html>