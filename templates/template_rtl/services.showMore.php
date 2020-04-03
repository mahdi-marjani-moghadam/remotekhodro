<section id="page-title" class="page-title-right rtl p-1">
	<div class="container clearfix">
		<ol class="breadcrumb">
			<li class="hidden-xs"><a href="<?= RELA_DIR ?>">خانه</a></li>
			<li class="hidden-xs"><a href="<?= RELA_DIR ?>services/<?= SERVICES_SLUG ?>">خدمات</a></li>
			<li class="hidden-xs"><a href="<?= RELA_DIR ?>services/<?= $export['cat_id'] ?>/<?= $export['cat_url'] ?>"><?= $export['cat_name'] ?></a></li>
			<li class="active"><?= $export['title'] ?></li>
		</ol>
		<div class="category-metas pull-left">دسته:
			<a rel="category tag" href="<?= RELA_DIR ?>services/<?= $export['cat_id'] ?>/<?= $export['cat_url'] ?>"><?= $export['cat_name'] ?></a>
		</div>

	</div>
</section>
<section id="content" class="rtl" style="margin-bottom: 0px;">
	<div class="container clearfix ">
		<div class="col-md-12 text-right">
			<span class="date">
				<time class="published" datetime="<?= (explode(' ', $export['date'])[0]) ?>T<?= (explode(' ', $export['date'])[1]) ?>+03:30" itemprop="datePublished"> به روز رسانی: <?= date("Y ,d M ", strtotime(explode(' ', $export['date'])[0])) ?></time>
			</span>
		</div>

		<h1 class="text-center p-2 m-0 "><a href="<?= RELA_DIR ?>services/,<?= $export['cat_id'] ?>,/<?= $export['Services_id'] ?>/<?= $export['url'] ?>"><?= $export['title'] ?></a></h1>



		<div class="col-md-4 col-sm-4 text-center top-fit p-half">
			<img src="<?= RELA_DIR ?>statics/services/<?= $export['image'] ?>" alt="<?= $export['title'] ?>" class="fit">
		</div>
		<div class="col-md-4 col-sm-4 text-center top-fit p-half">
			<img src="<?= RELA_DIR ?>statics/services/<?= $export['image2'] ?>" alt="<?= $export['alt2'] ?>" class="fit">
		</div>
		<div class="col-md-4 col-sm-4 text-center top-fit p-half">
			<img src="<?= RELA_DIR ?>statics/services/<?= $export['image3'] ?>" alt="<?= $export['alt3'] ?>" class="fit">
		</div>
		<div class="clear"></div>
		<br>
		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">

			<p><?= $export['description'] ?></p>


			<span><a href="<?= RELA_DIR ?>services/<?= SERVICES_SLUG ?>">بازگشت به خدمات</a></span>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2>نمونه کارها</h2>
			<div class="row">
				<?php foreach ($export['blog'] as $v) : ?>
					<div class="col-md-3 col-sm-6 col-xs-12 products-list-item">
						<img class="img-responsive products-list-image" src="<?= RELA_DIR ?>statics/blog/<?= $v['image'] ?>" alt="<?= $v['title'] ?>">
						<a href="<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['url'] ?>"><?= $v['title'] ?> </a>
					</div>
				<? endforeach; ?>
			</div>
		</div>
	</div>
</section>


<? $counter = 0 ?>
<script type="application/ld+json">
	{
		"@context": "https://www.schema.org",
		"@graph": [{
			"@type": "ItemList",
			"url": "<?= RELA_DIR ?>blog",
			"numberOfItems": "<?= count($export['blog']) ?>",
			"itemListElement": [<? foreach ($export['blog'] as $k => $v) : $counter++; ?> {
						"@type": "Product",
						"image": "<?= RELA_DIR ?>statics/blog/<?= $v['image'] ?>",
						"url": "<?= RELA_DIR ?>blog/<?= $v['Blog_id'] ?>/<?= $v['title'] ?>",
						"name": "<?= $v['title'] ?>",
						"description": "<?= $v['title'] ?>",
						"brand": {
							"@type": "Brand",
							"name": "<?= $v['cat_name'] ?>"
						},
						"aggregateRating": {
							"@type": "AggregateRating",
							"ratingValue": "5",
							"reviewCount": "<?= $counter + 10 ?>"
						}
					}
					<? if (count($export['blog']) - $counter != 0) { ?>, <? } ?><? endforeach; ?>
					]
		}, {
			"@type": "WebPage",
			"name": "<?= $export['title'] ?>",
			"description": "<?= $export['meta_description'] ?>",
			"publisher": {
				"@type": "LocalBusiness",
				"name": "ایران ریموت",
				"image": "<?= RELA_DIR ?>templates/template_rtl/images/logo-dark@2x.jpg",
				"address": "تهران، آجودانیه(شهید سباری)، بلوار محمدی، خیابان البرز، مجتمع خودرویی البرز",
				"telephone": "09124802295",
				"priceRange": "$$"
			},

			"url": "<?= RELA_DIR ?>services/<?= $export['category_id'] ?>/<?= $export['Services_id'] ?>/<?= $export['url'] ?>",
			"inLanguage": "fa-IR",
			"datePublished": "<?= convertDate($export['date']) ?>"

			//"@id": "<?= RELA_DIR ?>/%d8%b3%d9%88%d8%a6%db%8c%da%86-%d8%a8%d9%86%d8%b2-%d9%88-%d8%a8%db%8c-%d8%a7%d9%85-%d9%88/#webpage",
			//"isPartOf": {
			//    "@id": "https://kelidcar.com/#website"
			//},
			//"primaryImageOfPage": {
			//    "@id": "https://kelidcar.com/%d8%b3%d9%88%d8%a6%db%8c%da%86-%d8%a8%d9%86%d8%b2-%d9%88-%d8%a8%db%8c-%d8%a7%d9%85-%d9%88/#primaryimage"
			//},

			//"dateModified": "2019-07-14T14:57:19+04:30",

		}]
	}
</script>