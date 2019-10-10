<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <main role="main">
                    <?php
                        if ( have_posts() ) :
                            // Start the Loop.
                            while ( have_posts() ) : the_post();

                                /*
                                * Include the post format-specific template for the content. If you want to
                                * use this in a child theme, then include a file called called content-___.php
                                * (where ___ is the post format) and that will be used instead.
                                */
                                get_template_part( 'content', get_post_format() );

                            endwhile;

                            // Post navigation.
                            //odin_paging_nav();

                        else :
                            // If no content, include the "No posts found" template.
                            get_template_part( 'content', 'none' );

                        endif;
                    ?>
                </main> <!-- main -->
            </div> <!-- col-lg-10 -->
            <div class="col-lg-2">
                <?php get_sidebar(); ?>
            </div> <!-- col-lg-2 -->
        </div> <!-- row lg-10 lg-2 -->
    </div> <!-- container-fluid -->

<?php get_footer(); ?>