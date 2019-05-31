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
                extract($list, EXTR_SKIP);
//                print_r_debug($export['cat_url']);
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

        $title = 'خدمات تعمیر، کددهی، ساخت و کپی سوئیچ، ریموت و کلید یدک | ایران ریموت';
        $meta_description = 'خدمات ساخت سوئیچ و ریموت، تعمیر، کددهی،  پروگرام و کپی کلید یدک ۲۴ ساعته در محل انواع خودرو بی ام و ، بنز ، مزدا ، پورشه و ...';

        $this->fileName = 'services.php';
        $this->template(compact('export','title','meta_description'));
    }
    public function showList($_input)
    {

        global $PARAM;


        if(isset($PARAM) && is_numeric($PARAM[1])){
            $services = new services();
            $sql = 'select * from category where category_id = "'.$_input.'" and url = "'.$PARAM[2].'"';
            $export2 = $services->getByFilter('',$sql);
            if($export2['export']['recordsCount'] == 0)
            {
                redirectPage(RELA_DIR.'services/'.SERVICES_SLUG,'صفحه پیدا نشد.');
            }
        }else{
            if($PARAM[1] != SERVICES_SLUG)
            {
                redirectPage(RELA_DIR.'services/'.SERVICES_SLUG,'صفحه پیدا نشد.');
            }
        }


        $services = new services();
        if(!is_numeric($_input)){
            $this->showALL();
            die();
        }



        //$obj = $services::getBy_category_id(','.$_input.',')->getList();
        $sql = 'select * from services where category_id like "%,'.$_input.',%" ';
        $export = $services->getByFilter('',$sql);

        $cat = category::find($_input);
        $export['cat_name'] = $cat->title_fa;
        $export['cat_meta_keywords'] = $cat->meta_keyword;
        $export['cat_meta_description'] = $cat->meta_keyword;
        $export['cat_alt'] = $cat->alt_fa;

//        print_r_debug($export);


        $title = 'سوئیچ و ریموت '.$export['cat_name'].' | ساخت، پروگرام، تعریف و کددهی | ایران ریموت';
        $meta_description = 'ساخت سوئیچ و ریموت '.$export['cat_name'] .' در کوتاهترین زمان حتی در محل شما و ۲۴ ساعته. نمونه سوئیچ و ریموت با کیفیت ما را در سایت مشاهده نمایید.';


        $this->fileName = 'services.showList.php';
        $this->template(compact('export','title','meta_description'));
        die();
    }
    public function showMore($_input,$catId)
    {



        $services = services::find($_input);

        $export = $services->fields;

        $temp = explode(',',$catId);

        $cat = category::find($temp[1]);


        $export['cat_id'] = $cat->Category_id;
        $export['cat_name'] = $cat->title_fa;
        $export['cat_meta_keywords'] = $cat->meta_keyword;
        $export['cat_meta_description'] = $cat->meta_keyword;
        $export['cat_alt'] = $cat->alt_fa;
        $export['cat_url'] = $cat->url;


        $title = $export['meta_title'];
        $meta_description = $export['meta_description'];


        $this->fileName = 'services.showMore.php';

        $this->template(compact('export','title','meta_description'));
    }


}