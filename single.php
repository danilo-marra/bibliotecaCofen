<?php /* Template Name: Posts */ ?>

<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part('content-single', get_post_format() );
                  //Comentários
                  if ( comments_open() || get_comments_number() ) :
                  comments_template();
                  endif;
                endwhile; endif;
                ?>
            </div> <!-- col-lg-12 -->
        </div> <!-- row lg-12 -->
    </div> <!-- container-fluid -->
<?php get_footer(); ?>

