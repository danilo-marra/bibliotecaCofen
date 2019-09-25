
<?php
/*
Template Name: Página de Busca
*/
?>
<?php get_header(); ?>
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-10">
              <main>
                <div id="busca">
                  <h1>Busca<h1>
                  <?php get_search_form(); ?>
                </div>
              </main> <!-- main -->
          </div> <!-- col-lg-10 -->
          <div class="col-lg-2">
              <?php get_sidebar(); ?>
          </div> <!-- col-lg-2 -->
      </div> <!-- row -->
  </div> <!-- container-fluid -->



<?php get_footer(); ?>