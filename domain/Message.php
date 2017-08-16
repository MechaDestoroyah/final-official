<?php
/**
 * Created by PhpStorm.
 * User: cody
 * Date: 8/14/2017
 * Time: 12:37 PM
 */

namespace Domain;


class Message
{
    protected $room;
    protected $content;
    protected $user;
    protected $datetime;

    public function _construct(){}
    public function Room($room){
        $this->room=$room;
        return $room;

    }
    public function Content($content){
        $this->content=$content;
        return $content;
    }
    public function User($user){
        $this->user=$user;
        return $user;
    }
    public function Datetime($datetime){
        $this->datetime=$datetime;
        return $datetime;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @return mixed
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

}