<?php
/**
 * Created by PhpStorm.
 * User: tangyifeng
 * Date: 2018/3/3
 * Time: 下午9:43
 */

class BriefProjectInfo
{
    private $id;
    private $title;
    private $description;
    private $endTime;

    public function __construct(Project $project) {
        $this->setId($project->getId());
        $this->setTitle($project->getTitle());
        $this->setDescription($project->getDescription());
        $this->setEndTime($project->getDuration() + $project->getStartDate());
    }

    public function toJson() {
        return json_encode($this);
    }

    public static function toJsons(array $briefProjects) {
        return json_encode($briefProjects);
    }

    public function fromJson($json) {

    }

    public function fromJsons(array $jsons) {

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