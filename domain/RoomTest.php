<?php
/**
 * Created by PhpStorm.
 * User: cody
 * Date: 8/16/2017
 * Time: 6:29 PM
 */

namespace Domain;

use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    public function testSetTopic(){

        $topic='Bob Loblaws Law Blog';
        $room= new Room();
        $this->assertEquals(
            $room->Topic($topic), $room->getTopic()
        );
    }
    public function testSetId(){
        $id=100;
        $room=new Room();
        $this->assertEquals(
            $room->ID($id), $room->getId()
        );
    }
}
