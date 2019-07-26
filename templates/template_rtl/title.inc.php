<?php
ob_start("ob_gzhandler");
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137723846-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-137723846-5');
    </script>



    <meta name="description" content=" <?=$meta_description?>">
    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <? /*
        <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/bootstrap.css" type="text/css" />

        <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/bootstrap-rtl.css" type="text/css" />
        <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/style-rtl.css" type="text/css" />
        <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/dark-rtl.css" type="text/css" />
    */ ?>
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/font-icons.css" type="text/css" />
    <? /*
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/font-icons-rtl.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/responsive-rtl.css" type="text/css" />
    */ ?>
    <link rel="stylesheet" href="<?=TEMPLATE_DIR?>css/custom.css" type="text/css" />


    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>include/rs-plugin/css/navigation.css">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/png" href="<?=TEMPLATE_DIR?>images/favicon.png"/>

    <!-- Document Title
    ============================================= -->
    <title><?=$title?></title>

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

<body class="no-transition" >

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">


    <!-- Header
    ============================================= -->
    <?
    $temp = explode('/',$_SERVER['QUERY_STRING']);
    $page = $temp[0] ?>

    <? if($admin_info!= -1 && $page == 'services' && is_numeric($temp[2]) ):?>
    <section style="background: #323232; padding: 10px; " class="text-center">
        <a class="btn btn-warning" href="<?=RELA_DIR?>admin/index.php?component=services&action=editServices&id=<?=$temp[2]?>">ویرایش</a>
    </section>
    <? endif;?>
    <header id="header">

        <div id="header-wrap" style="direction: rtl;">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>


                <div id="logo">
                    <a href="<?=RELA_DIR?>" class="standard-logo" data-dark-logo="<?=TEMPLATE_DIR?>images/logo-dark@2x.jpg"><img src="<?=TEMPLATE_DIR?>images/logo-dark@2x.jpg" alt="ایران ریموت مرکز ساخت سوئیچ خودرو"></a>
                    <a href="<?=RELA_DIR?>" class="retina-logo" data-dark-logo="<?=TEMPLATE_DIR?>images/logo-dark@2x.jpg"><img src="<?=TEMPLATE_DIR?>images/logo-dark@2x.jpg" alt="ایران ریموت مرکز ساخت سوئیچ خودرو"></a>
                </div>


                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-3" style="direction: ltr;">

                    <ul class="norightborder norightpadding norightmargin">
                        <li <?=( $page == '' || $page == 'index')?"class='current'":'';?>><a href="<?=RELA_DIR?>"><div>صفحه اصلی<i class="icon-home2"></i></div></a>


                        </li>

                        <li <?=( $page == 'services')?"class='current'":'';?> class="sub-menu"><a href="<?=RELA_DIR?>services/<?=SERVICES_SLUG?>"><div>انواع خدمات<i class="icon-file-alt"></i> </div></a>
                        </li>

                        <li <?=( $page == 'blog')?"class='current'":'';?> class="sub-menu"><a href="<?=RELA_DIR?>blog"><div>نمونه کارها<i class="icon-file-alt"></i> </div></a>
                        </li>
                        <li <?=( $page == 'cv')?"class='current'":'';?>><a href="<?=RELA_DIR?>cv"><div>درخواست خرید<i class="icon-users2"></i></div></a></li>


                        <li <?=( $page == 'contactus')?"class='current'":'';?>><a href="<?=RELA_DIR?>contactus"><div>تماس با ما<i class="icon-map-marker2"></i></div></a></li>


                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

