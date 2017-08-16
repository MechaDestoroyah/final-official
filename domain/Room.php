<?php
/**
 * Created by PhpStorm.
 * User: cody
 * Date: 8/14/2017
 * Time: 12:37 PM
 */

namespace Domain;


class Room
{
    protected $id;
    protected $topic;

    public function ID($id){
        $this->id=$id;
        return $id;
    }
    public function Topic($topic){
        $this->topic=$topic;
        return $topic;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }

}