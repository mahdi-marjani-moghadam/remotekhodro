<!DOCTYPE html>
<html  lang="ar">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/bootstrap-rtl.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/style-rtl.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/dark-rtl.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/font-icons-rtl.css" type="text/css" />
    <!--<link rel="stylesheet" href="<?/*=TEMPLATE_DIR*/?>css/et-line.css" type="text/css" />-->


    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/responsive-rtl.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/custom.css" type="text/css" />


    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/navigation.css">

    <!-- Document Title
    ============================================= -->
    <title>ایران ریموت</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }
        .tp-video-play-button { display: none !important; }

        .tp-caption { white-space: nowrap; }

    </style>

</head>

<body class="stretched dark " dir="" >

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <? if(isset($list['banner']) && 1==2):?>
    <section id="slider" class="<!--slider-parallax--> revslider-wrap full-screen clearfix">

        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>    <!-- SLIDE  --><?foreach ($list['banner'] as $k =>$v):?>
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?=RELA_DIR?>statics/banner/<?=$v['image']?>" data-delay="12000"  data-saveperformance="off" data-title="<?=$v['title']?>">
                        <!-- MAIN IMAGE -->
                        <img src="<?=RELA_DIR?>statics/banner/<?=$v['image']?>"  alt="خواجوندی"  data-bgposition="left center" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                             data-x="540"
                             data-y="230"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; font-size: 60px;"><?=$v['title']?></div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                             data-x="600"
                             data-y="340"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 550px; white-space: normal;"><?=$v['description']?></div>



                    </li>
                    <!-- SLIDE  -->

                    <?endforeach;?></ul>
            </div>
        </div>

    </section>
    <? endif;?>
    <!-- Header
    ============================================= -->


    <header id="header">

        <div id="header-wrap" style="direction: rtl;">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">


                    <a href="index.html" class="standard-logo" data-dark-logo="<?php echo TEMPLATE_DIR; ?>/images/logo-dark.png">
                        <img  src="<?php echo TEMPLATE_DIR; ?>/images/logo-dark.png" alt="ساخت ریموت نگین غرب">
                    </a>
                    <a href="index.html" class="retina-logo" data-dark-logo="<?php echo TEMPLATE_DIR; ?>/images/logo-dark.png">
                        <img  src="<?php echo TEMPLATE_DIR; ?>/images/logo-dark.png" alt="ساخت ریموت نگین غرب">
                    </a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-3" style="direction: ltr;">
                    <?
                    $temp = explode('/',$_SERVER['QUERY_STRING']);
                    $page = $temp[0] ?>
                    <ul class="norightborder norightpadding norightmargin">
                        <li <?=( $page == '' || $page == 'index')?"class='current'":'';?>><a href="<?=RELA_DIR?>"><div>صفحه اصلی<i class="icon-home2"></i></div></a>


                        </li>

                        <li <?=( $page == 'sales')?"class='current'":'';?> class="sub-menu"><a href="<?=RELA_DIR?>services"><div>انواع خدمات<i class="icon-file-alt"></i> </div></a>
                        </li>

                        <li <?=( $page == 'blog')?"class='current'":'';?> class="sub-menu"><a href="<?=RELA_DIR?>blog"><div>وبلاگ<i class="icon-file-alt"></i> </div></a>
                        </li>
                        <li <?=( $page == 'cv')?"class='current'":'';?>><a href="<?=RELA_DIR?>cv"><div>درخواست خرید<i class="icon-users2"></i></div></a></li>


                        <li <?=( $page == 'contactus')?"class='current'":'';?>><a href="<?=RELA_DIR?>contactus"><div>تماس با ما<i class="icon-map-marker2"></i></div></a></li>


                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
