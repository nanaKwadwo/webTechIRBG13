<?php
    include "../model/irb_application_class.php";
    
class editAppTest extends PHPUnit_Framework_TestCase
{

    public function test()
    {
    
        // Arrange
        $a = new irb_application();

        // Act
        $b = $a->saveChange(2,"newtitle","TITLE_OF_PROJECT");

        // Assert
        $this->assertEquals(true, $b);
    }
}