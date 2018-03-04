<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:43
 */

class BriefProjectInfo
{
    public $id;
    public $title;
    public $description;
    public $endTime;

    private function __construct() { }

    public static function fromProject(Project $project) {
        $newBrief = new BriefProjectInfo();
        $newBrief->setId($project->getId());
        $newBrief->setTitle($project->getTitle());
        $newBrief->setDescription($project->getDescription());
        $newBrief->setEndTime($project->getDuration() + $project->getStartDate());
        return $newBrief;
    }

    public function toJson() {
        return json_encode($this);
    }

    public static function toJsons(array $briefProjects) {
        return json_encode($briefProjects);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
}