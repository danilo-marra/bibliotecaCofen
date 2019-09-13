<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part('content-single-destaque', get_post_format() );
                endwhile; endif;
                ?>
            </div> <!-- col-lg-10 -->
            <div class="col-lg-2">
                <?php get_sidebar(); ?>
            </div> <!-- col-lg-2 -->
        </div> <!-- row lg-12 -->
    </div> <!-- container-fluid -->
<?php get_footer(); ?>

