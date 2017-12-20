

<section id="" class=" cloud1 clearfix"  >
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                <!-- Post Content
                ============================================= -->
                <div class="  ">
                    <div id="portfolio" class="portfolio grid-container clearfix">
                        <? foreach($list as $k => $v):?>
                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="<?=RELA_DIR?>statics/services/<?=$v['image']?>" alt="<?=$v['title']?>">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="<?=RELA_DIR?>statics/services/<?=$v['image']?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-sinle.html"><?=$v['title']?></a></h3>
                                <span><a href="#"><?=$v['brief_description']?></a>
                            </div>
                        </article>
                        <? endforeach;?>

                    </div>






        </div>
                </div>
            </div>
        </div>
    </div>


    </section><!-- #content end -->
