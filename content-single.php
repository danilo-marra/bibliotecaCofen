<div class="post-geral mt-3">
	<h2 class="titulo-post-geral"><?php the_field('titulo-post-geral'); ?></h2>
		<p class="meta-post-geral"><?php the_date(); ?> por <a href="#"><?php the_author(); ?></a></p>
		<p class="linha-fina-post-geral"><?php the_field('linha-fina-post-geral'); ?></p>
		<div class="imagem-destaque-post-geral">
			<img src="<?php the_field('imagem-post'); ?>" class="img-fluid">
		</div>
		<hr>

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

	<?php the_field('conteudo-post-geral'); ?>

</div><!-- /.blog-post -->