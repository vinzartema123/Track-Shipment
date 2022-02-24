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
		
	function ts_import_csv_shipment() {
		/**
		 * At this point, $_GET/$_POST variable are available
		 *
		 * We can do our normal processing here
		 */ 

		// Sanitize the POST field
		// Generate email content
		// Send to appropriate email
		
			
		if (isset($_POST['import'])) {

		/* if (is_uploaded_file($_FILES['upload_csv']['tmp_name'])) {

				echo "uploaded successfully.";
		} */
		 echo "fasdfas";
		 print_r($_FILES);
			// $fileContent = file_get_contents($_FILES['upload_csv']['tmp_name']);

			// print_r( $fileContent);
			//Import uploaded file to Database
		$original = ini_get("auto_detect_line_endings");
		ini_set("auto_detect_line_endings", true);
		$handle = fopen($_FILES['upload_csv']['tmp_name'], "r");
		ini_set("auto_detect_line_endings", $original);
		echo "<pre>"; 
		
		$flag = true;
		$column = array_map('nestedMetakey', (array)fgetcsv($handle));
		print_r($column);
		
		
		/* $my_post = array(
		  'post_title'    => wp_strip_all_tags( "sample insert"),
		  'post_content'  => "None",
		  'post_type'=> 'wpcargo_shipment', 
		  'post_status'   => 'publish',
		  'post_author'   => 1,
		   'meta_input'=>array(
                '_payment_date'=>"game",
            )
		);
		 
		// Insert the post into the database
		wp_insert_post( $my_post , true); */
		
		$current_user = (array)wp_get_current_user();
		
		if(!isset($current_user['ID']))return;
		$row = 0;
		$current_user_id = $current_user['ID'];
		
		
		do {
				  if($flag) { $flag = false; continue; }
				  usleep(2); 
				  /* echo "<pre>"; 
				  print_r($line);
				  echo "</pre>"; */  
				  
				  $title = array_search('ship-name', $column);
				  
				  $un_loc_code = array_search('un-loc-code', $column);
				  $terminal_id = array_search('terminal-id', $column);
				  $eta = array_search('eta', $column);
				  $ship_operator_voyage_out = array_search('ship-operator-voyage-out', $column);
				  $lloyds_id = array_search('lloyds-id', $column);
				  $cargo_cutoff_date = array_search('cargo-cutoff-date', $column);
				  $reefer_cutoff_date = array_search('reefer-cutoff-date', $column);
				  $operators = array_search('operators', $column);
				  $operators_description = array_search('operators-description', $column);
				  $ship_operator_code = array_search('ship-operator-code', $column);
				  $ship_operator_voyage_in = array_search('ship-operator-voyage-in', $column);
				  $export_receival_commencement_date = array_search('export-receival-commencement-date', $column);
				  $import_availability_date = array_search('import-availability-date', $column);
				  $import_storage_start_date = array_search('import-storage-start-date', $column);
				  $vessel_type = array_search('vessel-type', $column);
				  $actual_arrival_date = array_search('actual-arrival-date', $column);
				  $actual_depart_date = array_search('actual-depart-date', $column);
				  $vessel_code = array_search('vessel-code', $column);
				  
				  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
				 // Output: 54esmdr0qf
				  $random_char = substr(str_shuffle($permitted_chars), 0, 20);

				  $my_post = array(
					  'post_title'    => wp_strip_all_tags($random_char),
					  'post_content'  => "",
					  'post_type'=> 'wpcargo_shipment', 
					  'post_status'   => 'publish',
					  'post_author'   => $current_user_id,
					  'meta_input'=>array(
							'un_loc_code'=>$line[$un_loc_code],
							'terminal_id'=>$line[$terminal_id],
							'eta'=>$line[$eta],
							'ship_name'=>$line[$title],
							'ship_operator_voyage_out'=>$line[$ship_operator_voyage_out],
							'lloyds_id'=>$line[$lloyds_id],
							'cargo_cutoff_date'=>$line[$cargo_cutoff_date],
							'reefer_cutoff_date'=>$line[$reefer_cutoff_date],
							'operators'=>$line[$operators],
							'operators_description'=>$line[$operators_description],
							'ship_operator_code'=>$line[$ship_operator_code],
							'ship_operator_voyage_in'=>$line[$ship_operator_voyage_in],
							'export_receival_commencement_date'=>$line[$export_receival_commencement_date],
							'import_availability_date'=>$line[$import_availability_date],
							'import_storage_start_date'=>$line[$import_storage_start_date],
							'vessel_type'=>$line[$vessel_type],
							'actual_arrival_date'=>$line[$actual_arrival_date],
							'actual_depart_date'=>$line[$actual_depart_date],
							'vessel_code'=>$line[$vessel_code],
					   )
					);
					 $row++;
					 
					 print_r($my_post);
					// Insert the post into the database
					
					
					 $post_id = null;
					if($id = post_exists(wp_strip_all_tags($random_char) )){
						$post_id = $id;
					}
					else{
						$post_id =  wp_insert_post( $my_post );
					}
					
					
					/* echo $post_id."<br>";
					echo "JCP".str_pad(12346435412307894656345, 10, '0', STR_PAD_LEFT);
					 */
					
					$post_update = array(
						'ID'         => $post_id,
						'post_title' => "JCP".str_pad($post_id, 10, '0', STR_PAD_LEFT)
					  );

					wp_update_post( $post_update ); 
					
					
					   
					//update_post_meta( $post_id, 'times', '1' );
				  // echo $row;
				  unset($line);
				  flush();
				  ob_flush(); 
		} while (($line = fgetcsv($handle)) !== false && $row < 20);
		
			/* while () {
			} */
			
			
			/*  while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
				 
				  usleep(5); 
				  
				 echo "<pre>";
				 print_r($data);
				  echo "</pre>";
				  
				  unset($data);
				  flush();
				  ob_flush();
			 
			}   */

			fclose($handle);
		} 
		
		die();
	}
	add_action( 'admin_post_nopriv_import_csv_shipment', 'ts_import_csv_shipment' );
	add_action( 'admin_post_import_csv_shipment', 'ts_import_csv_shipment' );
	
	function nestedMetakey($value) {
		if (is_array($value)) {
			return array_map('nestedLowercase', $value);
		}

		return preg_replace('/\s+/', '-', ltrim(strtolower($value)));
	}
