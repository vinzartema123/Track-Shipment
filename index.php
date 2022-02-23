<?php
    /*
    Plugin Name: Shipment Tracker
    Plugin URI: #
    Description: Track shipment
    Version: 1.0
    Author: AM
    Author URI: #
    */

    add_action('admin_menu', 'thehub_menu_csv_entry' , 20);

    function thehub_menu_csv_entry(){
        // adding option page
        // add_menu_page( 'The Hub Entry', 'Shipment Tracking', 'manage_options', 'th-csv-entry', 'thehub_csv_entry_plugin_admin_page', 'dashicons-media-spreadsheet', 80);
		
		add_submenu_page(
        'edit.php?post_type=wpcargo_shipment',
        __( 'The Hub Entry', 'textdomain' ),
        __( 'Shipment Tracking', 'textdomain' ),
        'manage_options',
        'th-csv-entry',
        'thehub_csv_entry_plugin_admin_page',
		100
    );

   }

    function thehub_csv_entry_plugin_admin_page(){
		ob_start();
        /* wp_register_script( 'thehub_csv_entry_script', plugins_url('th-csv-entry-script.js', __FILE__ ), array(), filemtime(plugin_dir_path( __FILE__ ) . "th-csv-entry-script.js"));
        wp_enqueue_script( 'thehub_csv_entry_script' );
        echo file_get_contents(dirname(__FILE__) . '/th-csv-entry-template.php'); */
		include(plugin_dir_path( __FILE__ ) . '/th-csv-entry-template.php');
		
		$output = ob_get_clean();
		
		echo $output; 
	}
	
	
	
	add_action('wpc_after_shipment_details_table', 'tracking_table_after_shipment_details');
	
	function tracking_table_after_shipment_details($id){
		ob_start();
		include(plugin_dir_path( __FILE__ ) . '/wpcargo-shipment-fields.php');
		
		$output = ob_get_clean();
		
		echo $output; 
	}