<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part('content', get_post_format() );
                    endwhile;?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="<?php next_posts(); ?>">Próximo</a> </li>
                        <li class="page-item"><a class="page-link" href="<?php previous_posts(); ?>">Anterior</a></li>
                    </ul>
                </nav>
                <?php
                    endif;
                ?>
            </div> <!-- col-lg-10 -->
            <div class="col-lg-2">
                <?php get_sidebar(); ?>
            </div> <!-- col-lg-2 -->
        </div> <!-- row lg-10 lg-2 -->
    </div> <!-- container-fluid -->
<?php get_footer(); ?>

