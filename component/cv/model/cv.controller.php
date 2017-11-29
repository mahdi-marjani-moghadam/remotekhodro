<?php
/**
 * Created by PhpStorm.
 * User: marjani
 * Date: 2/27/2016
 * Time: 9:21 AM.
 */
include_once dirname(__FILE__).'/cv.model.php';

/**
 * Class cvController.
 */
class cvController
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
     * cvController constructor.
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
        global $messageStack;
        if($msg =='')
        {
            $msg = $messageStack->output('message');
        }

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

    /**
     * add cv.
     *
     * @param $_input
     *
     * @return int|mixed
     *
     * @author marjani
     * @date 2/27/2015
     *
     * @version 01.01.01
     */
    public function addCv($_input)
    {
        global $messageStack;

        $cv = new cvModel();

        $result = $cv->setFields($_input);
        if ($result['result'] == -1) {
            //$messageStack->add_session('cv',$result['msg'] , 'error');
            $this->showCvForm($_input,$result['msg']);
        }

        $result = $cv->save();

        if ($result['result'] != '1') {
            $this->showCvForm($_input, $result['msg']);
        }

        if(file_exists($_FILES['image']['tmp_name'])){

            //$type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/cv/';
            $result = fileUploader($input,$_FILES['image']);
            //fileRemover($input['upload_dir'],$cv->fields['image']);
            $cv->image = $result['image_name'];

            $result = $cv->save();
        }

        if(file_exists($_FILES['cvfile']['tmp_name'])){

            //$type  = explode('/',$_FILES['image']['type']);

            $input['upload_dir'] = ROOT_DIR.'statics/cv/';
            $result = fileUploader($input,$_FILES['cvfile']);
            //fileRemover($input['upload_dir'],$cv->fields['image']);
            $cv->cvfile = $result['image_name'];

            $result = $cv->save();
        }


        $msg = 'عملیات با موفقیت انجام شد';

        $messageStack->add_session('message',$msg, 'success');

        redirectPage(RELA_DIR.'cv', $msg);
        die();
    }

    /**
     * call contact us form.
     *
     * @author marjani
     * @date 2/27/2015
     *
     * @version 01.01.01
     */
    public function showCvForm($_input, $msg)
    {
        // breadcrumb
        global $breadcrumb;
        $breadcrumb->reset();
        $breadcrumb->add('تماس با ما');
        $export['list'] = $_input;
        $export['breadcrumb'] = $breadcrumb->trail();

        $this->fileName = 'cv.php';
        $this->template($export, $msg);
        die();
    }



    /*function sendfile ($fields)
    {
        print_r_debug('asdsa');
    global $messageStack;
        // print_r_debug($fields);

        $obj = new indexModel();
        $obj->setFields($fields);
        $result = $obj->validator();
        if ($result['result'] != 1) {
            $this->showALL($fields, $result['msg']);
            die();
        }

        if (file_exists($_FILES['file']['tmp_name'])) {


            $input['max_size'] = $_FILES['file']['size'];
            $input['upload_dir'] = ROOT_DIR . 'statics/files/' . $fields['email'] . '/';
            $result = fileUploader($input, $_FILES['file']);
            // if ($result['result']!=1){
                 $this->showALL($fields,$result['msg']);
                 die();
             }
print_r_debug($result);
            $obj->file = $result['image_name'];
            $result = $obj->save();
           // sendmail($fields['email'],'Mr.motarjem','فایل شما دریافت شد بزودی با شما تماس خواهیم گرفت');
        }
        $messageStack->add_session('message', "فایل شما ارسال شد بزودی با شما تماس خواهیم گرفت", 'success');
        redirectPage(RELA_DIR . 'index', "فایل شما ارسال شد بزودی با شما تماس خواهیم گرفت");
    }*/

}
