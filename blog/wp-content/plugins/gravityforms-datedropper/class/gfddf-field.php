<?php

class GFDDF_Field extends GF_Field {

	public $type = 'jb_datedropper';

	public function get_form_editor_field_title() {
		return esc_attr__( 'Date Dropper', 'gravityforms-datedropper' );
	}

	public function get_form_editor_button() {
		return array(
			'group' => 'advanced_fields',
			'text'  => $this->get_form_editor_field_title()
		);
	}

	public function get_form_editor_field_settings() {
		return array(
			'conditional_logic_field_setting',
			'error_message_setting',
			'label_setting',
			'label_placement_setting',
			'admin_label_setting',
			'rules_setting',
			'size_setting',
			'visibility_setting',
			'placeholder_setting',
			'description_setting',
			'css_class_setting'
		);
	}

	public function is_conditional_logic_supported() {
		return true;
	}

	public function get_field_input( $form, $value = '', $entry = null ) {
		$form_id         = absint( $form['id'] );
		$is_entry_detail = $this->is_entry_detail();
		$is_form_editor  = $this->is_form_editor();

		$html_input_type = 'text';

		$logic_event = ! $is_form_editor && ! $is_entry_detail ? $this->get_conditional_logic_event( 'keyup' ) : '';
		$id          = (int) $this->id;
		$field_id    = $is_entry_detail || $is_form_editor || $form_id == 0 ? "input_$id" : 'input_' . $form_id . "_$id";

		$value        = esc_attr( $value );
		$size         = $this->size;
		$class_suffix = $is_entry_detail ? '_admin' : '';
		$class        = $size . $class_suffix;

		$tabindex              = $this->get_tabindex();
		$disabled_text         = $is_form_editor ? 'disabled="disabled"' : '';
		$placeholder_attribute = $this->get_field_placeholder_attribute();
		$required_attribute    = $this->isRequired ? 'aria-required="true"' : '';
		$invalid_attribute     = $this->failed_validation ? 'aria-invalid="true"' : 'aria-invalid="false"';

		$input = "<input data-arrow-d data-arrow-m data-arrow-y data-init-set data-default-date data-submit-value data-theme data-modal data-lang data-min-year data-max-year data-jump data-format data-large-default data-large-mode='true' data-translate-mode='true' name='input_{$id}' id='{$field_id}' type='{$html_input_type}' value='{$value}' class='gfield_jb_datedropper {$class}' {$tabindex} {$logic_event} {$placeholder_attribute} {$required_attribute} {$invalid_attribute} {$disabled_text}/>";

		return sprintf( "<div class='ginput_container ginput_container_jb_datedropper'>%s</div>", $input );
	}
	
}

GF_Fields::register( new GFDDF_Field() );