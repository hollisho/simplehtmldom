<?php

namespace hollisho\simplehtmldomTests\Unit;

use PHPUnit\Framework\TestCase;
use function hollisho\simplehtmldom\file_get_html;

class BasicSelectorTest extends TestCase
{
    public function test01()
    {
        // get DOM from URL or file
        $html = file_get_html('https://blog.1024plus.com/');

        // find all link
        foreach($html->find('a') as $e)
            echo $e->href . '<br>';

        // find all image
        foreach($html->find('img') as $e)
            echo $e->src . '<br>';

        // find all image with full tag
        foreach($html->find('img') as $e)
            echo $e->outertext . '<br>';

        // find all div tags with id=gbar
        foreach($html->find('div#gbar') as $e)
            echo $e->innertext . '<br>';

        // find all span tags with class=gb1
        foreach($html->find('span.gb1') as $e)
            echo $e->outertext . '<br>';

        // find all td tags with attribite align=center
        foreach($html->find('td[align=center]') as $e)
            echo $e->innertext . '<br>';

//        // extract text from table
//        echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

        // extract text from HTML
        // 直接访问根元素的plaintext
        echo $html->plaintext ?? 'No content available';

        $this->assertTrue(true);
    }
}