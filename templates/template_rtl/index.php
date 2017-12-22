
        <div class="container clearfix">

            <div class="row topmargin-lg bottommargin-sm">
                <div class="fancy-title title-dotted-border title-center">
                    <h1 class="">قیمت و نحوه ساخت سوئیچ و ریموت خودرو </h1>
                </div>

                <?php

                foreach ($export['category'] as $k => $cat):
                ?>
                <div class="col-lg-1 col-sm-1 col-">

                    <div class="entry-image">
                        <a href="<?=RELA_DIR?>services/<?=$cat['parent_id']?>" class="text-center" >
                            <img class="image_fade" src="<?=RELA_DIR?><?=$cat['img_name']?>" alt="<?=$cat['alt_fa']?>">
                            <?=$cat['title_fa']?>
                        </a>
                    </div>

                </div>
                <?php
                endforeach;
                ?>






                </div>

                <div class="col-md-4 col-sm-6 bottommargin">

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-heart"></i></a>
                        </div>
                        <h3>سرعت در تحویل</h3>
                        <p>سرعت ما همراه با تجربه است</p>
                    </div>

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-paper"></i></a>
                        </div>
                        <h3>تجربه 10 ساله </h3>
                        <p>مشتریان ما رزومه ما هستند</p>
                    </div>

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-layers"></i></a>
                        </div>
                        <h3>به روز بودن</h3>
                        <p>استفاده از نرم افزار های بروز کمپانی ها</p>
                    </div>

                </div>

                <div class="col-md-4 hidden-sm bottommargin center">
                    <img  src="<?=TEMPLATE_DIR?>images/remote-png.png" alt="خواجوندی">
                </div>

                <div class="col-md-4 col-sm-6 bottommargin">

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-power"></i></a>
                        </div>
                        <h3>متریال درجه یک</h3>
                        <p>استفاده از بهترین اجناس بازار</p>
                    </div>

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-check"></i></a>
                        </div>
                        <h3>تامین کنندگان معتبر</h3>
                        <p>VALEO , 3M , BOSCH , BORGWARNER EDSCHA</p>
                    </div>

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-bulb"></i></a>
                        </div>
                        <h3>ارائه خدمات vip</h3>
                    </div>

                </div>

            </div>





        <div class="container clearfix">
            <h1>نمونه کارها</h1>
            <div class="ltr">
                <div  id="oc-posts" class="owl-carousel  posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4">


                    <? foreach($export['blog'] as $k => $v):?>

                        <div style="direction: rtl" class="oc-item">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="<?=RELA_DIR?>blog/<?=$v['Blog_id']?>/<?=$v['title']?>" ><img class="image_fade" src="<?=RELA_DIR?>statics/blog/small/<?=$v['imagesmall']?>" alt="<?=$v['title']?>"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="<?=RELA_DIR?>blog/<?=$v['Blog_id']?>/<?=$v['title']?>"><?=$v['title']?></a></h3>
                                </div>

                                <div class="entry-content">
                                    <p><?=$v['brief_description']?></p>
                                </div>
                            </div>
                        </div>


                    <?endforeach;?>
                </div>
            </div>
</div>

        </div>