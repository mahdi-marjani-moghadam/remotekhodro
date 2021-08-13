<section id="page-title" class="page-title-right rtl p-1">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?= RELA_DIR ?>">خانه</a></li>
            <li class="active">نمونه کارها</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap p-2">
        <div class="container clearfix">
            <h1 class="text-center">نمونه کار ساخت سوئیچ و ریموت</h1>

            <!-- Post Content
                ============================================= -->
            <div class=" nobottommargin clearfix">
                <!-- Posts
                    ============================================= -->
                <div id="posts" class="small-thumbs rtl">

                    <!-- middle post with photo in the right-->
                    <? foreach ($export['blog'] as $k => $v) : ?>


                        <div class="col-md-6 col-sm-12 col-xs-12 blog-item">

                            <div class="entry-image">
                                <a href="<?= RELA_DIR ?>statics/blog/<?= $v['image'] ?>" data-lightbox="image">
                                    <img width="50" class="image_fade" src="<?= RELA_DIR ?>statics/blog/<?= $v['image'] ?>" alt="<?= $v['title'] ?>">
                                </a>
                            </div>

                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['url'] ?>"><?= $v['title'] ?></a></h2>
                                </div>
                                <div class="entry-content">

                                    <a href="<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['url'] ?>" class="more-link"> درباره <?= $v['title'] ?> بیشتر بدانید. </a>
                                </div>
                            </div>

                        </div>


                    <? endforeach; ?>


                </div><!-- #posts end -->

                <!-- Pagination
                    ============================================= -->
                <ul class="pager nomargin">

                    <? foreach ($export['pagination'] as $k => $v) : ?>
                        <li><a href="<?= RELA_DIR ?><?= $v['address'] ?>"><?= $v['label'] ?></a></li>
                    <? endforeach; ?>

                </ul><!-- .pager end -->

            </div><!-- .postcontent end -->


        </div>

    </div>

</section><!-- #content end -->

<!-- Footer
    ============================================= -->

</div><!-- #wrapper end -->
<? $counter = 0 ?>
<script type="application/ld+json">
    {
        "@context": "https://www.schema.org",
        "@type": "ItemList",
        "url": "<?= RELA_DIR ?>blog",
        "numberOfItems": "12",
        "itemListElement": [<? foreach ($export['blog'] as $k => $v) : $counter++; ?> {
                    "@type": "Product",
                    "image": "<?= RELA_DIR ?>statics/blog/<?= $v['image'] ?>",
                    "url": "<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['url'] ?>",
                    "name": "<?= $v['title'] ?>",
                    "description": "<?= $v['title'] ?>",
                    "brand": "<?= $v['cat_name'] ?>",
                    "sku": 10000,
                    "offers": 10000,
                    "review": "",
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "5",
                        "reviewCount": "<?= $counter + 10 ?>"
                    }
                }
                <? if (count($export['blog']) - $counter != 0) { ?>, <? } ?><? endforeach; ?>
                ]
    }
</script>