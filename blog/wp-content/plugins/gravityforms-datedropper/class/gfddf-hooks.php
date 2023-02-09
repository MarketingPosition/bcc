<?php

class GFDDF_Hooks {

	private $version;
	private $plugin_name;

	/**
	 * Initialize the class and set its properties.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->version = $version;
		$this->plugin_name = $plugin_name;

	}

	/**
	 * Register the JavaScript and Style for admin area.
	 */
	public function admin_scripts( $hook ) { 

		if ( strpos( $hook, 'gf_edit' ) !== false ) {
			wp_enqueue_style( 'wp-color-picker' ); 
			wp_enqueue_script( 'wp-color-picker' ); 
			wp_enqueue_style( $this->plugin_name . '-admin', plugin_dir_url( dirname(__FILE__) ) . 'asset/css/admin.css', array(), $this->version, 'all' );
		}
		
	}

	/**
	 * Registering admin script when running on no-conflict mode
	 */
	public function noconflict_scripts( $scripts ){
	    
	    $scripts[] = "wp-color-picker";

	    return $scripts;
	}

	/**
	 * Registering admin style when running on no-conflict mode
	 */
	public function noconflict_styles( $styles ){
	    
	    $styles[] = "wp-color-picker";
	    $styles[] = $this->plugin_name . '-admin';
	    
	    return $styles;
	}


	/**
	 * Register the JavaScript and Style for Gravity Form.
	 */
	public function enqueue_scripts( $form, $is_ajax ) {

		$gfields = $form['fields'];
		$datedropper_styles = ''; 
		$style_arr = array('#fd4741');

		foreach ( $gfields as $key => $gfield ) {
			if( $gfield['type'] == 'jb_datedropper' ) {
				if( isset( $gfield['jbDatedropperTheme'] ) && !in_array( $gfield['jbDatedropperTheme'], $style_arr ) ){
					$style_arr[] = $gfield['jbDatedropperTheme'];
					$datedropper_styles .= $this->inline_styles( $gfield['jbDatedropperTheme'] );
				}
			}
		}

		$plugin_dir_url = plugin_dir_url( dirname(__FILE__) );
		
		wp_enqueue_style( $this->plugin_name , $plugin_dir_url . 'asset/lib/datedropper/datedropper.css', array(), $this->version, 'all' );
		wp_enqueue_script( $this->plugin_name, $plugin_dir_url . 'asset/lib/datedropper/datedropper.js', array('jquery'), $this->version, true );
		wp_enqueue_script( $this->plugin_name . '-public', $plugin_dir_url . 'asset/js/public.js', array(), $this->version, true );

		if( !empty( $datedropper_styles ) )
			wp_add_inline_style( $this->plugin_name, $datedropper_styles );
	}

	/**
	 * Set custom styles base on the datedropper theme color.
	 */
	public function inline_styles( $hex ) { 

		$class = 'dd-theme-' . ltrim( $hex, '#' );

		$style = "
			div.datedropper.$class{
			  	border-radius:6px;
			  	width:180px;
			}
			div.datedropper.$class .picker{
			  	border-radius:8px;
			  	box-shadow:0 0 32px 0px rgba(0, 0, 0, 0.1);
			}
			div.datedropper.$class .pick-l{
			  	border-bottom-left-radius:8px;
			  	border-bottom-right-radius:8px;
			}
			div.datedropper.$class:before,
			div.datedropper.$class .pick-submit,
			div.datedropper.$class .pick-lg-b .pick-sl:before,
			div.datedropper.$class .pick-m,
			div.datedropper.$class .pick-lg-h{
			  	background-color:$hex;
			}
			div.datedropper.$class .pick-y.pick-jump,
			div.datedropper.$class .pick li span,
			div.datedropper.$class .pick-lg-b .pick-wke,
			div.datedropper.$class .pick-btn{
			  	color:$hex;
			}
			div.datedropper.$class .picker,
			div.datedropper.$class .pick-l{
			  	background-color:#FFF;
			}
			div.datedropper.$class .picker,
			div.datedropper.$class .pick-arw,
			div.datedropper.$class .pick-l{
			  	color:#4D4D4D;
			}
			div.datedropper.$class .pick-m,
			div.datedropper.$class .pick-m .pick-arw,
			div.datedropper.$class .pick-lg-h,
			div.datedropper.$class .pick-lg-b .pick-sl,
			div.datedropper.$class .pick-submit{
			  	color:#FFF;
			}
			div.datedropper.$class.picker-tiny:before,
			div.datedropper.$class.picker-tiny .pick-m{
			  	background-color: #FFF;
			}
			div.datedropper.$class.picker-tiny .pick-m,
			div.datedropper.$class.picker-tiny .pick-m .pick-arw{
			  	color:#4D4D4D;
			}
			div.datedropper.$class.picker-lkd .pick-submit{
			  	background-color: #FFF;
			  	color:#4D4D4D;
			}
		";

		return trim( preg_replace('/\s\s+/', '', $style) );

	}

