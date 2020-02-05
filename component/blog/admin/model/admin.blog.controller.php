<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 11:34 PM
 */

include_once(dirname(__FILE__)."/admin.blog.model.php");
class adminBlogController
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
        //print_r($messageStack);

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

        $blog = adminBlogModel::getAll()->getList();
        if($blog['result']!='1')
        {
            $this->fileName='admin.blog.showList.php';
            $this->template('',$blog['msg']);
            die();
        }

        $export['list']=$blog['export']['list'];

        $export['recordsCount']=$blog['export']['recordsCount'];

        $this->fileName='admin.blog.showList.php';
        $this->template($export);
        die();
    }
    public function search($fields)
    {

        $blog = new adminBlogModel();
        include_once(ROOT_DIR . "model/datatable.converter.php");
        $i=0;
        $columns = array(
            array( 'db' => 'Blog_id', 'dt' =>$i++),
            array( 'db' => 'title', 'dt' =>$i++),
            array( 'db' => 'category_id', 'dt' =>$i++),
            array( 'db' => 'brief_description', 'dt' =>$i++),
            array( 'db' => 'description', 'dt' => $i++ ),
            array( 'db' => 'image',   'dt' => $i++),
//            array( 'db' => 'imagesmall',   'dt' => $i++),
            array( 'db' => 'Artists_id', 'dt' => $i++ )
        );
        $convert=new convertDatatableIO();
        $convert->input=$fields;
        $convert->columns=$columns;



        $searchFields= $convert->convertInput();

        $searchFields['order']['Blog_id'] = 'DESC';
        $result = $blog->getByFilter($searchFields);


        if ($result['result'] != '1') {
            $this->fileName = 'admin.blog.showList.php';
            $this->template('', $result['msg']);
            die();
        }

        $list['list']=$result['export']['list'];

        $list['paging']=$result['export']['recordsCount'];
//        print_r_debug($list);

        $other['4']=array(
            'formatter' =>function($list)
            {
                $st=some_function($list['description']);

                return $st;
            }
        );

        $other['5']=array(
            'formatter' =>function($list)
            {
                $st = "تصویر کوچک";
                $st .= "<img height='40' src='".RELA_DIR.'statics/blog/small/'.$list['imagesmall']."'>";
                $st .= "<br>";
                $st .= "تصویر بزرگ";
                $st .= "<img height='50' src='".RELA_DIR.'statics/blog/'.$list['image']."'>";

                return $st;
            }
        );

        $internalVariable['showstatus']=$fields['status'];
        $other[$i-1]=array(
            'formatter' =>function($list,$internal)
            {
                $st='a'.$list['showstatus'];
                $st='<a href="'. RELA_DIR.'admin/?component=blog&action=edit&id='.$list['Blog_id'].'&showStatus='.$internal['showstatus']
                    .'">ویرایش</a> <br/>
                        
                        <a href="'.RELA_DIR.'admin/?component=blog&action=delete&id='.$list['Blog_id'].'">حذف</a>';
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
    public function showBlogAddForm($fields,$msg)
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

        $this->fileName='admin.blog.addForm.php';
        $this->template($fields,$msg);
        die();
    }

    /**
     * @param $fields
     * @return mixed
     */
    public function addBlog($fields)
    {
        global $messageStack;
        $blog=new adminBlogModel();

        $fields['category_id'] = ','.implode(',',$fields['category_id']).',';
        $result=$blog->setFields($fields);


        if($result['result']==-1)
        {
            $this->showBlogAddForm($fields,$result['msg']);
            //return $result;
        }
        $blog->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/blog/';
            $result = fileUploader($input,$_FILES['image']);

            if($result['result'] == -1)
            {
                $messageStack->add_session('message',$result['msg'],'error');
                redirectPage(RELA_DIR . "admin/index.php?component=blog", $result['msg']);
            }

            $blog->image = $result['image_name'];
            $result = $blog->save();
        }
        if(file_exists($_FILES['imagesmall']['tmp_name'])){

     /*       $type  = explode('/',$_FILES['imagesmall']['type']);*/

            $input['upload_dir'] = ROOT_DIR.'statics/blog/small/';
            $result = fileUploader($input,$_FILES['imagesmall']);

            $blog->imagesmall = $result['image_name'];
            $result = $blog->save();
        }

        if($result['result']!='1')
        {
            $this->showBlogAddForm($fields,$result['msg']);
        }

        $msg='عملیات با موفقیت انجام شد';
        $messageStack->add_session('message',$msg,'success');
        redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);
        die();
    }

    /**
     * @param $fields
     * @param $msg
     */
    public function showBlogEditForm($fields,$msg)
    {
        if(!validator::required($fields['Blog_id']) and !validator::Numeric($fields['Blog_id']))
        {
            $msg= 'یافت نشد';
            redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);
        }

        $blog = adminBlogModel::find($fields['Blog_id']);

        if(!is_object($blog))
        {
            $msg=$blog['msg'];
            redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);
        }

        $export=$blog->fields;

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

        $this->fileName='admin.blog.editForm.php';
        $this->template($export,$msg);
        die();
    }

    /**
     * @param $fields
     */
    public function editBlog($fields)
    {
        global $messageStack;


        if(!validator::required($fields['Blog_id']) and !validator::Numeric($fields['Blog_id']))
        {
            $msg= 'یافت نشد';
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);
        }

        $blog = adminBlogModel::find($fields['Blog_id']);

        if(!is_object($blog))
        {
            $msg=$blog['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);
        }

        $fields['category_id'] = ','.implode(',',$fields['category_id']).',';

        $result=$blog->setFields($fields);

        if($result['result']!=1)
        {
            $this->showBlogEditForm($fields,$result['msg']);
        }
        $blog->save();

        if(file_exists($_FILES['image']['tmp_name'])){

            $type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/blog/';
            $result = fileUploader($input,$_FILES['image']);
            fileRemover($input['upload_dir'],$blog->fields['image']);
            $blog->image = $result['image_name'];

            $result = $blog->save();
        }
        if(file_exists($_FILES['imagesmall']['tmp_name'])){

            /*       $type  = explode('/',$_FILES['imagesmall']['type']);*/

            $input['upload_dir'] = ROOT_DIR.'statics/blog/small/';
            $result = fileUploader($input,$_FILES['imagesmall']);

            $blog->imagesmall = $result['image_name'];
            $result = $blog->save();
        }
        if($result['result']!='1')
        {
            $this->showBlogEditForm($fields,$result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';

        $messageStack->add_session('message',$msg,'success');

        redirectPage(RELA_DIR . "admin/index.php?component=blog&action=edit&id=".$fields['Blog_id'], $msg);
        die();
    }

    /**
     * delete blog by blog_id
     *
     * @param $fields
     * @author marjani
     * @date 3/06/2015
     * @version 01.01.01
     */
    public function deleteBlog($fields)
    {
        global $messageStack;

        if(!validator::required($fields['Blog_id']) and !validator::Numeric($fields['Blog_id']))
        {

            $this->showBlogEditForm($fields,translate('not found'));
        }

        $obj = adminBlogModel::find($fields['Blog_id']);

        if(!is_object($obj))
        {
            $msg=$obj['msg'];
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);
        }

        $dir = ROOT_DIR.'statics/blog/';
        fileRemover($dir,$obj->fields['image']);
        $result = $obj->delete();
        $dir = ROOT_DIR.'statics/blog/small';
        fileRemover($dir,$obj->fields['imagesmall']);
        $result = $obj->delete();

        if($result['result']!=1)
        {
            $messageStack->add_session('message',$result['msg'],'error');
            redirectPage(RELA_DIR . "admin/index.php?component=blog", $result['msg']);
        }
        $msg='عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR . "admin/index.php?component=blog", $msg);

    }


}