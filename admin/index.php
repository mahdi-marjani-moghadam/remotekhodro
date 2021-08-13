<?php

function cleanInputs($data)
{
	$clean_input = array();
	if (is_array($data)) {
		foreach ($data as $k => $v) {
			$clean_input[$k] = cleanInputs($v);
		}
	} else {
		if (get_magic_quotes_gpc()) {
			$data = trim(stripslashes($data));
		}
		$data = strip_tags($data);
		$clean_input = trim($data);
	}
	return $clean_input;
}

cleanInputs($_POST);
include_once("../server.inc.php");
//print_r($_SESSION);
include_once(ROOT_DIR . "common/db.inc.php");
include_once(ROOT_DIR . "common/func.inc.php");
include_once(ROOT_DIR . "admin/init.inc.php");
include_once(ROOT_DIR."/common/validators.php");
include_once ROOT_DIR.'common/looeic.php';


//include_once(ROOT_DIR . "model/admin.index.php");

if($admin_info['result'] ==-1)
{
	include_once (ROOT_DIR . "component/login/admin/admin.login.php");
    die();
}

		if(isset($_GET['component']))
		{
			$component=$_GET['component'];
			$component_name=$_GET['component_name'];
		}else
		{
			$component='index';
			$component_name='index';
		}

		include_once (ROOT_DIR . "component/$component/admin/admin.$component.php");



?>