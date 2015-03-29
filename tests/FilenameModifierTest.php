<?php

use Aprillins\FModifier\FilenameModifier;
/**
* 
*/
class FilenameModifierTest extends PHPUnit_Framework_TestCase
{
    
    function testConstruct()
    {
        $fmod = new FilenameModifier('string');
        
        $this->assertEquals('string', $fmod->filestring);
    }

    function testGetFilenameFromURL()
    {
        $url = 'http://www.acakadut.com/folder/BeautifulWoman.gif';
        
        $fmod = new FilenameModifier($url);

        $fmod->filename = $fmod->getFilenameFromURL($url);

        $this->assertEquals('BeautifulWoman.gif', $fmod->filename);
    }   
}