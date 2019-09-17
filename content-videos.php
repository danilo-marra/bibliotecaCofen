<h2><a href="#">Vídeos</a></h2>

<hr>
<div class="list-group text-center">
    <?php
        $args = array (
            'post_type' => 'vídeos',
            'posts_per_page' => 3
        );
        $query_videos = new WP_Query($args);
    ?>
    <?php if (have_posts()) : ?>
        <?php while ($query_videos->have_posts()) : $query_videos->the_post();?>

        <li class="list-group-item list-group-item-action">
            <div class="lista_videos">
              <?php the_field('link_video') ?>
            </div>
            <p class="descricao-video my-2"><?php the_title() ?></p>
        </li>


        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sem posts para exibir' ); ?></p>
        <?php endif; ?>
</div>



