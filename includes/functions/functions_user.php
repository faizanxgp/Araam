<?php
function leftlinks_admin()
{
    //$agent_box=latest_agent();
    if (isset($_SESSION['adminlogin'])) {
        $name = (isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : '');
        $str = <<< P1
	<table border="0" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse" >
          <tr>
            <td bgcolor="#000066"><span style="color: #FFFFFF;"><b>Welcome $name<b></span></td>
          </tr>
          <tr>
            <td><a href="main.php">Home</a></td>
          </tr>
		  <tr>
            <td><a href="member_all.php">Members</a></td>
          </tr>
		  <tr>
            <td><a href="meal_all.php">Meals</a></td>
          </tr>
          <tr>
            <td><a href="food_all.php">Food</a></td>
          </tr>
          <tr>
            <td><a href="ftype_all.php">Food types</a></td>
          </tr>
          <tr>
            <td><a href="unit_all.php">Units</a></td>
          </tr>

          
          <tr>
            <td><a href="admin_all.php">Admins</a></td>
          </tr>
          <tr>
            <td><a href="login.php?action=logout">Logout</a></td>
          </tr>
	</table>
P1;
    } else {
        $str = "";
    }

    return $str;
}

function leftlinks()
{
    //if (isset($_SESSION['userlogin'])) {
    //$name = "Guest";
    $str = <<< P1
<table width="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
          </td>
        </tr>
      </table>
P1;

    //    }
    return $str;
}

function topheader()
{
    global $root_domain;
    //$sql = "SELECT * FROM `site_setup` where id=1";
    //$result = db_query($sql);
    //$row = mysql_fetch_assoc($result);
    $site_text = '';
    return $site_text;
}

function check_admin_login($sess)
{
    $gauth_admin = 1;
    if (isset($_SESSION['adminlogin'])) {
        if ($sess <> $_SESSION['adminlogin']) {
            //global $contents;
            //$contents = 'Please First Login ';
            //redirect($contents, 'login.php');
            $gauth_admin = 0;
        }
    } else {
        //global $contents;
        //$contents = 'Please First Login ';
        //Gredirect($contents, 'login.php');
        $gauth_admin = 0;
    }
    return $gauth_admin;
}

function check_fm_login($sess)
{
    $gauth_fm = 1;
    if (isset($_SESSION['fmlogin'])) {
        if ($sess <> $_SESSION['fmlogin']) {
            //global $contents;
            //$contents = 'Please First Login ';
            //redirect($contents, 'login.php');
            $gauth_fm = 0;
        }
    } else {
        //global $contents;
        //$contents = 'Please First Login ';
        //Gredirect($contents, 'login.php');
        $gauth_fm = 0;
    }
    return $gauth_fm;
}

function check_ad_login($sess)
{
    $gauth_adv = 1;
    if (isset($_SESSION['advlogin'])) {
        if ($sess <> $_SESSION['advlogin']) {
            //global $contents;
            //$contents = 'Please First Login ';
            //redirect($contents, 'login.php');
            $gauth_adv = 0;
        }
    } else {
        //global $contents;
        //$contents = 'Please First Login ';
        //Gredirect($contents, 'login.php');
        $gauth_adv = 0;
    }
    return $gauth_adv;
}

function check_mem_login($sess)
{
    $gauth_mem = 1;
    if (isset($_SESSION['memlogin'])) {
        if ($sess <> $_SESSION['memlogin']) {
            //global $contents;
            //$contents = 'Please First Login ';
            //redirect($contents, 'login.php');
            $gauth_mem = 0;
        }
    } else {
        //global $contents;
        //$contents = 'Please First Login ';
        //Gredirect($contents, 'login.php');
        $gauth_mem = 0;
    }
    return $gauth_mem;
}

function redirect($contents, $url, $seconds = 2)
{
    $str = <<< T1
<html>
<head>
<title>Redirecting...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="$seconds;url=$url">
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="534" border="1" align="center" style="border-collapse:collapse">
  <tr>
    <td bgcolor="#666666"><span class="style1">Redirecting</span></td>
  </tr>
  <tr>
    <td><div align="center">
      <p><br>
        $contents<br></p>
      </div></td>
  </tr>
</table>
</body>
</html>
T1;
    echo "$str";
    die;
}

