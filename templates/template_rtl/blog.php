<section id="page-title" class="page-title-right rtl p-1">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?php echo  RELA_DIR ?>">خانه</a></li>
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
                    <?php foreach ($export['blog'] as $k => $v) : ?>


                        <div class="col-md-6 col-sm-12 col-xs-12 blog-item">

                            <div class="entry-image">
                                <a href="<?php echo  RELA_DIR ?>statics/blog/<?php echo  $v['image'] ?>" data-lightbox="image">
                                    <img width="50" class="image_fade" src="<?php echo  RELA_DIR ?>statics/blog/<?php echo  $v['image'] ?>" alt="<?php echo  $v['title'] ?>">
                                </a>
                            </div>

                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="<?php echo  RELA_DIR ?>blog/<?php echo  $v['Blog_id'] ?>/<?php echo  $v['url'] ?>"><?php echo  $v['title'] ?></a></h2>
                                </div>
                                <div class="entry-content">

                                    <a href="<?php echo  RELA_DIR ?>blog/<?php echo  $v['Blog_id'] ?>/<?php echo  $v['url'] ?>" class="more-link"> درباره <?php echo  $v['title'] ?> بیشتر بدانید. </a>
                                </div>
                            </div>

                        </div>


                    <?php endforeach; ?>


                </div><!-- #posts end -->

                <!-- Pagination
                    ============================================= -->
                <ul class="pager nomargin">

                    <?php foreach ($export['pagination'] as $k => $v) : ?>
                        <li><a href="<?php echo  RELA_DIR ?><?php echo  $v['address'] ?>"><?php echo  $v['label'] ?></a></li>
                    <?php endforeach; ?>

                </ul><!-- .pager end -->

            </div><!-- .postcontent end -->


        </div>

    </div>

</section><!-- #content end -->

<!-- Footer
    ============================================= -->

</div><!-- #wrapper end -->
<?php $counter = 0 ?>
<script type="application/ld+json">
    {
        "@context": "https://www.schema.org",
        "@type": "ItemList",
        "url": "<?php echo  RELA_DIR ?>blog",
        "numberOfItems": "12",
        "itemListElement": [<?php foreach ($export['blog'] as $k => $v) : $counter++; ?> {
                    "@type": "Product",
                    "image": "<?php echo  RELA_DIR ?>statics/blog/<?php echo  $v['image'] ?>",
                    "url": "<?php echo  RELA_DIR ?>blog/<?php echo  $v['Blog_id'] ?>/<?php echo  $v['url'] ?>",
                    "name": "<?php echo  $v['title'] ?>",
                    "description": "<?php echo  $v['title'] ?>",
                    "brand": "<?php echo  $v['cat_name'] ?>",
                    "sku": 10000,
                    "offers": 10000,
                    "review": "",
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "5",
                        "reviewCount": "<?php echo  $counter + 10 ?>"
                    }
                }
                <?php if (count($export['blog']) - $counter != 0) { ?>, <?php } ?><?php endforeach; ?>
                ]
    }
</script>