
        <div class="container clearfix">

            <div class="row topmargin-lg bottommargin-sm">


                <div class="col-md-4 col-sm-6 bottommargin">

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line2-speedometer"></i></a>
                        </div>
                        <h3>سرعت در ساخت و کد دهی ریموت خودرو</h3>

                    </div>

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-paper"></i></a>
                        </div>
                        <h3>تجربه ۲۰ ساله </h3>
                        <p>مشتریان ما رزومه ما هستند</p>
                    </div>

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-layers"></i></a>
                        </div>
                        <h3>به روز بودن</h3>
                        <p>استفاده از دستگاه های بروز کمپانی ها</p>
                    </div>

                </div>

                <div class="col-md-4 hidden-sm bottommargin center">
                    <img  src="<?=TEMPLATE_DIR?>images/remote-png.png" alt="خواجوندی">
                </div>

                <div class="col-md-4 col-sm-6 bottommargin rtl">

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-power"></i></a>
                        </div>
                        <h3>ریموت ها با متریال درجه یک</h3>
                        <p>استفاده از بهترین اجناس </p>
                    </div>

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-check"></i></a>
                        </div>
                        <h3>معتبر ترین سازنده ریموت و سوییچ </h3>
                        <p>Kia , Hyundai , Benz , Bmw , Porsche ,...</p>
                    </div>

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-bulb"></i></a>
                        </div>
                        <h3>ارائه خدمات vip</h3>
                        <p>Kia , Hyundai , Benz , Bmw , Porsche ,...</p>
                    </div>

                </div>

            </div>
            <div class="clear"></div>
            <div class="widget clearfix" style="display: none">
                <h4>instagram</h4>

            <!--<div id="instagram-photos" class="instagram-photos masonry-thumbs col-5" data-user="3456095832" data-count="15"></div>-->


                ...
            </div>
                 <div class="clear"></div>


            <h1>نمونه کارها</h1>
            <div class="ltr">
                <div  id="oc-posts" class="owl-carousel  posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4">



                        <? foreach ($list['blog'] as $k => $v):?>

                            <div style="direction: rtl" class= "oc-item">
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