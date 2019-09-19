<div id="principal-noticia">
    <?php
        $args = array (
            'post_type' => 'destaque',
            'posts_per_page' => 1
        );
        $query_destaque = new WP_Query( $args );
        //$do_not_duplicate = $post->ID;
    ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( $query_destaque->have_posts() ) : $query_destaque->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="view overlay">
                <img src="<?php the_field('imagem-destaque') ?>" class="img-destaque img-fluid img-thumbnail" alt="<?php the_field('legenda-imagem-destaque') ?>">
                <div class="mask flex-center rgba-teal-light">
                    <p class="white-text"><?php the_field('legenda-imagem-destaque') ?></p>
                </div>
            </div>
        </a>
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
         <p><?php esc_html_e( 'Sem posts para exibir' ); ?></p>
    <?php endif; ?>

</div>


