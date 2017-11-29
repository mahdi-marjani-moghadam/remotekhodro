
        <aside class="side-left" id="side-left">
            <ul class="sidebar">
                <!--/sidebar-item-->
                <li>
                    <a href="<?php print RELA_DIR; ?>admin/index.php">
                        <i class="sidebar-icon fa fa-home"></i>
                        <span class="sidebar-text">خانه</span>
                    </a>
                </li><!--/sidebar-item-->
                <li>
                    <a href="<?=RELA_DIR; ?>admin/?component=category">
                        <i class="sidebar-icon fa fa-tasks"></i>
                        <span class="sidebar-text">دسته بندی</span>
                        <b class="fa fa-angle-left"></b>

                    </a>
                    <ul class="sidebar-child animated fadeInRight">
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=category">
                                <span class="sidebar-text text-16">لیست دسته بندی</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=category&action=add">
                                <span class="sidebar-text text-16">افزودن دسته بندی جدید</span>
                            </a>
                        </li><!--/child-item-->
                    </ul><!--/sidebar-child-->
                </li><!--/sidebar-item-->

                <li>
                    <a href="<?=RELA_DIR; ?>admin/?component=banner">
                        <i class="sidebar-icon fa fa-tasks"></i>
                        <span class="sidebar-text">اسلاید ها</span>
                        <b class="fa fa-angle-left"></b>

                    </a>
                    <ul class="sidebar-child animated fadeInRight">
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=banner">
                                <span class="sidebar-text text-16">لیست اسلاید ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=category&action=add">
                                <span class="sidebar-text text-16">افزودن اسلاید جدید</span>
                            </a>
                        </li><!--/child-item-->
                    </ul><!--/sidebar-child-->
                </li><!--/sidebar-item-->


                <li>
                    <a href="#">
                        <i class="sidebar-icon fa fa-list"></i>
                        <span class="sidebar-text">blog</span>
                        <b class="fa fa-angle-left"></b>
                    </a>
                    <ul class="sidebar-child animated fadeInRight">
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=blog">
                                <span class="sidebar-text text-16">show blog</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?=RELA_DIR; ?>admin/?component=services">
                        <i class="sidebar-icon fa fa-money"></i>
                        <span class="sidebar-text">خدمات</span>
                        <b class="fa fa-angle-left"></b>
                    </a>
                    <ul class="sidebar-child animated fadeInRight">
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=services">
                                <span class="sidebar-text text-16">لیست خدمات</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?=RELA_DIR; ?>admin/?component=cv">
                        <i class="sidebar-icon fa fa-male"></i>
                        <span class="sidebar-text">درخواست ها</span>
                        <b class="fa fa-angle-left"></b>
                    </a>
                    <ul class="sidebar-child animated fadeInRight">
                        <li>
                            <a href="<?=RELA_DIR; ?>admin/?component=cv">
                                <span class="sidebar-text text-16">لیست نفرات</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?=RELA_DIR; ?>admin/?component=contactus">
                        <i class="sidebar-icon fa fa-envelope"></i>
                        <span class="sidebar-text">تماس با ما</span>
                    </a>
                </li><!--/sidebar-item-->
            </ul><!--/sidebar-->
        </aside><!--/side-left-->

        <div class="content">
