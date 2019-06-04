<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 3/10/2016
 * Time: 10:21 AM.
 */
include_once dirname(__FILE__).'/product.model.php';

/**
 * Class productController.
 */
class productController
{
    /**
     * Contains file type.
     *
     * @var
     */
    public $exportType;

    /**
     * Contains file name.
     *
     * @var
     */
    public $fileName;

    /**
     * productController constructor.
     */
    public function __construct()
    {
        $this->exportType = 'html';
    }

    /**
     * call tempate.
     *
     * @param array $list
     * @param $msg
     *
     * @return string
     */
    public function template($list = array() , $msg='')
    {
        // global $conn, $lang;

        switch ($this->exportType) {
            case 'html':
                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/title.inc.php';
                include ROOT_DIR.'templates/'.CURRENT_SKIN."/$this->fileName";
                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/tail.inc.php';
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
     * show all product.
     *
     * @param $_input
     *
     * @author marjani
     * @date 3/10/2015
     *
     * @version 01.01.01
     */
    public function showMore($_input)
    {


        $product = new productModel();
        $result = $product::getBy_title($_input)->getList();

        if ($result['result'] != 1) {
            $this->fileName = 'product.showList.php';
            $this->template('', $result['msg']);
            die();
        }

        // breadcrumb
        $export['list'] = $result['export']['list'];


        $this->fileName = 'product.php';
        $this->template($export);
        die();
    }

    /**
     * @param $fields
     *
     * @author marjani
     * @date 3/10/2015
     *
     * @version 01.01.01
     */
    public function showALL($fields)
    {     include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();


        if($resultCategory['result'] == 1)
        {
            $fields['category'] = $category->list;
        }

        $product = new productModel();
        $fields['order']['Product_id'] = 'DESC';
        $result = $product->getByFilter($fields);
        if ($result['result'] != '1') {
            die();
        }

       // $export['recordsCount'] = $product->recordsCount;
      //  $export['pagination'] = $product->pagination;
        // breadcrumb
        global $breadcrumb;
        $breadcrumb->reset();
        $breadcrumb->add('بنر');
        $export['breadcrumb'] = $breadcrumb->trail();
        $this->fileName = 'product.php';
        $this->template($export);
        die();
    }
}
