<?php
/**
 * Created by PhpStorm.
 * User: Pc
 * Date: 9/13/2016
 * Time: 10:51 م
 */

namespace Portaltech;


class TaskClass
{
    private $id;
    private $description;
    private $listId;
    private $status;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * @param int $listId
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param boolean $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}