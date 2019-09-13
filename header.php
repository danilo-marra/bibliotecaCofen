<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="banner-topo">
            <div id="logo" >
                <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/arte biblioteca 2.jpg" alt="Logo Biblioteca Virtual"></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light blog-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php wp_list_pages( '&title_li=' ); ?>
                    <!--
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apresentação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acervo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Legislação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biblioteca Corens</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Bases de Dados</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    -->
                </ul>

                <div id="redes-sociais-topo" class="mr-3">
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x mx-2"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Busca">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>