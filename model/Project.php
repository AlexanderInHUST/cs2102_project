<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:35
 */

class Project {
    private $id;
    private $title;
    private $description;
    private $start_date;
    private $duration;
    private $key_words;
    private $categories;
    private $funding_sought;
    private $funding_now;
    private $owner_account;

    private function __construct() { } // So no one can call it outside

    public function toJson() {
        return json_encode($this);
    }

    public static function fromJson($json) { // the only way to create an object
        $jsonObj = json_decode($json);
        $newProject = new Project();
        $newProject->setId($jsonObj->{'id'});
        $newProject->setTitle($jsonObj->{'title'});
        $newProject->setStartDate($jsonObj->{'start_date'});
        $newProject->setDuration($jsonObj->{'duration'});
        $newProject->setKeyWords($jsonObj->{'key_words'});
        $newProject->setCategories($jsonObj->{'categories'});
        $newProject->setFundingSought($jsonObj->{'funding_sought'});
        $newProject->setFundingNow($jsonObj->{'funding_now'});
        $newProject->setOwnerAccount($jsonObj->{'owner_account'});
        return $newProject;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStartDate() {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     */
    public function setStartDate($start_date) {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration) {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getKeyWords() {
        return $this->key_words;
    }

    /**
     * @param mixed $key_words
     */
    public function setKeyWords($key_words) {
        $this->key_words = $key_words;
    }

    /**
     * @return mixed
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories) {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getFundingSought() {
        return $this->funding_sought;
    }

    /**
     * @param mixed $funding_sought
     */
    public function setFundingSought($funding_sought) {
        $this->funding_sought = $funding_sought;
    }

    /**
     * @return mixed
     */
    public function getFundingNow() {
        return $this->funding_now;
    }

    /**
     * @param mixed $funding_now
     */
    public function setFundingNow($funding_now) {
        $this->funding_now = $funding_now;
    }

    /**
     * @return mixed
     */
    public function getOwnerAccount() {
        return $this->owner_account;
    }

    /**
     * @param mixed $owner_account
     */
    public function setOwnerAccount($owner_account) {
        $this->owner_account = $owner_account;
    }
}