<?php
/**
 * Plugin Name: Custom CSS and Javascript Developer Edition
 * Description: Easily add custom CSS and Javascript code to your WordPress site.
 * Version: 1.0.11
 * Author: Potent Plugins
 * Author URI: http://potentplugins.com/?utm_source=custom-css-and-javascript-dev&utm_medium=link&utm_campaign=wp-plugin-author-uri
 * License: GNU General Public License version 2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 */

define('PP_CCJDEV_VERSION', '1.0.11');
define('PP_CCJDEV_ACTIVATED', get_option('pp_ccjdev_license_status') == 'valid');

if (PP_CCJDEV_ACTIVATED) {
	// Frontend scripts
	add_action('wp_enqueue_scripts', 'pp_custom_css_js_dev_scripts', 999999);

	// AJAX actions
	add_action('wp_ajax_pp_custom_css_js_dev_save', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_publish', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_sort', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_delete_revision', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_delete_revisions', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_load', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_get_revision', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_create_file', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_delete_file', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_download_file', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_download_all', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_upload', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_rename', 'pp_custom_css_js_dev_ajax');
	add_action('wp_ajax_pp_custom_css_js_dev_set_props', 'pp_custom_css_js_dev_ajax');
	
	// Miscellaneous
	add_filter('mce_css', 'pp_custom_css_js_dev_mce_css', 999999);
}

function pp_custom_css_js_dev_scripts() {
	$uploadDir = wp_upload_dir();
	if (is_ssl()) {
		$uploadDir['baseurl'] = set_url_scheme($uploadDir['baseurl'], 'https');
	}
	if (current_user_can('edit_theme_options')) {
		if (file_exists($uploadDir['basedir'].'/pp-css-js-dev/custom.draft.js'))
			wp_enqueue_script('pp_custom_css_dev_js', $uploadDir['baseurl'].'/pp-css-js-dev/custom.draft.js', array(), time());
		wp_enqueue_script('pp_custom_js_dev_liveview', plugins_url('js/liveview.js', __FILE__), array('jquery'), false, true);
		add_action('wp_head', 'pp_custom_css_js_dev_wp_head');
		if (file_exists($uploadDir['basedir'].'/pp-css-js-dev/custom.draft.css')) {
			wp_enqueue_style('pp_custom_css_dev_css', $uploadDir['baseurl'].'/pp-css-js-dev/custom.draft.css', array(), time());
		}
	} else {
		if (file_exists($uploadDir['basedir'].'/pp-css-js-dev/custom.js'))
			wp_enqueue_script('pp_custom_css_dev_js', $uploadDir['baseurl'].'/pp-css-js-dev/custom.js', array(), get_option('hm_custom_javascript_ver', 1));
		if (file_exists($uploadDir['basedir'].'/pp-css-js-dev/custom.css'))
			wp_enqueue_style('pp_custom_css_dev_css', $uploadDir['baseurl'].'/pp-css-js-dev/custom.css', array(), get_option('hm_custom_css_ver', 1));
	}
}

// This function is only run on wp_had if the current user has edit_theme_options capability
function pp_custom_css_js_dev_wp_head() {
	echo('<script type="text/javascript">var pp_custom_css_js_dev_sassjs_url = \''.plugins_url('js/sass.js/dist/sass.js', __FILE__).'\';</script>');
}

add_action('admin_menu', 'pp_custom_css_js_dev_admin_menu');
function pp_custom_css_js_dev_admin_menu() {
	add_theme_page('Custom CSS', 'Custom CSS', 'edit_theme_options', 'pp_custom_css_dev', 'pp_custom_css_page');
	add_theme_page('Custom Javascript', 'Custom Javascript', 'edit_theme_options', 'pp_custom_js_dev', 'pp_custom_js_page');
	
	// Temporarily disabled - work in progress
	//add_options_page('Custom CSS &amp; JS', 'Custom CSS &amp; JS', 'edit_theme_options', 'pp_custom_css_js_dev_settings', 'pp_custom_css_js_dev_settings_page');
}

