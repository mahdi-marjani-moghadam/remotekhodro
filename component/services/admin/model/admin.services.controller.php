<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:34 PM
 */

include_once(dirname(__FILE__)."/admin.services.model.php");
class adminServicesController
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
     * @param array $list
     * @param $msg
     * @return string
     */
    function template($list = [], $msg='')
    {
        global $messageStack;

        if($msg == '')
        {
            $msg = $messageStack->output('message');
        }


        switch ($this->exportType) {
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
     * @param $fields
     */
    public function showList($fields)
    {

        $services = adminServicesModel::getAll()->getList();
        if($services['result']!='1')
        {
            $this->fileName='admin.services.showList.php';
            $this->template('',$services['msg']);
            die();
        }

        $export['list']=$services['export']['list'];

        $export['recordsCount']=$services['export']['recordsCount'];
        //print_r_debug($services);
        $this->fileName='admin.services.showList.php';
        $this->template($export);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showServicesAddForm($fields,$msg)
    {
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $fields['category'] = $category->list;
        }

        $this->fileName='admin.services.addForm.php';
        $this->template($fields,$msg);
        die();
    }

    /**
     * @param $fields
     * @return mixed
     */
    public function addServices($fields)
    {

        global $messageStack;
        $services=new adminServicesModel();
        $result=$services->setFields($fields);
        if($result['result']==-1)
        {
            $this->showServicesAddForm($fields,$result['msg']);
            //return $result;
        }
       /* $res = $services->validator();
        if($res['result']==-1)
        {
            $this->showServicesAddForm($fields,$res['msg']);
            //return $result;
        }*/


        $services->save();


        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/services/';
            $result = fileUploader($input,$_FILES['image']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=services", $result['msg']);
            }

            $services->image = $result['image_name'];
            $result = $services->save();
        }
        if(file_exists($_FILES['image2']['tmp_name'])){

            $input['upload_dir'] = ROOT_DIR.'statics/services/';
            $result = fileUploader($input,$_FILES['image2']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=services", $result['msg']);
            }

            $services->image2 = $result['image_name'];
            $result = $services->save();
        }
        if(file_exists($_FILES['image3']['tmp_name'])){

            $type  = explode('/',$_FILES['image3']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/services/';
            $result = fileUploader($input,$_FILES['image3']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=services", $result['msg']);
            }

            $services->image3 = $result['image_name'];
            $result = $services->save();
        }

        if($result['result']!='1')
        {
            $this->showServicesAddForm($fields,$result['msg']);
        }

        $msg='عملیات با موفقیت انجام شد';
        $messageStack->add_session('message',$msg,'success');
        redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showServicesEditForm($fields,$msg)
    {
        if(!validator::required($fields['Services_id']) and !validator::Numeric($fields['Services_id']))
        {
            $msg= 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);
        }

        $services = adminServicesModel::find($fields['Services_id']);

        if(!is_object($services))
        {
            $msg=$services['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);
        }

        $export=$services->fields;


        /////// category
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $export['category'] = $category->list;
        }


        $this->fileName='admin.services.editForm.php';
        $this->template($export,$msg);
        die();
    }

    /**
     * @param $fields
     */
    public function editServices($fields)
    {
        global $messageStack;

        if(!validator::required($fields['Services_id']) and !validator::Numeric($fields['Services_id']))
        {
            $msg= 'یافت نشد';
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);
        }

        $services = adminServicesModel::find($fields['Services_id']);

        if(!is_object($services))
        {
            $msg=$services['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);
        }


        $fields['category_id'] = ','.implode(',',$fields['category_id']).',';


        $result=$services->setFields($fields);

        if($result['result']!=1)
        {
            $this->showServicesEditForm($fields,$result['msg']);
        }

        $services->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/services/';
            $result = fileUploader($input,$_FILES['image']);
            fileRemover($input['upload_dir'],$services->fields['image']);
            $services->image = $result['image_name'];

            $result = $services->save();
        }
        if(file_exists($_FILES['image2']['tmp_name'])){

            $input['upload_dir'] = ROOT_DIR.'statics/services/';
            $result = fileUploader($input,$_FILES['image2']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=services", $result['msg']);
            }

            $services->image2 = $result['image_name'];
            $result = $services->save();
        }
        if(file_exists($_FILES['image3']['tmp_name'])){

            $input['upload_dir'] = ROOT_DIR.'statics/services/';
            $result = fileUploader($input,$_FILES['image3']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=services", $result['msg']);
            }

            $services->image3 = $result['image_name'];
            $result = $services->save();
        }
        if($result['result']!='1')
        {
            $this->showServicesEditForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=services&action=editServices&id=".$fields['Services_id'], $msg);
        die();
    }

    /**
     * delete services by services_id
     *
     * @param $fields
     * @author marjani
     * @date 3/06/2015
     * @version 01.01.01
     */
    public function deleteServices($fields)
    {
        global $messageStack;
        if(!validator::required($fields['Services_id']) and !validator::Numeric($fields['Services_id']))
        {

            $this->showServicesEditForm($fields,translate('not found'));
        }

        $obj = adminServicesModel::find($fields['Services_id']);

        if(!is_object($obj))
        {
            $msg=$obj['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);
        }

        $dir = ROOT_DIR.'statics/services/';
        fileRemover($dir,$obj->fields['image']);
        $result = $obj->delete();


        if($result['result']!=1)
        {
            $messageStack->add_session('message',$result['msg'],'error');
            redirectPage(RELA_DIR . "admin/index.php?component=services", $result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=services", $msg);

    }


}