	/**
	 * Inject Javascript into the Gravity form editor page.
	 */
	public function editor_js() {
		?>
	    <script type='text/javascript'>

	        /*adding setting to fields of type "jb_datedropper"*/
	        fieldSettings.jb_datedropper += ', .jb_datedropper_theme_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_large_default_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_modal_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_arrow_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_format_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_default_date_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_min_year_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_max_year_setting';
	        fieldSettings.jb_datedropper += ', .jb_datedropper_language_setting';

	        jQuery(document).bind('gform_load_field_settings', function(event, field, form){

	            if (field.type == 'jb_datedropper') {

	            	if(typeof field.jbDatedropperTheme == 'undefined' || field.jbDatedropperTheme == "")
	            		field.jbDatedropperTheme = '#fd4741';

	            	if(typeof field.jbDatedropperModal == 'undefined' || field.jbDatedropperModal == "")
	            		field.jbDatedropperModal = false;

	            	if(typeof field.jbDatedropperArrowD == 'undefined' || field.jbDatedropperArrowD == "")
	            		field.jbDatedropperArrowD = false;

	            	if(typeof field.jbDatedropperArrowM == 'undefined' || field.jbDatedropperArrowM == "")
	            		field.jbDatedropperArrowM = false;

	            	if(typeof field.jbDatedropperArrowY == 'undefined' || field.jbDatedropperArrowY == "")
	            		field.jbDatedropperArrowY = false;

	            	if(typeof field.jbDatedropperLargeDefault == 'undefined' || field.jbDatedropperLargeDefault == "")
	            		field.jbDatedropperLargeDefault = false;

	            	if(typeof field.jbDatedropperDefaultDate == 'undefined')
	            		field.jbDatedropperDefaultDate = '';

	            	if(typeof field.jbDatedropperFormat == 'undefined')
	            		field.jbDatedropperFormat = '';

	            	if(typeof field.jbDatedropperMinYear == 'undefined')
	            		field.jbDatedropperMinYear = '';

	            	if(typeof field.jbDatedropperMaxYear == 'undefined')
	            		field.jbDatedropperMaxYear = '';

	            	if(typeof field.jbDatedropperLanguage == 'undefined' || field.jbDatedropperLanguage == "")
	            		field.jbDatedropperLanguage = 'en';


	            	if( !jQuery('#jb_datedropper_theme').hasClass('color_picket_init') ){
	            		jQuery('#jb_datedropper_theme').wpColorPicker({
		            		change: function(event, ui){
		            			SetFieldProperty( 'jbDatedropperTheme', ui.color.toString() );
		            		}
		            	});
		            	jQuery('#jb_datedropper_theme').addClass('color_picket_init'); 
	            	}
	            	setTimeout(function(){
	            		jQuery('#jb_datedropper_theme').val( field.jbDatedropperTheme ).trigger('change');
	            	},500);

	            	jQuery('#jb_datedropper_large_default').prop('checked', field.jbDatedropperLargeDefault);
	            	jQuery('#jb_datedropper_modal').prop('checked', field.jbDatedropperModal);
	            	jQuery('#jb_datedropper_arrow_d').prop('checked', field.jbDatedropperArrowD);
	            	jQuery('#jb_datedropper_arrow_m').prop('checked', field.jbDatedropperArrowM);
	            	jQuery('#jb_datedropper_arrow_y').prop('checked', field.jbDatedropperArrowY);
	            	jQuery('#jb_datedropper_default_date').val(field.jbDatedropperDefaultDate);
	            	jQuery('#jb_datedropper_format').val(field.jbDatedropperFormat);
	            	jQuery('#jb_datedropper_min_year').val(field.jbDatedropperMinYear);
	            	jQuery('#jb_datedropper_max_year').val(field.jbDatedropperMaxYear);	
	            	jQuery('#jb_datedropper_language').val(field.jbDatedropperLanguage);
	            }
	        });

	        jQuery(document).ready(function($){

	        	$(document).on('change', '.jb_datedropper_large_default', function(){
	        		SetFieldProperty('jbDatedropperLargeDefault', $(this).prop('checked'));
	        	});
	        	$(document).on('change', '.jb_datedropper_modal', function(){
	        		SetFieldProperty('jbDatedropperModal', $(this).prop('checked'));
	        	});
	        	$(document).on('change', '.jb_datedropper_arrow_d', function(){
	        		SetFieldProperty('jbDatedropperArrowD', $(this).prop('checked'));
	        	});
	        	$(document).on('change', '.jb_datedropper_arrow_m', function(){
	        		SetFieldProperty('jbDatedropperArrowM', $(this).prop('checked'));
	        	});
	        	$(document).on('change', '.jb_datedropper_arrow_y', function(){
	        		SetFieldProperty('jbDatedropperArrowY', $(this).prop('checked'));
	        	});
	        	$(document).on('blur', '.jb_datedropper_default_date', function(){
	        		SetFieldProperty('jbDatedropperDefaultDate', $(this).val());
	        	});
	        	$(document).on('blur', '.jb_datedropper_format', function(){
	        		SetFieldProperty('jbDatedropperFormat', $(this).val());
	        	});
	        	$(document).on('blur', '.jb_datedropper_min_year', function(){
	        		SetFieldProperty('jbDatedropperMinYear', $(this).val());
	        	});
	        	$(document).on('blur', '.jb_datedropper_max_year', function(){
	        		SetFieldProperty('jbDatedropperMaxYear', $(this).val());
	        	});
	        	$(document).on('change', '.jb_datedropper_language', function(){
	        		SetFieldProperty('jbDatedropperLanguage', $(this).val());
	        	});

	        });

	        function SetDefaultValues_jb_datedropper(field) {
				field.label = 'Untitled Date';
			}

	    </script>
	    <?php
	}

