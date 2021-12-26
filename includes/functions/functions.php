<?php
function db_connect() {
	global $dbh, $DB_DBNAME, $DB_HOST, $DB_USER, $DB_PWD;

	$dbh = mysql_connect($DB_HOST, $DB_USER, $DB_PWD) or die('Cannot connect to the database because:' . mysql_error());
	mysql_select_db($DB_DBNAME, $dbh) or die('Cannot select db' . mysql_error());
	return $dbh;
}
##########################
function db_disconnect() {
	global $dbh;
	if ($dbh)
		mysql_close($dbh);
}
##########################
function db_query($sql, $dbh1 = 0, $skiperr = 0) {
	global $dbh;
	if (!$dbh1)
		$dbh1 = $dbh;
	if (!$dbh1)
		$dbh1 = db_connect();
	$sth = mysql_query($sql, $dbh1);
	if (!$sth && $skiperr)
		return;
	catch_db_err($dbh, $sth, $sql);
	return $sth;
}
##########################
function get_identity($dbh1 = 0) {
	global $dbh;
	if (!$dbh1)
		$dbh1 = $dbh;
	return mysql_insert_id($dbh1);
	
	/*
	
	# Windows/MSSQL stuff
	# my $sql='select @@IDENTITY id';
	# my $sth=db_query($sql);
	# my $hr=$sth->fetchrow_hashref;
	# return $hr->{id};
	
	*/
}
#############
function db_quote($value, $field_type = '', $dbh1 = 0) {
	global $dbh;
	if (!$dbh1)
		$dbh1 = $dbh;
	if ($field_type == 'i') {
		$value = $value + 0;
	} elseif ($field_type == 'x') {
		$value = $value;
	} else {
		$value = trim($value);
		$value = mysql_real_escape_string($value, $dbh1);
	}
	return $value;
}
##########################
function catch_db_err($dbh, $sth, $sql = "") {
	if (!$sth) {
		global $ADMIN_EMAIL;
		//send_email($ADMIN_EMAIL, "Error in DB operation", mysql_error($dbh));
		die("Error in DB operation:<br>\n" . mysql_error($dbh) . "<br>\n$sql");
	}
}
##########################
function logger($str) {
	global $site_error_log;
	error_log($str, 3, "error_log.txt");
}
##########################
function send_email($ToEmail, $Subj, $Message, $isBCC = "", $FromEmail = "", $isHTML = "1") {
	$more = '';
	if ($FromEmail)
		$more .= "From: $FromEmail \r\n";
        
        $more .= "Reply-To: noreply@araam.pk \r\n";
        
        if ($isBCC)
		$more .= "BCC: $isBCC \r\n";
        
        if ($isHTML == 1) {
		$more .= "MIME-Version: 1.0 \r\n";
                $more .= "Content-type: text/html; charset=iso-8859-1 \r\n";
        }
        
        $path = $_SERVER['REQUEST_URI'];
        $now = date("Y-m-d H:i:s");
        if ($ToEmail == "") {
            logger($now . "No address " . $Subj . " " . $path . "\r\n");
        } else {
            mail($ToEmail, $Subj, $Message, $more);
            logger($now . $ToEmail . " " . $Subj . " " . $path . "\r\n");
        }
}

function getfile($filename) {
	if (file_exists($filename)) {
		$handle = fopen($filename, "r");
		$fcont = fread($handle, filesize($filename));
		fclose($handle);
	} else {
		$fcont = 0;
	}
	return $fcont;
}

function update($ostr, $nstr, $str) {
	$str = str_replace($ostr, $nstr, $str);
	return $str;
}

function RandomName($nameLength) {
	$NameChars = 'abcdefghijklmnopqrstuvwxyz0123456789';
	$Name = "";
	for ($index = 1; $index <= $nameLength; $index++) {
		$randomNumber = rand(1, 36);
		$Name .= substr($NameChars, $randomNumber - 1, 1);
	}
	return $Name;
}

function strstr2($str1, $str2) {
	// file extention
	$temp1 = explode($str2, $str1);
	$c1 = count($temp1);
	$c1 = $c1 - 1;
	if (isset($temp1[$c1])) {

		return "." . $temp1[$c1];
	} else {
		return "";
	}
}

function make_radio($rname, $rdata, $select_value = "", $event = "") {
	$str9 = "";
	$event_str = ($event == "" ? "" : " $event ");
	while (list($key, $val) = each($rdata)) {
		$chk = ($key == $select_value ? "checked=\"checked\"" : "");
		$str9 .= "<input type=\"radio\" value=\"$key\" name=\"$rname\" $chk class=\"radiobutton\" $event_str /> $val ";
	}
	return $str9;
}

