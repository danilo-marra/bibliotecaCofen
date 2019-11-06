<?php
$post_type_obj = get_post_type_object( 'videos' );
?>

<h2><a href="<?php echo get_post_type_archive_link('videos'); ?>"><?php echo $post_type_obj->labels->name;?></a></h2>
<hr>
<div class="list-group text-center">
    <?php
        $args = array (
            'post_type' => 'videos',
            'posts_per_page' => 4
        );
        $query_videos = new WP_Query($args);
    ?>
    <?php if (have_posts()) : ?>
        <?php while ($query_videos->have_posts()) : $query_videos->the_post();?>

        <li class="list-group-item list-group-item-action">
            <div class="lista_videos">
              <?php the_field('link_video') ?>
            </div>
            <p class="descricao-video my-2"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sem vídeos para exibir' ); ?></p>
        <?php endif; ?>
</div>



