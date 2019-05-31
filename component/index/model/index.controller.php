<?php
/**
 * Created by PhpStorm.
 * User: malek
 * Date: 2/20/2016
 * Time: 4:24 PM
 */

include_once(dirname(__FILE__)."/index.model.php");

/**
 * Class ProductController
 */
class indexController
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
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->exportType='html';

    }

    /**
     * call template
     *
     * @param string $list
     * @param $msg
     * @return string
     */
    public function template($list=array(),$msg='')
    {
        global $PARAM,$member_info;

        //die();
        global $PARAM, $lang;

        switch($this->exportType)
        {
            case 'html':
                extract($list, EXTR_SKIP);

                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/title.inc.php");

                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/$this->fileName");

                include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/tail.inc.php");
                break;

            case 'json':
                echo json_encode($list);
                break;
            case 'array':
                print_r_debug($list);
                break;

            case 'serialize':
                echo serialize($list);
                break;
            default:
                break;
        }

    }

    /**
     * show all Product
     *
     * @param $_input
     * @author marjani
     * @date 2/28/2016
     * @version 01.01.01
     */
    public function showMore($_input)
    {     include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $fields['category'] = $category->list;
        }
        if(!is_numeric($_input))
        {
            $msg= 'یافت نشد';
            $this->fileName = "Product.showList.php";
            $this->template('',$msg);
            die();
        }
        $Product=new ProductModel;
        $result=$Product->getArticleById($_input);

        if($result['result']!=1)
        {
            $this->fileName = "Product.showList.php";
            $this->template('',$result['msg']);
            die();
        }
        $this->fileName = "Product.showMore.php";
        $this->template($Product->fields);
        die();
    }


    /**
     * get all Product and  show in list
     *
     * @param $fields
     * @author marjani,malekloo
     * @date 2/28/2016
     * @version 01.01.02
     */
    public function showALL($fields=array())
    {


        //use category model func by getCategoryUlLi
        /*include_once(ROOT_DIR."component/category/model/category.model.php");
        $category = new categoryModel();

        $resultCategory = $category->getCategoryUlLi();


        if($resultCategory['result'] == 1)
        {
            $export['category_list'] = $resultCategory['export']['list'];
        }*/

        include_once(ROOT_DIR."component/banner/model/banner.model.php");
        $banner = new bannerModel();

        $fields['order']['priority'] = 'ASC';

        $banner = $banner->getByFilter($fields);
        $export['banner'] = $banner['export']['list'];

        include_once(ROOT_DIR."component/blog/model/blog.model.php");

        $blog=new blogModel();
        $fields2['limit']['start'] = (isset($page)) ? ($page - 1) * PAGE_SIZE : '0';
        $fields2['limit']['length'] = PAGE_SIZE;
        $fields2['order']['Blog_id'] = 'ASC';
        $blog = $blog->getByFilter($fields2);
        $export['blog'] = $blog['export']['list'];



       /* include_once(ROOT_DIR."component/team/model/team.model.php");
        $team = new teamModel();

        $fields['order']['priority']='ASC';
        $team = $team->getByFilter($fields);
        $export['team'] = $team['export']['list'];

        include_once(ROOT_DIR."component/activity/model/activity.model.php");
        $activity = new activityModel();

        $fields['order']['priority']='ASC';
        $activity = $activity->getByFilter($fields);
        $export['activity'] = $activity['export']['list'];*/

        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $export['category'] = $category->list;
        }


//        print_r_debug($export['category']);
        //$export['banner'] = $banner['export']['list'];
        $this->fileName = "index.php";

        $title = 'ساخت ریموت و ساخت سوئیچ | مرکز تخصصی ایران ریموت';
        $meta_description = 'ساخت سوئیچ، پروگرام، تعریف، تعمیر و کددهی ریموت انواع خودرو بنز،کیا،بی ام و، مزدا،تویوتا،هوندا،هیوندا،پورشه - نمونه سوئیچ و ریموت ما را مشاهده نمایید.';

//        print_r_debug(strlen($meta_description)/2);

        $this->template(compact('export','title','meta_description'));
        die();

    }

}
?>
