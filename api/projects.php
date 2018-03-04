<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:26
 */

include_once "../database/DatabaseHelper.php";
include_once "../database/SqlHelper.php";
include_once "../util/ClearCache.php";
include_once "../util/ArgsHelper.php";
include_once "../model/BriefProjectInfo.php";
include_once "../model/Project.php";

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
    ArgsHelper::convertIntoOb($keyword,$queryConditions, "keywords");
}

if ($category) {
    ArgsHelper::convertIntoOb($category,$queryConditions, "categories");
}

$where = SqlHelper::buildWherePart($queryConditions);
$databaseHelper = new DatabaseHelper('../database/databaseinfo.xml');
$queryResults = $databaseHelper->search("project", $where);

$projectsArray = array();
foreach ($queryResults as $queryResult) {
    $detailProject = Project::fromObj($queryResult);
    array_push($projectsArray, BriefProjectInfo::fromProject($detailProject));
}

$result = BriefProjectInfo::toJsons($projectsArray);
echo $result;