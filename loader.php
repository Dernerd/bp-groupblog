<?php

/*
Plugin Name: BP Groupblog
Plugin URI: https://n3rds.work
Description: Automates and links WPMU blogs groups controlled by the group creator.
Author: WMS N@W
Version: 1.9.3
License: (Groupblog: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html)
Network: true
Text Domain: bp-groupblog
*/


function bp_groupblog_init() {
	// BP Groupblog requires multisite
	if ( !is_multisite() )
		return;

	if ( !bp_is_active( 'groups' ) )
		return;

	require_once( dirname( __FILE__ ) . '/bp-groupblog.php' );
}
add_action( 'bp_include', 'bp_groupblog_init' );
