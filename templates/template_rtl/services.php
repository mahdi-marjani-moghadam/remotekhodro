<div class="container clearfix">
    <div class="row topmargin-sm bottommargin-sm">
        <div class="fancy-title title-dotted-border title-center">
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
                <div id="portfolio" class="portfolio grid-container portfolio-2 clearfix">
                    <? foreach ($export['services'] as $k => $v) : ?>
                        <article>
                            <div class="col-md-12">
                                <div class="col-md-3" style="height: 200px; overflow:hidden">
                                    <a href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>">
                                        <img class="cover" src="<?= RELA_DIR ?>statics/services/<?= $v['image'] ?>" alt="<?= $v['title'] ?>">
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <h3><a class="small-font10" href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>"><?= $v['title'] ?></a></h3>
                                    <span class="text-fit100"><?= $v['brief_description'] ?></span>
                                </div>
                            </div>
                        </article>

                    <? endforeach; ?>

                    <article class="portfolio-item pf-media pf-icons" style="display: none">
                        <div class="portfolio-image">
                            <a href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>" class="top-fit">
                                <img class="fit" src="<?= RELA_DIR ?>statics/services/<?= $v['image'] ?>" alt="<?= $v['title'] ?>">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="<?= RELA_DIR ?>statics/services/<?= $v['image'] ?>" class="left-icon" data-lightbox="image">+</a>
                                <a href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>" class="right-icon">...</a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a class="small-font10" href="<?= RELA_DIR ?>services/<?= $v['category_id'] ?>/<?= $v['Services_id'] ?>/<?= $v['url'] ?>"><?= $v['title'] ?></a></h3>
                            <span class="text-fit100"><?= $v['brief_description'] ?></span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
</div>