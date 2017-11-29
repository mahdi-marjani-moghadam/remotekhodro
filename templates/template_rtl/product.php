



<section id="" class=" cloud1 clearfix"  >
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="">
                    <div class="row clearfix common-height">

                        <div class="col-md-6 center col-padding" style="background: url('<?=RELA_DIR?>statics/product/<?=$list['list'][0]['image2'];?>') center center no-repeat; background-size: cover;">
                            <div>&nbsp;</div>
                        </div>

                        <div class="col-md-6 center col-padding" style="background-color: #1a181b;">
                            <div>
                                <div class="heading-block nobottomborder">
                                    <h3><span class="color"><?=$list['list'][0]['title'];?></span></h3>
                                    <h3><?=$list['list'][0]['brief_description'];?></h3>
                                </div>

                                <div class="center bottommargin">
                                    <a href="<?=$list['list'][0]['video'];?>" data-lightbox="iframe" style="position: relative;">
                                        <img src="<?=RELA_DIR?>statics/product/<?=$list['list'][0]['image'];?>" alt="Video">
                                        <span class="i-overlay nobg"><img src="<?=TEMPLATE_DIR?>images/icons/video-play.png" alt="Play"></span>
                                    </a>
                                </div>
                                <p class="lead nobottommargin"><?=$list['list'][0]['description'];?></p>
                            </div>
                        </div>

                    </div>

                    <!-- Post Content
                    ============================================= -->
                </div>
            </div>
        </div>
    </div>


</section><!-- #content end -->

