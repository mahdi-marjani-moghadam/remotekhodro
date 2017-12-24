<script type="text/javascript" src="../common/ckfinder/ckfinder.js"></script>
<script type="text/javascript">

    function BrowseServer( startupPath, functionData )
    {
        var finder = new CKFinder();
        finder.basePath = '../';
        finder.startupPath = startupPath;
        finder.selectActionFunction = SetFileField;
        finder.selectActionData = functionData;

        finder.popup();
    }

    function SetFileField( fileUrl, data )
    {
        document.getElementById( data["selectActionData"] ).value = fileUrl;
    }
    function ShowThumbnails( fileUrl, data )
    {
        // this = CKFinderAPI

        var sFileName = this.getSelectedFile().name;
        document.getElementById( 'thumbnails' ).innerHTML +=
            '<div class="thumb">' +
            '<img src="' + fileUrl + '" />' +
            '<div class="caption">' +
            '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
            '</div>' +
            '</div>';

        document.getElementById( 'preview' ).style.display = "";
        // It is not  to return any value.
        // When false is returned, CKFinder will not close automatically.
        return false;
    }
</script>
<div class="content-control">
    <!--control-nav-->
    <ul class="control-nav pull-right">
        <li><a class="rtl text-24"><i class="fa fa-file-image-o"></i> افزودن مقاله جدید</a></li>
    </ul><!--/control-nav-->
</div><!-- /content-control -->

<div class="content-body">

    <div id="panel-tablesorter" class="panel panel-warning">
        <div class="panel-heading bg-white">
            <h3 class="panel-title rtl">فرم مقاله</h3>
            <div class="panel-actions">
                <button data-expand="#panel-tablesorter" title="" class="btn-panel rtl" data-original-title="تمام صفحه">
                    <i class="fa fa-expand"></i>
                </button>
                <button data-collapse="#panel-tablesorter" title="" class="btn-panel rtl" data-original-title="باز و بسته شدن">
                    <i class="fa fa-caret-down"></i>
                </button>
            </div><!-- /panel-actions -->
        </div><!-- /panel-heading -->

        <?php if($msg!=null)
        {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert alert-warning">
                <?= $msg ?>
            </div>
            <?php
        }
        ?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8  center-block">
                    <form name="queue" id="queue" role="form" data-validate="form"  enctype="multipart/form-data" class="form-horizontal form-bordered"  novalidate="novalidate" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 pull-right control-label rtl" for="title">عنوان:</label>
                                    <div class="col-xs-12 col-sm-8 pull-right">
                                        <input type="text" class="form-control" name="title" id="title"   value="<?=$list['title']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 pull-right control-label rtl" for="brief_description">توضیحات مختصر:</label>
                                    <div class="col-xs-12 col-sm-8 pull-right">
                                        <input type="text" class="form-control" name="brief_description"  id="brief_description"  value="<?=$list['brif_description']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row xsmallSpace hidden-xs"></div>
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-1 col-md-1 pull-right control-label rtl"
                                           for="description">توضیحات</label>
                                    <div class="col-xs-12 col-sm-11 col-md-11 pull-right">

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
                                        <label class="col-xs-12 col-sm-4 pull-right control-label rtl" for="meta_keywords">Meta keyword:</label>
                                        <div class="col-xs-12 col-sm-8 pull-right">
                                            <input type="text" class="form-control" name="meta_keywords" id="meta_keywords"   value="<?=$list['meta_keywords']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-4 pull-right control-label rtl" for="Meta_description">meta description:</label>
                                        <div class="col-xs-12 col-sm-8 pull-right">
                                            <input type="text" class="form-control" name="Meta_description"  id="Meta_description"  value="<?=$list['Meta_description']?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row xsmallSpace hidden-xs"></div>
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
                                                <option <?php echo in_array($value['Category_id'], $list['category_id']) ? 'selected' : '' ?>
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
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 pull-right control-label rtl" for="xImagePath">تصویر:</label>
                                    <div class="col-xs-12 col-sm-8 pull-right">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row xsmallSpace hidden-xs"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-4 pull-right control-label rtl" for="xImagePath">تصویر سایز کوچک:</label>
                                    <div class="col-xs-12 col-sm-8 pull-right">
                                        <input type="file" name="imagesmall">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-right">
                                    <button type="submit"  class="btn btn-icon btn-success rtl">
                                        <input name="action" type="hidden" id="action" value="add" />
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







