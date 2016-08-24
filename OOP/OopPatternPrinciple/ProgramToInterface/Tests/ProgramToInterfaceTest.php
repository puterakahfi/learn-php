<?php

namespace OopPatternPrinciple\Tests;
use OopPatternPrinciple\ProgramToInterface\Rumah as Rumah;

/**
 * Description of ProgramToInterfaceTest
 *
 * @author dwc
 */
class ProgramToInterfaceTest extends \PHPUnit_Framework_TestCase
{
    function testCreateRumah(){
        $rumah = new Rumah();
    }
}
