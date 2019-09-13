
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
                                    <h2><a href="#">Vídeos</a></h2>
                                    <hr>
                                    <div class="list-group text-center">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <img src="https://placehold.it/250x150" alt="" class="img-fluid">
                                            <p class="descricao-video my-2">Equipe de enfermagem de emergência: riscos
                                                ocupacionais e medidas de autoproteção.</p>
                                            <small>17/03/2019</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <img src="https://placehold.it/250x150" alt="" class="img-fluid">
                                            <p class="descricao-video my-2">Equipe de enfermagem de emergência: riscos
                                                ocupacionais e medidas de autoproteção.</p>
                                            <small>17/03/2019</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <img src="https://placehold.it/250x150" alt="" class="img-fluid">
                                            <p class="descricao-video my-2">Equipe de enfermagem de emergência: riscos
                                                ocupacionais e medidas de autoproteção.</p>
                                            <small>17/03/2019</small>
                                        </a>
                                    </div>
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