<?php

// Register Custom Navigation Walker
if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}


//Adicionando Menu no Wordpress
register_nav_menus(
	array(
		'menu_principal' => __('Menu Principal', 'Biblioteca Cofen'),
		'menu_rodape' => __('Menu Rodapé', 'Biblioteca Cofen')
	)
);

// CSS
function bibliotecacofen_scripts() {
	wp_enqueue_style('MDB', get_template_directory_uri() . '/css/mdb.min.css');
	wp_enqueue_style('bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1');
	wp_enqueue_style('estilo', get_template_directory_uri() . '/css/estilo.css');

  //jQuery first, then Popper.js, Bootstrap JS
  wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('PopperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_script('Font-Awesome', 'https://use.fontawesome.com/releases/v5.1.1/js/all.js');
}
add_action('wp_enqueue_scripts', 'bibliotecacofen_scripts');

//Google Font
function bibliotecacofen_fontes() {
  wp_register_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed');
	wp_register_style('Font-Awesome', 'https://use.fontawesome.com/releases/v5.1.1/css/all.css');
}

add_action('wp_print_styles', 'bibliotecacofen_fontes');

add_theme_support( 'title-tag' );

//Custom Settings - Redes Sociais
function custom_settings_add_menu() {
	add_menu_page( 'Redes Sociais', 'Redes Sociais', 'manage_options', 'redes-sociais', 'custom_settings_page', 'dashicons-share', 9 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Perfil Redes Sociais</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'theme-options' );
						submit_button();
				?>
		</form>
	</div>
<?php }


// Twitter
function setting_twitter() { ?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Facebook
function setting_facebook() { ?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

// Instagram
function setting_instagram() { ?>
	<input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
<?php }

// Pinterest
function setting_pinterest() { ?>
	<input type="text" name="pinterest" id="pinterest" value="<?php echo get_option('pinterest'); ?>" />
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'Forneça o link de cada rede social', null, 'theme-options' );
  add_settings_field( 'twitter', 'Link Perfil Twitter', 'setting_twitter', 'theme-options', 'section' );
	add_settings_field( 'facebook', 'Link Perfil Facebook', 'setting_facebook', 'theme-options', 'section' );
	add_settings_field( 'instagram', 'Link Perfil Instagram', 'setting_instagram', 'theme-options', 'section' );
	add_settings_field( 'pinterest', 'Link Perfil Pinterest', 'setting_pinterest', 'theme-options', 'section' );

  register_setting('section', 'twitter');
	register_setting( 'section', 'facebook' );
	register_setting( 'section', 'instagram' );
	register_setting( 'section', 'pinterest' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

//Rodapé
function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Rodapé</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section2");
	            do_settings_sections("theme-options2");
	            submit_button();
	        ?>
	    </form>
		</div>
	<?php }

function endereco_rodape() { ?>
	<input type="text" name="end_rodape" id="end_rodape" value="<?php echo get_option( 'end_rodape' ); ?>" />
<?php }

function hora_rodape() { ?>
	<input type="text" name="h_rodape" id="h_rodape" value="<?php echo get_option( 'h_rodape' ); ?>" />
<?php }



function display_theme_panel_fields()
{
	add_settings_section("section2", "Forneça o dados de endereço e horário de funcionamento", null, "theme-options2");

	add_settings_field("Endereço Rodapé", "Endereço", "endereco_rodape", "theme-options2", "section2");
	add_settings_field("Horário de Funcionamento", "Horário de Funcionamento", "hora_rodape", "theme-options2", "section2");

		register_setting("section2", "end_rodape");
		register_setting("section2", "h_rodape");
}

add_action("admin_init", "display_theme_panel_fields");


function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");



// Imagem Thumbnail
add_theme_support( 'post-thumbnails' );

//Tamanhos
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
		add_image_size( 'destaque-home', 1100, 390, true ); // (cropped)
		add_image_size( 'sub-destaque-home', 450, 180, true );
		add_image_size( 'noticias-thumb', 370, 250, true );
}

//Custom Post Type Destaque e Videos criado como plugin em wp-content->plugins

//Custom Post Type Banners
function create_post_type_banner () {
	register_post_type('banner',
	//Opções CPT
		array(
			'labels' => array (
				'name'=> __('Banners'),
				'singular_name' => __('Banner'),
				'add_new'            => __( 'Adicionar Novo Banner' ),
				'edit_item'          => __( 'Editar Banner' ),
				'new_item'           => __( 'Novo Banner' ),
				'all_items'          => __( 'Todos os Banners' ),
				'view_item'          => __( 'Visualizar Banner' ),
				'search_items'       => __( 'Buscar Banners' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug'=>'banner'),
			'menu_icon' => 'dashicons-images-alt2',
			'supports' => array( 'title, custom-fields' ),
			'menu_position' => 8,
			)
		);
}

add_action('init', 'create_post_type_banner');



//****************************************** Pagination BS4 *******************************************//

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Antigos' ),
			'next_text'    => __( 'Recentes »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';
		foreach ($pages as $page) {
                        $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                }
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}