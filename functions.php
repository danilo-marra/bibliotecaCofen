<?php

// CSS
function bibliotecacofen_scripts() {
	wp_enqueue_style('MDB', get_template_directory_uri() . '/css/mdb.min.css');
	wp_enqueue_style('bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1');
	wp_enqueue_style('estilo', get_template_directory_uri() . '/css/estilo.css');

  //jQuery first, then Popper.js, Bootstrap JS, mdb
  wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('PopperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_script('MDBJS', get_template_directory_uri() . '/js/mdb.min.js');
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

// Custom settings
function custom_settings_add_menu() {
	add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Menu Personalizado</h1>
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

// Github
function setting_github() { ?>
	<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );

  register_setting('section', 'twitter');
  register_setting( 'section', 'github' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Imagem Destacada
add_theme_support( 'post-thumbnails' );

//Custom Post Type Destaque criado como plugin em wp-content->plugins

//Custom Post Type Vídeos

/*function create_post_type_videos () {
	register_post_type('videos',
	//Opções CPT
		array(
			'labels' => array (
				'name'=> __('Vídeos'),
				'singular_name' => __('Vídeo')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug'=>'videos'),
			'menu-icon' => 'dashicons-format-video',
			)
		);
}

add_action('init', 'create_post_type_videos');
*/