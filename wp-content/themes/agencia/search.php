<?php get_header();?>
<?php //get_template_part('navbar-inner');?>
<?php //get_template_part('inner-banner');?>
	<div id="main" class="main">
		<div class="black-bg">
			<div class="container-fluid">
			  <div class="row">
			    <div class="col-lg-12">
			    	<h3>
			    		<span>AGENCIA</span>
			    		<!-- <span class="separator"><img src="<?php echo get_template_directory_uri();?>/images/separator.png"></span>
			    		<span class="play"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/play-small.png"></a></span> -->
			    	</h3>
			    </div>
			  </div>
			</div>
		</div> <!-- black-bg -->

		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-content">


							<?php if ( have_posts() ) : ?>
        <header class="page-header">
          <h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
        </header>
        <?php //twentytwelve_content_nav( 'nav-above' ); ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="search-result">
          <?php //get_template_part( 'content', get_post_format() ); ?>
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
          <?php the_excerpt();?>
          <a href="<?php the_permalink();?>">Read More</a>
          </div>
        <?php endwhile; ?>
        <?php //twentytwelve_content_nav( 'nav-below' ); ?>
      <?php else : ?>

        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h3 class="page-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h3>
          </header>
          <div class="entry-content">
            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->
      <?php endif; ?>
							
						
					</div>
				</div>
			</div> <!-- container-fluid -->
		</div> <!-- wrapper -->
	</div> <!-- main -->
<?php get_footer();?>