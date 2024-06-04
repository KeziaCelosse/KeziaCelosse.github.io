<?php
    $this->set_css($this->default_theme_path.'/bootstrap/css/bootstrap/bootstrap.min.css');
    $this->set_css($this->default_theme_path.'/bootstrap/css/font-awesome/css/font-awesome.min.css');
    $this->set_css($this->default_theme_path.'/bootstrap/css/common.css');
    $this->set_css($this->default_theme_path.'/bootstrap/css/general.css');
    $this->set_css($this->default_theme_path.'/bootstrap/css/add-edit-form.css');

    if ($this->config->environment == 'production') {
        $this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);
        $this->set_js_lib($this->default_theme_path.'/bootstrap/build/js/global-libs.min.js');
        $this->set_js_config($this->default_theme_path.'/bootstrap/js/form/add.min.js');
    } else {
        $this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);
        $this->set_js_lib($this->default_theme_path.'/bootstrap/js/jquery-plugins/jquery.form.min.js');
        $this->set_js_lib($this->default_theme_path.'/bootstrap/js/common/common.min.js');
        $this->set_js_config($this->default_theme_path.'/bootstrap/js/form/add.js');
    }


include(__DIR__ . '/common_javascript_vars.php');
include(__DIR__ . '/database_native.php');

  $uri_str = uri_string();
  $uri_explode = explode("/", $uri_str);
  $primary_key = $uri_explode[3]; 
  
  $connection = mysqli_connect($host,$user,$pass,$db);  
  $result = mysqli_query($connection, "SELECT * FROM crud_job_master WHERE JobNo = \"$primary_key\" ");	  
  $row_data = mysqli_fetch_row($result);	
  
  //-- get length
  $result = mysqli_query($connection, "SELECT COUNT(*) FROM crud_job_detail WHERE JobNo = \"$primary_key\" ");	  
  $row_detail_length = mysqli_fetch_row($result);	
  
  //-- get detail data
  $result = mysqli_query($connection, "SELECT * FROM crud_job_detail WHERE JobNo = \"$primary_key\" ");	  

  function GetComboBox($host, $user, $pass, $db, $table){
	$connection = mysqli_connect($host,$user,$pass,$db);  
	$result = mysqli_query($connection, "SELECT * FROM $table");	  
	$option = "";
	while ($row = mysqli_fetch_row($result)){
		$option .= "<option id=\'$row[0]\' value=\'$row[1]\'>$row[1]</option>";
	}
	echo $option;  
  }
  
  function GetComboBoxUpdate($host, $user, $pass, $db, $table, $default){
	$connection = mysqli_connect($host,$user,$pass,$db);  
	$result = mysqli_query($connection, "SELECT * FROM $table");	  
	$option = "";
	$option .= "<option id=\"000\" value=\"$default\" selected>$default</option>";
	while ($row = mysqli_fetch_row($result)){
		$option .= "<option id=\"$row[0]\" value=\"$row[1]\" >$row[1]</option>";
	}
	echo $option;  
  }
?>
<br/>
<div class="" data-unique-hash="<?php echo $unique_hash; ?>">
            <div class="col-md-12">
				<div class="btn-primary" style="padding: 5px 5px">
                    <div class="floatL l5" style="text-align: right; font-weight: bold; font-size: 18px">
                        <?php echo $this->l('form_add'); ?> <?php echo $subject?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-container table-container">
                        <?php //echo form_open( $insert_url, 'method="post" id="crudForm"  enctype="multipart/form-data" class="form-horizontal"'); ?>

<form action="<?php echo base_url("MasterTransaksi/master_detail_edit"); ?>" method="post" enctype="multipart/form-data" class="form-horizontal" accept-charset="utf-8">
						