add_action('admin_enqueue_scripts', 'pp_custom_css_js_dev_admin_scripts');
function pp_custom_css_js_dev_admin_scripts($hook) {
	global $pagenow, $post;
	$isPostMode = ($pagenow == 'post.php' && pp_custom_css_js_dev_post_type_enabled($post->post_type));
	if (!$isPostMode && $hook != 'appearance_page_pp_custom_css_dev' && $hook != 'appearance_page_pp_custom_js_dev')
		return;
	if (PP_CCJDEV_ACTIVATED) {
		wp_enqueue_script('pp_custom_css_js_dev_codemirror', plugins_url('codemirror/codemirror.js', __FILE__));
		if ($hook == 'appearance_page_pp_custom_css_dev') {
			wp_enqueue_script('pp_custom_css_js_dev_codemirror_mode_css', plugins_url('codemirror/mode/css.js', __FILE__));
		} else {
			wp_enqueue_script('pp_custom_css_js_dev_codemirror_mode_js', plugins_url('codemirror/mode/javascript.js', __FILE__));
		}
		wp_enqueue_script('hm_custom_css_js_codemirror_dialog', plugins_url('codemirror/addon/dialog/dialog.js', __FILE__));
		wp_enqueue_script('hm_custom_css_js_codemirror_matchbrackets', plugins_url('codemirror/addon/edit/matchbrackets.js', __FILE__));
		wp_enqueue_script('hm_custom_css_js_codemirror_search', plugins_url('codemirror/addon/search/search.js', __FILE__));
		wp_enqueue_script('hm_custom_css_js_codemirror_searchcursor', plugins_url('codemirror/addon/search/searchcursor.js', __FILE__));
		wp_enqueue_script('hm_custom_css_js_codemirror_matchhighlighter', plugins_url('codemirror/addon/search/match-highlighter.js', __FILE__));
		wp_enqueue_script('hm_custom_css_js_codemirror_annotatescrollbar', plugins_url('codemirror/addon/scroll/annotatescrollbar.js', __FILE__));
		wp_enqueue_script('hm_custom_css_js_codemirror_matchesonscrollbar', plugins_url('codemirror/addon/search/matchesonscrollbar.js', __FILE__));
		
		wp_enqueue_style('pp_custom_css_js_dev_codemirror', plugins_url('codemirror/codemirror.css', __FILE__));
		wp_enqueue_style('hm_custom_css_js_codemirror_dialog', plugins_url('codemirror/addon/dialog/dialog.css', __FILE__));
		wp_enqueue_style('hm_custom_css_js_codemirror_matchesonscrollbar', plugins_url('codemirror/addon/search/matchesonscrollbar.css', __FILE__));
		
		if (!$isPostMode) {
			wp_enqueue_script('jquery-ui-sortable');
			wp_enqueue_script('pp_custom_css_js_dev', plugins_url('js/custom-css-and-javascript-dev.js', __FILE__));
		}
	}
	wp_enqueue_style('pp_custom_css_js_dev', plugins_url('css/custom-css-and-javascript-dev.css', __FILE__));
}

function pp_custom_css_js_dev_ajax() {
	ini_set('display_errors', 1);
	if (strpos($_REQUEST['action'], '.') === false && current_user_can('edit_theme_options') && @include_once(dirname(__FILE__).'/ajax/'.substr($_REQUEST['action'], 21).'.php')) {
		$_REQUEST['action']();
	} else {
		wp_send_json_error();
	}
}

add_action('init', 'pp_custom_css_js_dev_init');
function pp_custom_css_js_dev_init() {
	register_post_type('hm_custom_css');
	register_post_type('hm_custom_javascript');
	/*
	if (!empty($_GET['pp_custom_css_dev_draft'])) {
		$files = get_option('hm_custom_css_files', array());
		$wp_query = new WP_Query(array(
			'post_type' => 'hm_custom_css',
			'post_status' => 'any',
			'nopaging' => true,
			'orderby' => 'none',
			'meta_key' => 'ppccjd_latest'
		));
		$posts = $wp_query->get_posts();
		header('Content-Type: text/css');
		$css = array();
		foreach($posts as $post)
			$css[$post->post_title] = $post->post_content;
		foreach ($files as $file) {
			if (isset($css[$file])) {
				echo($css[$file]."\n");
			}
		}
		exit;
	}
	if (!empty($_GET['pp_custom_js_dev_draft'])) {
		$files = get_option('hm_custom_js_files', array());
		$wp_query = new WP_Query(array(
			'post_type' => 'hm_custom_javascript',
			'post_status' => 'any',
			'nopaging' => true,
			'orderby' => 'none',
			'meta_key' => 'ppccjd_latest'
		));
		$posts = $wp_query->get_posts();
		header('Content-Type: text/javascript');
		$js = array();
		foreach($posts as $post)
			$js[$post->post_title] = $post->post_content;
		foreach ($files as $file) {
			if (isset($js[$file])) {
				echo($js[$file]."\n");
			}
		}
		exit;
	}
	*/
}

function pp_custom_css_page() {
	pp_custom_css_js_dev_page('CSS');
}

