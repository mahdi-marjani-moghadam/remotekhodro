<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:30 PM
 */

include_once(dirname(__FILE__). "/model/admin.blog.controller.php");

global $admin_info,$PARAM;


$blogController = new adminBlogController();
if(isset($exportType))
{
    $blogController->exportType=$exportType;
}


switch ($_GET['action'])
{

    case 'delete':

        $input['Blog_id']=$_GET['id'];
        $blogController->deleteBlog($input);

        break;
    case 'addBlog':
        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $blogController->addBlog($_POST);
        }
        else
        {
            $blogController->showBlogAddForm('','');
        }
        break;

    case 'edit':
        if(isset($_POST['action']) & $_POST['action']=='edit')
        {

            $blogController->editBlog($_POST);
        }
        else
        {
            $input['Blog_id']=$_GET['id'];
            $blogController->showBlogEditForm($input, '');
        }
        break;
    case 'deleteCv':

        $input['Blog_id']=$_GET['id'];
        $cvController->deleteCv($input);

        break;
    case 'search':
        $blogController->search($_GET);
        break;
    default:

        //$fields['order']['Blog_id'] = 'DESC';
        $blogController->showList($fields);
        break;
}

?>