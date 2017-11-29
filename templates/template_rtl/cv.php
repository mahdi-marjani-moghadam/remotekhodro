

<section id="content"style="direction: rtl">



    <div class="content-wrap">



        <div class="container clearfix">



            <div >

                <!-- Contact Form

                ============================================= -->

                <h1 class="center" style="font-family: iransans-b;font-size: 2em;">ارسال درخواست</h1>



                <div class="contact">







                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?=RELA_DIR?>cv" method="post" enctype="multipart/form-data">



                        <? if($msg != ''){ ?>

                            <div class="alert alert-danger">

                                <? echo $msg;?></div>

                        <?}?>

                        <? if($success != ''){ ?>

                            <div class="alert alert-success">

                                <? echo $success;?></div>

                        <?}?>







                        <div class="col_one_third">

                            <label for="template-contactform-name">نام <small>*</small></label>

                            <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />

                        </div>

                        <div class="col_one_third">

                            <label for="template-contactform-subject">نام خانوادگی <small>*</small></label>

                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />

                        </div>




                        <div class="col_one_third col_last">

                            <label for="template-contactform-phone">تلفن همراه<small>*</small></label>

                            <input type="text" id="template-contactform-phone" name="phone" value="" class="required sm-form-control" />

                        </div>



                        <div class="clear"></div>


                        <div class="col_one_third">

                            <label for="template-contactform-email">ایمیل <small>*</small></label>

                            <input type="email" id="template-contactform-email" name="email" value="" class="  sm-form-control" />

                        </div>





                        <div class="col_one_third col_last">

                            <label for="template-contactform-service">خودروی مورد نظر</label>

                            <select id="template-contactform-service" name="service" class="sm-form-control">

                                <option value="">انتخاب کنید</option>


                            </select>

                        </div>



                        <div class="clear"></div>

                        <div class="col_full">

                            <label for="template-contactform-subject">آدرس <small>*</small></label>

                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />

                        </div>

                        <div class="col_half">

                            <label for="template-contactform-message">اپلود عکس ریموت </label>

                            <input type="file" id="template-contactform-file" name="file" value="" class=" sm-form-control" />

                        </div>


                        <div class="col_full">

                            <label for="template-contactform-message">پیغام </label>

                            <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>

                        </div>



                        <div class="col_full hidden">

                            <input type="text" id="template-contactform-botcheck" name="botcheck" value="" class="sm-form-control" />

                        </div>

                        <input type="hidden" name="action" value="add">

                        <div class="col_full">

                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="submit" value="submit">ارسال</button>

                        </div>



                    </form>

                </div>





            </div>

        </div>

    </div>

</section>

