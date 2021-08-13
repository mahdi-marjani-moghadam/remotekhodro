<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>

    <meta name="description" content=" <?php echo  $meta_description ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo  TEMPLATE_DIR ?>css/custom.css?1" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
    <link rel="shortcut icon" type="image/png" href="<?php echo  TEMPLATE_DIR ?>images/favicon.png" />
    <title><?php echo  $title ?></title>
</head>

<body class="no-transition">
    <div id="wrapper" class="clearfix">
        <?php
        $temp = explode('/', $_SERVER['QUERY_STRING']);
        $page = $temp[0];
        ?>
        <?php if ($admin_info['result'] != -1 && is_array($admin_info) && $page == 'services' && is_numeric($temp[2])) : ?>
            <section style="background: #323232; padding: 10px; " class="text-center">
                <a class="btn btn-warning" href="<?php echo  RELA_DIR ?>admin/index.php?component=services&action=editServices&id=<?php echo  $temp[2] ?>">ویرایش</a>
            </section>
        <?php endif; ?>
        <header id="header">
            <div id="header-wrap" style="direction: rtl;">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><img style="width: 20px" src="<?php echo  TEMPLATE_DIR ?>css/images/icons/menu.svg"> </div>
                    <div id="logo">
                        <a href="<?php echo  RELA_DIR ?>" class="standard-logo" data-dark-logo="<?php echo  TEMPLATE_DIR ?>images/logo-dark@2x.jpg"><img height="100" src="<?php echo  TEMPLATE_DIR ?>images/logo-dark@2x.jpg" alt="ایران ریموت مرکز ساخت سوئیچ خودرو"></a>
                        <a href="<?php echo  RELA_DIR ?>" class="retina-logo" data-dark-logo="<?php echo  TEMPLATE_DIR ?>images/logo-dark@2x.jpg"><img height="100" src="<?php echo  TEMPLATE_DIR ?>images/logo-dark@2x.jpg" alt="ایران ریموت مرکز ساخت سوئیچ خودرو"></a>
                    </div>
                    <nav id="primary-menu" class="style-3" style="direction: ltr;">
                        <ul class="norightborder norightpadding norightmargin">
                            <li <?php echo ($page == '' || $page == 'index') ? "class='current'" : ''; ?>><a href="<?php echo  RELA_DIR ?>">
                                    <div>صفحه اصلی<i class="icon-home2"></i></div>
                                </a></li>
                            <li <?php echo ($page == 'services') ? "class='current sub-menu mega-menu'" : 'class="sub-menu mega-menu"'; ?> ><a href="<?php echo  RELA_DIR ?>services/<?php echo  SERVICES_SLUG ?>">
                                    <div>انواع خدمات<i class="icon-file-alt"></i> </div>
                                </a>
                                <div class="arrow"><img style="width: 20px" src="<?php echo  TEMPLATE_DIR ?>css/images/icons/menu.svg"></div>

                                <div class="">
                                    <ul class=" mega-menu-column">
                                        <?php
                                        include_once(ROOT_DIR . "component/services/model/services.model.php");
                                        $services = new services();

                                        $services = $services->getAll()->getList();
                                        // $services = $category->list;
                                        $i == 0;
                                        foreach ($services['export']['list'] as $k => $cat) :
                                            $i++;
                                            // dd($cat);
                                        ?>
                                            <li><a href="<?php echo  RELA_DIR ?>services/<?php echo  $cat['category_id'] ?>/<?php echo  $cat['Services_id'] ?>/<?php echo  $cat['url'] ?>"><?php echo $cat['title']; ?></a></li>

                                            <?php if ($i % 10 == 0) : ?>
                                                </ul>
                                                <ul class=" mega-menu-column">
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li <?php echo ($page == 'blog') ? "class='current'" : ''; ?> class="sub-menu"><a href="<?php echo  RELA_DIR ?>blog">
                                    <div>نمونه کارها<i class="icon-file-alt"></i> </div>
                                </a></li>
                            <li <?php echo ($page == 'cv') ? "class='current'" : ''; ?>><a href="<?php echo  RELA_DIR ?>order">
                                    <div>درخواست خرید<i class="icon-users2"></i></div>
                                </a></li>
                            <li <?php echo ($page == 'contactus') ? "class='current'" : ''; ?>><a href="<?php echo  RELA_DIR ?>contactus">
                                    <div>تماس با ما<i class="icon-map-marker2"></i></div>
                                </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
