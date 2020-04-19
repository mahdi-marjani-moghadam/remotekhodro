<div class="container clearfix">
    <div class="row topmargin-sm bottommargin-sm">
        <img src="<?=RELA_DIR?>statics/banner/banner-mehrabi-store.jpg" alt="mehrabani car key">
    </div>    
    <div class="row topmargin-sm bottommargin-sm">
        <div class="fancy-title title-dotted-border title-center    ">
            <h1>ساخت سوئیچ خودرو </h1>
        </div>
        <?php
        foreach ($export['category'] as $k => $cat) :
        ?>
            <div class="col-lg-1 col-sm-1 col-xs-4">

                <div class="entry-image">
                    <a href="<?= RELA_DIR ?>services/<?= $cat['Category_id'] ?>/<?= $cat['url'] ?>" class="text-center">
                        <img class="image_fade fix60" src="<?= RELA_DIR ?><?= $cat['img_name'] ?>" alt="<?= $cat['alt_fa'] ?>">
                        <?= $cat['title_fa'] ?>
                    </a>
                </div>

            </div>
        <?php
        endforeach;
        ?>
    </div>
    <section id="" class=" cloud1 clearfix rtl">
        <div class="content-wrap">
            <h2 class="center">دسته بندی ساخت ریموت ماشین </h2>
            <div class="col-md-12 ">
                <? foreach ($export['services'] as $k => $v) : ?>
                    <article class="row service-list">
                        <div class="col-md-12 col-sm-12 mb-2">
                            <div class="col-md-3 col-sm-3">
                                <a style="height: 150px" href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>">
                                    <img class="img-responsive img-thumbnail img-wrapper" src="<?= RELA_DIR ?>statics/services/<?= $v['image'] ?>" alt="<?= $v['title'] ?>">
                                </a>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <h3><a class="small-font10" href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>"><?= $v['title'] ?></a></h3>
                                <span class="text-fit100"><?= $v['brief_description'] ?></span>
                            </div>
                        </div>
                    </article>

                <? endforeach; ?>
            </div>
        </div>
    </section><!-- #content end -->
</div>