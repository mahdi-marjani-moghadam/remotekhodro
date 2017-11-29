<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:34 PM
 */

include_once(dirname(__FILE__). "/model/article.controller.php");
global $PARAM;
$articleController = new articleController();
if(isset($exportType))
{
    $articleController->exportType=$exportType;
}
if(isset($PARAM[1]))
{
    $articleController->showMore($PARAM[1]);
    die();
}else
{
    //$fields['filter']['title']='sdf';
    $fields['limit']['start']=(isset($page))?($page-1)*PAGE_SIZE:'0';
    $fields['limit']['length']=PAGE_SIZE;
    $fields['order']['Article_id']='DESC';
    $articleController->showALL($fields);
    die();
}