<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:26
 */

header('Content-type: text/json');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo "[]";
    exit();
}

$keyword = $_GET['keywords'];
$category = $_GET['categories'];
$page = $_GET['page'];
$queryConditions = array();

if ($keyword) {
    $keywords = preg_split("/,/", $keyword);

}

if ($category) {
    $categories = preg_split("/,/", $category);
}

foreach ($keywords as $key) {
    print $key;
}
