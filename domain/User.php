<?php
/**
 * Created by PhpStorm.
 * User: cody
 * Date: 8/14/2017
 * Time: 12:37 PM
 */

namespace Domain;

require __DIR__ . '/../storage/RedisConnection.php';

class User
{
    private $id=null;
    private $name=null;
    private $email=null;

    public function _construct(){
        return $this;
    }
    public function Id($id){
        $this->id=$id;
        return $id;
    }
    public function Name($name){
        $this->name=$name;
        return $name;
    }
    public function Email($email){
        $this->email=$email;
        return $email;
    }
    public function SayHi(){
        return " my friend";
    }


    public function getName()
    {
        return $this->name;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }
    function storeInRedis(){
      //  \Storage\StoreUserInRedis($this->getName(),$this->getId(), $this->getEmail());
    }



}