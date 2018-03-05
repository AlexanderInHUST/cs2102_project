<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/4
 * Time: 下午11:29
 */

class SqlHelper {

    public static function buildWherePart (array $args) {
        $where = "where ";
        foreach ($args as $index => $values) {
            $where = $where . "(";
            foreach ($values as $value) {
                $where = $where . $index . " like " . "'%". $value . "%'" . " and ";
            }
            $where = $where . " 1=1) and ";
        }
        $where = $where . "1=1";
        return $where;
    }

}