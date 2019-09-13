    <div class="col-sm-6">
        <div id="publicacoes">
            <?php
                $args = array (
                    'category_name' => 'publicacoes-eletronicas',
                    'posts_per_page' => 4
                );
                $query_pubs = new WP_Query( $args );
            ?>
            <?php if ( have_posts() ) : ?>
            <h2><a href="<?php catLinkPubs(5); ?>">Publicações Eletrônicas</h2>
            <?php while ( $query_pubs->have_posts() ) : $query_pubs->the_post(); ?>
            <div class="list-group">
                <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
            </div>
                <?php endwhile;  ?>
                <small class="link-veja-mais mt-2"><a href="<?php catLinkPubs(5); ?>"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Veja mais</a></small>
                <?php wp_reset_postdata();  ?>
                <?php else  :  ?>
                <p><?php esc_html_e( 'Sem posts para exibir' ); ?></p>
                <?php endif;  ?>
        </div>  <!-- Div Publicacoes -->
    </div><!-- Div sm-6 -->

<?php
//Função Gera link da categoria Publicações Eletrônicas
function catLinkPubs($cat_id) {
    $category_link = get_category_link($cat_id);
    echo $category_link;
}
?>