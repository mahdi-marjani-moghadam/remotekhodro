<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:34 PM
 */

include_once(dirname(__FILE__)."/admin.article.model.php");
class adminArticleController
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

        $article = adminArticleModel::getAll()->getList();
        if($article['result']!='1')
        {
            $this->fileName='admin.article.showList.php';
            $this->template('',$article['msg']);
            die();
        }

        $export['list']=$article['export']['list'];

        $export['recordsCount']=$article['export']['recordsCount'];

        $this->fileName='admin.article.showList.php';
        $this->template($export);
        die();
    }
    public function search($fields)
    {

        $article = new adminArticleModel();
        include_once(ROOT_DIR . "model/datatable.converter.php");
        $i=0;
        $columns = array(
            array( 'db' => 'Article_id', 'dt' =>$i++),
            array( 'db' => 'title', 'dt' =>$i++),
            array( 'db' => 'category_id', 'dt' =>$i++),
            array( 'db' => 'brief_description', 'dt' =>$i++),
            array( 'db' => 'image',   'dt' => $i++),
            array( 'db' => 'Artists_id', 'dt' => $i++ )
        );
        $convert=new convertDatatableIO();
        $convert->input=$fields;
        $convert->columns=$columns;



        $searchFields= $convert->convertInput();

        $searchFields['order']['Article_id'] = 'DESC';
        $result = $article->getByFilter($searchFields);


        if ($result['result'] != '1') {
            $this->fileName = 'admin.article.showList.php';
            $this->template('', $result['msg']);
            die();
        }

        $list['list']=$result['export']['list'];

        $list['paging']=$result['export']['recordsCount'];
//        print_r_debug($list);


        $other['4']=array(
            'formatter' =>function($list)
            {
                $st = "<img height='50' src='".RELA_DIR.'statics/article/'.$list['Artists_id'].'/'.$list['image']."'>";

                return $st;
            }
        );
        $internalVariable['showstatus']=$fields['status'];
        $other[$i-1]=array(
            'formatter' =>function($list,$internal)
            {
                $st='a'.$list['showstatus'];
                $st='<a href="'. RELA_DIR.'admin/?component=article&action=edit&id='.$list['Article_id'].'&showStatus='.$internal['showstatus']
                    .'">ویرایش</a> <br/>
                        
                        <a href="'.RELA_DIR.'admin/?component=article&action=delete&id='.$list['Article_id'].'">حذف</a>';
                return $st;
            }
        );

        $export= $convert->convertOutput($list,$columns,$other,$internalVariable);
        //print_r_debug($export);
        echo json_encode($export);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showArticleAddForm($fields,$msg)
    {

        /////// category
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $fields['category'] = $category->list;
        }
        //echo "<pre>";print_r($resultCategory);die();
        ///////

        $this->fileName='admin.article.addForm.php';
        $this->template($fields,$msg);
        die();
    }

    /**
     * @param $fields
     * @return mixed
     */
    public function addArticle($fields)
    {
        global $messageStack;
        $article=new adminArticleModel();

        $fields['category_id'] = ','.implode(',',$fields['category_id']).',';
        $result=$article->setFields($fields);


        if($result['result']==-1)
        {
            $this->showArticleAddForm($fields,$result['msg']);
            //return $result;
        }
        $article->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/article/';
            $result = fileUploader($input,$_FILES['image']);
            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=article", $result['msg']);
            }

            $article->image = $result['image_name'];
            $result = $article->save();
        }


        if($result['result']!='1')
        {
            $this->showArticleAddForm($fields,$result['msg']);
        }

        $msg='عملیات با موفقیت انجام شد';
        $messageStack->add_session('message',$msg,'success');
        redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showArticleEditForm($fields,$msg)
    {
        if(!validator::required($fields['Article_id']) and !validator::Numeric($fields['Article_id']))
        {
            $msg= 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        }

        $article = adminArticleModel::find($fields['Article_id']);

        if(!is_object($article))
        {
            $msg=$article['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        }

        $export=$article->fields;

        /////// category
        include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if($resultCategory['result'] == 1)
        {
            $export['category'] = $category->list;
        }
        //echo "<pre>";print_r($resultCategory);die();
        ///////

        $this->fileName='admin.article.editForm.php';
        $this->template($export,$msg);
        die();
    }

    /**
     * @param $fields
     */
    public function editArticle($fields)
    {
        global $messageStack;

        if(!validator::required($fields['Article_id']) and !validator::Numeric($fields['Article_id']))
        {
            $msg= 'یافت نشد';
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        }

        $article = adminArticleModel::find($fields['Article_id']);

        if(!is_object($article))
        {
            $msg=$article['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        }

        $fields['category_id'] = ','.implode(',',$fields['category_id']).',';

        $result=$article->setFields($fields);

        if($result['result']!=1)
        {
            $this->showArticleEditForm($fields,$result['msg']);
        }

        $article->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/article/';
            $result = fileUploader($input,$_FILES['image']);
            fileRemover($input['upload_dir'],$article->fields['image']);
            $article->image = $result['image_name'];

            $result = $article->save();
        }

        if($result['result']!='1')
        {
            $this->showArticleEditForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        die();
    }

    /**
     * delete article by article_id
     *
     * @param $fields
     * @author marjani
     * @date 3/06/2015
     * @version 01.01.01
     */
    public function deleteArticle($fields)
    {
        global $messageStack;

        if(!validator::required($fields['Article_id']) and !validator::Numeric($fields['Article_id']))
        {

            $this->showArticleEditForm($fields,translate('not found'));
        }

        $obj = adminArticleModel::find($fields['Article_id']);

        if(!is_object($obj))
        {
            $msg=$obj['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);
        }

        $dir = ROOT_DIR.'statics/article/';
        fileRemover($dir,$obj->fields['image']);
        $result = $obj->delete();


        if($result['result']!=1)
        {
            $messageStack->add_session('message',$result['msg'],'error');
            redirectPage(RELA_DIR . "admin/index.php?component=article", $result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=article", $msg);

    }

    public function ajax($fields)
    {print_r_debug('asd');
echo "";
    }
}