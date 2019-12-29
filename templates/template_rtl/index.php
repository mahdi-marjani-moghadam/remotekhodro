
        <div class="container clearfix">

            <div class="row topmargin-sm bottommargin-sm">
                <div class="fancy-title title-dotted-border title-center">
                    <h1 >ایران ریموت ارائه دهنده خدمات ساخت سوئیچ و ریموت <span class="text-orange">۲۴ ساعته در محل</span></h1>
                </div>

                <div class="cat-item clearfix">
                    <?php
                    foreach ($export['category'] as $k => $cat):
                    ?>
                        <div class="col-lg-1 col-sm-1 col-xs-4">

                            <div class="entry-image">
                                <a href="<?=RELA_DIR?>services/<?=$cat['Category_id']?>/<?=$cat['url']?>" class="text-center" >
                                    <img class="image_fade fix60" src="<?=RELA_DIR?><?=$cat['img_name']?>" alt="<?=$cat['alt_fa']?>">
                                    <?=$cat['title_fa']?>
                                </a>
                            </div>

                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12 rtl text-center" >
                    <div class="fancy-title title-dotted-border title-center">
                        <h2 >درباره مرکز ایران ریموت</h2>
                    </div>
                    موسسه ایران ریموت متخصص در زمینه ساخت و پروگرام ریموت و سوئیچ با سابقه ای بالا توانسته خدمات تعمیر، تعویض، کددهی، کپی کلید یدک انواع خودرو را در کمترین زمان برای تمامی شهر های ایران ارائه دهد.

                    <div class="clearfix"><br></div>

                </div>
                <div class="col-md-4 col-sm-6 bottommargin rtl">

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn">
                        <h3>سرعت در تحویل</h3>
                        <p>سرعت ما همراه با تجربه است</p>
                    </div>
                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <h3>تجربه 20 ساله </h3>
                        <p>مشتریان ما رزومه ما هستند</p>
                    </div>
                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <h3>به روز بودن</h3>
                        <p>استفاده از نرم افزار های بروز کمپانی ها</p>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm bottommargin center">
                    <img  src="<?=TEMPLATE_DIR?>images/car-remote-key.jpg" alt="ساخت ریموت ">
                </div>
                <div class="col-md-4 col-sm-6 bottommargin rtl">
                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn">
                        <h3>سوئیچ با متریال درجه یک </h3>
                        <p>استفاده از بهترین اجناس بازار</p>
                    </div>
                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <h3>تامین کنندگان معتبر</h3>
                        <p>Benz, BMW, Porsche, Mazda</p>
                    </div>
                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <h3>ساخت سوئیچ ۲۴ ساعته در تهران</h3>
                        <p>ارائه خدمات VIP</p>
                    </div>
                </div>

            </div>
            <div class="container clearfix">
                <div class="fancy-title title-dotted-border title-center" >
                    <h2>نمونه کارها</h2>
                </div>
                <div>
                    <? foreach($export['blog'] as $k => $v):?>
                        <div class="col-md-2" style="height: 300px; overflow: hidden">
                            <div class="entry-image">
                                <a class="top-fit" href="<?=RELA_DIR?>blog/<?=$v['Blog_id']?>/<?=$v['title']?>" >
                                    <img class="image_fade fit"  src="<?=RELA_DIR?>statics/blog/small/<?=$v['imagesmall']?>"  alt="<?=$v['title']?>">
                                </a>
                            </div>
                            <div class="entry-title">
                                <a href="<?=RELA_DIR?>blog/<?=$v['Blog_id']?>/<?=$v['title']?>"><?=$v['title']?></a>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
        </div>