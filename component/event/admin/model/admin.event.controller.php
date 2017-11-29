<?php
/**
 * Created by PhpStorm.
 * User: malekloo
 * Date: 3/6/2016
 * Time: 11:21 AM.
 */
include_once dirname(__FILE__).'/admin.event.model.php';

/**
 * Class registerController.
 */
class adminEventController
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
     * registerController constructor.
     */
    public function __construct()
    {
        $this->exportType = 'html';
    }

    /**
     * call template.
     *
     * @param string $list
     * @param $msg
     *
     * @return string
     */
    public function template($list = array(), $msg='')
    {
        global $messageStack,$admin_info;

        if($msg == ''){ $msg = $messageStack->output('message');}

        switch ($this->exportType) {
            case 'html':

                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/template_start.php';
                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/template_header.php';
                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/template_rightMenu_admin.php';
                include ROOT_DIR.'templates/'.CURRENT_SKIN."/$this->fileName";
                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/template_footer.php';
                include ROOT_DIR.'templates/'.CURRENT_SKIN.'/template_end.php';
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


    public function addEvent($_input)
    {
        global $messageStack;



        $event = new adminEventModel();

        $_input['date'] = convertJToGDate($_input['date']);
        $_input['category_id'] = ','.implode(',',$_input['category_id'] ).',';

        $result = $event->setFields($_input);
        if ($result['result'] == -1) {
            $this->showEventAddForm($_input, $result['msg']);
        }
        $event->save();


        if(file_exists($_FILES['logo']['tmp_name'])){

            $input['upload_dir'] = ROOT_DIR.'statics/event/';
            $result = fileUploader($input,$_FILES['logo']);
            //fileRemover($input['upload_dir'],$product->fields['image']);
            $event->logo = $result['image_name'];
            $result = $event->save();
        }


        //$result = $event->addEvent();

        if ($result['result'] != '1') {
            $messageStack->add_session('register', $result['msg']);
            $this->showEventAddForm($_input, $result['msg']);
        }
        $msg = 'ثبت نام با موفقیت انجام شد.';
        $messageStack->add_session('register', $msg);

        redirectPage(RELA_DIR.'admin/?component=event', $msg);
        die();
    }


    public function showEventAddForm($fields, $msg)
    {
        include_once ROOT_DIR.'component/category/admin/model/admin.category.model.php';
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();
        if ($resultCategory['result'] == 1) {
            $fields['category'] = $category->list;
        }

        include_once ROOT_DIR.'component/city/admin/model/admin.city.model.php';
        $city = new adminCityModel();
        $resultCity = $city->getCities();
        if ($resultCity['result'] == 1) {
            $fields['cities'] = $city->list;
        }

        include_once ROOT_DIR.'component/state/admin/model/admin.state.model.php';
        $province = new adminStateModel();
        $resultProvince = $province->getStates();
        if ($resultProvince['result'] == 1) {
            $fields['provinces'] = $province->list;
        }

        include_once ROOT_DIR.'component/certification/admin/model/admin.certification.model.php';
        $certification = new adminCertificationModel();

        $resultCertification = $certification->getCertification();
        if ($resultCity['result'] == 1) {
            $fields['certifications'] = $certification->list;
        }

        $this->fileName = 'admin.event.addForm.php';
        $this->template($fields, $msg);
        die();
    }

    public function addGallery($_input)
    {
        global $messageStack;

        include_once ROOT_DIR.'component/event_gallery/admin/model/admin.event_gallery.model.php';
        $event = new adminEvent_galleryModel();

        $result = $event->setFields($_input);

        if ($result['result'] == -1) {
            $this->showEventAddForm($_input, $result['msg']);
        }
        $event->save();



        if(file_exists($_FILES['image']['tmp_name'])){

            $input['upload_dir'] = ROOT_DIR.'statics/event/';
            $result = fileUploader($input,$_FILES['image']);

            //fileRemover($input['upload_dir'],$product->fields['image']);
            $event->image = $result['image_name'];
            $result = $event->save();
        }


        //$result = $event->addEvent();

        if ($result['result'] != '1') {
            $messageStack->add_session('register', $result['msg']);
            $this->showEventAddForm($_input, $result['msg']);
        }
        $msg = 'ثبت نام با موفقیت انجام شد.';
        $messageStack->add_session('register', $msg);

        redirectPage(RELA_DIR.'admin/?component=event&action=gallery&id='.$_input['event_id'], $msg);
        die();
    }

    public function showGalleryAddForm($fields, $msg)
    {

        $this->fileName = 'admin.gallery.addForm.php';
        $this->template($fields, $msg);
        die();
    }

    /**
     * @param $fields
     *
     * @return mixed
     *
     * @author malekloo
     * @date 3/16/2015
     *
     * @version 01.01.01
     */
    public function editEvent($fields)
    {


        //$event = new adminEventModel();
        $event = adminEventModel::find($fields['Event_id']);
        //$result = $event->getEventById($fields['Event_id']);
        $fields['date'] = convertJToGDate($fields['date']);
        $fields['category_id'] = ",".(implode(",",$fields['category_id'])).",";


        $result = $event->setFields($fields);
        $result=$event->save();

        $fields=$event->fields;
        if($result['result']!='1')
        {
            $this->showEventEditForm($fields, $result['msg']);
        }


        if(file_exists($_FILES['logo']['tmp_name'])){

            $input['upload_dir'] = ROOT_DIR.'statics/event/';
            $result = fileUploader($input,$_FILES['logo']);

            fileRemover($input['upload_dir'],$event->fields['logo']);
            $event->logo = $result['image_name'];

            $result = $event->save();
        }



        $msg = 'عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        die();
    }

    /**
     * @param $fields
     *
     * @return mixed
     *
     * @author malekloo
     * @date 3/6/2015
     *
     * @version 01.01.01
     */
    public function showEventEditForm($fields, $msg)
    {

        global $messageStack;
        $showStatus=$fields['showStatus'];

        $result = adminEventModel::find($fields['Event_id']);
        $export = $result->fields;

        if(!is_object($result))
        {
            $messageStack->add_session('message',$result['msg'],'error');
            redirectPage(RELA_DIR . "admin/index.php?component=event", $result['msg']);
        }





        include_once ROOT_DIR.'component/category/admin/model/admin.category.model.php';
        $category = new adminCategoryModel();

        $resultCategory = $category->getCategoryOption();

        if ($resultCategory['result'] == 1) {
            $export['category'] = $category->list;
        }



        include_once ROOT_DIR.'component/city/admin/model/admin.city.model.php';

        $city = admincityModel::getAll()->getList();


        //$resultCity = $city->getCities();
        if ($city['result'] == 1) {
            $export['city'] = $city['export']['list'];
        }


        $export['showStatus']=$showStatus;
        $this->fileName = 'admin.event.editForm.php';
        $this->template($export, $msg);
        die();
    }



    public function showList($msg)
    {
        $export['status']='showAll';
        $this->fileName = 'admin.event.showList.php';
        $this->template($export);
        die();
    }


    public function showListGallery($msg)
    {
        $export['status']='showAll';
        $this->fileName = 'admin.event.gallery.showList.php';
        $this->template($export);
        die();
    }


    public function search($fields)
    {
        $event = new adminEventModel();

        include_once(ROOT_DIR . "model/datatable.converter.php");
        $i=0;
        $columns = array(
            array( 'db' => 'Event_id', 'dt' =>$i++),
            array( 'db' => 'category_id', 'dt' =>$i++),
            array( 'db' => 'event_name_fa',   'dt' => $i++),
            //array( 'db' => 'event_name_en', 'dt' => $i++ ),
            array( 'db' => 'event_phone', 'dt' => $i++ ),
            array( 'db' => 'city_id', 'dt' => $i++ ),
            array( 'db' => 'event_time', 'dt' => $i++ ),
            array( 'db' => 'status', 'dt' => $i++ ),
            array( 'db' => 'address_fa', 'dt' => $i++ ),
            //array( 'db' => 'address_en', 'dt' => $i++ ),
            array( 'db' => 'logo', 'dt' => $i++ ),
            array( 'db' => 'Event_id', 'dt' => $i++ )
        );
        $convert=new convertDatatableIO();
        $convert->input=$fields;
        $convert->columns=$columns;


        $searchFields= $convert->convertInput();

        //$date = date('Y-m-d', strtotime(COMPANY_EXPIRE_PERIOD));
        // print_r_debug($date);
        //$searchFields['where'] = 'where refresh_date < '."'$date'";
        //print_r_debug($searchFields);
        $searchFields['order']['Event_id'] = 'DESC';
        $result = $event->getByFilter($searchFields);

        if ($result['result'] != '1') {
            $this->fileName = 'admin.event.showList.php';
            $this->template('', $result['msg']);
            die();
        }

        $list['list']=$result['export']['list'];

        $list['paging']=$result['export']['recordsCount'];

        /*$other['2']=array(
            'formatter' =>function($list)
            {
                $st='<div data-event_id="'.$list['Event_id'].'" class="event_phone">'.$list['phone_number'].'</div>';
                return $st;
            }
        );*/
        $other['6']=array(
            'formatter' =>function($list)
            {
                if($list['status']==1) {
                    $st ='فعال';
                }else {
                    $st ='غیر فعال';
                }
                return $st;
            }
        );
        $other['4']=array(
            'formatter' =>function($list)
            {
                include_once ROOT_DIR."component/city/admin/model/admin.city.model.php";
                $city = adminCityModel::find($list['city_id']);
                global $lang;
                return $city->fields["name".$lang];
            }
        );
        $other['8']=array(
            'formatter' =>function($list)
            {
                $st = "<img height='50' src='".RELA_DIR.'statics/event/'.$list['logo']."'>";

                return $st;
            }
        );
        $internalVariable['showstatus']=$fields['status'];
        $other[$i-1]=array(
            formatter =>function($list,$internal)
            {

                $st='<a href="'. RELA_DIR.'admin/?component=event&action=edit&id='.$list['Event_id'].'&showStatus='.$internal['showstatus']
                    .'">ویرایش</a> <br/>
                        <a href="'.RELA_DIR.'admin/?component=event&action=gallery&id='.$list['Event_id'].'">تصاویر</a><br/>
                        <a href="'.RELA_DIR.'admin/?component=event&action=delete&id='.$list['Event_id'].$list['event_name'].'">حذف</a>';
                return $st;
            }
        );

        $export= $convert->convertOutput($list,$columns,$other,$internalVariable);
        echo json_encode($export);
        die();
    }

    public function searchGallery($fields)
    {

        include_once (ROOT_DIR.'component/event_gallery/admin/model/admin.event_gallery.model.php');
        $event = new adminEvent_galleryModel();

        include_once(ROOT_DIR . "model/datatable.converter.php");
        $i=0;
        $columns = array(
            array( 'db' => 'Event_gallery_id', 'dt' =>$i++),
            array( 'db' => 'event_id', 'dt' =>$i++),
            array( 'db' => 'image', 'dt' => $i++ ),
            array( 'db' => 'Event_gallery_id', 'dt' => $i++ )
        );


        $convert=new convertDatatableIO();
        $convert->input=$fields;
        $convert->columns=$columns;
        $searchFields= $convert->convertInput();


        $searchFields['where']=' event_id= '. $fields['event_id'] .' ' ;
        $result=$event->getByFilter($searchFields);

        //$result = $event->getEvent($searchFields);

        if ($result['result'] != '1') {
            $this->fileName = 'admin.event.showList.php';
            $this->template('', $result['msg']);
            die();
        }

        $list['list']=$result['export']['list'];
        $list['paging']=$result['export']['recordsCount'];
        /*$other['2']=array(
            'formatter' =>function($list)
            {
                $st='<div data-event_id="'.$list['Event_id'].'" class="event_phone">'.$list['phone_number'].'</div>';
                return $st;
            }
        );*/
        $other['1']=array(
            'formatter' =>function($list)
            {
                global $lang;
                $obj = adminEventModel::find($list['event_id']);
                $st = $obj->fields["event_name_$lang"];

                return $st;
            }
        );
        $other['2']=array(
            'formatter' =>function($list)
            {
                $st = "<img height='50' src='".RELA_DIR.'statics/event/'.$list['image']."'>";

                return $st;
            }
        );
        $other['4']=array(
            'formatter' =>function($list)
            {
                if($list['status']==1) {
                    $st ='فعال';
                }else {
                    $st ='غیر فعال';
                }
                return $st;
            }
        );


        $internalVariable['showstatus']=$fields['status'];
        $other[$i-1]=array(
            'formatter' =>function($list,$internal)
            {

                $st='<a href="'.RELA_DIR.'admin/?component=event&action=deleteGallery&id='.$list['Event_gallery_id'].$list['event_name'].'">حذف</a>';
                return $st;
            }
        );

        $export= $convert->convertOutput($list,$columns,$other,$internalVariable);
        echo json_encode($export);
        die();
    }

    /**
     * @param $fields
     *
     * @return mixed
     *
     * @author malekloo
     * @date 3/6/2015
     *
     * @version 01.01.01
     */
    public function searchExpire($fields)
    {
        /*echo '<pre/>';
        print_r($fields);
        die();*/

        $event = new adminEventModel();

        include_once(ROOT_DIR . "model/datatable.converter.php");
        $i=0;
        $columns = array(
            array( 'db' => 'Event_id', 'dt' =>$i++),
            array( 'db' => 'event_name', 'dt' =>$i++),
            array( 'db' => 'phone_number', 'dt' =>$i++),
            array( 'db' => 'refresh_date',   'dt' => $i++),
            array( 'db' => 'address_address', 'dt' => $i++ ),
            array( 'db' => 'email_email', 'dt' => $i++ ),
            array( 'db' => 'website_url', 'dt' => $i++ ),
            array( 'db' => 'status', 'dt' => $i++ ),
            array( 'db' => 'Event_id', 'dt' => $i++ )
        );
        $convert=new convertDatatableIO();
        $convert->input=$fields;
        $convert->columns=$columns;
        $searchFields= $convert->convertInput();

        $date = date('Y-m-d', strtotime(COMPANY_EXPIRE_PERIOD));
        // print_r_debug($date);
        $searchFields['where'] = 'where refresh_date < '."'$date'";
        //print_r_debug($searchFields);

        $result = $event->getEvent($searchFields);
        if ($result['result'] != '1') {
            $this->fileName = 'admin.event.showList.php';
            $this->template('', $result['msg']);
            die();
        }
        $list['list']=$event->list;
        $list['paging']=$event->recordsCount;

        $other['2']=array(
            'formatter' =>function($list)
            {
                $st='<div data-event_id="'.$list['Event_id'].'" class="event_phone">'.$list['phone_number'].'</div>';

                return $st;
            }

        );

        $other['3']=array(
            'formatter' =>function($list)
            {
                $st= convertDate($list['refresh_date']);
                return $st;
            }
        );
        $other['4']=array(
            'formatter' =>function($list)
            {
                $st=convertDate(date('Y-m-d',strtotime(COMPANY_EXPIRE_PERIOD,strtotime($list['refresh_date'])))) ;
                return $st;
            }
        );
        $other['7']=array(
            'formatter' =>function($list)
            {
                if($list['status']==1) {
                    $st ='فعال';
                }else {
                    $st ='غیر فعال';
                }
                return $st;
            }
        );

        $internalVariable['showstatus']=$fields['status'];
        $other[$i-1]=array(
            formatter =>function($list,$internal)
            {
                $st= 'a'.$list['showstatus'];
                $st='<a href="'. RELA_DIR.'admin/?component=event&action=edit&id='.$list['Event_id'].'&showStatus='.$internal['showstatus']
                    .'">ویرایش</a> <br/>
                        <a href="'.RELA_DIR.'admin/?component=product&id='.$list['Event_id'].'">لیست محصولات</a><br/>
                        <a href="'.RELA_DIR.'admin/?component=honour&id='.$list['Event_id'].'">لیست افتخارات</a><br/>
                        <a href="'.RELA_DIR.'admin/?component=licence&id='.$list['Event_id'].'">لیست مجوز ها</a><br/>
                        <a href="'.RELA_DIR.'admin/?component=event&action=delete&id='.$list['Event_id'].$list['event_name'].'">حذف</a>';
                return $st;
            }
        );
        $export= $convert->convertOutput($list,$columns,$other,$internalVariable);
        echo json_encode($export);
        die();
    }


    public function deleteEvent($id)
    {

        if (!validator::required($id) and !validator::Numeric($id)) {
            $msg = 'یافت نشد';
            redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        }

        $event = adminEventModel::find($id);
        if (!is_object($event)) {
            $msg = $event['msg'];
            redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        }


        include_once ROOT_DIR.'/component/event_gallery/admin/model/admin.event_gallery.model.php';
        $result = adminEvent_galleryModel::getBy_event_id($id)->get();


        if ($result['export']['recordsCount'] > 0) {
            $msg = 'توجه : ابتدا گالری این رویداد را حذف نمایید.';
            global $messageStack;
            $messageStack->add_session('message',$msg,'error');
            redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        }

        $dir = ROOT_DIR.'statics/event/';
        fileRemover($dir,$event->fields['logo']);

        $result = $event->delete();

        if ($result['result'] != '1') {
            redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        }

        $msg = 'عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        die();
    }
    public function deleteGallery($id)
    {

        if (!validator::required($id) and !validator::Numeric($id)) {
            $msg = 'یافت نشد';
            redirectPage(RELA_DIR.'admin/index.php?component=event', $msg);
        }

        include_once ROOT_DIR.'component/event_gallery/admin/model/admin.event_gallery.model.php';
        $event = adminEvent_galleryModel::find($id);

        if (!is_object($event)) {
            $msg = $event['msg'];
            redirectPage(RELA_DIR.'admin/index.php?component=event&action=gallery&id='.$event->fields['event_id'], $msg);
        }

        $dir = ROOT_DIR.'statics/event/';
        fileRemover($dir,$event->fields['image']);

        $result = $event->delete();

        if ($result['result'] != '1') {
            redirectPage(RELA_DIR.'admin/index.php?component=event&action=gallery&id='.$event->fields['event_id'], $msg);
        }

        $msg = 'عملیات با موفقیت انجام شد';
        redirectPage(RELA_DIR.'admin/index.php?component=event&action=gallery&id='.$event->fields['event_id'], $msg);
        die();
    }

}
