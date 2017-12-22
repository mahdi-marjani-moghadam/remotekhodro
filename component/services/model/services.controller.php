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
    public function template($list = array(), $msg='')
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
    {global $obj;
        $services = new services();
        $obj['services'] = $services->getByFilter();


        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $obj['category'] = $category->getByFilter();

$export['category']=$obj['category']['export']['list'];
$export['services']=$obj['services']['export']['list'];

        $this->fileName = 'services.php';

        $this->template($export);
    }
    public function showList($_input)
    {
        $services = new services();
        $obj = $services::getBy_parent_id($_input)->getList();
        //print_r_debug($obj);

        $this->fileName = 'services.showList.php';
        $this->template($obj['export']['list']);
        die();
    }
    public function showMore($_input)
    {print_r_debug("asd");
        $services = new services();
        $obj = $services::getBy_parent_id($_input)->getList();
        /*        print_r_debug($obj);*/

        $this->fileName = 'services.showMore.php';

        $this->template($obj['export']['list']);
    }


}