<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/4
 * Time: 下午8:40
 */

class XmlHelper {

    private $xml;

    public function __construct($filename) {
        $this->xml = simplexml_load_file($filename) or die("Error: Cannot create object");
    }

    public function getValue($key) {
        return $this->xml->{$key};
    }
}