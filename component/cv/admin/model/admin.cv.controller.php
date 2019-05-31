<?php
/**
 * Created by PhpStorm.
 * User: malek
 * Date: 2/20/2016
 * Time: 4:24 PM
 */

include_once(dirname(__FILE__) . "/admin.cv.model.php");

/**
 * Class cvController
 */
class adminCvController
{

    /**
     * Contains file type
     * @var
     */
    public $exportType;

    /**
     * Contains file name
     * @var
     */
    public $fileName;

    /**
     *
     */
    public function __construct()
    {
        $this->exportType = 'html';

    }

    /**
     * @param string $list
     * @param $msg
     * @return string
     */
    function template($list = array(), $msg='')
    {
        // global $conn, $lang;


        switch ($this->exportType)
        {
            case 'html':

                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/template_start.php");
                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/template_header.php");
                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/template_rightMenu_admin.php");
                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/$this->fileName");
                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/template_footer.php");
                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/template_end.php");
                break;

            case 'json':
                echo json_encode($list);
                break;
            case 'array':
                return $list;
                break;

            case 'serialize':
                echo serialize($list);
                break;
            default:
                break;
        }

    }

    /**
     * @param $_input
     *
     */
    public function showMore($_input)
    {
        if (!is_numeric($_input))
        {
            $msg = 'یافت نشد';
            $this->showList('', $msg);
        }
        $cv = new adminCvModel();
        $result = $cv->getCvById($_input);

        if ($result['result'] != 1)
        {
            $msg = 'یافت نشد';
            $this->showList('', $msg);
        }
        $this->fileName = "admin.cv.showMore.php";
        $this->template($cv->fields);
        die();
    }


    /**
     * @param $fields
     */
    public function showList($fields=array(), $msg='')
    {
        $cv = adminCvModel::getAll()->getList();
        if($cv['result']!='1')
        {
            $this->fileName='admin.cv.showList.php';
            $this->template('',$cv['msg']);
            die();
        }

        $export['list']=$cv['export']['list'];

        $export['recordsCount']=$cv['export']['recordsCount'];
        $this->fileName='admin.cv.showList.php';
        $this->template($export);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showCvAddForm($fields, $msg)
    {

        $this->fileName = 'admin.cv.addForm.php';
        $this->template($fields, $msg);
        die();
    }

    /**
     * @param $fields
     * @return mixed
     */
    public function addCv($fields)
    {
        $cv = new adminCvModel();

        $result = $cv->setFields($fields);

        if ($result['result'] == -1)
        {
            return $result;
        }
        $result = $cv->add();

        if ($result['result'] != '1')
        {
            $this->showCvAddForm($fields, $result['msg']);
        }
        $msg = 'عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showCvEditForm($fields, $msg)
    {

        $cv = new adminCvModel();


        if (!validator::required($fields['Cv_id']) and !validator::Numeric($fields['Cv_id']))
        {
            $msg = 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        }
        $result = $cv->getCvById($fields['Cv_id']);

        if ($result['result'] != '1')
        {
            $msg = $result['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        }

        $export = $cv->fields;

        $this->fileName = 'admin.cv.editForm.php';
        $this->template($export, $msg);
        die();
    }

    /**
     * @param $fields
     */
    public function editCv($fields)
    {
        $cv = new adminCvModel();

        if (!validator::required($fields['Cv_id']) and !validator::Numeric($fields['Cv_id']))
        {
            $msg = 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        }
        $result = $cv->getCvById($fields['Cv_id']);
        if ($result['result'] != '1')
        {
            $msg = $result['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        }


        $result = $cv->setFields($fields);


        if ($result['result'] != 1)
        {
            $this->showCvEditForm($fields, $result['msg']);
        }

        $result = $cv->edit();

        if ($result['result'] != '1')
        {
            $this->showCvEditForm($fields, $result['msg']);
        }
        $msg = 'عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        die();
    }

    /**
     * delete cv by cv_id
     *
     * @param $fields
     * @author malekloo,marjani
     * @date 2/24/2015
     * @version 01.01.01
     */
    public function deleteCv($fields)
    {
        global $messageStack;

        if(!validator::required($fields['Cv_id']) and !validator::Numeric($fields['Cv_id']))
        {

            $this->showCvEditForm($fields,translate('not found'));
        }

        $obj = adminCvModel::find($fields['Cv_id']);

        if(!is_object($obj))
        {
            $msg=$obj['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);
        }

        $dir = ROOT_DIR.'statics/cv/';
        fileRemover($dir,$obj->fields['image']);
        $result = $obj->delete();


        if($result['result']!=1)
        {
            $messageStack->add_session('message',$result['msg'],'error');
            redirectPage(RELA_DIR . "admin/index.php?component=cv", $result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=cv", $msg);

    }
}

?>