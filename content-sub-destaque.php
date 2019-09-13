<div id="sub-destaque-noticia">
    <?php
        $args = array (
            'post_type' => 'sub-destaque',
            'posts_per_page' => 6
        );
        $query_sub_destaque = new WP_Query( $args );
    ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( $query_sub_destaque->have_posts() ) : $query_sub_destaque->the_post(); ?>
            <a href="<?php the_permalink() ?>"><img src="<?php the_field('imagem-sub-destaque'); ?>" alt="<?php the_title(); ?>" class="img-sub-destaque img-fluid"></a>
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
         <p><?php esc_html_e( 'Sem posts para exibir' ); ?></p>
    <?php endif; ?>
</div>