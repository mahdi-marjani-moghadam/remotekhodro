<section id="page-title" class="page-title-right rtl">
    <div class="container clearfix">
        <h1><?=$list['title']?></h1>
        <ol class="breadcrumb">
            <li><a href="<?=RELA_DIR?>">خانه</a></li>
            <li><a href="<?=RELA_DIR?>services/ساخت-سوئیچ-ساخت-سوییچ-ساخت-ریموت">خدمات</a></li>
            <li><a href="<?=RELA_DIR?>services/<?=$list['cat_id']?>/<?=$list['cat_alt']?>"><?=$list['cat_name']?></a></li>
            <li class="active"><?=$list['title']?></li>
        </ol>
    </div>
</section>
<section id="content" class="rtl" style="margin-bottom: 0px;">
    <div class="content-wrap">
            <div class="clear"></div>
            <div id="portfolio" class="portfolio grid-container portfolio-1 clearfix" style="position: relative; height: 3010px;">
                <article class="portfolio-item pf-media pf-icons clearfix" style="position: absolute; left: 0px; top: 0px;">
                    <div class="portfolio-image">
                        <img src="<?=RELA_DIR?>statics/services/<?=$list['image']?>" alt="<?=$list['title']?>">
                    </div>
                    <div class="portfolio-desc">
                        <h3><?=$list['title']?></h3>
                        <span><a href="<?=RELA_DIR?>services">بازگشت به سرویس ها</a></span>
                        <p><?=$list['description']?></p>
                    </div>
                </article>
            </div><!-- #portfolio end -->
        </div>
</section>