<!-- Start of GROCERY CRUD DATABASE INPUT -->
				<div class="row">
				<div class="col-md-6">
                                <div class="form-group JobNo_form_group">
                                    <label class="col-sm-4 control-label">
                                        JobNo                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[0]; ?>' readonly id='field-JobNo' name='JobNo' type='text' class='numeric form-control' maxlength='200' />                                    </div>
									</div>
                                <div class="form-group NamaCustomer_form_group">
                                    <label class="col-sm-4 control-label">
                                        Nama Customer                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[1]; ?>'id='field-NamaCustomer' class='form-control' name='NamaCustomer' type='text' value="" maxlength='200' />                                    </div>
                                </div>
                                <div class="form-group AlamatCustomer_form_group">
                                    <label class="col-sm-4 control-label">
                                        AlamatCustomer                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[2]; ?>'id='field-AlamatCustomer' class='form-control' name='AlamatCustomer' type='text' value="" maxlength='200' />                                    </div>
                                </div>
                                <div class="form-group NomorKontak_form_group">
                                    <label class="col-sm-4 control-label">
                                        NomorKontak                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[3]; ?>'id='field-NomorKontak' class='form-control' name='NomorKontak' type='text' value="" maxlength='200' />                                    </div>
                                </div>
                                <div class="form-group Email_form_group">
                                    <label class="col-sm-4 control-label">
                                        Email                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[4]; ?>'id='field-Email' class='form-control' name='Email' type='text' value="" maxlength='200' />                                    </div>
                                </div>
				</div>				
				<div class="col-md-6">
                                <div class="form-group TglDiterima_form_group" style="margin-bottom: -20px">
                                    <label class="col-sm-4 control-label">
                                        Tgl Diterima                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[5]; ?>'id='field-TglDiterima' name='TglDiterima' type='text' value='' maxlength='19' class='datetime-input form-control' />
		<span style="font-size: 12px;"><a class='datetime-input-clear' tabindex='-1'>Bersihkan</a>
		(dd/mm/yyyy) hh:mm:ss</span>                                    </div>
                                </div>
                                <div class="form-group TglPembayaran_form_group" style="margin-bottom: -20px">
                                    <label class="col-sm-4 control-label">
                                        Tgl Pembayaran                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[6]; ?>'id='field-TglPembayaran' name='TglPembayaran' type='text' value='' maxlength='19' class='datetime-input form-control' />
		<span style="font-size: 12px;"><a class='datetime-input-clear' tabindex='-1'>Bersihkan</a>
		(dd/mm/yyyy) hh:mm:ss    </span>                                </div>
                                </div>
                                <div class="form-group TglPengiriman_form_group" style="margin-bottom: -20px">
                                    <label class="col-sm-4 control-label">
                                        Tgl Pengiriman                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[7]; ?>'id='field-TglPengiriman' name='TglPengiriman' type='text' value='' maxlength='19' class='datetime-input form-control' />
		<span style="font-size: 12px;"><a class='datetime-input-clear' tabindex='-1'>Bersihkan</a>
		(dd/mm/yyyy) hh:mm:ss  </span>                                  </div>
                                </div>
                                <div class="form-group KurirResi_form_group">
                                    <label class="col-sm-4 control-label">
                                        KurirResi                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[8]; ?>'id='field-KurirResi' class='form-control' name='KurirResi' type='text' value="" maxlength='200' />                                    </div>
                                </div>
                                <div class="form-group TempatCasing_form_group">
                                    <label class="col-sm-4 control-label">
                                        TempatCasing                                    </label>
                                    <div class="col-sm-7">
                                        <input value='<?php echo $row_data[9]; ?>'id='field-TempatCasing' class='form-control' name='TempatCasing' type='text' value="" maxlength='200' />                                    </div>
                                </div>
				</div>				
				</div>				
<!-- End of GROCERY CRUD DATABASE INPUT -->						

                            <!-- Start of hidden inputs -->
                            <?php
                            foreach ($hidden_fields as $hidden_field) {
                                echo $hidden_field->input;
                            }
                            ?>
                            <!-- End of hidden inputs -->
                            <?php if ($is_ajax) { ?><input type="hidden" name="is_ajax" value="true" /><?php }?>

                            <div class='small-loading hidden' id='FormLoading'><?php echo $this->l('form_insert_loading'); ?></div>

							<div style="position: fixed; left: 0px; right: 0px; bottom: 0px">
							<footer class="main-footer" style="height: 10px">
                            <div class="form-group">
                                <div id='report-error' class='report-div error bg-danger' style="display:none"></div>
                                <div id='report-success' class='report-div success bg-success2' style="display:none"></div>
                            </div>
                            <div class="form-group" style="margin-top:-10px;">
							
                                <div class="col-sm-offset-0 col-sm-7">
                                    <button class="btn bg-gradient-success b10" type="submit" id="form-button-save">
                                        <i class="fa fa-check"></i>
                                        Simpan Perubahan Data 
                                    </button>
                                    <?php 	if(!$this->unset_back_to_list) { ?>
                                        <button class="btn bg-gradient-danger cancel-button b10" type="button" id="cancel-button">
                                            <i class="fa fa-warning"></i>
                                            <?php echo $this->l('form_cancel'); ?>
                                        </button>
                                    <?php } ?>
									<br/>&nbsp;
                                </div>
                            </div>
							</footer>
							</div>
							
