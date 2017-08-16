<?php

namespace Storage;

// database functions ************************************************
/*
function ConnectToMySQL($dsn, $usr, $pass) {
   $db = new PDO($dsn, $usr, $pass);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   return $db;
}
*/
function insertChat($myDB, $content, $user, $roomID )
{
    $datetime=date("Y-m-d H:i:s");
    $sql = "INSERT INTO messages (content, user, room_id, datetime) VALUES ('$content', '$user', '$roomID', '$datetime')";
    $myDB->query($sql);
    $query= "SELECT * from messages WHERE room_id= $roomID";
    $stmt=$myDB->query($query);
    $data=null;
    while($row =$stmt->fetch()) {

        $data[]=$row;

    }
    return $data;
}
function getRooms($myDB){
    $sql = 'SELECT * from rooms;';
    $stmt = $myDB->query($sql);

    $data= array();
    while($row =$stmt->fetch()) {
        $data[]=$row;
    }
    return $data;
}
function insertRoom($myDB, $topic){
    $sql = "INSERT INTO rooms (topic) VALUES ('$topic')";
    $myDB->query($sql);
    $sql ="SELECT * from rooms WHERE topic = '$topic';";
    $stmt =$myDB->query($sql);
    $data=null;
    while($row =$stmt->fetch()) {

        $data[]=$row;

    }
    return $data;
    return $stmt;
}
function getMessagesFromRoom($myDB, $room_id){
    $query= "SELECT * from messages WHERE room_id= $room_id";
    $stmt=$myDB->query($query);
    $data=null;
    while($row =$stmt->fetch()) {

        $data[]=$row;

    }
    return $data;
}
