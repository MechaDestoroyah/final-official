<?php

namespace Storage;

/**
 * Created by PhpStorm.
 * User: donbstringham
 * Date: 6/26/17
 * Time: 6:30 PM

function StoreUserInRedis($name, $id, $email)
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->lpush("name", $name);
    $redis->lpush("id", $id);
    $redis->lpush("email", $email);
    //echo "Connection to server sucessfully";
   // return $redis;
}
 * */
