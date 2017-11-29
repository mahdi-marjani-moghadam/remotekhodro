
<section id="content">

        <div class="content-wrap">

            <div class="container clearfix">


                <!-- Portfolio Items
                ============================================= -->




                <h3 class="center"style="padding-top: 50px; font-size: 3em; font-family: iransans-b">تیم ما</h3>

                <div id="oc-fbox" class="owl-carousel fbox-carousel carousel-widget" data-margin="40" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-lg="3">
                <?foreach ($list['list'] as $k =>$v):?>
                    <div class="oc-item">
                        <div class="feature-box fbox-center  fbox-outline fbox-light fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><img src="<?=RELA_DIR?>statics/team/<?=$v['image']?>"></a>
                            </div>
                            <h3><?=$v['title']?></h3>
                            <p><?=$v['description']?></p>
                        </div>
                    </div>

                   <?endforeach;?>



                </div>



            </div>
        </div>



    </section>


