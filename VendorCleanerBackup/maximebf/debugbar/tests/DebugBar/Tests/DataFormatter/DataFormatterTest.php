<?php

namespace DebugBar\Tests\DataFormatter;

use DebugBar\Tests\DebugBarTestCase;
use DebugBar\DataFormatter\DataFormatter;

class DataFormatterTest extends DebugBarTestCase
{
    public function testFormatVar()
    {
        $f = new DataFormatter();
        $this->assertEquals("bool TRUE", $f->formatVar(true));
    }

    public function testFormatDuration()
    {
        $f = new DataFormatter();
        $this->assertEquals("100μs", $f->formatDuration(0.0001));
        $this->assertEquals("100ms", $f->formatDuration(0.1));
        $this->assertEquals("1s", $f->formatDuration(1));
        $this->assertEquals("1.35s", $f->formatDuration(1.345));
    }

    public function testFormatBytes()
    {
        $f = new DataFormatter();
        $this->assertEquals("0B", $f->formatBytes(0));
        $this->assertEquals("1B", $f->formatBytes(1));
        $this->assertEquals("1KB", $f->formatBytes(1024));
        $this->assertEquals("1MB", $f->formatBytes(1024 * 1024));
    }
}