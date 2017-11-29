<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:34 PM
 */

include_once(dirname(__FILE__)."/admin.sales.model.php");
class adminSalesController
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

        $sales = adminSalesModel::getAll()->getList();
        if($sales['result']!='1')
        {
            $this->fileName='admin.sales.showList.php';
            $this->template('',$sales['msg']);
            die();
        }

        $export['list']=$sales['export']['list'];

        $export['recordsCount']=$sales['export']['recordsCount'];

        $this->fileName='admin.sales.showList.php';
        $this->template($export);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showSalesAddForm($fields,$msg)
    {
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $fields['category'] = $category->list;
        }

        $this->fileName='admin.sales.addForm.php';
        $this->template($fields,$msg);
        die();
    }



    /**
     * @param $fields
     * @return mixed
     */
    public function addSales($fields)
    {
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();
        $query="select parent_id from category where Category_id=".$fields['category_id'];

        $resultCategory = $category->getByFilter($fields,$query);

       $fields['parent_id'] = $resultCategory['export']['list'][0]['parent_id'];

        global $messageStack;
        $sales=new adminSalesModel();
        $result=$sales->setFields($fields);
        if($result['result']==-1)
        {
            $this->showSalesAddForm($fields,$result['msg']);
            //return $result;
        }
        $res = $sales->validator();
        if($res['result']==-1)
        {
            $this->showSalesAddForm($fields,$res['msg']);
            //return $result;
        }


        $sales->save();


        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/sales/';
            $result = fileUploader($input,$_FILES['image']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=sales", $result['msg']);
            }

            $sales->image = $result['image_name'];
            $result = $sales->save();
        }


        if($result['result']!='1')
        {
            $this->showSalesAddForm($fields,$result['msg']);
        }

        $msg='عملیات با موفقیت انجام شد';
        $messageStack->add_session('message',$msg,'success');
        redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showSalesEditForm($fields,$msg)
    {   include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $export['category'] = $category->list;

        }


        if(!validator::required($fields['Sales_id']) and !validator::Numeric($fields['Sales_id']))
        {
            $msg= 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        }

        $sales = adminSalesModel::find($fields['Sales_id']);

        if(!is_object($sales))
        {
            $msg=$sales['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        }

        $export['list']=$sales->fields;



        $this->fileName='admin.sales.editForm.php';
        $this->template($export,$msg);
        die();
    }

    /**
     * @param $fields
     */
    public function editSales($fields)
    {
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();
        $query="select parent_id from category where Category_id=".$fields['category_id'];

        $resultCategory = $category->getByFilter($fields,$query);

        $fields['parent_id'] = $resultCategory['export']['list'][0]['parent_id'];

        global $messageStack;

        if(!validator::required($fields['Sales_id']) and !validator::Numeric($fields['Sales_id']))
        {
            $msg= 'یافت نشد';
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        }

        $sales = adminSalesModel::find($fields['Sales_id']);

        if(!is_object($sales))
        {
            $msg=$sales['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        }


        $result=$sales->setFields($fields);

        if($result['result']!=1)
        {
            $this->showSalesEditForm($fields,$result['msg']);
        }

        $sales->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/sales/';
            $result = fileUploader($input,$_FILES['image']);
            fileRemover($input['upload_dir'],$sales->fields['image']);
            $sales->image = $result['image_name'];

            $result = $sales->save();
        }

        if($result['result']!='1')
        {
            $this->showSalesEditForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        die();
    }

    /**
     * delete sales by sales_id
     *
     * @param $fields
     * @author marjani
     * @date 3/06/2015
     * @version 01.01.01
     */
    public function deleteSales($fields)
    {
        global $messageStack;
        if(!validator::required($fields['Sales_id']) and !validator::Numeric($fields['Sales_id']))
        {

            $this->showSalesEditForm($fields,translate('not found'));
        }

        $obj = adminSalesModel::find($fields['Sales_id']);

        if(!is_object($obj))
        {
            $msg=$obj['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);
        }

        $dir = ROOT_DIR.'statics/sales/';
        fileRemover($dir,$obj->fields['image']);
        $result = $obj->delete();


        if($result['result']!=1)
        {
            $messageStack->add_session('message',$result['msg'],'error');
            redirectPage(RELA_DIR . "admin/index.php?component=sales", $result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=sales", $msg);

    }


}