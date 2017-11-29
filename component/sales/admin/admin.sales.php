<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:30 PM
 */

include_once(dirname(__FILE__). "/model/admin.sales.controller.php");

global $admin_info,$PARAM;


$salesController = new adminSalesController();
if(isset($exportType))
{
    $salesController->exportType=$exportType;
}


switch ($_GET['action'])
{

    case 'deleteSales':

        $input['Sales_id']=$_GET['id'];
        $salesController->deleteSales($input);

        break;
    case 'addSales':
        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $salesController->addSales($_POST);
        }
        else
        {
            $salesController->showSalesAddForm('','');
        }
        break;
    case 'editSales':
        if(isset($_POST['action']) & $_POST['action']=='edit')
        {

            $salesController->editSales($_POST);
        }
        else
        {
            $input['Sales_id']=$_GET['id'];
            $salesController->showSalesEditForm($input, '');
        }
        break;
    default:

        //$fields['order']['Sales_id'] = 'DESC';
        $salesController->showList($fields);
        break;
}

?>