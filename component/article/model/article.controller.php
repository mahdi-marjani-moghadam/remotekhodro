<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:35 PM
 */
include_once dirname(__FILE__).'/article.model.php';

class articleController
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
    {
        global $page;
        $article = new article();

        $fields['limit']['start'] = (isset($page)) ? ($page - 1) * PAGE_SIZE : '0';
        $fields['limit']['length'] = PAGE_SIZE;
        $fields['order']['Article_id'] = 'DESC';
        $fields['where']=" status = 1  ";
        $obj = $article->getByFilter($fields);
        $export['article'] = $obj['export']['list'];

        $a = paginationButtom($obj['export']['recordsCount']);
        $export['pagination'] = $a['export']['list'];
        //print_r_debug($export);

        ///////////////////////////////////////////////////////////////////
        include_once ROOT_DIR.'component/category/model/category.model.php';
        $category = new categoryModel();
        /*$resultCategory = $category->getCategoryUlLi();
        if ($resultCategory['result'] == 1) {
            $export['category_list'] = $resultCategory['export']['list'];
        }*/

        $resultCategoryAll = $category->allCategory();
        if ($resultCategoryAll['result'] == 1) {
            $export['category_list_all'] = $resultCategoryAll['export']['list'];
        }
        //////////////////////////////////////////////////////////////////

        $this->fileName = 'article.php';
        $this->template($export);
    }

    public function showMore($_input)
{
    if (!is_numeric($_input)) {
        $msg = 'یافت نشد';
        $this->fileName = 'article.php';
        $this->template('', $msg);
        die();
    }
    //$activity = new activityModel();
    //$result = $activity->getActivityById($_input);

    $result = article::find($_input);


    if (!is_object($result)) {
        $this->fileName = 'activity.php';
        $this->template('', $result['msg']);
        die();
    }

    // breadcrumb
    /*global $breadcrumb;
    $breadcrumb->reset();
    $breadcrumb->add('بنر');
    $breadcrumb->add($activity['list']['title']);
    $export['breadcrumb'] = $breadcrumb->trail();*/

    $this->fileName = 'article.showMore.php';
    $this->template($result->fields);
    die();
}
}