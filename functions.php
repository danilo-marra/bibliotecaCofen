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
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
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

// Imagem Destacada
add_theme_support( 'post-thumbnails' );

//Imagem Destaque Home
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
		add_image_size( 'destaque-home', 1100, 418, true ); // (cropped)
		add_image_size( 'sub-destaque', 235, 120, true );
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

