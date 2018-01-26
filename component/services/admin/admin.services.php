<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:30 PM
 */

include_once(dirname(__FILE__). "/model/admin.services.controller.php");

global $admin_info,$PARAM;


$servicesController = new adminServicesController();
if(isset($exportType))
{
    $servicesController->exportType=$exportType;
}


switch ($_GET['action'])
{


    case 'deleteServices':

        $input['Services_id']=$_GET['id'];
        $servicesController->deleteServices($input);

        break;
    case 'addServices':
        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $servicesController->addServices($_POST);
        }
        else
        {
            $servicesController->showServicesAddForm('','');
        }
        break;
    case 'editServices':

        if(isset($_POST['action']) & $_POST['action']=='edit')
        {
            $servicesController->editServices($_POST);
        }
        else
        {

            $input['Services_id']=$_GET['id'];
            $servicesController->showServicesEditForm($input, '');
        }
        break;
    default:
        $fields['order']['Services_id'] = 'DESC';
        $servicesController->showList($fields);
        break;
}

?>