<div class="row">
	<div class="col-md-12">
		<div class="col-md-12" style="overflow-x:auto; height: 500px">
		<button style="margin-top: 10px; margin-bottom: 10px" class="btn btn-primary" type="button" onclick="table_detail_add()">Tambah Baris</button>
		<table id="table_detail" border="0" style="width: 1800px; font-size: 12px">
			<thead>
				<tr style="height: 30px" class="btn-primary">
					<td><center>Job Detail No.</td>
					<td><center>Jenis Unit</td>
					<td><center>SN/MAC</td>
					<td><center>Indikasi</td>
					<td><center>Keterangan</td>
					<td><center>Resolusi</td>
					<td><center>Status Perbaikan</td>
					<td><center>Biaya Perbaikan</td>
					<td><center>Status Pembayaran</td>
					<td><center>Nama Operator</td>
					<td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					$index = 1;
					while($row_detail_data = mysqli_fetch_row($result)){
				?>
				<tr style="height: 30px">
					<td><center><div style="width: 120px; padding: 2px 2px"><input value="<?php echo $row_detail_data[2]; ?>" class="form-control" type="text" id="name_<?php echo $index; ?>_1" name="name_<?php echo $index; ?>_1" /></div></td>
					<td><center><div style="padding: 2px 2px"><input value="<?php echo $row_detail_data[3]; ?>"class="form-control" type="text" id="name_<?php echo $index; ?>_2" name="name_<?php echo $index; ?>_2" /></div></td>
					<td><center><div style="padding: 2px 2px"><input value="<?php echo $row_detail_data[4]; ?>"class="form-control" type="text" id="name_<?php echo $index; ?>_3" name="name_<?php echo $index; ?>_3" /></div></td>
					<td><center><div style="padding: 2px 2px"><input value="<?php echo $row_detail_data[5]; ?>"class="form-control" type="text" id="name_<?php echo $index; ?>_4" name="name_<?php echo $index; ?>_4" /></div></td>
					<td><center><div style="padding: 2px 2px"><input value="<?php echo $row_detail_data[6]; ?>"class="form-control" type="text" id="name_<?php echo $index; ?>_5" name="name_<?php echo $index; ?>_5" /></div></td>
					<td><center><div style="padding: 2px 2px"><select id="name_<?php echo $index; ?>_6" name="name_<?php echo $index; ?>_6" class='form-control' ><?php GetComboBoxUpdate($host, $user, $pass, $db, "crud_status_resolusi", "$row_detail_data[7]"); ?></select></div></td>
					<td><center><div style="padding: 2px 2px"><select id="name_<?php echo $index; ?>_7" name="name_<?php echo $index; ?>_7" class='form-control' ><?php GetComboBoxUpdate($host, $user, $pass, $db, "crud_status_perbaikan", "$row_detail_data[8]"); ?></select></div></td>
					<td><center><div style="padding: 2px 2px"><input value="<?php echo $row_detail_data[9]; ?>"class="form-control" type="text" id="name_<?php echo $index; ?>_8" name="name_<?php echo $index; ?>_8" /></div></td>
					<td><center><div style="padding: 2px 2px"><select id="name_<?php echo $index; ?>_9" name="name_<?php echo $index; ?>_9" class='form-control' ><?php GetComboBoxUpdate($host, $user, $pass, $db, "crud_status_pembayaran", "$row_detail_data[10]"); ?></select></div></td>
					<td><center><div style="padding: 2px 2px"><input value="<?php echo $row_detail_data[11]; ?>"class="form-control" type="text" id="name_<?php echo $index; ?>_10" name="name_<?php echo $index; ?>_10" /></div></td>
					<td><input class='btn btn-danger' type='button' onclick='table_detail_delete(this)' value='X' ></td>
				</tr>
				<?php
					$index++;
					}
				?>
			</tbody>
			
		</table><br/>
		<input type="hidden" id="table_detail_length" name="table_detail_length" value="0" />
		</div>
	</div>
</div>
							
                        <?php echo form_close(); ?>
</div>

