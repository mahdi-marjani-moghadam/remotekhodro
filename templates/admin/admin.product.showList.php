<script type="text/javascript" language="javascript" class="init">

  $(document).ready(function() {

    // DataTable
    var table = $('#example').DataTable();

    // Apply the search
    table.columns().every( function () {
      var that = this;

      $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
              .search( this.value )
              .draw();
        }
      } );
    } );
    ////
    // Apply the search
  } );
</script>
<div class="content-control">
  <!--control-nav-->
  <ul class="control-nav pull-right">
      <li><a class="rtl text-24"><i class="fa fa-file-image-o"></i> لیست بنر</a></li>
  </ul><!--/control-nav-->
</div><!-- /content-control -->
<div class="content-body">
    <div class="row xsmallSpace"></div>
    <div id="panel-1" class="panel panel-default border-blue">
        <div class="panel-heading bg-blue">
            <h3 class="panel-title rtl">لیست محصولات</h3>
            <div class="panel-actions">
                <button data-expand="#panel-1" title="نمایش" class="btn-panel">
                    <i class="fa fa-expand"></i>
                </button>
                <button data-collapse="#panel-1" title="بازکردن" class="btn-panel">
                    <i class="fa fa-caret-down"></i>
                </button>
            </div>
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a href="<?= RELA_DIR ?>admin/?component=product&action=addProduct"
                   class="btn btn-primary btn-sm btn-icon text-13"><i class="fa fa-plus"></i>افزودن محصولات جدید </a>
            </div>
            <!-- separator -->
            <div class="row smallSpace"></div>

            <div class="table-responsive table-responsive-datatables">
                <table id="example" class="companyTable table table-striped table-bordered rtl" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>عنوان</th>

                        <th>توضیحات مختصر</th>

                        <th>توضیحات</th>
                        <th>تصویر</th>
                        <th>تصویر2</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    $cn = 1;
                    if (isset($list['list'])) {
                    foreach ($list['list'] as $id => $fields)
                    {
                    ?>
                        <tr>

                            <td><?php echo $fields['title']; ?></td>
                            <td><?php echo $fields['brief_description']; ?></td>
                            <td><?php echo $fields['description']; ?></td>
                            <td dir="ltr" align="center"><img height="60px" src="<?=RELA_DIR.'statics/product/'. $fields['image'] ?>"/></td>
                            <td dir="ltr" align="center"><img height="60px" src="<?=RELA_DIR.'statics/product/'. $fields['image2'] ?>"/></td>
                            <td>
                                <a href="<?= RELA_DIR ?>admin/?component=product&action=editProduct&id=<?php echo $fields['Product_id']; ?>">ویرایش</a>
                                <a href="<?= RELA_DIR ?>admin/?component=product&action=deleteProduct&id=<?php echo $fields['Product_id']; ?>">حذف</a>
                            </td>
                        </tr>
                    <?
                    }
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <th><input type="hidden" name="search_1" class="search_init form-control"/></th>
                        <th><input type="text" name="search_2" class="search_init form-control"/></th>
                        <th><input type="text" name="search_3" class="search_init form-control"/></th>
                        <th><input type="text" name="search_4" class="search_init form-control"/></th>
                        <th><input type="text" name="search_5" class="search_init form-control"/></th>
                        <th><input type="text" name="search_6" class="search_init form-control"/></th>
                        <th><input type="hidden" name="search_7" class="search_init form-control"/></th>

                    </tfoot>
                </table>
            </div>
        </div>
        <div class="panel-footer clearfix">
        </div>
    </div>
</div><!--/content-body -->



