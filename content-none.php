<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Biblioteca Cofen
 * @since 2.2.0
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php _e( 'Página não encontrada', 'Biblioteca Cofen' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'Biblioteca Cofen' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Biblioteca Cofen' ); ?></p>
		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php _e( 'Não foi possível encontrar o termo pesquisado, utilize o campo de busca abaixo para fazer uma nova busca.', 'Biblioteca Cofen' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
