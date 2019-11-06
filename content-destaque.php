<div id="principal-noticia">

    <?php
        $args = array (
            //'post_type' => 'destaque',
            //'post_type' => 'post',
            'posts_per_page' => 3,
            //'category_name' => 'noticias-enfermagem',
            'meta_query' => array(
                array (
                    'key' => 'destaque_post',
                    'value' => 1,
                )
            )
        );
        $the_query = new WP_Query( $args );
        //$do_not_duplicate = $post->ID;
    ?>
    <div id="CarouselID" class="carousel slide" data-ride="carousel" data-interval="7000">
        <ol class="carousel-indicators">
            <!-- Start Carousel Indicator Loop -->
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li data-target="#CarouselID" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
            <?php endwhile; endif; ?>
        </ol>
    <?php rewind_posts(); ?>
        <div class="carousel-inner">
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                $imagemDestaqueHomePrincipal = get_field('imagem_destacada_principal');
                $tamanho = 'destaque-home'; // (thumbnail, medium, large, full or custom size)

            ?>
            <div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
                <?php if ( $imagemDestaqueHomePrincipal ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php echo wp_get_attachment_image( $imagemDestaqueHomePrincipal, $tamanho, "", array( "class" => "img-fluid img-thumbnail"));?>
                </a>
                <?php wp_reset_postdata();  ?>
                <?php endif; ?>
            </div><!-- /.carousel-item -->
            <!-- end second loop -->
            <?php endwhile;	endif; ?>
        </div><!-- /.carousel-inner -->
    </div><!-- /.carousel-slide -->
</div><!-- principal-noticia -->