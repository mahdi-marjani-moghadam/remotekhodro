<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 23/11/2017
 * Time: 10:24 AM
 */
include_once 'server.inc.php';

include_once ROOT_DIR.'common/db.inc.php';
include_once ROOT_DIR.'common/init.inc.php';
include_once ROOT_DIR.'common/func.inc.php';
include_once ROOT_DIR.'model/db.inc.class.php';
include_once ROOT_DIR.'common/looeic.php';
include_once ROOT_DIR.'component/blog/model/blog.controller.php';
include_once ROOT_DIR.'component/blog/model/blog.model.php';
global $page;



$blog = new blogModel();
$fields['order']['Blog_id'] = 'DESC';
$result = $blog->getByFilter($fields);
$export=$result['export']['list'] ;

$base_url = "http://remotekhodro.com/blog/";

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
 foreach($export as $k => $v):

    echo '<url>' . PHP_EOL;
    echo '<loc>'.$base_url.$v['Blog_id'].'/'.$v['url'] .'/</loc>' . PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;

 endforeach;

 /** services */
 include_once ROOT_DIR."component/services/model/services.model.php";
 $service = new services();
$fields2['order']['Services_id'] = 'DESC';
$result = $service->getByFilter($fields2);
$export=$result['export']['list'] ;

echo '<url>' . PHP_EOL;
echo '<loc>'.RELA_DIR.'services/ساخت-سوئیچ-ساخت-سوییچ-ساخت-ریموت</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;


echo '<url>' . PHP_EOL;
echo '<loc>'.RELA_DIR.'services/ساخت-سوئیچ-ساخت-سوییچ-ساخت-ریموت</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;

include_once(ROOT_DIR."component/category/admin/model/admin.category.model.php");
$category = new adminCategoryModel();

$obj['category'] = $category->getByFilter();
$category = $obj['category']['export']['list'];

foreach($category as $k => $v):
    echo '<url>' . PHP_EOL;
    echo '<loc>'.RELA_DIR.'services/'.$v['Category_id'].'/'.$v['alt_fa'] .'</loc>' . PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;
endforeach;

foreach($export as $k => $v):
    echo '<url>' . PHP_EOL;
    echo '<loc>'.RELA_DIR.'services/'.$v['category_id'].'/'.$v['Services_id'].'/'.$v['title'] .'</loc>' . PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;
endforeach;

echo '</urlset>' . PHP_EOL;

?>