function resampimage($forcedwidth, $forcedheight, $sourcefile, $destfile, $imgcomp,
    $g_type)
{
    $g_imgcomp = $imgcomp;
    $g_srcfile = $sourcefile;
    $g_dstfile = $destfile;
    $g_fw = $forcedwidth;
    $g_fh = $forcedheight;
    if (file_exists($g_srcfile)) {
        $g_is = getimagesize($g_srcfile);
        //$g_type = $g_is[2];
        //1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 6 = BMP, 7 = TIFF(intel byte order), 8 = TIFF(motorola byte order), 9 = JPC, 10 = JP2, 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 16 = XBM.
        if ($g_fw > 0 and $g_fh > 0) {
            if (($g_is[0] - $g_fw) >= ($g_is[1] - $g_fh)) {
                $g_iw = $g_fw;
                $g_ih = ($g_fw / $g_is[0]) * $g_is[1];
            } else {
                $g_ih = $g_fh;
                $g_iw = ($g_ih / $g_is[1]) * $g_is[0];
            }
        } else {
            $g_iw = $g_is[0];
            $g_ih = $g_is[1];
        }

        $g_type = strtolower($g_type);
        $img_dst = "";
        switch ($g_type) {
            case '.gif': // GIF
                $img_src = imagecreatefromgif($g_srcfile);
                $img_dst = imagecreate($g_iw, $g_ih);
                imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $g_iw, $g_ih, $g_is[0], $g_is[1]);
                imagegif($img_dst, $g_dstfile);
                break;
            case '.jpg': // JPG
			case '.jpeg': // JPG
                $img_src = imagecreatefromjpeg($g_srcfile);
                $img_dst = imagecreatetruecolor($g_iw, $g_ih);
                imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $g_iw, $g_ih, $g_is[0], $g_is[1]);
                imagejpeg($img_dst, $g_dstfile, $g_imgcomp);
                break;
            case '.png': // PNG
                $img_src = imagecreatefrompng($g_srcfile);
                $img_dst = imagecreatetruecolor($g_iw, $g_ih);
                imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $g_iw, $g_ih, $g_is[0], $g_is[1]);
                imagepng($img_dst, $g_dstfile);
                break;
        }
        if (file_exists($img_dst)) {
            imagedestroy($img_dst);
        }
        return true;
    } else {
        return false;
    }
}

function cropimage($forcedwidth, $forcedheight, $sourcefile, $destfile, $imgcomp,
    $g_type)
{
    $g_imgcomp = $imgcomp;
    $g_srcfile = $sourcefile;
    $g_dstfile = $destfile;
    $g_fw = $forcedwidth;
    $g_fh = $forcedheight;
    $g_iw = $g_fw;
    $g_ih = $g_fh;
    /*if(file_exists($g_srcfile)) {
    $g_is=getimagesize($g_srcfile);
    //$g_type = $g_is[2];
    //1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 6 = BMP, 7 = TIFF(intel byte order), 8 = TIFF(motorola byte order), 9 = JPC, 10 = JP2, 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 16 = XBM.
    if ($g_fw>0 and $g_fh>0){
    if(($g_is[0]-$g_fw)>=($g_is[1]-$g_fh)) {
    $g_iw=$g_fw;
    $g_ih=($g_fw/$g_is[0])*$g_is[1];
    }
    else {
    $g_ih=$g_fh;
    $g_iw=($g_ih/$g_is[1])*$g_is[0];
    }
    } else {
    $g_iw = $g_is[0];
    $g_ih = $g_is[1];
    }
    
    */
    $g_type = strtolower($g_type);
    $img_dst = "";
    switch ($g_type) {
        case '.gif': // GIF
            $img_src = imagecreatefromgif($g_srcfile);
            $img_dst = imagecreate($g_iw, $g_ih);
            imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $forcedwidth, $forcedheight,
                $forcedwidth, $forcedheight);
            imagegif($img_dst, $g_dstfile);
            break;
        case '.jpg': // JPG
            $img_src = imagecreatefromjpeg($g_srcfile);
            $img_dst = imagecreatetruecolor($g_iw, $g_ih);
            imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $forcedwidth, $forcedheight,
                $forcedwidth, $forcedheight);
            imagejpeg($img_dst, $g_dstfile, $g_imgcomp);
            break;
        case '.png': // PNG
            $img_src = imagecreatefrompng($g_srcfile);
            $img_dst = imagecreatetruecolor($g_iw, $g_ih);
            imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $forcedwidth, $forcedheight,
                $forcedwidth, $forcedheight);
            imagepng($img_dst, $g_dstfile);
            break;
    }
    if (file_exists($img_dst)) {
        imagedestroy($img_dst);
    }
    return true;
    //}
    //   else {
    //   return false;
    //}
}