<script type="text/javascript">

	function table_detail_add() {
		
		var name = "table_detail";
		var table = document.getElementById(name);
		var num = table.rows.length;
		var row = table.insertRow(num);

		var row1 = 1;
		var cell1 = row.insertCell(row1-1);
		cell1.innerHTML = "<div style='width: 120px; padding: 2px 2px'><input class='form-control' type='text' id='name_"+num.toString()+"_"+row1+"' name='name_"+num.toString()+"_"+row1+"' value='"+num.toString()+"' /></div>";

		var row2 = 2;
		var cell2 = row.insertCell(row2-1);
		cell2.innerHTML = "<div style='padding: 2px 2px'><input class='form-control'type='text' name='name_"+num.toString()+"_"+row2+"' /></div>";

		var row3 = 3;
		var cell3 = row.insertCell(row3-1);
		cell3.innerHTML = "<div style='padding: 2px 2px'><input class='form-control'type='text' name='name_"+num.toString()+"_"+row3+"' /></div>";

		var row4 = 4;
		var cell4 = row.insertCell(row4-1);
		cell4.innerHTML = "<div style='padding: 2px 2px'><input class='form-control'type='text' name='name_"+num.toString()+"_"+row4+"' /></div>";

		var row5 = 5;
		var cell5 = row.insertCell(row5-1);
		cell5.innerHTML = "<div style='padding: 2px 2px'><input class='form-control'type='text' name='name_"+num.toString()+"_"+row5+"' /></div>";

		var row6 = 6;
		var cell6 = row.insertCell(row6-1);
		cell6.innerHTML = "<div style='padding: 2px 2px'><select name='name_"+num.toString()+"_"+row6+"' class='form-control' ><?php GetComboBox($host, $user, $pass, $db, "crud_status_resolusi"); ?></select></div>";

		var row7 = 7;
		var cell7 = row.insertCell(row7-1);
		cell7.innerHTML = "<div style='padding: 2px 2px'><select name='name_"+num.toString()+"_"+row7+"' class='form-control' ><?php GetComboBox($host, $user, $pass, $db, "crud_status_perbaikan"); ?></select></div>";

		var row8 = 8;
		var cell8 = row.insertCell(row8-1);
		cell8.innerHTML = "<div style='padding: 2px 2px'><input class='form-control'type='text' name='name_"+num.toString()+"_"+row8+"' /></div>";

		var row9 = 9;
		var cell9 = row.insertCell(row9-1);
		cell9.innerHTML = "<div style='padding: 2px 2px'><select style='width: 125px' name='name_"+num.toString()+"_"+row9+"' class='form-control' ><?php GetComboBox($host, $user, $pass, $db, "crud_status_pembayaran"); ?></select></div>";

		var row10 = 10;
		var cell10 = row.insertCell(row10-1);
		cell10.innerHTML = "<div style='padding: 2px 2px'><input class='form-control'type='text' name='name_"+num.toString()+"_"+row10+"' /></div>";

		var row11 = 11;
		var cell11 = row.insertCell(row11-1);
		cell11.innerHTML = "<input class='btn btn-danger' type='button' onclick='table_detail_delete(this)' value='X' >";
		
		var length_name = "table_detail_length";
		var table_length = document.getElementById(length_name);
		table_length.value = num.toString();
		
		var i;
		for (i=1; i<=table.rows.length; i++){
			var vname = "name_"+i.toString()+"_1";
			var txtbox = document.getElementById(vname);
			var total = table.rows.length - 1; 
			txtbox.value = i.toString() + "/" + total.toString();
			//alert("A");
		}
	}

	function table_detail_delete(param_row) {
		var name = "table_detail";
		document.getElementById(name).deleteRow(param_row.parentNode.parentNode.rowIndex);

		var name = "table_detail";
		var table = document.getElementById(name);
		var num = table.rows.length;
		var length_name = "table_detail_length";
		var table_length = document.getElementById(length_name);
		table_length.value = num.toString();
	}
	
	var name = "table_detail";
    var table = document.getElementById(name);
	var num = table.rows.length;
	var length_name = "table_detail_length";
	var table_length = document.getElementById(length_name);
	table_length.value = num.toString();
	
</script>

<script>
	var validation_url = '<?php echo $validation_url?>';
	var list_url = '<?php echo $list_url?>';

	var message_alert_add_form = "<?php echo $this->l('alert_add_form')?>";
	var message_insert_error = "<?php echo $this->l('insert_error')?>";
</script>