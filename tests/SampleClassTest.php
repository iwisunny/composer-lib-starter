<?php

use sunnyw\Starter\SampleClass;

/**
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 * @author yourname
 */
class SampleClassTest extends PHPUnit_Framework_TestCase
{

    /**
     * Just check if the YourClass has no syntax error
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.

     */
    public function testIsThereAnySyntaxError()
    {
        $var = new SampleClass;
        $this->assertTrue(is_object($var));
    }

    /**
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.

     */
    public function testFirstMethod()
    {
        $var = new SampleClass;
        $this->assertTrue($var->hello("hey") == 'Hello World');
    }

}