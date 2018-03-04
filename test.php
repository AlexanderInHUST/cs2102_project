<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:47
 */

//private $id;
//private $title;
//private $description;
//private $start_date;
//private $duration;
//private $key_words;
//private $categories;
//private $funding_sought;
//private $funding_now;
//private $owner_account;

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$testJson = '[{
                "id":1,
                "title":"DBS",
                "description":"To create money",
                "start_date":12345,
                "duration":23456,
                "key_words":["bank", "money"],
                "categories":["finance"],
                "funding_sought":1000000,
                "funding_now":100,
                "owner_account":"tyf"
             }]';

$temp = json_decode($testJson, true);
print $temp[0]{"funding_sought"};

//var_dump($temp);