<?php

namespace hollisho\simplehtmldomTests\Unit;

use PHPUnit\Framework\TestCase;
use function hollisho\simplehtmldom\file_get_html;

class CallbackTest extends TestCase
{
    public function test01()
    {
        // 1. Write a function with parameter "$element"


        // 2. create HTML Dom
        $html = file_get_html('https://blog.1024plus.com/');


        // 3. Register the callback function with it's function name
        $html->set_callback([$this, 'my_callback']);


        // 4. Callback function will be invoked while dumping
        echo $html;

        $this->assertTrue(true);
    }

    public function my_callback($element) {
        if ($element->tag=='input')
            $element->outertext = 'input';

        if ($element->tag=='img')
            $element->outertext = 'img';

        if ($element->tag=='a')
            $element->outertext = 'a';
    }
}