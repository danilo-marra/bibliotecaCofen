<div class="col-lg-8">
  <div id="principal-noticia">
      <?php
          $args = array (
              'posts_per_page' => 3,
              'category_name' => 'destaque',
          );
          $the_query = new WP_Query( $args );
          //$do_not_duplicate = $post->ID;
      ?>
      <div id="CarouselID" class="carousel slide" data-ride="carousel" data-interval="7000">
          <ol class="carousel-indicators">
              <!-- Start Carousel Indicator Loop -->
              <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li data-target="#CarouselID" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
              <?php endwhile; endif; ?>
          </ol>
      <?php rewind_posts(); ?>
          <div class="carousel-inner text-center">
              <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                 // $imagemDestaqueHomePrincipal = get_field('imagem_destacada');
                  $tamanho = 'destaque-home'; // (thumbnail, medium, large, full or custom size)

              ?>
              <div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
                  <?php if (  has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail($tamanho, ['class' => 'img-fluid img-thumbnail']) ?>
                  </a>
                  <?php wp_reset_postdata();  ?>
                  <?php endif; ?>
              </div><!-- /.carousel-item -->
              <!-- end second loop -->
              <?php endwhile;	endif; ?>
          </div><!-- /.carousel-inner -->
      </div><!-- /.carousel-slide -->
  </div><!-- principal-noticia -->
</div>
<div class="col-lg-4 text-center">
  <div id="sub-destaque-noticia">

      <?php
          $args = array (
              'posts_per_page' => 2,
              'category_name' => 'sub-destaque',
          );
          $the_querySub = new WP_Query( $args );
          $tamanhoSub = 'sub-destaque-home'; // (thumbnail, medium, large, full or custom size)
      ?>

      <?php if ( $the_querySub->have_posts() ) : while ( $the_querySub->have_posts() ) : $the_querySub->the_post(); ?>

          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php if (  has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail($tamanhoSub, ['class' => 'img-fluid img-thumbnail mb-1']) ?>
            <?php endif; ?>
            <?php wp_reset_postdata();  ?>
      <?php endwhile; endif;?>

  </div>
</div>