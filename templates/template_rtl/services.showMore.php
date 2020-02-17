
<section id="page-title" class="page-title-right rtl p-1">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li class="hidden-xs"><a href="<?=RELA_DIR?>">خانه</a></li>
            <li class="hidden-xs"><a href="<?=RELA_DIR?>services/<?=SERVICES_SLUG?>">خدمات</a></li>
            <li class="hidden-xs"><a href="<?=RELA_DIR?>services/<?=$export['cat_id']?>/<?=$export['cat_url']?>"><?=$export['cat_name']?></a></li>
            <li class="active"><?=$export['title']?></li>
        </ol>
        <div class="category-metas pull-left">دسته:
            <a rel="category tag" href="<?=RELA_DIR?>services/<?=$export['cat_id']?>/<?=$export['cat_url']?>"><?=$export['cat_name']?></a>
        </div>

    </div>
</section>
<section id="content" class="rtl" style="margin-bottom: 0px;">
    <div class="container clearfix ">
        <div class="col-md-12 text-right">
            <span class="date"> 
                <time class="published" datetime="<?=(explode(' ',$export['date'])[0])?>T<?=(explode(' ',$export['date'])[1])?>+03:30" itemprop="datePublished"     > به روز رسانی: <?=date("Y ,d M ", strtotime(explode(' ',$export['date'])[0]))?></time> 
            </span>
        </div>

        <h1 class="text-center p-2 m-0 " ><a href="<?=RELA_DIR?>services/,<?=$export['cat_id']?>,/<?=$export['Services_id']?>/<?=$export['url']?>"><?=$export['title']?></a></h1>
        
        

        <div class="col-md-4 col-sm-4 text-center top-fit p-half">
            <img src="<?=RELA_DIR?>statics/services/<?=$export['image']?>" alt="<?=$export['title']?>" class="fit">
        </div>
        <div class="col-md-4 col-sm-4 text-center top-fit p-half">
            <img src="<?=RELA_DIR?>statics/services/<?=$export['image2']?>" alt="<?=$export['alt2']?>" class="fit">
        </div>
        <div class="col-md-4 col-sm-4 text-center top-fit p-half">
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