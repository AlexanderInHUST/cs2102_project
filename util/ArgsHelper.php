<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/4
 * Time: 下午11:03
 */

class ArgsHelper {

    public static function convertIntoOb($args, &$queryConditions, $index) {
        $tempArray = array();
        $keywords = preg_split("/,/", $args);
        foreach ($keywords as $kw) {
            array_push($tempArray, $kw);
        }
        $queryConditions[$index] = $tempArray;
    }
}