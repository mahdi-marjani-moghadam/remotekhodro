<?php
include_once(dirname(__FILE__). "/controllers/aboutus.controller.php");

global $admin_info,$PARAM;

$aboutusController = new aboutusController();
if(isset($exportType))
{
    $aboutusController->exportType=$exportType;
}

    $aboutusController->showAll();

die();



?>