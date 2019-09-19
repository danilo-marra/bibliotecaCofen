    <footer class="footer mt-3 py-3">
        <div class="container-fluid">
            <div class="row">
                <div id="links-rapidos" class="col-sm-4">
                    <h4>Links Rápidos</h4>
                    <ul class="list-group list-group-flush lista-links">
                        <li class="list-group-item"><a href="#">Apresentação</a></li>
                        <li class="list-group-item"><a href="#">Acervo</a></li>
                        <li class="list-group-item"><a href="#">Legislação</a></li>
                        <li class="list-group-item"><a href="#">Biblioteca Corens</a></li>
                        <li class="list-group-item"><a href="#">Base da dados para pesquisa</a></li>
                        <li class="list-group-item"><a href="#">Contato</a></li>
                        <li class="list-group-item"><a href="#">Busca</a></li>
                    </ul>
                </div>
                <div id="endereco" class="col-sm-4">
                    <h4>Endereço</h4>
                    <span class="texto-footer">Asa Norte 304 Bloco E 09 - Asa Norte, Brasília - DF,
                        70736-550</span>
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
                    <form class="form-inline my-2 my-lg-0 form-footer">
                        <input class="form-control mr-sm-2" type="email" placeholder="Endereço de email">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Enviar</button>
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
