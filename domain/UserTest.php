<?php
/**
 * Created by PhpStorm.
 * User: cody
 * Date: 8/15/2017
 * Time: 3:27 PM
 */

namespace Domain;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testSetName(){

        $name='BigBob';
        $user= new User();
        $this->assertEquals(
            $name, $user->Name($name)
        );
    }
    public function testSetEmail(){
        $email='BigBob@bigbob.com';
        $user= new User();
        $this->assertEquals(
            $email, $user->Email($email)
        );
    }
    public function testSetId(){
        $id=1;
        $user= new User();
        $this->assertEquals(
            $id, $user->ID($id)
        );
    }

}
