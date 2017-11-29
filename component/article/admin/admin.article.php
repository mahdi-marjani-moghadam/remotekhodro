<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:30 PM
 */

include_once(dirname(__FILE__). "/model/admin.article.controller.php");

global $admin_info,$PARAM;


$articleController = new adminArticleController();
if(isset($exportType))
{
    $articleController->exportType=$exportType;
}

switch ($_GET['action'])
{

    case 'deleteArticle':

        $input['Article_id']=$_GET['id'];
        $articleController->deleteArticle($input);

        break;
    case 'addArticle':

        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $articleController->addArticle($_POST);
        }
        else
        {
            $articleController->showArticleAddForm('','');
        }
        break;

    case 'editArticle':
        if(isset($_POST['action']) & $_POST['action']=='edit')
        {

            $articleController->editArticle($_POST);
        }
        else
        {
            $input['Article_id']=$_GET['id'];
            $articleController->showArticleEditForm($input, '');
        }
        break;
    case 'search':

        $articleController->search($_GET);
        break;
    default:

        //$fields['order']['Article_id'] = 'DESC';
        $articleController->showList($fields);
        break;
}

?>