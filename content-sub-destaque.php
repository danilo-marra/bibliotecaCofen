<div id="sub-destaque-noticia">
    <?php
        $args = array (
            'post_type' => 'sub-destaque',
            'posts_per_page' => 3
        );
        $querySub = new WP_Query( $args );
        $imgSubDestaque = get_field('imagem-sub-destaque-homee');
        $altImagemSubThumb = get_field('alt_img_sub_destaque');
        $tamanhoSub = 'sub-destaque-home'; // (thumbnail, medium, large, full or custom size)
    ?>
    <ul class="subDestaque text-center">
    <?php if ( $querySub->have_posts() ) : while ( $querySub->have_posts() ) : $querySub->the_post(); ?>
        <li class="subDestaqueItem my-2"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail($tamanhoSub, ['class' => 'img-fluid img-thumbnail']); ?></a>
        </li>
    <?php endwhile; endif;?>
    <?php wp_reset_postdata();  ?>
    </ul>
</div>