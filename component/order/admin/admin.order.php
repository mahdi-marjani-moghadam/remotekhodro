<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 2/27/2016
 * Time: 11:40 AM
 */
include_once(dirname(__FILE__). "/model/admin.cv.controller.php");

global $admin_info,$PARAM;

$cvController = new adminCvController();
if(isset($exportType))
{
    $cvController->exportType=$exportType;
}


switch ($_GET['action'])
{
    case 'showMore':
        $cvController->showMore($_GET['id']);
        break;
    case 'addCv':


        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $cvController->addCv($_POST);
        }
        else
        {
            $cvController->showCvAddForm('','');
        }
        break;
    case 'editCv':


        if(isset($_POST['action']) & $_POST['action']=='edit')
        {

            $cvController->editCv($_POST);
        }
        else
        {
            $input['Cv_id']=$_GET['id'];
            $cvController->showCvEditForm($input, '');
        }
        break;
    case 'deleteCv':

        $input['Cv_id']=$_GET['id'];
        $cvController->deleteCv($input);

        break;
    default:

        $fields['limit']['start']=(isset($_GET['page']))?($_GET['page']-1)*PAGE_SIZE:'0';
        $fields['limit']['length']=PAGE_SIZE;
        $fields['order']['Cv_id']='DESC';
        $cvController->showList($fields);
        break;
}

?>