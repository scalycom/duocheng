<?php
use Duocheng\Hasher\MD5Hasher;
class MD5HasherTest extends \PHPUnit\Framework\TestCase{
    protected  $hasher;
    public function setUp() {
        $this->hasher = new MD5Hasher();
    }

    public function testMD5HasherMake() {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');
        $this->assertEquals($password,$passwordTwo);
    }


    public function testMD5HasherMakeWithouSalt() {
        $password = md5('password111111');
        $passwordTwo = $this->hasher->make('password',['salt'=>111111]);
        $this->assertEquals($password,$passwordTwo);
    }



    public function testMD5HasherCheck() {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password',$password);
        $this->assertTrue($passwordCheck);
    }

}