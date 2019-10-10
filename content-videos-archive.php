<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/category/search/tag.
 *
 */
?>
<div class="blog-post">
	<!-- Se tiver imagem -->
<?php if ( has_post_thumbnail() ) { ?>
	<hr>
		<div class="media">
			<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php	the_post_thumbnail('thumbnail', ['class' => 'align-self-center mr-3 img-thumbnail']); ?>
			<div class="media-body"></a>
				<h2 class="mt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="data-pub">
						<small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small> <?php if(function_exists('wp_print')) { print_link(); } ?>
				</div> <!-- data-pub -->
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php } else { ?>
		<hr>
			<div class="media">
			<div class="media-body">
				<h2 class="mt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="data-pub">
						<small><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?> às <?php the_time(); ?></small>
				</div> <!-- data-pub -->
				<?php the_excerpt(); ?>
			</div>
		</div>
<?php } ?>

</div><!-- /.blog-post -->






