<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/css/main.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Enqueue Custom JS

function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/main.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

/* GF Confirmation anchor */

add_filter( 'gform_confirmation_anchor', '__return_false' );

/*Allow SVG*/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* Disable Autofill */

add_filter( 'gform_form_tag', 'gform_form_tag_autocomplete', 11, 2 );
function gform_form_tag_autocomplete( $form_tag, $form ) {
	if ( is_admin() ) return $form_tag;
	if ( GFFormsModel::is_html5_enabled() ) {
		$form_tag = str_replace( '>', ' autocomplete="off">', $form_tag );
	}
	return $form_tag;
}
add_filter( 'gform_field_content', 'gform_form_input_autocomplete', 11, 5 );
function gform_form_input_autocomplete( $input, $field, $value, $lead_id, $form_id ) {
	if ( is_admin() ) return $input;
	if ( GFFormsModel::is_html5_enabled() ) {
		$input = preg_replace( '/<(input|textarea)/', '<${1} autocomplete="off" ', $input );
	}
	return $input;
}

/* UK Phone Format */

add_filter( 'gform_phone_formats', 'uk_phone_format' );
function uk_phone_format( $phone_formats ) {
    $phone_formats['uk'] = array(
        'label'       => 'UK',
        'mask'        => false,
        'regex'       => '/^\(?(?:(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?\(?(?:0\)?[\s-]?\(?)?|0)(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}|\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4}|\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3})|\d{5}\)?[\s-]?\d{4,5}|8(?:00[\s-]?11[\s-]?11|45[\s-]?46[\s-]?4\d))(?:(?:[\s-]?(?:x|ext\.?\s?|\#)\d+)?)$/',
        'instruction' => false,
    );

    return $phone_formats;
}

// Remove Editor Backend

function reset_editor()
{
     global $_wp_post_type_features;
     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {
     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}
add_action("init","reset_editor");

/**
 * Enqueue scripts and styles.
 */
function NetworkSecurity_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
    wp_enqueue_style( 'barlow', 'https://fonts.googleapis.com/css?family=Barlow:100,400' );
    wp_enqueue_style( 'NetworkSecurity-style', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_script( 'NetworkSecurity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'NetworkSecurity-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'NetworkSecurity_scripts' );

// Register Custom Navigation Walker

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Floating publish button

add_action('admin_head', 'ds_floating_publish');
function ds_floating_publish() {
  echo '<style>
    #submitdiv {
    position: fixed;
    z-index: 9999;
    }
  </style>';
}

// Add code into the head or footer

add_action('wp_head', 'add_code_to_head');
function add_code_to_head(){
  ?>
  <link rel="stylesheet" href="/wp-content/themes/NetworkSecurity-child/libs/Magnific-Popup-master/dist/magnific-popup.css">
  <?php
};

add_action('wp_footer', 'add_code_to_footer');
function add_code_to_footer(){
  ?>
  <script src="/wp-content/themes/NetworkSecurity-child/libs/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
  <?php
};

// ACF

 add_filter('acf/settings/remove_wp_meta_box', '__return_true');
