

<section id="" class=" cloud1 clearfix"  >
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">

                    <!-- Page Title
                    ============================================= -->

                    <!-- Content
                    ============================================= -->
                    <section id="content">


                                <!-- Post Content
                                ============================================= -->
                                <div style="direction: rtl;" class="postcontent nobottommargin clearfix">

                                    <ul id="portfolio-filter" class="portfolio-filter FullScreen-Toggle clearfix" style="font-family: Arial;">

                                        <li class="activeFilter"><a href="#" data-filter="all">تمام خودرو ها</a></li>
                                        <? foreach($list['category'] as $k => $v):?>
                                        <li style="padding: 0px;"><a href="#" data-filter=".faq-<?=$v['Category_id']?>"><?=$v['title_en']?></a></li>

                                        <? endforeach;?>
                                    </ul>

                                    <div class="clear"></div>
                                    <? foreach($list['sales'] as $k => $v):?>
                                    <div id="faqs" class="faq-<?=$v['category_id']?> faq-<?=$v['parent_id']?>">




                                        <div class="faq-<?=$v['category_id']?> faq-<?=$v['parent_id']?> toggle faq ">

                                            <div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i><?=$v['title']?></div>
                                            <div class="togglec content" "><?=$v['description']?>
                                            <br><a href="<?=RELA_DIR?>statics/sales/<?=$v['image']?>">فایل کامل بخشنامه</a>
                                            </div>
                                        </div>

                                    </div>

                                    <? endforeach;?>
                                </div><!-- .postcontent end -->

                                <!-- Sidebar
                                ============================================= -->



                    </section><!-- #content end -->


                    <!-- Post Content
                    ============================================= -->
                <div class="  ">




                    <div class="panel panel-default">
                        <!-- Default panel contents -->



                        <!-- List group -->
                        <ul class="list-group">



                        </ul>
                    </div>





        </div>
                </div>
            </div>
        </div>
    </div>


    </section><!-- #content end -->
