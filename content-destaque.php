<div id="principal-noticia">
    <?php
        $args = array (
            'post_type' => 'destaque',
            //'post_type' => 'post',
            'posts_per_page' => 3,
            //'category_name' => 'destaque-home'
        );
        $the_query = new WP_Query( $args );
        //$do_not_duplicate = $post->ID;
    ?>
    <div id="ExampleCarouselID" class="carousel slide" data-ride="carousel" data-interval="7000">
        <ol class="carousel-indicators">
            <!-- Start Carousel Indicator Loop -->
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li data-target="#ExampleCarouselID" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
            <?php endwhile; endif; ?>
        </ol>
    <?php rewind_posts(); ?>
        <div class="carousel-inner">
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                $imagemDestaque = get_field('imagem-destaque');
                $tamanho = 'destaque-home'; // (thumbnail, medium, large, full or custom size)

            ?>
            <div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
                <?php if ( $imagemDestaque ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php echo wp_get_attachment_image( $imagemDestaque, $tamanho );?>
                </a>
                <?php endif; ?>
            </div><!-- /.carousel-item -->
            <!-- end second loop -->
            <?php endwhile;	endif; ?>
        </div><!-- /.carousel-inner -->
    </div><!-- /.carousel-slide -->
</div><!-- principal-noticia -->
