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
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="col-sm-4 text-center">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail',  'title' => get_the_title()]); ?></a>
        </div> <!-- col-sm-4 -->
        <div class="col-sm-8">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="data-pub">
                <small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small>
            </div> <!-- data-pub -->
            <p><?php the_field('linha_fina_post'); ?></p>
            <div class="barra-compartilhamento">
                <small>
                    <a href="#"><span class="badge badge-light mr-1">14</span>Curtidas</a>
                    <a class="mx-2" href="#"> <i class="fas fa-share mr-1"></i>Compartilhar</a>
                    <a href="<?php the_permalink(); ?>"> <i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Leia mais</a>
                </small>
            </div> <!-- barra compartilhamento -->
        </div> <!-- col-sm-8 -->
        <?php else : ?>
        <!-- Sem Imagem Destacada -->
        <div class="col-sm-12">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_field('linha_fina_post'); ?></p>
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
        <?php endif; ?> <!--  endif as_post_thumbnail -->
    </div> <!-- row-->
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sem posts de notícias de enfermagem para exibir.' ); ?></p>
     <?php endif; ?>
</div> <!-- DIV noticias-enfermagem -->




