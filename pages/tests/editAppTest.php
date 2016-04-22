<?php
class editAppTest extends PHPUnit_Framework_TestCase
{
    
    public function test()
    {
        include_once("../model/irb_application_class.php");
        // Arrange
        $a = new irb_application();

        // Act
        $b = $a->saveChange(2,"TITLE_OF_PROJECT","newtitle");

        // Assert
        $this->assertEquals(true, $b);
    }
}