<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 3/06/2016
 * Time: 12:08 AM
 */

include_once(dirname(__FILE__)."/admin.product.model.php");

/**
 * Class productController
 */
class adminProductController
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
        $this->exportType='html';

    }

    /**
     * @param array $list
     * @param $msg
     * @return string
     */
    function template($list=[],$msg)
    {
        // global $conn, $lang;


        switch($this->exportType)
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
     * @param $fields
     */
    public function showList($fields)
    {
        $product = adminProductModel::getAll()->getList();
        if($product['result']!='1')
        {
            $this->fileName='admin.product.showList.php';
            $this->template('',$product['msg']);
            die();
        }

        $export['list']=$product['export']['list'];

        $export['recordsCount']=$product['export']['recordsCount'];
        $this->fileName='admin.product.showList.php';
        $this->template($export);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showProductAddForm($fields,$msg)
    {
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $fields['category'] = $category->list;
        }

        $this->fileName='admin.product.addForm.php';
        $this->template($fields,$msg);
        die();
    }

    /**
     * @param $fields
     * @return mixed
     */
    public function addProduct($fields)
    {

        $product=new adminProductModel();

        $result=$product->setFields($fields);


        if($result['result']==-1)
        {
            $this->showProductAddForm($fields,$result['msg']);
            //return $result;
        }
        $product->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/product/';
            $result = fileUploader($input,$_FILES['image']);
            $product->image = $result['image_name'];
            $result = $product->save();
        }
        if(file_exists($_FILES['image2']['tmp_name'])){


            $type  = explode('/',$_FILES['image2']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/product/';
            $result = fileUploader($input,$_FILES['image2']);
            fileRemover($input['upload_dir'],$product->fields['image2']);
            $product->image2 = $result['image_name'];

            $result = $product->save();
        }

        //$result=$product->add();

        if($result['result']!='1')
        {
            $this->showProductAddForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showProductEditForm($fields,$msg)
    {
        if(!validator::required($fields['Product_id']) and !validator::Numeric($fields['Product_id']))
        {
            $msg= 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        }

        $product = adminProductModel::find($fields['Product_id']);

        if(!is_object($product))
        {
            $msg=$product['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        }

        $export=$product->fields;



        $this->fileName='admin.product.editForm.php';
        $this->template($export,$msg);
        die();
    }

    /**
     * @param $fields
     */
    public function editProduct($fields)
    {
        //$product=new adminProductModel();

        if(!validator::required($fields['Product_id']) and !validator::Numeric($fields['Product_id']))
        {
            $msg= 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        }

        $product = adminProductModel::find($fields['Product_id']);

        if(!is_object($product))
        {
            $msg=$product['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        }


        $result=$product->setFields($fields);



        if($result['result']!=1)
        {
            $this->showProductEditForm($fields,$result['msg']);
        }



        $product->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/product/';
            $result = fileUploader($input,$_FILES['image']);
            fileRemover($input['upload_dir'],$product->fields['image']);
            $product->image = $result['image_name'];

            $result = $product->save();
        }
        if(file_exists($_FILES['image2']['tmp_name'])){


            $type  = explode('/',$_FILES['image2']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/product/';
            $result = fileUploader($input,$_FILES['image2']);
            fileRemover($input['upload_dir'],$product->fields['image2']);
            $product->image2 = $result['image_name'];

            $result = $product->save();
        }




        if($result['result']!='1')
        {
            $this->showProductEditForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        die();
    }

    /**
     * delete product by product_id
     *
     * @param $fields
     * @author marjani
     * @date 3/06/2015
     * @version 01.01.01
     */
    public function deleteProduct($fields)
    {

        if(!validator::required($fields['Product_id']) and !validator::Numeric($fields['Product_id']))
        {

            $this->showProductEditForm($fields,translate('not found'));
        }

        $obj = adminProductModel::find($fields['Product_id']);

        if(!is_object($obj))
        {
            $msg=$obj['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        }

        $dir = ROOT_DIR.'statics/product/';
        fileRemover($dir,$obj->fields['image']);
        $result = $obj->delete();


        if($result['result']!=1)
        {
            $this->showProductEditForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=product", $msg);
        die();
    }
}
?>