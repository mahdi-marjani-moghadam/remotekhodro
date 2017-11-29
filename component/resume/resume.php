<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:34 PM
 */

include_once(dirname(__FILE__). "/model/resume.controller.php");
global $PARAM;
$resumeController = new resumeController();
if(isset($exportType))
{
    $resumeController->exportType=$exportType;
}
/*if(isset($PARAM[1]))
{
    $resumeController->showMore($PARAM[1]);
    die();
}else
{*/
    //$fields['filter']['title']='sdf';
    $fields['limit']['start']=(isset($page))?($page-1)*PAGE_SIZE:'0';
    $fields['limit']['length']=PAGE_SIZE;
  $fields['order']['title']='DESC';
   // print_r_debug($fields);
    $resumeController->showALL($fields);
    die();
//}