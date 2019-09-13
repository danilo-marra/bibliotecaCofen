<div class="post-destaque mt-3">
	<h2 class="titulo-post-sub-destaque"><?php the_title(); ?></h2>
		<p class="meta-post-destaque"><?php the_date(); ?> por <a href="#"><?php the_author(); ?></a></p>
		<p class="linha-fina-post-sub-destaque"><?php the_field('linha-fina-post-sub-destaque'); ?></p>
		<hr>
	<?php the_content(); ?>
	<hr>
	<div class="barra-funcoes">
		<div class="botao-imprimir">
			<a href="#"><i class="fas fa-print fa-1x"></i><span class="texto-imprimir">Imprimir</span></a>
		</div>
	</div>
</div><!-- /.post-destaque mt-3 -->