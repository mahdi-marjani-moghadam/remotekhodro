


<section id="" class=" cloud1 clearfix"  >
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">



                    <h3 class="center"> مقالات</h3>





                    <div class="container clearfix">

                        <!-- Portfolio Filter
                        ============================================= -->
                        <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                            <li class="activeFilter"><a href="#" data-filter="*">همه</a></li>
                            <li><a href="#" data-filter=".pf-icons">کلاس</a></li>
                            <li><a href="#" data-filter=".pf-illustrations">سینما</a></li>
                            <li><a href="#" data-filter=".pf-uielements">تئاتر</a></li>
                            <li><a href="#" data-filter=".pf-media">مهد</a></li>
                            <li><a href="#" data-filter=".pf-graphics">نمونه</a></li>

                        </ul><!-- #portfolio-filter end -->

                        <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                            <i class="icon-random"></i>
                        </div>

                        <div class="clear"></div>

                        <!-- Portfolio Items
                        ============================================= -->
                        <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-notitle clearfix">
                            <? foreach($list['article'] as $k => $v):?>
                                <article class="portfolio-item pf-media pf-icons">
                                    <div class="portfolio-image">
                                        <a href="">
                                            <img src="<?=RELA_DIR?>statics/article/<?=$v['title']?>" alt="Open Imagination">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="<?=RELA_DIR?>statics/article/<?=$v['title']?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                            <a href="" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href=""><?=$v['title']?></a></h3>
                                    </div>
                                </article>
                            <? endforeach;?>


                        </div><!-- #portfolio end -->

                        <? foreach ($list['pagination'] as $k => $v): ?>
                            d
                        <? endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



