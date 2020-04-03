<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:35 PM
 */
include_once dirname(__FILE__).'/blog.model.php';


class blogController
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
     * @param PAGE_SIZE
     * @property PAGE_SIZE
     */
    
    function showALL()
    {
        global $page;
        $blog = new blogModel();

        $fields['limit']['start'] = (isset($page)) ? ($page - 1) * PAGE_SIZE : '0';
        $fields['limit']['length'] = PAGE_SIZE;
        $fields['order']['Blog_id'] = 'DESC';

        $blog = $blog->getByFilter($fields);


        $export['blog'] = $blog['export']['list'];

        include_once ROOT_DIR.'component/category/model/category.model.php';
        foreach($export['blog'] as $k => $item){
            $cat = category::find(trim($item['category_id'],','));

            $export['blog'][$k]['cat_name'] = $cat->title_fa;
            
        }

        $a = paginationButtom($blog['export']['recordsCount']);
        $export['pagination'] = $a['export']['list'];

        $title = 'نمونه کار ساخت سوئیچ و ریموت بی ام و ، بنز، هیوندا ،‌ مزدا ، کیا ، رنو ، پورشه' .' | '.'ایران ریموت';
        $meta_description = 'نمونه کارهای ساخت سوئیچ و ریموت خودرو های بی ام و ، بنز، هیوندا ،‌ مزدا ، کیا ، رنو ، پورشه در تهران ۲۴ ساعته';

        $this->fileName = 'blog.php';
        $this->template(compact('export','title','meta_description'));
    }
    public function showMore($_input)
    {

        if (!is_numeric($_input)) {
            $msg = 'یافت نشد';
            $this->fileName = 'blog.showList.php';
            $this->template('', $msg);
            die();
        }


        //$blog = new blogModel();
        //$result = $blog->getTrailerById($_input);

        $result = blogModel::find($_input);
        


        global $PARAM;
        
        if($PARAM[2] != $result->url){
            header("Location:".RELA_DIR.'blog/'.$result->Blog_id.'/'.$result->url);
        }


        if (!is_object($result)) {
            $this->fileName = 'blog.showList.php';
            $this->template('', $result['msg']);
            die();
        }

        // breadcrumb
        /*global $breadcrumb;
        $breadcrumb->reset();
        $breadcrumb->add('بنر');
        $breadcrumb->add($blog['list']['title']);
        $export['breadcrumb'] = $breadcrumb->trail();*/

        $title = $result->fields['meta_title'];
        $meta_description = $result->fields['meta_description'];
        $export = $result->fields;


        include_once ROOT_DIR.'component/category/model/category.model.php';
        $cat = category::find(trim($result->category_id,','));
        
        
        $export['cat_name'] = $cat->title_fa;

        //print_r_debug($export);


        $this->fileName = 'blog.showMore.php';
        $this->template(compact('export','title','meta_description'));
        die();
    }

}