function make_combo($cname, $cdata, $select_value = "", $blank = "", $style = "", $onchange = "") {
	$onchange1 = ($onchange == "" ? "" : "onchange=\"$onchange\"");
	$style1 = ($style == "" ? "" : "style=\"$style\"");
	$str9 = "<select name=\"$cname\" id=\"$cname\" size=\"1\" $style1 $onchange1>";
	if ($blank <> "") {
		$str9 .= "<option>$blank</option>";
	}
	while (list($key, $val) = each($cdata)) {
		$chk = ($key == $select_value ? "selected=\"selected\"" : "");
		$str9 .= "<option value=\"$key\" $chk>$val</option>";
	}
	$str9 .= "</select>";
	return $str9;
}

function combo_create($cname, $table, $key, $value, $select_value = "", $blank = "", $style="", $onchange = "") {
	echo $style;
	$onchange1 = ($onchange == "" ? "" : "onchange=\"$onchange\"");
	$style1 = ($style == "" ? "" : "style=\"$style\"");
	$str9 = "<select name=\"$cname\" id=\"$cname\" size=\"1\" $style1 $onchange1 >";
	if ($blank <> "") {
		$str9 .= "<option>$blank</option>";
	}
	$sql = "select $key, $value from $table order by $value";
	$result = db_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$key1 = $row[$key];
		$value1 = $row[$value];
		$chk = ($key1 == $select_value ? "selected" : "");
		$str9 .= "<option value=\"$key1\" $chk>$value1</option>";
	}
	$str9 .= "</select>";
	return $str9;
}

function radio_create($cname, $table, $key, $value, $select_value = "") {
	//$onchange1 = ($onchange == "" ? "" : "onchange=\"$onchange\"");
	//$str9 = "<select name=\"$cname\" id=\"$cname\" size=\"1\" $onchange1>";
	$str9 = "";
	$sql = "select $key, $value from $table order by $value";
	$result = db_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$key1 = $row[$key];
		$value1 = $row[$value];
		$chk = ($key1 == $select_value ? "selected" : "");
		$str9 .= "<input type=\"radio\" name=\"$cname\" value=\"$key1\" class=\"radiobutton\" $chk /> $value1 ";
	}

	return $str9;
}

function text_create($table, $key, $value, $select_value = "") {
	$sql = "select $value from $table where $key='$select_value' limit 0,1";
	$result = db_query($sql);
	$row = mysql_fetch_assoc($result);
	$value1 = $row[$value];
	$str9 = $value1;
	return $str9;
}

function find_unique($table, $fieldname, $fielddata, $keyfield = '', $keydata = '') {
	// find a unique record
	if ($keyfield == '') {
		$sql = "select $fieldname from $table where $fieldname='$fielddata'";
	} else {
		$sql = "select $fieldname from $table where $fieldname='$fielddata' and $keyfield<>'$keydata'";
	}

	$result = db_query($sql);
	if (mysql_num_rows($result) == 0) {
		return 0;
	} else {
		return 1;
	}
}

function notify_exit($message, $back_count, $exit_flag) {
	// shows message and back steps
	$back_func = "";
	if ($back_count < 0) {
		$back_func = "history.go(" . $back_count . ");";
	}
	$tempvar = <<< T1
	<script language="javascript">
		alert("$message");
		$back_func
	</script>
T1;
	echo "$tempvar";
	if ($exit_flag) {
		exit("");
	}
}

function date_system($d1) {
	//from mm-dd-yyyy to yyyy-mm-dd
	list($date1, $time1) = explode(" ", $d1);
	list($month, $day, $year) = explode("-", $date1);
	return "$year-$month-$day $time1";
}

function date_user($d1) {
	//from yyyy-mm-dd to dd-mm-yyyy

	list($date1, $time1) = explode(" ", $d1);
	list($year, $month, $day) = explode("-", $date1);
	return "$month-$day-$year $time1";
}

function get_inc($filename) {
	$cont1 = getfile($filename);
	if (get_magic_quotes_gpc()) {
		$cont1 = addslashes($cont1);
	}
	return $cont1;
}
function myecho($str) {
	global $debug;
	if (isset($debug) and $debug == 1) {
		echo $str;
	}
}

function myvar_dump($array) {
	if (isset($debug) and $debug == 1) {
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
	}
}

function safe($value){
   return mysql_real_escape_string($value);
}
?>