<div class="container clearfix">

    <div class="row topmargin-sm bottommargin-sm">
        <div class="fancy-title title-dotted-border title-center">
            <h1>ایران ریموت مرکز تخصصی  ساخت سوئیچ و ریموت </h1>
        </div>

        <div class="cat-item clearfix">
            <?php
            foreach ($export['category'] as $k => $cat) :
            ?>
                <div class="col-lg-1 col-sm-1 col-xs-4">
                    <a href="<?= RELA_DIR ?>services/<?= $cat['Category_id'] ?>/<?= $cat['url'] ?>" class="text-center">
                        <img class="img-responsive" src="<?= RELA_DIR ?><?= $cat['img_name'] ?>" alt="<?= $cat['alt_fa'] ?>">
                        <?= $cat['title_fa'] ?>
                    </a>
                </div>
            <?php
            endforeach;
            ?>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 rtl text-center">
            <div class="fancy-title title-dotted-border title-center">
                <h2>نمایندگی ساخت سوئیچ ایران ریموت</h2>
            </div>
            نمایندگی ایران ریموت یکی از نمایندگی های فعال نگین غرب می باشد که در زمینه
            <a href="<?= RELA_DIR ?>services/خدمات-ساخت-سوئیچ-ساخت-ریموت">ساخت سوئیچ</a>
            ، پروگرام ریموت و تعمیر سوئیچ با سابقه ای بالا توانسته
            خدمات تعمیر، تعویض، کددهی، کپی کلید یدک انواع خودرو را در کمترین زمان برای تمامی شهر های ایران ارائه دهد.


            <div class="clearfix"><br></div>

        </div>
        <div class="col-md-4 col-sm-6 bottommargin rtl">

            <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn">
                <h3>سرعت در تحویل</h3>
                <p>سرعت ما همراه با تجربه است</p>
            </div>
            <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                <h3>تجربه 20 ساله </h3>
                <p>مشتریان ما رزومه ما هستند</p>
            </div>
            <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                <h3>به روز بودن</h3>
                <p>استفاده از نرم افزار های بروز کمپانی ها</p>
            </div>
        </div>
        <div class="col-md-4 hidden-sm bottommargin center">
            <div class="col-md-12 col-sm-12 col-xs-12" id="50546714133">
                <script type="text/JavaScript" src="https://www.aparat.com/embed/hcgt7?data[rnddiv]=50546714133&data[responsive]=yes"></script>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 bottommargin rtl">
            <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn">
                <h3>سوئیچ با متریال درجه یک </h3>
                <p>استفاده از بهترین اجناس بازار</p>
            </div>
            <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                <h3>تامین کنندگان معتبر</h3>
                <p>Benz, BMW, Porsche, Mazda</p>
            </div>
            <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                <h3>ساخت سوئیچ در تهران</h3>
                <p>ارائه خدمات VIP</p>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="fancy-title title-dotted-border title-center">
                <h2>خدمات ساخت و کددهی ریموت و سوئیچ</h2>
            </div>


            - <a href="<?= RELA_DIR ?>services/,221,/3/%D8%B3%D8%A7%D8%AE%D8%AA-%D8%B3%D9%88%D8%A6%DB%8C%DA%86-%D8%A8%D9%86%D8%B2-%D8%B3%D8%A7%D8%AE%D8%AA-%D8%B1%DB%8C%D9%85%D9%88%D8%AA-%D8%A8%D9%86%D8%B2"><b>ساخت سوئیچ و ریموت بنز</b></a> <br>
            - <a href="<?= RELA_DIR ?>services/,222,/1/%D8%B3%D8%A7%D8%AE%D8%AA-%D8%B3%D9%88%D8%A6%DB%8C%DA%86-%D8%A8%DB%8C-%D8%A7%D9%85-%D9%88-%D8%B3%D8%A7%D8%AE%D8%AA-%D8%B1%DB%8C%D9%85%D9%88%D8%AA-%D8%A8%DB%8C-%D8%A7%D9%85-%D9%88-bmw">ساخت ریموت و سوئیچ بی ام و</a>
            <p>
                در نمایندگی ایران ریموت، متخصصان ما در زمینه ساخت ریموت و سوئیچ انواع خودرو خارجی در هر مدل و سالی خدمات در محل را ارائه می دهد.
            </p>

        </div>
    </div>
    <div class="container clearfix">
        <div class="fancy-title title-dotted-border title-center">
            <h2>نمونه کارها</h2>
        </div>
        <div>
            <?php foreach ($export['blog'] as $k => $v) : ?>
            <div class="col-md-2" style="height: 300px; overflow: hidden">
                <div class="entry-image">
                    <a class="top-fit" href="<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['title'] ?>">
                        <img class="image_fade fit" src="<?= RELA_DIR ?>statics/blog/small/<?= $v['imagesmall'] ?>" alt="<?= $v['title'] ?>">
                    </a>
                </div>
                <div class="entry-title">
                    <a href="<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['title'] ?>"><?= $v['title'] ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>