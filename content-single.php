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
			</div>
</div><!-- /.blog-post -->