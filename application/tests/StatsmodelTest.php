<?php

class StatsModelTest extends PHPUnit_Framework_TestCase
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
        $this->statsModel = new StatsModel($this->controller->db);
    }

    public function testGetAmountOfSongs()
    {
        // we test if the result of the getAmountOfSongs() method is 0 or greater.
        // please note the PDO string/integer issue below.
        $this->assertGreaterThanOrEqual(0, $this->statsModel->getAmountOfSongs());

        // FYI: The last line in this comment shows a possible other test that would be correct here, but PDO returns a
        // string even for numeric results, not an integer, so this test is not possible with PDO (without hacks)
        // "Even for numeric column types in a mysql, PDO returns data as strings by default" - Lorna Jane
        // more: http://stackoverflow.com/questions/20079320/php-pdo-mysql-how-do-i-return-integer-and-numeric-columns-from-mysql-as-int/20123337
        // $this->assertInternalType('int', $this->statsModel->getAmountOfSongs());
    }
}