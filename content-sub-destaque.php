<div id="sub-destaque-noticia">
    <?php
        $args = array (
            'post_type' => 'sub-destaque',
            'posts_per_page' => 3
        );
        $querySub = new WP_Query( $args );
        $imgSubDestaque = get_field('imagem_sub_destaque_home');
        $altImagemSubThumb = get_field('alt_img_sub_destaque');
        $tamanhoSub = 'sub-destaque-home'; // (thumbnail, medium, large, full or custom size)
    ?>
    <ul class="subDestaque text-center">
    <?php if ( $querySub->have_posts() ) : while ( $querySub->have_posts() ) : $querySub->the_post(); ?>
         <li class="subDestaqueItem my-2">
         <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php the_field('imagem_sub_destaque_home'); ?>" alt="<?php the_field('alt_img_sub_destaque'); ?>" class="img-fluid img-thumbnail img-sub"></a>
         </li>
    <?php endwhile; endif;?>
    <?php wp_reset_postdata();  ?>
    </ul>
</div>