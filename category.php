<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy

*/?>

<?php get_header(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <main>
          <?php if ( have_posts() ) : ?>

                <?php
                  the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();

                    /*
                    * Include the post format-specific template for the content. If you want to
                    * use this in a child theme, then include a file called called content-___.php
                    * (where ___ is the post format) and that will be used instead.
                    */
                    get_template_part( 'content', get_post_format() );
                    endwhile;

                  // Page navigation.
                  echo bootstrap_pagination();

                  else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content', 'none' );

                endif;
              ?>
          </main>
      </div>
      <div class="col-lg-2">
          <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>