function upload_image($file, $path, $sizew = 0, $sizeh = 0, $sizewt = 0, $sizeht =
    0)
{
    //$path should not have an ending /
    global $gmem_id;
    global $site_root;
    $imagestr = "";
    $error = 0;

    if (isset($_FILES[$file]['tmp_name']) and $_FILES[$file]['tmp_name'] <> "") {
        $newfile1 = $_FILES[$file]['name'];
        $f_type = strstr2($newfile1, '.');
        // add member id to file name
        $newfile = $site_root . "$path/" . $newfile1;

        $tmpfile1 = $_FILES[$file]['tmp_name'];

        if (!move_uploaded_file($tmpfile1, $newfile)) {
            $imagestr = "Cannot Upload File $newfile<br>";
            $error = 1;
        } else {
            $imagestr = $newfile1; //will be saved in database
            chmod($newfile, 0644);
        }
        if (($sizew > 0 and $sizeh > 0) and $error == 0) {
            // check file size width height
            $g_is = getimagesize($newfile);
            //$g_type = $g_is[2];
            //1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 6 = BMP, 7 = TIFF(intel byte order), 8 = TIFF(motorola byte order), 9 = JPC, 10 = JP2, 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 16 = XBM.
            $ix = $g_is[0];
            $iy = $g_is[1];

            if ($ix > $sizew or $iy > $sizeh) {
                resampimage($sizew, $sizeh, $newfile, $newfile, 100, $f_type);
                //cropimage(55,55,$newfile,$newfile.'x',100,$f_type);
            }
            // now make thumb
            if ($sizewt > 0 and $sizeht > 0) {
                $t1 = $site_root . "$path/thb-" . $newfile1;
                resampimage($sizewt, $sizeht, $newfile, $t1, 100, $f_type);
                chmod($t1, 0644);
            }
        }
    }

    return $imagestr;
}


function show_checkbox($cname, $cdata, $select_value = "")
{
    $str9 = "<table style=\"border: 0\">";
    $select_val = explode(",", $select_value);
    $ctr = 0;
    $ctr2 = 0;
    while (list($key, $val) = each($cdata)) {
        if (isset($select_val[$ctr]) and $select_val[$ctr] == 1) {
            $chk = "checked";
        } else {
            $chk = "";
        }

        if (in_array($key, $select_val)) {

            $chk = "checked";
        } else {

            $chk = "";
        }

        //var_dump( $select_val);

        $ctr++;
        $tname = "$cname" . "[]"; // . '_' .$key;
        if ($ctr2 == 0)
            $str9 .= "<tr>";
        $str9 .= "<td><input name=\"$tname\" type=\"checkbox\" class=checkbox value=\"$key\" $chk/> $val</td>";
        $ctr2++;
        if ($ctr2 == 5) {
            $ctr2 = 0;
            $str9 .= "</tr>";
        }
    }
    if ($ctr2 <> 5 or $ctr2 <> 0)
        $str9 .= "</tr>";
    $str9 .= "</table>";
    return $str9;

}

function process_array($darray, $sarray)
{
    while (list($key, $val) = each($sarray)) {
        if (in_array($key, $darray)) {
            $chr = "1";
        } else {
            $chr = "0";
        }
        $string[] = $chr;
    }
    $string = join(",", $string);

    return $string;
}

function display_array($cdata, $select_value = "")
{
    $str9 = "<ul>";
    $select_val = explode(",", $select_value);
    $ctr = 0;
    $ctr2 = 0;
    while (list($key, $val) = each($cdata)) {
        if (isset($select_val[$ctr]) and $select_val[$ctr] == 1) {
            $str9 .= "<li>$val</li>";
        }
        $ctr++;

    }
    $str9 .= "</ul>";
    return $str9;
}

