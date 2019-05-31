<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 4/03/2016
 * Time: 4:24 PM
 */

include_once(dirname(__FILE__)."/admin.index.model.php");

/**
 * Class indexController
 */
class adminIndexController
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
    function template($list=array(),$msg='')
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
        include_once(ROOT_DIR."component/sales/admin/model/admin.sales.model.php");
        $result = adminSalesModel::query('select count(Sales_id) as count from sales')->getList();
        $export['sales_count'] = $result['export']['list'][0]['count'];


        include_once(ROOT_DIR."component/blog/admin/model/admin.blog.model.php");
        $result = adminBlogModel::query('select count(Blog_id) as count from blog')->getList();
        $export['blog_count'] = $result['export']['list'][0]['count'];

        include_once(ROOT_DIR."component/event/admin/model/admin.event.model.php");
        $result = adminEventModel::query('select count(Event_id) as count from event')->getList();
        $export['event_count'] = $result['export']['list'][0]['count'];

        include_once(ROOT_DIR."component/cv/admin/model/admin.cv.model.php");
        $result = adminCvModel::query('select count(Cv_id) as count from cv')->getList();
        $export['cv_count'] = $result['export']['list'][0]['count'];

        include_once(ROOT_DIR."component/services/admin/model/admin.services.model.php");
        $result = adminServicesModel::query('select count(Services_id) as count from services')->getList();
        $export['services_count'] = $result['export']['list'][0]['count'];


        $this->fileName='admin.index.php';
        $this->template($export);
        die();
    }


}
?>