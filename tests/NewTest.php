<?php

class NewTest extends \PHPUnit\Framework\TestCase{
    public function testGetPageData(){
        $user = new App\User;
        $result = $user->getIdData(100);

        $this->assertEquals(0, $result);
    }

    public function testConnection(){
        $user = new App\User;
        $result = $user->getConnection();

        $this->assertEquals(true, (bool)$result);
    }

    public function testChefData(){
        $user = new App\User;
        $result = $user->chefData("ali@mail.com", "1234");

        $this->assertEquals(1, $result);
    }

    public function testUserData(){
        $user = new App\User;
        $result = $user->chefData("ali@mail.com", "1234");

        $this->assertEquals(1, $result);
    }

    public function testFileName(){
        $user = new App\User;
        $result = $user->FileNameGetter(1, 2);

        $this->assertNotEquals("error", $result);
    }


    // ///////////////////////////Fail test cases
    public function testGetPageDataFail(){
        $user = new App\User;
        $result = $user->getIdData(1);

        $this->assertEquals(0, $result);
    }

    public function testConnectionFail(){
        $user = new App\User;
        $result = $user->getConnection();

        $this->assertEquals(false, (bool)$result);
    }

    public function testChefDataFail(){
        $user = new App\User;
        $result = $user->chefData("ali@mail.com", "1234");

        $this->assertEquals(0, $result);
    }

    public function testUserDataFail(){
        $user = new App\User;
        $result = $user->chefData("ali@mail.com", "1234");

        $this->assertEquals(0, $result);
    }

    public function testFileNameFail(){
        $user = new App\User;
        $result = $user->FileNameGetter(1, 2);

        $this->assertEquals("error", $result);
    }
}