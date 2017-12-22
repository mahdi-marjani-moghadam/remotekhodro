<!DOCTYPE html>
<html dir="rtl" lang="en-US">
<head>


    <meta name="description" content="<?=$meta_description?>">
    <meta name="keywords" content="<?=$meta_keyword?>">
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
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/responsive-rtl.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/custom.css" type="text/css" />


    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/navigation.css">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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

<body class=" " >

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">


    <!-- Header
    ============================================= -->


    <header id="header">

        <div id="header-wrap" style="direction: rtl;">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>


                <div id="logo">
                    <a href="<?=RELA_DIR?>" class="standard-logo" data-dark-logo="<?=TEMPLATE_DIR?>images/logo-dark@2x.png"><img src="<?=TEMPLATE_DIR?>images/logo-dark@2x.png" alt="نگین غرب مرکز ساخت سوئیچ خودرو"></a>
                    <a href="<?=RELA_DIR?>" class="retina-logo" data-dark-logo="<?=TEMPLATE_DIR?>images/logo-dark@2x.png"><img src="<?=TEMPLATE_DIR?>images/logo-dark@2x.png" alt="Canvas Logo"></a>
                </div>

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

