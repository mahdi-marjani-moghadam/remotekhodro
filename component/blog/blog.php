<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:34 PM
 */

include_once(dirname(__FILE__). "/model/blog.controller.php");
global $admin_info,$PARAM;
$blogController = new blogController();
if(isset($exportType))
{
    $blogController->exportType=$exportType;
}
if(isset($PARAM[1]))
{
    $blogController->showMore($PARAM[1]);
    die();
}else
{
    //$fields['filter']['title']='sdf';
    $fields['limit']['start']=(isset($page))?($page-1)*PAGE_SIZE:'0';
    $fields['limit']['length']=PAGE_SIZE;
    $fields['order']['Blog_id']='DESC';

    $blogController->showALL($fields);

    die();
}