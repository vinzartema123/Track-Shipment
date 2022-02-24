
<?php 
	//echo $id;
	
	// print_r( get_post_meta( $id, 'wpcargo_departure_time_picker' ,true));
?>
<table class="wpcargo form-table third-table">
				<tbody>
				
		<tr style="
			width: 50%!important;
			display: inline-block;
		">
			<th><label>UN Loc Code</label></th>
			<td style="
    width: 70%;
"><input type="text" id="un_loc_code" name="un_loc_code" value="<?=get_post_meta( $id, 'un_loc_code' ,true)?>" size="25"></td>
		</tr>
		<tr>
			<th><label>Terminal ID</label></th>
			<td><input type="text" id="terminal_id" name="terminal_id" value="<?= get_post_meta( $id, 'terminal_id' ,true)?>" size="25"></td>
		</tr>		
		<tr>
			<th><label>Ship Operator Voyage Out</label></th>
			<td><input type="text" id="ship_operator_voyage_out" name="ship_operator_voyage_out" value="<?= get_post_meta( $id, 'ship_operator_voyage_out' ,true)?>" size="25"></td>
		</tr>
		
		<tr>
			<th><label>Lloyds ID</label></th>
			<td><input type="text" id="lloyds_id" name="lloyds_id" value="<?= get_post_meta( $id, 'lloyds_id' ,true)?>" size="25"></td>
		</tr>
		<tr>
			<th><label>Cargo Cutoff Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="cargo_cutoff_date" name="cargo_cutoff_date"  value="<?= get_post_meta( $id, 'cargo_cutoff_date' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Reefer Cutoff Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="reefer_cutoff_date" name="reefer_cutoff_date"  value="<?= get_post_meta( $id, 'reefer_cutoff_date' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Operators</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="operators" id="operators" name="operators"  value="<?= get_post_meta( $id, 'operators' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Operators Description</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="operators_description" id="operators_description" name="operators_description"  value="<?= get_post_meta( $id, 'operators_description' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Ship Operator Code</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="ship_operator_code" id="ship_operator_code" name="ship_operator_code"  value="<?=get_post_meta( $id, 'ship_operator_code' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Ship Operator Voyage In</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="ship_operator_voyage_in" id="ship_operator_voyage_in" name="ship_operator_voyage_in"  value="<?= get_post_meta( $id, 'ship_operator_voyage_in' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Export Receival Commencement Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="export_receival_commencement_date" name="export_receival_commencement_date"  value="<?=get_post_meta( $id, 'export_receival_commencement_date' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Import Availability Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="import_availability_date" name="import_availability_date"  value="<?= get_post_meta( $id, 'import_availability_date' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Import Storage Start Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="import_storage_start_date" name="import_storage_start_date"  value="<?= get_post_meta( $id, 'import_storage_start_date' ,true)?>">
			</td>
		</tr>
		
		<tr>
			<th><label>Vessel Type</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="vessel_type" id="vessel_type" name="vessel_type"  value="<?= get_post_meta( $id, 'vessel_type' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Actual Arrival Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="actual_arrival_date" name="actual_arrival_date"  value="<?= get_post_meta( $id, 'actual_arrival_date' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Actual Depart Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="actual_depart_date" name="actual_depart_date" value="<?= get_post_meta( $id, 'actual_depart_date' ,true)?>">
			</td>
		</tr>
		<tr>
			<th><label>Vessel Code</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="vessel_code" id="vessel_code" name="vessel_code"  value="<?= get_post_meta( $id, 'vessel_code' ,true)?>">
			</td>
		</tr>
		</tbody></table>