function combo_num($cname, $num_from, $num_to, $select_value = "", $noheads = 0,
    $blank = "", $style = "")
{
    $style1 = ($style == "" ? "" : "style=\"$style\"");
    if ($noheads == 1) {
        $str9 = "<select name=\"$cname\" size=\"1\" $style1 >";
    } else {
        $str9 = "";
    }
    if ($blank <> "") {
        $str9 .= "<option>$blank</option>";
    }
    for ($ctr = $num_from; $ctr <= $num_to; $ctr++) {
        $chk = ($ctr == $select_value ? "selected=\"selected\"" : "");
        $str9 .= "<option value=\"$ctr\" $chk>$ctr</option>";
    }
    if ($noheads == 1) {
        $str9 .= "</select>";
    }

    return $str9;
}

function getdata($tablename, $select_value, $blank = "", $type = "sel")
{
    global $db;
    $results = array();
    if ($blank <> "")
        $results[] = array("id" => "", "title" => "$blank", "selected" => "");
    $sql = "SELECT id, title, '' as selected FROM `$tablename` WHERE active = 'yes' ORDER BY `id` ";
    $rows = $db->fetch_all_array($sql);
    // enter selected value
    foreach ($rows as $k => $v) {
        if ($v['id'] == $select_value) {
            $rows[$k][selected] = ($type == 'sel' ? 'selected' : 'checked');
        }
    }
    if (count($results) > 0) {
        $rows = array_merge($results, $rows);
    }
    return $rows;
}

function getarray($tablename, $blank = "")
{
    global $db;
    $results = array();
    if ($blank <> "")
        $results[] = array("id" => "", "title" => "$blank");

    $sql = "SELECT id, title FROM `$tablename` WHERE active = 'yes' ORDER BY `id` ";
    $rows = $db->fetch_all_array($sql);

    if (count($results) > 0) {
        $rows = array_merge($results, $rows);
    }
    $rows = array_conv($rows);
    return $rows;
}

function getfield($tablename, $select_value)
{
    global $db;

    $sql = "SELECT title FROM `$tablename` WHERE id = '$select_value' ";
    $row = $db->query_first($sql);
    $title = $row['title'];

    return $title;
}

function make_check($cname, $table, $blank = "", $data = "")
{
    global $db;

    $cname = $cname . "[]";
    $sql = "select * from `$table` where active = 1 order by id";
    $rows = $db->fetch_all_array($sql);
    if ($blank == "") {
        $str = "";
    } else {
        $str = "<input type=\"checkbox\" name=\"$cname\" value=\" \" class=check> $blank &nbsp;&nbsp;<br />";
    }
    $flip = 0;
    $str .= "<table>";
    foreach ($rows as $row) {
        //var_dump($row);
        $id = $row[id];
        $title = $row[title];
        if (strstr($data, $id)) {
            $chk = "checked";
        } else {
            $chk = "";
        }
        if ($flip == 0)
            $str .= "<tr>";
        $str .= "<td><input type=\"checkbox\" name=\"$cname\" value=\"$id\" class=check $chk> $title </td>";
        $flip += 1;
        if ($flip == 2) {
            $str .= "</tr>";
            $flip = 0;
        }

    }
    $str .= "</table>";
    return $str;
}

function make_multiselect($table, $data = "")
{
    global $db;
    //$cname = $cname . "[]";
    $sql = "select * from `$table` order by id";
    $rows = $db->fetch_all_array($sql);
    $str = "";

    foreach ($rows as $row) {
        //var_dump($row);
        $id = $row[id];
        $title = $row[title];
        if (strstr($data, $id)) {

            $chk = "selected";
        } else {

            $chk = "";
        }
        $str .= "<option value=\"$id\" $chk>$title</option>";
    }
    return $str;
}

function array_conv($myarray, $id = "id", $value = "title")
{
    $newarray = array();
    foreach ($myarray as $temparray) {
        $id1 = $temparray[$id];
        $value1 = $temparray[$value];
        $newarray[$id1] = $value1;
    }
    return $newarray;
}

