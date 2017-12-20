<div class="row topmargin-lg bottommargin-sm">
    <div class="fancy-title title-dotted-border title-center">
        <h1 class="">قیمت و نحوه ساخت سوئیچ و ریموت خودرو </h1>
    </div>

    <?php

    foreach ($list['category'] as $k => $cat):
        ?>
        <div class="col-lg-1 col-sm-1 col-">

            <div class="entry-image">
                <a href="<?=RELA_DIR?>/services/<?=$cat['parent_id']?>" class="text-center" >
                    <img class="image_fade" src="<?=RELA_DIR?><?=$cat['img_name']?>" alt="<?=$cat['alt_fa']?>">
                    <?=$cat['title_fa']?>
                </a>
            </div>

        </div>
        <?php
    endforeach;
    ?>






</div>


<section id="" class=" cloud1 clearfix"  >
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                <!-- Post Content
                ============================================= -->
                <div class="  ">
                    <div id="portfolio" class="portfolio grid-container clearfix">
                        <? foreach($list['services'] as $k => $v):?>
                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="<?=RELA_DIR?>statics/services/<?=$v['image']?>" alt="<?=$v['title']?>">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="<?=RELA_DIR?>statics/services/<?=$v['image']?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="<?=RELA_DIR?>services/<?=$v['parent_id']?>/<?=$v['Services_id']?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="<?=RELA_DIR?>services/<?=$v['parent_id']?>/<?=$v['Services_id']?>"><?=$v['title']?></a></h3>
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
