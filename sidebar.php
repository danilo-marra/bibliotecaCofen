<!-- SIDE -->
<aside id="sidebar">
    <div id="banners-sidebar" class="text-center">
        <a href=""><img src="https://placehold.it/200x150" class="img-fluid my-4" alt=""></a>
        <a href=""><img src="https://placehold.it/200x150" class="img-fluid my-4" alt=""></a>
        <a href=""><img src="https://placehold.it/200x150" class="img-fluid my-4" alt=""></a>
        <a href=""><img src="https://placehold.it/200x150" class="img-fluid my-4" alt=""></a>
    </div>
    <h4>Arquivos</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
    <h4>Sobre</h4>
    <p> <?php the_author_meta( 'description' ); ?> </p>
    <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
        <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
        <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
    </ol>
    </div>
</aside>