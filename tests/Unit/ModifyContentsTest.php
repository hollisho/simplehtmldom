<?php

namespace hollisho\simplehtmldomTests\Unit;

use PHPUnit\Framework\TestCase;
use function hollisho\simplehtmldom\file_get_html;

class ModifyContentsTest extends TestCase
{
    public function test01()
    {
        // get DOM from URL or file
        $html = file_get_html('https://blog.1024plus.com/');

        // remove all image
        foreach($html->find('img') as $e)
            $e->outertext = '';

        // replace all input
        foreach($html->find('input') as $e)
            $e->outertext = '[INPUT]';

        // dump contents
        echo $html;

        $this->assertTrue(true);
    }
}