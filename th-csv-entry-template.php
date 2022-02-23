<?php

if (isset($_POST['import'])) {

    /* if (is_uploaded_file($_FILES['upload_csv']['tmp_name'])) {

            echo "uploaded successfully.";
    } */
 echo "fasdfas";
 print_r($_FILES);
	// $fileContent = file_get_contents($_FILES['upload_csv']['tmp_name']);

	// print_r( $fileContent);
    //Import uploaded file to Database
    $handle = fopen($_FILES['upload_csv']['tmp_name'], "r");
	
     while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
		 echo "<pre>";
		 print_r($data);
		  echo "</pre>";
      /*  $wpdb->insert("csv", array(
                "ULC" => $data[0],
                "TI" => $data[1],
                "ETA" => $data[2],
                "ETD" => $data[3],
                "SN" => $data[4],
                "SOVO" => $data[5],
                "LI" => $data[6],
                "CCD" => $data[7],
                "RCD" => $data[8],
                "O" => $data[9],
                "OD" => $data[10],
                "SOC" => $data[11],
                "SOVI" => $data[12],
                "ERCD" => $data[13],
                "IAD" => $data[14],
                "ISSD" => $data[15],
                "VT" => $data[16],
                "AAD" => $data[17],
                "ADDD" => $data[18],
                "VC" => $data[19]
             ));*/
    }  

    fclose($handle);
} 
?>
<style>
    .update-nag, .updated, .error, .is-dismissible {
        display: none;
    }
    body {
    font-family: Arial;
    /* width: 550px; */
}

.outer-scontainer {
    /* background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px; */
}

.input-row {
    margin-top: 0px;
    margin-bottom: 20px;
}

.btn-submit {
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor: pointer;
}

.outer-scontainer table {
    border-collapse: collapse;
    width: 100%;
}

.outer-scontainer th {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

.outer-scontainer td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display: none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>

<div class="wrap">
    <br/><h1>CSV Entry</h1>

    <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV File</label> 
					
					<input type="file" name="upload_csv" id="file" accept=".csv">
                    <button type="submit" id="submit" name="import" value="import" class="btn-submit">Import</button>
                    <br />

                </div>

            </form>

        </div>
</div>