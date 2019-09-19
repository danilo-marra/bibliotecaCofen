<!-- ASIDE -->
<?php
$args = array (
    'post_type' => 'banner',
    'posts_per_page' => 6
);
$query_banners = new WP_Query($args);
?>

<aside id="sidebar">
    <div id="banners-sidebar" class="text-center">
    <?php if (have_posts()) : ?>
        <?php while ($query_banners->have_posts()) : $query_banners->the_post(); ?>
            <a href="<?php the_field('link_banner') ?>"><img src="<?php the_field('src_banner'); ?>" alt="<?php the_field('alt_banner') ?>" class="img-fluid img-thumbnail my-4 banner_img">
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e('Sem Banners para exibir')?></p>
    <?php endif; ?>
    </div>
    <h4>Arquivos</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
</aside>