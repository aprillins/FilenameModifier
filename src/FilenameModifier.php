<?php namespace Aprillins\FModifier;

/**
* 
*/
class FilenameModifier
{

    public $filestring;
    public $filename;

    function __construct($filestring)
    {
        $this->filestring = $filestring;

        return $filestring;
    }

    public function getFilenameFromURL($url)
    {
        $urlChuck = explode('/', $url);
        
        $filename = end($urlChuck);

        $this->filename = $filename;

        return $filename;
    }

}