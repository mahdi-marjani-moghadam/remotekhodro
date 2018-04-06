

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">
                    <?
                    include_once ROOT_DIR.'component/blog/model/blog.model.php';
                    ?>
                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="small-thumbs">

                        <!-- middle post with photo in the right-->


                        <? foreach($list['blog'] as $k => $v):?>
                        <div class="entry clearfix">

                            <div class="entry-image">

                                <a href="" data-lightbox="image"><img class="image_fade" src="<?=RELA_DIR?>statics/blog/<?=$v['image']?>" alt="<?=$v['title']?>"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="<?=RELA_DIR?>blog/<?=$v['Blog_id']?>/<?=$v['title']?>"><?=$v['title']?></a></h2>
                                </div>
                                <div class="entry-content">
                                    <p><?=$v['description']?></p>
                                    <a href="<?=RELA_DIR?>blog/<?=$v['Blog_id']?>/<?=$v['title']?>"class="more-link"> درباره <?=$v['title']?> بیشتر بدانید. </a>
                                </div>
                            </div>
                        </div>



                        <?endforeach;?>


                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->
                    <ul class="pager nomargin">

                            <? foreach ($list['pagination'] as $k => $v): ?>
                                <li ><a href="<?=RELA_DIR?><?=$v['address']?>"><?=$v['label']?></a></li>
                            <? endforeach;?>

                    </ul><!-- .pager end -->

                </div><!-- .postcontent end -->


            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->

</div><!-- #wrapper end -->