function main_menus()
{
    global $db;
    global $smarty;
    //$cname = $cname . "[]";
    // process template

    //$sql = "SELECT `page_id`, `menu_title`, `page_url` FROM `cms_pages` ORDER BY menu_order";
    //$menu = $db->fetch_all_array($sql);
    //$smarty->assign("menu", $menu);

}

function reseller_balance($res_id)
{
    $deposit = reseller_deposit($res_id);
    $purchases = reseller_purchases($res_id);
    $camp_cost = reseller_campaigns($res_id);
    $balance = $deposit - $purchases - $camp_cost;
    return $balance;
}

function reseller_deposit($res_id)
{
    global $db;
    $sql = "SELECT sum(debit) as debit, sum(credit) as credit FROM `transaction` WHERE res_id = '$res_id' and tran_status = 'Approved' group by res_id";
    $result = $db->query_first($sql);
    if (count($result) > 0) {
        $debit = $result[debit];
        $credit = $result[credit];
        $balance = $debit - $credit;
        //echo 'a';
        //echo $balance;

        return $balance;
    } else {
        return 0;
    }
}

function reseller_purchases($res_id)
{
    global $db;
    $sql = "SELECT sum(amount) as amount FROM `purchases` where res_id = '$res_id' group by res_id";
    $result = $db->query_first($sql);
    if (count($result) > 0) {
        $amount = $result[amount];
        //echo 'b';
        //echo $amount;
        return $amount;
    } else {
        return 0;
    }

}

function reseller_campaigns($res_id)
{
    global $db;
    $sql = "SELECT res_id, sum(c_cost) as c_cost FROM `campaigns` WHERE res_id = '$res_id' and (c_status = 'Active' or c_status = 'Completed') group by res_id";
    $result = $db->query_first($sql);
    if (count($result) > 0) {
        $c_cost = $result[c_cost];
        //echo 'c';
        //echo $c_cost;
        return $c_cost;

    } else {
        return 0;
    }

}

function reseller_traffic($res_id, $type)
{
    // type is SIGNUP, TRAFFIC, ATRAFFIC
    global $db;
    $sql = "SELECT sum(qty) as qty, sum(qty_balance) as qty_balance FROM `purchases` where res_id = '$res_id' and purch_type = '$type' group by res_id";
    $result = $db->query_first($sql);
    if (count($result) > 0) {
        $qty = $result[qty];


    } else {
        $qty = 0;
    }
    if ($type == 'SIGNUP') {
        $sql = "SELECT sum(c_signups) as qty FROM `campaigns` where res_id = '$res_id' and (c_status = 'Active' or c_status = 'Completed') group by res_id";
        $result = $db->query_first($sql);
        if (count($result) > 0) {
            $qty2 = $result[qty];


        } else {
            $qty2 = 0;
        }
    }
    if ($type == 'TRAFFIC') {
        $sql = "SELECT sum(c_visitors) as qty FROM `campaigns` where res_id = '$res_id' and (c_status = 'Active' or c_status = 'Completed') group by res_id";
        $result = $db->query_first($sql);
        if (count($result) > 0) {
            $qty2 = $result[qty];


        } else {
            $qty2 = 0;
        }
    }
    if ($type == 'ATRAFFIC') {
        $sql = "SELECT sum(c_avisitors) as qty FROM `campaigns` where res_id = '$res_id' and (c_status = 'Active' or c_status = 'Completed') group by res_id";
        $result = $db->query_first($sql);
        if (count($result) > 0) {
            $qty2 = $result[qty];


        } else {
            $qty2 = 0;
        }
    }
    $bal = $qty - $qty2;
    return $bal;

}