function pp_custom_js_page() {
	pp_custom_css_js_dev_page('Javascript');
}

function pp_custom_css_js_dev_page($mode) {
	global $wpdb;
	$postType = 'hm_custom_'.strtolower($mode);
	//$files = get_option($postType.'_files', array());
	
	$defaultExt = ($mode == 'CSS' ? '.css' : '.js');
	
	echo('
		<div id="pp_custom_css_js_dev_loader_container" class="wrap">
			<div id="pp_custom_css_js_dev_loader">
				<div id="pp_custom_css_js_dev_loader_inner">');
	if (PP_CCJDEV_ACTIVATED) {
		if (!empty($_GET['deactivate'])) {
			pp_ccjdev_deactivate_license();
			echo('<script type="text/javascript">location.href=location.href;</script>');
		}
		echo('
			<div id="pp-ccjdev-loader-title">
				<img src="'.plugins_url('images/loader.gif', __FILE__).'" alt="Loading..." class="loader" />
				Loading...
			</div>
		');
	} else {
		echo('<div id="pp-ccjdev-activate-title">Custom CSS and Javascript Developer Edition</div>');
		if (!empty($_POST['license_key'])) {
			check_admin_referer('pp_ccjdev_activate');
			if (($result = pp_ccjdev_activate_license($_POST['license_key'])) === true) {
				echo('<div id="pp_custom_css_js_dev_license_key_success">License key activated successfully.</div>
						<script type="text/javascript">location.href=location.href;</script>
						</div></div></div>');
				return;
			} else {
				echo('<div id="pp_custom_css_js_dev_license_key_error">'.(empty($result) ? 'An error occurred; please try again or contact support.' : $result).'</div>');
			}
			
		}
		echo('
			<form action="" method="post">
				<label>
					Please enter your license key:
					<input type="text" name="license_key" />
				</label>
				<button type="submit">Continue</button>');
		wp_nonce_field('pp_ccjdev_activate');
		echo('</form>');
	}
	echo('
				</div>
			</div>
		</div>
	');
	
	if (PP_CCJDEV_ACTIVATED) {
	
	echo('<div id="pp_custom_css_js_dev_page" class="wrap" style="display: none;">
			<h2 class="page-title">Custom '.$mode.'</h2>
			<script>var pp_custom_css_js_dev_mode = \''.$mode.'\';</script>
			<h2 class="nav-tab-wrapper">
	');
	/*foreach($files as $file) {
		echo('<a class="nav-tab nav-tab-file" href="#'.urlencode($file).'">'.htmlspecialchars($file).'</a>');
	}*/
	echo($mode == 'CSS' ?
			'<a class="nav-tab nav-tab-new-file" href="javascript:void(0);">+ <span class="new-file-type">SCSS</span></a>
			 <a class="nav-tab nav-tab-new-file" href="javascript:void(0);">+ <span class="new-file-type">CSS</span></a>' :
			'<a class="nav-tab nav-tab-new-file" href="javascript:void(0);">+ <span class="new-file-type">JS</span></a>'
	);
	echo('
			</h2>
			<div>
				<div id="pp-custom-css-js-dev-editor-sidebar">
					<input id="pp-custom-css-js-dev-rename-field" type="text" style="width: 100px;" /><span id="pp-custom-css-js-dev-rename-ext"></span>
					<button id="pp-custom-css-js-dev-rename-btn" class="button-secondary">Rename</button>'
					.($mode == 'CSS' ? '
					<label>
						<input id="pp-custom-css-js-dev-tinymce-cb" type="checkbox" /> Add to visual editor (TinyMCE)
					</label>
					' : '').
					'<button id="pp-custom-css-js-dev-delete-revisions-btn" class="button-secondary">Delete Draft Revisions</button>
					<h4 style="margin: 0; margin-bottom: 5px;">Revisions:</h4>
					<ul id="pp_custom_css_js_dev_revisions">
					</ul>
				</div>
				<div id="pp_custom_code_editor_dev" style="margin-top: 15px;"></div>
				<div id="pp-custom-css-js-dev-editor-buttons-bottom">
					<button type="button" id="pp-custom-css-js-dev-save-btn" class="button-primary" style="margin-top: 15px;" disabled="disabled">Saved</button>
					<button type="button" id="pp-custom-css-js-dev-publish-btn" class="button-primary" style="margin-top: 15px;" disabled="disabled">Publish</button>
					<button type="button" id="pp-custom-css-js-dev-save-all-btn" class="button-primary" style="margin-top: 15px;" disabled="disabled">Save All</button>
					<button type="button" id="pp-custom-css-js-dev-publish-all-btn" class="button-primary" style="margin-top: 15px; margin-right: 10px;" disabled="disabled">Publish All</button>
					<label style="margin-top: 20px; margin-right: 30px; white-space: nowrap; display: inline-block; vertical-align: top;">
						<input type="checkbox" class="pp-custom-css-js-dev-minify-cb"'.(get_option($postType.'_minify', true) ? ' checked="checked"' : '').' /> Minify output
					</label>
					<script type="text/javascript">var pp_custom_css_js_dev_siteurl = \''.get_option('siteurl').'\';</script>
					<button type="button" id="pp-custom-css-js-dev-delete-btn" class="button-secondary" style="margin-top: 15px;">Delete</button>
					<span style="white-space: nowrap;">
						<button type="button" id="pp-custom-css-js-dev-download-btn" class="button-secondary" style="margin-top: 15px;">Download</button>
						<button type="button" id="pp-custom-css-js-dev-download-all-btn" class="button-secondary" style="margin-top: 15px; margin-right: 30px;">Download All</button>
					</span>
					<iframe id="pp-custom-css-js-dev-iframe" name="pp-custom-css-js-dev-iframe" src="about:blank"></iframe>
					<form action="admin-ajax.php" method="post" target="pp-custom-css-js-dev-iframe" enctype="multipart/form-data" style="display: inline;">
						<input type="hidden" name="action" value="pp_custom_css_js_dev_upload"/>
						<input type="hidden" name="mode" value="'.$mode.'"/>
						<input type="file" name="upload_file" style="margin-top: 15px;"/>
						<button type="submit" id="pp-custom-css-js-dev-upload-btn" class="button-secondary" style="margin-top: 15px;">Upload</button>
					</form>
					<div style="float: right;">
						'.($mode == 'CSS' ? '<button type="button" id="pp-custom-css-js-dev-liveview-btn" class="button-primary" style="margin-top: 15px;">Start Live View</button>' : '').'
						<button type="button" id="pp-custom-css-js-dev-editor-expand-btn" class="button-secondary" style="margin-top: 15px;">Expand Editor</button>
					</div>
				</div>
			</div>
			<div style="clear: both; margin-bottom: 20px;"></div>
		</div>
	');
	}
}

function pp_custom_css_js_dev_sanitize_filename($filename) {
	return preg_replace('/[^a-z0-9_\-\.]/i', '', $filename);
}

function pp_custom_css_js_dev_mce_css($cssFiles) {
	$uploadDir = wp_upload_dir();
	if (file_exists($uploadDir['basedir'].'/pp-css-js-dev/custom.tinymce.css')) {
		$cssFiles .= (empty($cssFiles) ? '' : ',').$uploadDir['baseurl'].'/pp-css-js-dev/custom.tinymce.css?t='.time();
	}
	return $cssFiles;
}

function pp_custom_css_js_dev_post_type_enabled($postType) {
	$postTypes = get_option('pp_ccjdev_post_types', array('page'));
	return in_array($postType, $postTypes);
}

function pp_custom_css_js_dev_settings_page() {
	$postTypes = get_option('pp_ccjdev_post_types', array('page'));
	$allPostTypes = get_post_types();
	sort($allPostTypes);
?>
<div class="wrap">
	<h2>Custom CSS &amp; Javascript Settings</h2>
	<table class="form-table">
		<tr>
			<th scope="row">
				Post-Specific CSS/JS:
			</th>
			<td>
				<ul>
				<?php foreach ($allPostTypes as $postType) { ?>
					<li><label>
						<input type="checkbox" name="pp_ccjdev[post_types][]" value="<?php echo(esc_attr($postType)); ?>"<?php if (in_array($postType, $postTypes)) echo(' checked="checked"'); ?>>
						<?php echo(esc_html($postType)); ?>
					</label></li>
				<?php } ?>
				</ul>
			</td>
		</tr>
	</table>
</div>
<?php
}

// The following code is temporarily disabled - work in progress
/*
function pp_custom_css_js_dev_meta_boxes($postType) {
	if (pp_custom_css_js_dev_post_type_enabled($postType)) {
		add_meta_box('pp_custom_css_js_dev', 'Custom CSS &amp; Javascript', 'pp_custom_css_js_dev_meta_box');
	}
}
add_action('add_meta_boxes', 'pp_custom_css_js_dev_meta_boxes');

function pp_custom_css_js_dev_meta_box() {
	include(dirname(__FILE__).'/include/meta-box.php');
}
*/
include_once(dirname(__FILE__).'/lib/licensing/licensing.php');
?>