<?php
// eo_framework test for index.php

use PHPUnit\Framework\TestCase;


class IndexTest extends TestCase
{
    public function testHello()
    {
        $_GET['name'] = 'Ethelbert';

        ob_start();
        include 'index.php';

        $content = ob_get_clean();

        $this->assertEquals('Hello Ethelbert', $content);
    }
}