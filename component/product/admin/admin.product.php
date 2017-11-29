<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 3/06/2016
 * Time: 12:08 AM
 */
include_once(dirname(__FILE__). "/model/admin.product.controller.php");

global $admin_info,$PARAM;

$productController = new adminProductController();
if(isset($exportType))
{
    $productController->exportType=$exportType;
}


switch ($_GET['action'])
{
    /*case 'showMore':
        $productController->showMore($_GET['id']);
        break;

*/
    case 'deleteProduct':

        $input['Product_id']=$_GET['id'];
        $productController->deleteProduct($input);

        break;
    case 'addProduct':
        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $productController->addProduct($_POST);
        }
        else
        {
            $productController->showProductAddForm('','');
        }
        break;
    case 'editProduct':
        if(isset($_POST['action']) & $_POST['action']=='edit')
        {

            $productController->editProduct($_POST);
        }
        else
        {
            $input['Product_id']=$_GET['id'];
            $productController->showProductEditForm($input, '');
        }
        break;
    default:

        //$fields['order']['Product_id'] = 'DESC';
        $productController->showList($fields);
        break;
}

?>