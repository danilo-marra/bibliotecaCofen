<? /*

Exibição dos posts para a categoria Notícias Enfermagem, Publicações Eletrônicas, Artigos Científicos ou posts gerais

*/?>

<div class="post-geral mt-3">
	<h2 class="titulo-post-geral"><?php the_title(); ?></h2>
		<p class="meta-post-geral"><?php the_date(); ?> por <a href="#"><?php the_author(); ?><?php if(function_exists('wp_print')) { print_link(); } ?></a></p>
		<p class="linha-fina-post-geral"><?php the_field('linha-fina-post-geral'); ?></p>
				<hr>
				<?php the_content(); ?>
			<div class="barra-funcoes">
			<p><?php the_tags('Tags: '); ?> </p>
			<?php
				$fonteMateria = get_field('fonte_post');
			?>
			<?php if ($fonteMateria): ?>
				<p>Fonte: <a href="<?php the_field('link_fonte_post'); ?>"><?php the_field('fonte_post'); ?> </a></p>
			<?php endif; ?>
			</div>
</div><!-- /.blog-post -->