	/**
	 * Add additional options to the field appearance settings.
	 */
	public function field_appearance_settings( $position, $form_id ) {

	    if ( $position == 0 ) {
	        ?>
	        <li class="jb_datedropper_theme_setting field_setting">
	            <label for="jb_datedropper_theme" class="section_label">
	                <?php esc_html_e( 'Theme Color', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_theme' ) ?>
	            </label>
	            <input type="text" id="jb_datedropper_theme" class="jb_datedropper_theme fieldwidth-2" data-default-color="#fd4741"/>
	        </li>
	        <li class="jb_datedropper_large_default_setting field_setting">
	        	<input type="checkbox" id="jb_datedropper_large_default" class="jb_datedropper_large_default"/>
	            <label for="jb_datedropper_large_default" class="inline">
	                <?php esc_html_e( 'Large View', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_large_default' ) ?>
	            </label>
	        </li>
	        <li class="jb_datedropper_modal_setting field_setting">
	            <input type="checkbox" id="jb_datedropper_modal" class="jb_datedropper_modal"/>
	            <label for="jb_datedropper_modal" class="inline">    
	            	<?php esc_html_e( 'Show on Modal', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_modal' ) ?>
	            </label>
	        </li>
	        <li class="jb_datedropper_arrow_setting field_setting">
	        	<label class="section_label">
	                <?php esc_html_e( 'Always show backward & forward arrow', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_arrow' ) ?>
	            </label>
	            <input type="checkbox" id="jb_datedropper_arrow_d" class="jb_datedropper_arrow_d"/>
	            <label for="jb_datedropper_arrow_d" class="inline">
	            	<?php esc_html_e( 'Day', 'gravityforms-datedropper' ); ?>
	            </label>
	            <input type="checkbox" id="jb_datedropper_arrow_m" class="jb_datedropper_arrow_m"/>
	            <label for="jb_datedropper_arrow_m" class="inline">
	            	<?php esc_html_e( 'Month', 'gravityforms-datedropper' ); ?>
	            </label>
	            <input type="checkbox" id="jb_datedropper_arrow_y" class="jb_datedropper_arrow_y"/>
	            <label for="jb_datedropper_arrow_y" class="inline">
	            	<?php esc_html_e( 'Year', 'gravityforms-datedropper' ); ?>
	            </label>
	        </li>
	        <?php
	    }
	}

	/**
	 * Add additional options to the field advance settings.
	 */
	public function field_advanced_settings( $position, $form_id ) {

	    if ( $position == 0 ) {
	        ?>
	        <li class="jb_datedropper_format_setting field_setting">
            	<label for="jb_datedropper_format" class="section_label">
	                <?php esc_html_e( 'Date Format', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_format' ) ?>
	            </label>
            	<input type="text" id="jb_datedropper_format" class="jb_datedropper_format"/>
	        </li>
	        <li class="jb_datedropper_default_date_setting field_setting">
            	<label for="jb_datedropper_default_date" class="section_label">
	                <?php esc_html_e( 'Default Date', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_default_date' ) ?>
	            </label>
            	<input type="text" id="jb_datedropper_default_date" class="jb_datedropper_default_date"/>
	        </li>
	        <li class="jb_datedropper_min_year_setting field_setting">
            	<label for="jb_datedropper_min_year" class="section_label">
	                <?php esc_html_e( 'Min Year', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_min_year' ) ?>
	            </label>
            	<input type="text" id="jb_datedropper_min_year" class="jb_datedropper_min_year"/>
	        </li>
	        <li class="jb_datedropper_max_year_setting field_setting">
            	<label for="jb_datedropper_max_year" class="section_label">
	                <?php esc_html_e( 'Max Year', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_max_year' ) ?>
	            </label>
            	<input type="text" id="jb_datedropper_max_year" class="jb_datedropper_max_year"/>
	        </li>
	        <li class="jb_datedropper_language_setting field_setting">
	            <label for="jb_datedropper_language" class="section_label">
	                <?php esc_html_e( 'Language', 'gravityforms-datedropper' ); ?>
	                <?php gform_tooltip( 'form_jb_datedropper_language' ) ?>
	            </label>
	        	<select class="jb_datedropper_language" id="jb_datedropper_language" style="min-width:158px;">
	    			<option value="ar" >Arabic</option>
	    			<option value="zh" >Chinese</option>
	    			<option value="da" >Dansk</option>
	    			<option value="de" >Deutsch</option>
	    			<option value="nl" >Dutch</option>
	    			<option value="es" >Español</option>
	    			<option value="en" selected>English</option>
	    			<option value="fi" >Finnish</option>
	    			<option value="fr" >Français</option>
	    			<option value="gr" >Greek</option>
	    			<option value="hu" >Hungarian</option>
	    			<option value="it" >Italian</option>
	    			<option value="pl" >Polish</option>
	    			<option value="pt" >Portuguese</option>
	    			<option value="ru" >Russian</option>
	    			<option value="si" >Slovenian</option>
	    			<option value="uk" >Ukrainian</option>
	    			<option value="tr" >Turkish</option>
				</select>
	        </li>
	        <?php
	    }
	}

	/**
	 * Add tooltips to the options on field appearance settings.
	 */
	public function field_tooltips( $tooltips ) {
		$tooltips['form_jb_datedropper_theme'] = '<h6>'. __('Theme Color','gravityforms-datedropper') .'</h6>'. __('Select the best theme color for your datedropper.','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_format'] = '<h6>'. __('Date Format','gravityforms-datedropper') .'</h6>'. __('The date format the picker will write on the selected input. Default value is "m/d/Y"','gravityforms-datedropper') . ' <table>
		    <thead><tr><th>Key</th><th>'. __('Description','gravityforms-datedropper') .'</th><th>Result</th></tr></thead><tbody>
		        <tr><td>M</td><td>'. __('Short month','gravityforms-datedropper') .'</td><td>Jan</td></tr>
		        <tr><td>F</td><td>'. __('Long month','gravityforms-datedropper') .'</td><td>January</td></tr>
		        <tr><td>m</td><td>'. __('Numeric month','gravityforms-datedropper') .'</td><td>01-12</td></tr>
		        <tr><td>n</td><td>'. __('Non-padded numeric month','gravityforms-datedropper') .'</td><td>1-12</td></tr>
		        <tr><td>Y</td><td>'. __('Long numeric year','gravityforms-datedropper') .'</td><td>2015</td></tr>
		        <tr><td>d</td><td>'. __('Padded numeric day','gravityforms-datedropper') .'</td><td>01-31</td></tr>
		        <tr><td>j</td><td>'. __('Non-Padded Numeric day','gravityforms-datedropper') .'</td><td>1-31</td</tr>
		        <tr><td>D</td><td>'. __('Short day-of-week','gravityforms-datedropper') .'</td><td>Sun</td></tr>
		        <tr><td>l</td><td>'. __('Long day-of-week','gravityforms-datedropper') .'</td><td>Sunday</td></tr>
		        <tr><td>S</td><td>'. __('Suffixed numeric day','gravityforms-datedropper') .'</td><td>13th</td></tr>
		        <tr><td>U</td><td>'. __('Unix timestamp','gravityforms-datedropper') .'</td><td>1481328000</td></tr>
		    </tbody></table>';
	   	$tooltips['form_jb_datedropper_large_default'] = '<h6>'. __('Large View','gravityforms-datedropper') .'</h6>' . __('If check, it will display the date dropper on large view.','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_modal'] = '<h6>'. __('Show on Modal','gravityforms-datedropper') .'</h6>' . __('If check, the picker will be displayed centered, with a dark overlay in background.','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_arrow'] = '<h6>'. __('Always show backward & forward arrow','gravityforms-datedropper') .'</h6>' . __('By default the backward & forward arrow only shows when you hover on the day, month or year. Check the box below if you want to make the arrow always visible.','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_min_year'] = '<h6>'. __('Min Year','gravityforms-datedropper') .'</h6>' . __('The lowest year that the control will allow. Default value is 1970. Use the CURRENT_YEAR variable to change the default value. For example if you want to set the min year to 40 years below the current year then you need to enter CURRENT_YEAR - 40 on the textbox.','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_max_year'] = '<h6>'. __('Max Year','gravityforms-datedropper') .'</h6>' . __('The highest year that the control will allow. Default value is the current year. Use the CURRENT_YEAR variable to change the default value. For example if you want to set the max year to 10 years above current year then you need to enter CURRENT_YEAR + 10 on the textbox.','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_language'] = '<h6>'. __('Language','gravityforms-datedropper') .'</h6>' . __('Languages used for months and days of the week. Default: English','gravityforms-datedropper');
	   	$tooltips['form_jb_datedropper_default_date'] = '<h6>'. __('Default Date','gravityforms-datedropper') .'</h6>' . __('You can set the default date value by using the CURRENT_DATE variable. For example if you want to set the default date two days in advance from current date then you need to enter CURRENT_DATE + 2 on the textbox.','gravityforms-datedropper');
	   	
	   	return $tooltips;
	}

	/**
	 * This will modify the way the field content is rendered.
	 */
	public function field_content( $content, $field, $value, $lead_id, $form_id ) {

		if ( $field->type == 'jb_datedropper' ) {

			$init_set = 'false';
			$default_date = 'data-default-date';
			$cur_year = current_time( 'Y' );
			$min_year = 1970;
			$max_year = $cur_year;

			/*default date*/
			$set_default_date = trim( esc_attr( $field->jbDatedropperDefaultDate ) );
			if ( !empty( $set_default_date ) ) {
			
				$exp_d = ( strpos( $set_default_date, '-' ) !== false ) ? '-' : '+';
				$set_default_date = explode( $exp_d, $set_default_date );

				if ( strtolower( trim( $set_default_date[0] ) ) == 'current_date' ) {
					$init_set = 'true';

					if ( count( $set_default_date ) > 1 ) {
						$a_date = intval( $set_default_date[1] );
						$c_date = explode( '-',  current_time( 'Y-m-d' ) );

						if ( $exp_d == '+' )
							$new_date = date( 'm-d-Y', mktime( 0, 0, 0, $c_date[1], $c_date[2] + $a_date, $c_date[0] ) );
						else
							$new_date = date( 'm-d-Y', mktime( 0, 0, 0, $c_date[1], $c_date[2] - $a_date, $c_date[0] ) );

						$default_date = sprintf( ' data-default-date="%s" ', $new_date );
					}
				} 
			}

			/*max year*/
			$set_max_year = trim( esc_attr( $field->jbDatedropperMaxYear ) );
			if ( !empty( $set_max_year ) ) { 

				$exp_d = ( strpos( $set_max_year, '-' ) !== false ) ? '-' : '+';
				$set_max_year = explode( $exp_d, $set_max_year );

				if ( strtolower( trim( $set_max_year[0] ) ) == 'current_year' ) {
					if ( count( $set_max_year ) > 1 ) {
						$a_year = intval( $set_max_year[1] );
						$new_max_year = ( $exp_d == '+' ) ? ( $cur_year + $a_year ) : ( $cur_year - $a_year );
						
						if( $new_max_year >= $min_year )
							$max_year = $new_max_year;
					} 
				} 
			}

			/*min year*/
			$set_min_year = trim( esc_attr( $field->jbDatedropperMinYear ) );
			if ( !empty( $set_min_year ) ) { 

				$exp_d = ( strpos( $set_min_year, '-' ) !== false ) ? '-' : '+';
				$set_min_year = explode( $exp_d, $set_min_year );

				if ( strtolower( trim( $set_min_year[0] ) ) == 'current_year' ) {
					if ( count( $set_min_year ) > 1 ) {
						$a_year = intval( $set_min_year[1] );
						$new_min_year = ( $exp_d == '+' ) ? ( $cur_year + $a_year ) : ( $cur_year - $a_year );
						
						if( $new_min_year <= $max_year )
							$min_year = $new_min_year;
						else
							$min_year = $max_year;
					} else {
						$min_year = current_time( 'Y' );
					}
				} 
			}

			$dd_class = 'dd-theme-' . ltrim( $field->jbDatedropperTheme, '#' );
			if( $dd_class != 'dd-theme-fd4741' && $dd_class != 'dd-theme-'  )
				$theme = sprintf( ' data-theme="%s" ', $dd_class );
			else
				$theme = 'data-theme';

			$large_default 	= sprintf( ' data-large-default="%s" ', ( $field->jbDatedropperLargeDefault ? 'true' : 'false' ) );
			$modal 			= sprintf( ' data-modal="%s" ', ( $field->jbDatedropperModal ? 'true' : 'false' ) );
			$arrow_d 		= sprintf( ' data-arrow-d="%s" ', ( $field->jbDatedropperArrowD ? 'true' : 'false' ) );
			$arrow_m 		= sprintf( ' data-arrow-m="%s" ', ( $field->jbDatedropperArrowM ? 'true' : 'false' ) );
			$arrow_y 		= sprintf( ' data-arrow-y="%s" ', ( $field->jbDatedropperArrowY ? 'true' : 'false' ) );
			$format 		= sprintf( ' data-format="%s" ', esc_attr( $field->jbDatedropperFormat ) );
			$min_year 		= sprintf( ' data-min-year="%s" ', $min_year );
			$max_year 		= sprintf( ' data-max-year="%s" ', $max_year );
			$language 		= sprintf( ' data-lang="%s" ', esc_attr( $field->jbDatedropperLanguage ) );	
			$init_set 		= sprintf( ' data-init-set="%s" ', $init_set );
			$submit_value 	= sprintf( ' data-submit-value="%s" ', $value );

			$content = str_replace( "data-theme", $theme, $content );
			$content = str_replace( "data-large-default", $large_default, $content );
			$content = str_replace( "data-modal", $modal, $content );
			$content = str_replace( "data-arrow-d", $arrow_d, $content );
			$content = str_replace( "data-arrow-m", $arrow_m, $content );
			$content = str_replace( "data-arrow-y", $arrow_y, $content );
			$content = str_replace( "data-format", $format, $content );
			$content = str_replace( "data-min-year", $min_year, $content );
			$content = str_replace( "data-max-year", $max_year, $content );
			$content = str_replace( "data-lang", $language, $content );
			$content = str_replace( "data-init-set", $init_set, $content );
			$content = str_replace( "data-submit-value", $submit_value, $content );
			$content = str_replace( "data-default-date", $default_date, $content );

		}

		return $content;
	}

}