function reseller_balance2($res_id, $type)
{
    global $db;
    $sql = "SELECT sum(qty) AS qty FROM `purchases` WHERE res_id = '$res_id' and purch_type = '$type'";
    $result = $db->query_first($sql);
    if (count($result) > 0) {
        $qty = $result[qty];
    } else {
        $qty = 0;
    }
    $sql = "SELECT sum(cp.c_signups) as s_signup, sum(cp.c_visitors) as s_traffic, sum(cp.c_avisitors) as s_atraffic FROM `campaigns` cp where cp.c_type = 2 and cp.res_id = '$res_id'";
    $result = $db->query_first($sql);
    if (count($result) > 0) {
        $s_signup = $result[s_signup];
        $s_traffic = $result[s_traffic];
        $s_atraffic = $result[s_atraffic];

    } else {
        $s_signup = 0;
        $s_traffic = 0;
        $s_atraffic = 0;
    }
    if ($type == 'SIGNUP') {
        $balance = $qty - $s_signup;
        return $balance;
    }
    if ($type == 'TRAFFIC') {
        $balance = $qty - $s_traffic;
        return $balance;
    }
    if ($type == 'ATRAFFIC') {
        $balance = $qty - $s_atraffic;
        return $balance;
    }


}

function process_commission($res_id, $id, $debit)
{
    global $db;

    if ($debit > 0 and $res_id <> 0 and $id <> 0) {
        // level 1
        $sql = "select res_refer from resellers where res_id = '$res_id'";
        $row = $db->query_first($sql);
        $res1 = $row['res_refer'];
        if ($res1 <> 0) {
            $sql2 = "select * from transaction where res_id = '$res1' and tran_others like '$id-%' limit 0,1";
            $tr = $db->query_first($sql2);
            if ($db->affected_rows > 0) {
                $sql3 = "delete from transaction where res_id = '$res1' and tran_others like '$id-%'";
                $tr2 = $db->query($sql3);
            }
            $amount1 = $debit * 0.02;
            $d['tran_id'] = 0;
            $d['tran_date'] = date("Y-m-d");
            $d['tran_source'] = 'Comm';
            $d['tran_others'] = $id . '-Commission L1';

            $d['res_id'] = $res1;

            $d['notes'] = $_POST['notes'];
            $d['debit'] = $amount1;

            $d['tran_status'] = 'Approved';
            $d['tran_approve'] = '0000-00-00 00:00:00';

            $db->query_insert("transaction", $d);
        } else {
            return;
        }

        // level 2
        $sql = "select res_refer from resellers where res_id = '$res1'";
        $row = $db->query_first($sql);
        $res2 = $row['res_refer'];
        if ($res2 <> 0) {
            $sql2 = "select * from transaction where res_id = '$res2' and tran_others like '$id-%' limit 0,1";
            $tr = $db->query_first($sql2);
            if ($db->affected_rows > 0) {
                $sql3 = "delete from transaction where res_id = '$res2' and tran_others like '$id-%'";
                $tr2 = $db->query($sql3);
            }
            $amount1 = $debit * 0.01;
            $d['tran_id'] = 0;
            $d['tran_date'] = date("Y-m-d");
            $d['tran_source'] = 'Comm';
            $d['tran_others'] = $id . '-Commission L2';

            $d['res_id'] = $res2;

            $d['notes'] = $_POST['notes'];
            $d['debit'] = $amount1;

            $d['tran_status'] = 'Approved';
            $d['tran_approve'] = '0000-00-00 00:00:00';

            $db->query_insert("transaction", $d);
        } else {
            return;
        }

        // level 3
        $sql = "select res_refer from resellers where res_id = '$res2'";
        $row = $db->query_first($sql);
        $res3 = $row['res_refer'];
        if ($res3 <> 0) {
            $sql2 = "select * from transaction where res_id = '$res3' and tran_others like '$id-%' limit 0,1";
            $tr = $db->query_first($sql2);
            if ($db->affected_rows > 0) {
                $sql3 = "delete from transaction where res_id = '$res3' and tran_others like '$id-%'";
                $tr2 = $db->query($sql3);
            }
            $amount1 = $debit * 0.005;
            $d['tran_id'] = 0;
            $d['tran_date'] = date("Y-m-d");
            $d['tran_source'] = 'Comm';
            $d['tran_others'] = $id . '-Commission L3';

            $d['res_id'] = $res3;

            $d['notes'] = $_POST['notes'];
            $d['debit'] = $amount1;

            $d['tran_status'] = 'Approved';
            $d['tran_approve'] = '0000-00-00 00:00:00';

            $db->query_insert("transaction", $d);
        } else {
            return;
        }
    }
}

?>