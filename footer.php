    <footer class="footer mt-3 py-3">
        <div class="container-fluid">
            <div class="row">
                <div id="links-rapidos" class="col-sm-4">
                    <h4>Links Rápidos</h4>
                <?php
                wp_nav_menu( array(
                     'theme_location'    => 'menu_rodape',
                     'depth'             => 2,
                     'container'         => 'div',
                //  'container_id'      => 'links-rapidos',
                   // 'container_class' => 'list-group-item',
                    'menu_class'         => 'list-group list-group-flush lista-links',
                    'menu_id'            => 'menu-rodape',
                    'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'           => new WP_Bootstrap_Navwalker(),
                ) );
                ?>


                </div>
                <div id="endereco" class="col-sm-4">
                    <h4>Endereço</h4>
                    <span class="texto-footer">Asa Norte 304 Bloco E 09 - Asa Norte, Brasília - DF, 70736-550</span>
                    <h4 class="my-4">Horário de Funcionamento</h4>
                    <span class="texto-footer">Segunda à sexta: 8h às 17h</span>
                    <h4 class="my-4">Redes Sociais</h4>
                    <div class="redes-footer">
                        <a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook fa-lg mr-1"></i>Facebook</a>
                        <a href="<?php echo get_option('instagram'); ?>"><i class="fab fa-instagram fa-lg mr-1"></i>Instagram</a>
                        <a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter fa-lg mr-1"></i>Twitter</a>
                        <a href="<?php echo get_option('pinterest'); ?>"><i class="fab fa-pinterest fa-lg mr-1"> </i>Pinterest</a>
                    </div>
                </div>
                <div id="newsletter" class="col-sm-4">
                    <h4>Se inscreva em nossa newsletter</h4>
                    <form action="https://cofen.us8.list-manage.com/subscribe/post?u=491d5606dfb784a4f29cd1ce8&amp;id=912f90c91a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline my-2 my-lg-0 form-footer validate" target="_blank" novalidate>
                        <input  id="mce-EMAIL" class="form-control mr-sm-2 required email" type="email" placeholder="Endereço de email"  value="" name="EMAIL">
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_491d5606dfb784a4f29cd1ce8_912f90c91a" tabindex="-1" value=""></div>
                        <button id="mc-embedded-subscribe" class="btn btn-info my-2 my-sm-0" type="submit">Enviar</button>
                    </form>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 text-center my-4">
                    <a href="http://www.cofen.gov.br/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logos_dtic_desenvolvimento_peq.png" alt="Desenvolvido por DTIC - Cofen" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>
