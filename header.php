<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		echo '<link rel="shortcut icon" href="';
		echo bloginfo('template_directory').'/favicon.ico';
		echo '" />';
	?>

    <title><?php wp_title(); ?></title>
    
	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
    ?>
  </head>
  <body <?php body_class(); ?>>
    
   
    <?php $header_image = get_header_image(); ?>
    <div class="blog-header" <?php if ( get_header_image() ) : ?>style="background-image: url( '<?php echo esc_url( $header_image ); ?>'); background-size: cover; background-repeat: no-repeat; background-position: top left; margin-bottom: 0; width: 100%; height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; position: relative;"<?php endif; ?>>
      <div class="container">
        <div class="row row-centered">
		<div class="col-md-8 col-sm-8 col-xs-12 col-centered" style="padding-left:0!important">
			<?php if ( display_header_text() ) : ?>
			<?php $header_text_color = get_header_textcolor(); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="blog-title" style="color: #<?php echo $header_text_color ?>;"><?php bloginfo( 'name' ); ?></h1></a>
			<p class="lead blog-description" style="color: #<?php echo $header_text_color ?>"><i><?php bloginfo( 'description' ); ?></i></p>
			<?php else : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="blog-title" style="visibility: hidden; margin: 0; padding: 0; font-size: 0;"><?php bloginfo( 'name' ); ?></h1></a>
			<p class="lead blog-description" style="visibility: hidden; margin: 0; padding: 0; font-size: 0;"><i><?php bloginfo( 'description' ); ?></i></p>
			<?php endif; ?>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12 blog-title" style="padding-left:0!important">
			<?php get_search_form(); ?>
		</div>
		</div>
		
		
      </div>
	  
    </div>
    
    <div class="container">
	
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"><?php _e( 'Toggle navigation', 'bootstrapcanvaswp' ); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		<?php
		wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 5,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav no-float',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
			
        ?><!--/.nav-collapse -->
    </nav>