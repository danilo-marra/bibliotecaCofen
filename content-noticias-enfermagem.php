<?php
    $args = array (
        //Todos os posts, destaques e sub-destaques
        'post_type' => array('post', 'destaque', 'sub-destaque'),
        'posts_per_page' => 4,
        //'post__not_in' => array( 'artigos-cientificos', 'publicacoes-eletronicas', 'videos', 'banner'  ),
        'category__not_in' => array(4, 5 ), //artigos e publicações eletrônicas
        'order'     => 'DSC',
    );
    $query_not = new WP_Query( $args );
?>
<div id="noticias-enfermagem">
    <?php
        $categories = get_the_category();
     ?>
    <h2><a href="<?php echo get_category_link(8) ?>"><?php echo get_cat_name(8); ?></a></h2>
    <hr>
    <?php if ( $query_not->have_posts() ) : while ( $query_not->have_posts() ) : $query_not->the_post(); ?>
    <!-- Com Imagem Destaque -->
    <div class="row mb-4">
        <?php
            //$imgDestaque = get_field('imagem-post-destaque');
           // $altImagemThumb = get_field('alt_img_destaque');
            $tamanho = 'noticias-thumb'; // (thumbnail, medium, large, full or custom size)
        ?>
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="col-sm-4 text-center">
                <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail($tamanho, ['class' => 'img-fluid img-thumbnail']) ?></a>
                <?php //echo wp_get_attachment_image( $imgDestaque, $tamanho, "", array("class" => "img-fluid img-thumbnail", "alt" => $altImagemThumb) ); ?>
        </div> <!-- col-sm-4 -->
        <div class="col-sm-8">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="data-pub">
                <small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small>
                    <?php if(function_exists('wp_print')) { print_link(); } ?>
            </div> <!-- data-pub -->
            <?php
                $linhafinaGeral = get_field('linha-fina-post-geral');
                $linhafinaSubDestaque = get_field('linha-fina-post-sub-destaque');
                $linhafinaDestaque = get_field('linha-fina-post-destaque');
                if ( $linhafinaGeral ) : ?>
                    <p><?php the_field('linha-fina-post-geral'); ?></p>
                    <?php elseif  ( $linhafinaDestaque ) : ?>
                        <p><?php the_field('linha-fina-post-destaque'); ?></p>
                    <?php else : ?>
                        <p><?php the_field('linha-fina-post-sub-destaque'); ?></p>
            <?php endif; ?>
            <?php get_template_part('inc/barra-compartilhamento-home'); ?>
        </div> <!-- col-sm-8 -->
        <?php wp_reset_postdata();  ?>
        <?php else : ?>
        <!-- Sem Imagem Destacada -->
        <div class="col-sm-12">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="data-pub">
                <small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small>
                <?php if(function_exists('wp_print')) { print_link(); } ?>
            </div> <!-- data-pub -->
            <?php
                $linhafinaGeral = get_field('linha-fina-post-geral');
                $linhafinaSubDestaque = get_field('linha-fina-post-sub-destaque');
                $linhafinaDestaque = get_field('linha-fina-post-destaque');
                if ( $linhafinaGeral ) : ?>
                    <p><?php the_field('linha-fina-post-geral'); ?></p>
                    <?php elseif  ( $linhafinaDestaque ) : ?>
                        <p><?php the_field('linha-fina-post-destaque'); ?></p>
                    <?php else : ?>
                        <p><?php the_field('linha-fina-post-sub-destaque'); ?></p>
            <?php endif; ?>
            <?php get_template_part('inc/barra-compartilhamento-home'); ?>
        </div>
        <?php endif; ?> <!--  endif sem imagem -->
    </div> <!-- row-->
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sem posts de notícias de enfermagem para exibir.' ); ?></p>
     <?php endif; ?>
</div> <!-- DIV noticias-enfermagem -->




