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

        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'menu_principal',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>

                <!-- fonte menu: https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->

                <div id="redes-sociais-topo" class="mr-3">
                    <a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="<?php echo get_option('instagram'); ?>"><i class="fab fa-instagram fa-2x mx-2"></i></a>
                    <a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="<?php echo get_option('pinterest'); ?>"><i class="fab fa-pinterest fa-2x"> </i></a>
                </div>
                <form action="<?php echo home_url();?>" id="search-form" class="form-inline mt-2 mt-md-0" method="get">
                    <input class="form-control mr-sm-2" type="text" placeholder="Digita sua busca" name="s" id="s" aria-label="Busca" />
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>
