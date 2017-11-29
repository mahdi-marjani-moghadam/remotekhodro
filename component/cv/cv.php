<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 2/27/2016
 * Time: 9:21 AM
 */
include_once(dirname(__FILE__). "/model/cv.controller.php");

global $admin_info,$PARAM;

$cvController = new cvController();
if(isset($exportType))
{
    $cvController->exportType=$exportType;
}


if(isset($_POST['action']) & $_POST['action']=='add')
{
    $cvController->addCv($_POST);
}
else
{
    $cvController->showCvForm();
}
die();



?>