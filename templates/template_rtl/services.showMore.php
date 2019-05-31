
<section id="page-title" class="page-title-right rtl">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?=RELA_DIR?>">خانه</a></li>
            <li><a href="<?=RELA_DIR?>services/<?=SERVICES_SLUG?>">خدمات</a></li>
            <li><a href="<?=RELA_DIR?>services/<?=$export['cat_id']?>/<?=$export['cat_url']?>"><?=$export['cat_name']?></a></li>
            <li class="active"><?=$export['title']?></li>
        </ol>
        <br>
        <br>
        <h1><?=$export['title']?></h1>
    </div>

</section>
<section id="content" class="rtl" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="col-md-4 text-center top-fit">
            <img src="<?=RELA_DIR?>statics/services/<?=$export['image']?>" alt="<?=$export['title']?>" class="fit">
        </div>
        <div class="col-md-4 text-center top-fit">
            <img src="<?=RELA_DIR?>statics/services/<?=$export['image2']?>" alt="<?=$export['alt2']?>" class="fit">
        </div>
        <div class="col-md-4 text-center top-fit">
            <img src="<?=RELA_DIR?>statics/services/<?=$export['image3']?>" alt="<?=$export['alt3']?>" class="fit">
        </div>
        <div class="clear"></div>
        <br>
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                        <p><?=$export['description']?></p>
                <span><a href="<?=RELA_DIR?>services/<?=SERVICES_SLUG?>">بازگشت به خدمات</a></span>
            </div>
        </div>
</section>