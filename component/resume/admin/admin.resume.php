<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:30 PM
 */

include_once(dirname(__FILE__). "/model/admin.resume.controller.php");

global $admin_info,$PARAM;


$resumeController = new adminResumeController();
if(isset($exportType))
{
    $resumeController->exportType=$exportType;
}


switch ($_GET['action'])
{

    case 'deleteResume':

        $input['Resume_id']=$_GET['id'];
        $resumeController->deleteResume($input);

        break;
    case 'addResume':
        if(isset($_POST['action']) & $_POST['action']=='add')
        {

            $resumeController->addResume($_POST);
        }
        else
        {
            $resumeController->showResumeAddForm('','');
        }
        break;
    case 'editResume':
        if(isset($_POST['action']) & $_POST['action']=='edit')
        {

            $resumeController->editResume($_POST);
        }
        else
        {
            $input['Resume_id']=$_GET['id'];
            $resumeController->showResumeEditForm($input, '');
        }
        break;
    default:

        $fields['order']['Resume_id'] = 'DESC';
        $resumeController->showList($fields);
        break;
}

?>