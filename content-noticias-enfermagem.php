<?php
    $args = array (
        'category_name' => 'noticias-enfermagem',
        'posts_per_page' => 4
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
            $imgDestaque = get_field('imagem-post-destaque');
            $altImagemThumb = get_field('alt_img_destaque');
            $tamanho = 'noticias-thumb'; // (thumbnail, medium, large, full or custom size)
        ?>
        <?php if ( $imgDestaque ) : ?>
        <div class="col-sm-4 text-center">
                <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $imgDestaque, $tamanho, "", array("class" => "img-fluid img-thumbnail", "alt" => $altImagemThumb) ); ?></a>
        </div> <!-- col-sm-4 -->
        <div class="col-sm-8">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="data-pub">
                <small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small>
            </div> <!-- data-pub -->
            <p><?php the_field('linha-fina-post-geral'); ?></p>
            <div class="barra-compartilhamento">
                <small>
                    <a href="#"><span class="badge badge-light mr-1">14</span>Curtidas</a>
                    <a class="mx-2" href="#"> <i class="fas fa-share mr-1"></i>Compartilhar</a>
                    <a href="<?php the_permalink(); ?>"> <i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Leia mais</a>
                </small>
            </div> <!-- barra compartilhamento -->
        </div> <!-- col-sm-8 -->
        <?php wp_reset_postdata();  ?>
        <?php else : ?>
        <!-- Sem Imagem Destacada -->
        <div class="col-sm-12">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_field('linha-fina-post-geral'); ?></p>
            <div class="data-pub">
                <small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small>
            </div> <!-- data-pub -->
            <div class="barra-compartilhamento">
                <small>
                    <a href="#"><span class="badge badge-light mr-1">14</span>Curtidas</a>
                    <a class="mx-2" href="#"> <i class="fas fa-share mr-1"></i>Compartilhar</a>
                    <a href="<?php the_permalink(); ?>"> <i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Leia mais</a>
                </small>
            </div> <!-- barra compartilhamento -->
        </div>
        <?php endif; ?> <!--  endif sem imagem -->
    </div> <!-- row-->
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sem posts de notícias de enfermagem para exibir.' ); ?></p>
     <?php endif; ?>
</div> <!-- DIV noticias-enfermagem -->




