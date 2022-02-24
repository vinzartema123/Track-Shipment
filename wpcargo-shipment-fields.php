
<?php 
	//echo $id;
	
	print_r( get_post_meta( $id, '_payment_date' ,true));
?>
<table class="wpcargo form-table">
				<tbody>
				
		<tr>
			<th><label>UN Loc Code</label></th>
			<td><input type="text" id="wpcargo_weight" name="wpcargo_weight" value="1" size="25"></td>
		</tr>
		<tr>
			<th><label>Terminal ID</label></th>
			<td><input type="text" id="wpcargo_courier" name="wpcargo_courier" value="JPC" size="25"></td>
		</tr>
		<tr>
			<th><label>ETA</label></th>
			<td><input type="text" id="pack" name="wpcargo_packages" value="1" size="25"></td>
		</tr>
		
		<tr>
			<th><label>ETD</label></th>
			<td><input type="text" id="prod" name="wpcargo_product" value="goods" size="25"></td>
		</tr>
		<tr>
			<th><label>Ship Name</label></th>
			<td><input type="text" id="wpcargo_qty" name="wpcargo_qty" value="1" size="25"></td>
		</tr>
		<tr>
			<th><label>Ship Operator Voyage Out</label></th>
			<td><input type="text" id="wpcargo_total_freight" name="wpcargo_total_freight" value="" size="25"></td>
		</tr>
		
		<tr>
			<th><label>Lloyds ID</label></th>
			<td><input type="text" id="wpcargo_carrier_ref_number" name="wpcargo_carrier_ref_number" value="" size="25"></td>
		</tr>
		<tr>
			<th><label>Cargo Cutoff Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Reefer Cutoff Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Operators</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Operators Description</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Ship Operator Code</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Ship Operator Voyage In</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Export Receival Commencement Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Import Availability Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Import Storage Start Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		
		<tr>
			<th><label>Vessel Type</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Actual Arrival Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Actual Depart Date</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		<tr>
			<th><label>Vessel Code</label></th>
			<td>
				<label for="UpdateDate"></label>
				<input type="text" class="wpcargo-timepicker" id="datetimepicker5" name="wpcargo_departure_time_picker" autocomplete="off" value="">
			</td>
		</tr>
		</tbody></table>