<?php

class SongsModelTest extends PHPUnit_Framework_TestCase
{
    var $controller = null,
        $statsModel = null;

    public function setUp()
    {
        // every model class relies on the database connection that is created in the controller.

        // side-fact: we create the db connection in the controller (and not in a base model class) to make sure
        // we always only open one database connection and use it for every db request, in every model. So when using
        // calls to 10 models you'll still use only on db connection. this is very good, you want that.
        $this->controller = new Controller();
        $this->songsModel = new SongsModel($this->controller->db);
    }

    /**
     * does the method return an array, like it should do ?
     */
    public function testIfGetAllSongsReturnsArray()
    {
        $this->assertInternalType('array', $this->songsModel->getAllSongs());
    }
}