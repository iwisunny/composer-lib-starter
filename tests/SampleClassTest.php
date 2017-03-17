<?php
namespace Tests;

use sunnyw\ComposerLib\SampleClass;

/**
 * Class SampleClassTest
 * @package Tests
 *
 * Summary
 * Description
 * @author    Wang Xi <iwisunny@gmail.com>
 * @copyright (C) 2017 Wang Xi. All rights reserved.
 * @version 0.1
 */
class SampleClassTest extends \PHPUnit_Framework_TestCase
{
    public function test_sample_class()
    {
        $this->assertTrue(is_object(new SampleClass()));
    }

    public function test_not_implement()
    {
        //todo
        $this->markTestIncomplete();
    }
}
