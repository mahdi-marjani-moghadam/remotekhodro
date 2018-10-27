<section id="page-title" class="page-title-right rtl">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?=RELA_DIR?>">خانه</a></li>
            <li><a href="<?=RELA_DIR?>services/ساخت-سوئیچ-ساخت-سوییچ-ساخت-ریموت">خدمات</a></li>
            <li><a href="<?=RELA_DIR?>services/<?=$list['cat_id']?>/<?=$list['cat_alt']?>"><?=$list['cat_name']?></a></li>
            <li class="active"><?=$list['title']?></li>
        </ol>
    </div>
    <br>
    <br>
    <h1><?=$list['title']?></h1>
</section>
<section id="content" class="rtl" style="margin-bottom: 0px;">
    <div class="content-wrap">

        <div class="col-md-4 text-center top-fit">
            <img src="<?=RELA_DIR?>statics/services/<?=$list['image']?>" alt="<?=$list['title']?>" class="fit">
        </div>
        <div class="col-md-4 text-center top-fit">
            <img src="<?=RELA_DIR?>statics/services/<?=$list['image2']?>" alt="<?=$list['alt2']?>" class="fit">
        </div>
        <div class="col-md-4 text-center top-fit">
            <img src="<?=RELA_DIR?>statics/services/<?=$list['image3']?>" alt="<?=$list['alt3']?>" class="fit">
        </div>
        <div class="clear"></div>
        <br>
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                        <p><?=$list['description']?></p>
                <span><a href="<?=RELA_DIR?>services">بازگشت به خدمات</a></span>
            </div>
        </div>
</section>