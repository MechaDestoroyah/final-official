<?php
/**
 * Created by PhpStorm.
 * User: cody
 * Date: 8/16/2017
 * Time: 6:29 PM
 */

namespace Domain;

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{

    public function testSetContent(){
        $content='WAW vs Capcom';
        $message=new Message();
        $this->assertEquals(
            $message->Content($content), $message->getContent()
        );
    }
    public function testSetUser(){
        $user='Jimmy Ocean';
        $message=new Message();
        $this->assertEquals(
            $message->User($user), $message->getUser()
        );
    }
    public function testSetDateTime(){
        $datetime=date("Y-m-d H:i:s");
        $message=new Message();
        $this->assertEquals(
            $message->Datetime($datetime), $message->getDatetime()
        );
    }
    public function testSetRoom(){
        $room='Jimmy Ocean Appreciation Chat';
        $message=new Message();
        $this->assertEquals(
            $message->Room($room), $message->getRoom()
        );
    }
}
