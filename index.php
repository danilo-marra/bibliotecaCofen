
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <main>
                    <section id="imagens-noticias-destaque">
                        <div class="row mt-4">
                            <div class="col-lg-8">
                                <?php get_template_part('content-destaque'); ?>
                            </div>
                            <div class="col-lg-4 text-center">
                                <?php get_template_part('content-sub-destaque'); ?>
                            </div>
                        </div>
                    </section>
                    <section id="conteudo-principal" class="my-5">
                        <div class="row">
                            <?php get_template_part('content-artigos-cientificos'); ?>
                            <?php get_template_part('content-publicacoes-eletronicas'); ?>
                        </div>
                    </section>
                    <section id="conteudo-apoio">
                        <div class="row">
                            <div class="col-sm-9">
                                <?php get_template_part('content-noticias-enfermagem'); ?>
                            </div>
                            <div class="col-sm-3">
                                <div id="videos">
                                    <?php get_template_part('content-videos'); ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </main> <!-- main -->
            </div> <!-- col-lg-10 -->
            <div class="col-lg-2">
                <?php get_sidebar(); ?>
            </div> <!-- col-lg-2 -->
        </div> <!-- row lg-10 lg-2 -->
    </div> <!-- container-fluid -->



<?php get_footer(); ?>