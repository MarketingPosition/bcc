<?php

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/*
Plugin Name: Gravity Forms Signature Add-On
Plugin URI: https://www.gravityforms.com
Description: Creates a Gravity Forms signature field that allows users to sign online using a mouse or stylus.
Version: 3.6
Author: Rocketgenius
Author URI: https://www.rocketgenius.com
License: GPL-2.0+
Text Domain: gravityformssignature
Domain Path: /languages

------------------------------------------------------------------------
Copyright 2009-2016 Rocketgenius, Inc.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

define( 'GF_SIGNATURE_VERSION', '3.6' );

add_action( 'gform_loaded', array( 'GF_Signature_Bootstrap', 'load' ), 5 );

class GF_Signature_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-signature.php' );

		GFAddOn::register( 'GFSignature' );
	}
}

function gf_signature() {
	return GFSignature::get_instance();
}
