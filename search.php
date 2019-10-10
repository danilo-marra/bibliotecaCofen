<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10">
      <main>
        <?php if ( have_posts() ) : ?>
          <h1 class="page-title"><?php printf( __( 'Resultados: %s', 'biblioteca_cofen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'search' ); ?>

          <?php endwhile; ?>

          <?php // Page navigation.
          echo bootstrap_pagination();?>

          <?php else : ?>

          <?php get_template_part( 'no-results', 'search' ); ?>

        <?php endif; ?>
      </main>
    </div>
    <div class="col-lg-2">
        <?php get_sidebar(); ?>
    </div> <!-- col-lg-2 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->

<?php get_footer(); ?>