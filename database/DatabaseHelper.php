<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午11:08
 */

include_once "XmlHelper.php";
include_once "../util/ClearCache.php";


class DatabaseHelper {

    private $pgConnection;
    private $dataHelper;

    public function __construct($infoAddress) {
        $this->dataHelper = new XmlHelper($infoAddress);
        $config = "host=" . $this->dataHelper->getValue("host")
            . " port=" . $this->dataHelper->getValue("port")
            . " dbname=" . $this->dataHelper->getValue("dbname")
            . " user=" . $this->dataHelper->getValue("user")
            . " password=" . $this->dataHelper->getValue("password");
        $this->pgConnection = pg_connect($config) or die('Could not connect: ' . pg_last_error());
    }

    public function __destruct() {
        pg_close($this->pgConnection);
    }

    public function search($table, $condition) {
        // simple demo
        $query = "SELECT * FROM " . $table . " " . $condition;
        $result = pg_query($query) or die('Query failed: ' . pg_last_error());
        $resultArray = array();
        while ($line = pg_fetch_object($result)) {
            array_push($resultArray, $line);
        }
        pg_free_result($result);
        return $resultArray;
    }

    public function insert(array $args) {
        //todo
        return null;
    }

    public function delete(array $args) {
        //todo
        return null;
    }
}
