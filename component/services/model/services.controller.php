<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:35 PM
 */
include_once dirname(__FILE__).'/services.model.php';

class servicesController
{
    public $exportType;
    public $fileName;
    public function __construct()
    {
        $this->exportType = 'html';
    }
    public function template($list = array(),$meta_keyword,$meta_description, $msg='')
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

    function showALL()
    {
        global $obj;
        $services = new services();
        $obj['services'] = $services->getByFilter();


        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $obj['category'] = $category->getByFilter();

$export['category']=$obj['category']['export']['list'];
$export['services']=$obj['services']['export']['list'];

        $metaKey = 'معتبر ترین مرکز ساخت سوئیچ خودرو ایران ریموت';
        $metaDesc = '  معتبر ترین مرکز ساخت سوئیچ خودرو ، ساخت سوییچ خودرو ایران ریموت';

        $this->fileName = 'services.php';
        $this->template($export,$metaKey,$metaDesc);
    }
    public function showList($_input)
    {
        $services = new services();

        if(!is_numeric($_input)){
            $this->showALL();
            die();
        }

        //$obj = $services::getBy_category_id(','.$_input.',')->getList();
        $sql = 'select * from services where category_id like "%,'.$_input.',%"';
        $obj = $services->getByFilter('',$sql);


        $cat = category::find($_input);
        $obj['export']['cat_name'] = $cat->title_fa;
        $obj['export']['cat_meta_keywords'] = $cat->meta_keyword;
        $obj['export']['cat_meta_description'] = $cat->meta_keyword;
        $obj['export']['cat_alt'] = $cat->alt_fa;
        //print_r_debug($obj);

        $metaKey = $obj['export']['cat_alt'];
        $metaDesc = $obj['export']['cat_alt'] .'-'.'معتبر ترین مرکز ساخت سوئیچ خودرو ایران ریموت';

        $this->fileName = 'services.showList.php';
        $this->template($obj['export'],$metaKey,$metaDesc);
        die();
    }
    public function showMore($_input,$catId)
    {



        $services = services::find($_input);

        $obj['export'] = $services->fields;

        $temp = explode(',',$catId);

        $cat = category::find($temp[1]);

        $obj['export']['cat_id'] = $cat->Category_id;
        $obj['export']['cat_name'] = $cat->title_fa;
        $obj['export']['cat_meta_keywords'] = $cat->meta_keyword;
        $obj['export']['cat_meta_description'] = $cat->meta_keyword;
        $obj['export']['cat_alt'] = $cat->alt_fa;


        $metaKey = $obj['export']['meta_keywords'];
        $metaDesc = $obj['export']['meta_description'];

        $this->fileName = 'services.showMore.php';

        $this->template($obj['export'],$metaKey,$metaDesc);
    }


}