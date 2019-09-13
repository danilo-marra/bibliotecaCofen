
<div class="col-sm-6">
    <div id="artigos">
        <?php
            $args = array (
                'category_name' => 'artigos-cientificos',
                'posts_per_page' => 4
            );
            $query_artigos = new WP_Query( $args );
        ?>
        <h2><a href="<?php catLinkArtigos(4); ?>">Artigos Científicos</h2>
        <?php if ( have_posts() ) :  ?>
        <?php while ( $query_artigos->have_posts() ) : $query_artigos->the_post(); ?>
        <div class="list-group">
            <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
        </div>
            <?php   endwhile; ?>
            <small class="link-veja-mais mt-2"><a href="<?php catLinkArtigos(4); ?>"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Veja mais</a></small>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php esc_html_e( 'Sem posts para exibir' ); ?></p>
            <?php endif; ?>
    </div>  <!-- Div Artigos -->
</div><!-- Div sm-6 -->
<?php
//Função Gera link da categoria Artigos Científicos
function catLinkArtigos($cat_id) {
    $category_link = get_category_link($cat_id);
    echo $category_link;
}
?>