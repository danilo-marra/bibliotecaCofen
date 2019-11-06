<? /*

Exibição dos posts para custom post "Vídeos"

*/?>

<div class="post-geral mt-3">
	<h2 class="titulo-post-geral"><?php the_title(); ?></h2>
	<p class="meta-post-geral"><?php the_date(); ?> por <a href="#"><?php the_author(); ?><?php if(function_exists('wp_print')) { print_link(); } ?></a></p>
	<hr>
	<?php the_field('link_video'); ?>
	<?php the_content(); ?>
	<div class="barra-funcoes">
		<p><?php the_tags('Tags: '); ?> </p>
	</div>
</div><!-- /.blog-post -->