<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:35
 */

class User {
    public $username;
    public $password;
    public $challenge_phrs;
    public $type; // 1 for register; 2 for login; 3 for forget

    private function __construct() { }

    public static function fromJsonRegister($json) {
        $jsonOb = json_decode($json);
        $newUser = new User();
        $newUser->setUsername($jsonOb->{"username"});
        $newUser->setPassword($jsonOb->{"password"});
        $newUser->setChallengePhrs($jsonOb->{"challenge_phrs"});
        $newUser->setType(1);
        return $newUser;
    }

    public static function fromJsonLogin($json) {
        $jsonOb = json_decode($json);
        $newUser = new User();
        $newUser->setUsername($jsonOb->{"username"});
        $newUser->setPassword($jsonOb->{"password"});
        $newUser->setType(2);
        return $newUser;
    }

    public static function fromJsonForget($json) {
        $jsonOb = json_decode($json);
        $newUser = new User();
        $newUser->setUsername($jsonOb->{"username"});
        $newUser->setChallengePhrs($jsonOb->{"challenge_phrs"});
        $newUser->setType(3);
        return $newUser;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getChallengePhrs() {
        return $this->challenge_phrs;
    }

    /**
     * @param mixed $challenge_phrs
     */
    public function setChallengePhrs($challenge_phrs) {
        $this->challenge_phrs = $challenge_phrs;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type) {
        $this->type = $type;
    }

}