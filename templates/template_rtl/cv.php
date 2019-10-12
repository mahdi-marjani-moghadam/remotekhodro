<section id="content" style="direction: rtl">


    <div class="content-wrap">


        <div class="container clearfix">


            <div>

                <!-- Contact Form

                ============================================= -->

                <h1 class="center" style="font-family: iransans-b;font-size: 2em;">ارسال درخواست</h1>


                <div class="contact">


                    <form class="nobottommargin" id="template-contactform" name="template-contactform"
                          action="<?= RELA_DIR ?>order" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="add">


                        <? if ($msg != '') { ?>
                            <div class="alert alert-danger">
                                <? echo $msg; ?></div>
                        <? } ?>

                        <? if ($success != '') { ?>
                            <div class="alert alert-success">
                                <? echo $success; ?></div>
                        <? } ?>


                        <div class="col_one_third">
                            <label for="template-contactform-name">نام و نام خانوادگی
                                <small>*</small>
                            </label>
                            <input type="text" id="template-contactform-name" name="name" value=""
                                   class="sm-form-control required"/>
                        </div>
                        <div class="col_one_third ">
                            <label for="template-contactform-phone">تلفن همراه
                                <small>*</small>
                            </label>
                            <input type="text" id="template-contactform-phone" name="phone" value=""
                                   class="required sm-form-control"/>
                        </div>
                        <div class="col_one_third col_last">
                            <label for="template-contactform-email">ایمیل
                                <small>*</small>
                            </label>
                            <input type="email" id="template-contactform-email" name="email" value=""
                                   class="  sm-form-control"/>
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">خودروی مورد نظر</label>
                            <select id="template-contactform-service" name="services" class="sm-form-control">
                                <option value="">انتخاب کنید</option>
                                <option value="benz">بنز</option>
                                <option value="bmw">بی ام و</option>
                                <option value="porsche">پورشه</option>
                                <option value="maserati">مازراتی</option>
                                <option value="kia">کیا</option>
                                <option value="honda">هوندا</option>
                                <option value="hyundai">هیوندا</option>
                                <option value="renault">رنو</option>
                                <option value="mitsubishi">میتسوبیشی</option>
                                <option>دیگر</option>
                            </select>
                        </div>

                        <div class="col_full">
                            <label for="template-contactform-subject">آدرس
                                <small>*</small>
                            </label>
                            <input type="text" id="template-contactform-subject" name="address" value=""
                                   class="required sm-form-control"/>
                        </div>

                        <div class="col_full">
                            <label for="template-contactform-message">پیغام </label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="comment"
                                      rows="6" cols="30"></textarea>
                        </div>


                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit"
                                    name="submit" value="submit">ارسال
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

