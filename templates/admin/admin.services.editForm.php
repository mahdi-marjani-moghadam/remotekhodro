<?php

//echo "<pre>";
//print_r($list);
//die();
?>


<div class="content-body">
    <div id="panel-tablesorter" class="panel panel-warning">
        <div class="panel-heading bg-white">
            <h3 class="panel-title rtl">ویرایش خدمات</h3>
            <div class="panel-actions">
                <button data-expand="#panel-tablesorter" title="" class="btn-panel rtl" data-original-title="تمام صفحه">
                    <i class="fa fa-expand"></i>
                </button>
                <button data-collapse="#panel-tablesorter" title="" class="btn-panel rtl"
                        data-original-title="باز و بسته شدن">
                    <i class="fa fa-caret-down"></i>
                </button>
            </div><!-- /panel-actions -->
        </div><!-- /panel-heading -->

        <?php if($msg != null)
        {?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert alert-warning">
                <?= $msg ?>
            </div>
            <?php
        }
        ?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 center-block">
                    <form name="queue" id="queue" role="form" data-validate="form" enctype="multipart/form-data"  class="form-horizontal form-bordered"
                          novalidate="novalidate" method="post">

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                نمایش
                                <a class="small-font10" href="<?=RELA_DIR?>services/<?=$list['category_id']?>/<?=$list['Services_id']?>/<?=$list['url']?>"><?=$list['title']?></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 col-md-2 pull-right control-label rtl"
                                           for="title">H1 :</label>
                                    <div class="col-xs-12 col-sm-8 col-md-10 pull-right">
                                        <input type="text" class="form-control" name="title" id="title"  value="<?= $list['title'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 col-md-2 pull-right control-label rtl"
                                           for="url">url :</label>
                                    <div class="col-xs-12 col-sm-8 col-md-10 pull-right">
                                        <input type="text" class="form-control" name="url" id="url"  value="<?= $list['url'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 col-md-2 pull-right control-label rtl"
                                           for="meta_title"> title :</label>
                                    <div class="col-xs-12 col-sm-8 col-md-10 pull-right">
                                        <input type="text" class="form-control" name="meta_title" id="meta_title"  value="<?= $list['meta_title'] ?>">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row xsmallSpace hidden-xs"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">

                                    <div class="col-xs-12 col-sm-12 col-md-12 pull-right">
                                        <h3> توضیح مختصر</h3>
                                        <?php

                                        include_once ROOT_DIR.'common/ckeditor/ckeditor.php';
                                        include_once ROOT_DIR.'common/ckfinder/ckfinder.php';
                                        $ckeditor = new CKEditor();
                                        $ckeditor->basePath = RELA_DIR.'common/ckeditor/';




                                        $config['language'] = 'fa';
                                        $config['filebrowserBrowseUrl'] = RELA_DIR.'common/ckfinder/ckfinder.html';
                                        $config['filebrowserImageBrowseUrl'] = RELA_DIR.'common/ckfinder/ckfinder.html?type=Images';
                                        $config['filebrowserUploadUrl'] = RELA_DIR.'common/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
                                        $config['filebrowserImageUploadUrl'] = RELA_DIR.'common/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

                                        $tt = $ckeditor->editor('brief_description',$list['brief_description'],$config);

                                        echo $tt;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">

                                    <div class="col-xs-12 col-sm-12 col-md-12 pull-right">
                                        <h3>توضیح</h3>

                                        <?php

                                        include_once ROOT_DIR.'common/ckeditor/ckeditor.php';
                                        include_once ROOT_DIR.'common/ckfinder/ckfinder.php';
                                        $ckeditor = new CKEditor();
                                        $ckeditor->basePath = RELA_DIR.'common/ckeditor/';




                                        $config['language'] = 'fa';
                                        $config['filebrowserBrowseUrl'] = RELA_DIR.'common/ckfinder/ckfinder.html';
                                        $config['filebrowserImageBrowseUrl'] = RELA_DIR.'common/ckfinder/ckfinder.html?type=Images';
                                        $config['filebrowserUploadUrl'] = RELA_DIR.'common/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
                                        $config['filebrowserImageUploadUrl'] = RELA_DIR.'common/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

                                        $tt = $ckeditor->editor('description',$list['description'],$config);

                                        echo $tt;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-4 col-md-4 pull-right control-label rtl"
                                               for="meta_description">Meta description:</label>
                                        <div class="col-xs-12 col-sm-8 col-md-8 pull-right">
                                            <input type="text" class="form-control" name="meta_description" id="meta_description" value="<?= $list['meta_description'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 pull-right control-label rtl"
                                           for="category_id">انتخاب دسته بندی:</label>
                                    <div class="col-xs-12 col-sm-8 pull-right">

                                        <select name="category_id[]" id="category_id" data-input="select2" multiple>
                                            <?

                                            foreach($list['category'] as $category_id => $value)
                                            {
                                                ?>
                                                <option <?php echo in_array($value['Category_id'], explode(',',$list['category_id'])) ? 'selected' : '' ?>
                                                        value="<?= $value['Category_id'] ?>">
                                                    <?= $value['export'] ?>
                                                </option>
                                                <?
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row xsmallSpace hidden-xs"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="col-xs-12 col-md-12 col-sm-12 pull-right control-label rtl"
                                           for="xImagePath">تصویر:</label>
                                    <div class="col-md-4 col-sm-4  ">

                                            <input type="file" class="form-control" name="image" >
                                            <img src="<?=RELA_DIR?>statics/services/<?=$list['image']?>" class="img-responsive">

                                    </div>
                                    <div class="col-md-4 col-sm-4">

                                            <input type="file" class="form-control" name="image2" >
                                            <img src="<?=RELA_DIR?>statics/services/<?=$list['image2']?>" class="img-responsive">
                                            <input name="alt2" class="form-control" value="<?=$list['alt2']?>">

                                    </div>
                                    <div class="col-md-4 col-sm-4">

                                        <input type="file" class="form-control" name="image3" >
                                        <img src="<?=RELA_DIR?>statics/services/<?=$list['image3']?>" class="img-responsive">
                                        <input name="alt3" class="form-control" value="<?=$list['alt3']?>">

                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-right">
                                    <button type="submit" name="update" id="submit"
                                            class="btn btn-icon btn-success rtl"><input name="action" type="hidden" id="action" value="edit"/>
                                        <input type="hidden" name="Services_id" value="<?=$list['Services_id']?>">
                                        <i class="fa fa-plus"></i>
                                        ثبت
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



