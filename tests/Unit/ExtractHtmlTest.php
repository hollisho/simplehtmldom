<?php

namespace hollisho\simplehtmldomTests\Unit;

use PHPUnit\Framework\TestCase;
use function hollisho\simplehtmldom\file_get_html;

class ExtractHtmlTest extends TestCase
{
    public function test01()
    {
        echo file_get_html('https://blog.1024plus.com/')->plaintext;
        $this->assertTrue(true);
    }
}