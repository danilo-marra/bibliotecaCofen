<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part('content-single-destaque', get_post_format() );
                endwhile; endif;
                ?>
            </div> <!-- col-lg-12 -->
        </div> <!-- row -->
    </div> <!-- container-fluid -->
<?php get_footer(); ?>

