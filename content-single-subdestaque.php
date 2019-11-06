<div class="post-destaque mt-3">
	<h2 class="titulo-post-sub-destaque"><?php the_title(); ?></h2>
		<p class="meta-post-destaque"><?php the_date(); ?> por <a href="#"><?php the_author(); ?></a>	<?php if(function_exists('wp_print')) { print_link(); } ?></p>
		<p class="linha-fina-post-sub-destaque"><?php the_field('linha-fina-post-sub-destaque'); ?></p>
		<hr>
	<?php the_content(); ?>
	<hr>
	<div class="barra-funcoes">
	<p><?php the_tags('Tags: '); ?> </p>
	<?php
		$fonteSubMateria = get_field('fonte_post_sub');
	?>
	<?php if ($fonteSubMateria): ?>
		<p>Fonte: <a href="<?php the_field('link_fonte_post_sub'); ?>"><?php the_field('fonte_post_sub'); ?> </a></p>
	<?php endif; ?>
	</div>
</div><!-- /.post-sub-destaque mt-3 -->