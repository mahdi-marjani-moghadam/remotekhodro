<section id="page-title" class="page-title-right rtl p-1">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?= RELA_DIR ?>">خانه</a></li>
            <li><a href="<?= RELA_DIR ?>blog/">نمونه کارها</a></li>
            <li class="active"><?= $export['title'] ?></li>
        </ol>
    </div>
</section>

<section id="" class=" cloud1 clearfix">
    <div class="content-wrap p-2">
        <div class="container clearfix">
            <h1 class="text-center"><?= $export['title'] ?></h1>
            <div class="row" style="direction: rtl;">

                <div class="pricing-box pricing-extended bottommargin clearfix">

                    <div class="pricing-desc">

                        <div class="pricing-features rtl">
                            <?= $export['car_description'] ?>
                        </div>
                    </div>

                    <div class="pricing-action-area">
                        <img src="<?= RELA_DIR ?>statics/blog/<?= $export['image'] ?>" alt="<?= $export['title'] ?>">
                        <div class="clearfix"><br></div>
                        <?= $export['description'] ?>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
    {
        "@context": "https://www.schema.org",
        "@type": "Product",
        "image": "<?= RELA_DIR ?>statics/blog/<?= $export['image'] ?>",
        "url": "<?= $_SERVER['SCRIPT_URI'] ?>",
        "name": "<?= $export['title'] ?>",
        "description": "<?= $export['title'] ?>",
        "brand": "<?= $export['cat_name'] ?>",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "10"
        },
        "sku": "0446310786",
        "mpn": "925872",
        "offers": {
            "@type": "AggregateOffer",
            "offerCount": "1",
            "lowPrice": "119.99",
            "highPrice": "199.99",
            "priceCurrency": "IRR"
        },
        "review": {
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5",
                "bestRating": "5"
            },
            "author": {
                "@type": "Person",
                "name": "Fred Benson"
            }
        }
    }
</script>