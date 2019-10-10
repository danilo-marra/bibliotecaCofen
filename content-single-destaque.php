<div class="post-destaque mt-3">
	<h2 class="titulo-post-destaque"><?php the_title(); ?></h2>
		<p class="meta-post-destaque"><?php the_date(); ?> por <a href="#"><?php the_author(); ?></a>	<?php if(function_exists('wp_print')) { print_link(); } ?></p>
		<p class="linha-fina-post-destaque"><?php the_field('linha-fina-post-destaque'); ?></p>
			<hr>
	<?php the_content(); ?>
	<hr>
	<div class="barra-funcoes">
	</div>
</div><!-- /.post-destaque mt-3 -->