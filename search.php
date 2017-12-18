<?php
/**
 * Template for displaying Search Results pages
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

      <div class="row">

        <div class="col-sm-8 col-xs-12 col-md-8 col-lg-8 blog-main">

          <h4><?php printf( __( 'Search Results for: %s', 'bootstrapcanvaswp' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
		  <hr />
		  <?php get_template_part( 'loop', 'search' ); ?>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->
      
	<?php get_footer(); ?>