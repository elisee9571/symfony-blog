<?php

namespace App\Tests;

use App\Entity\Demo;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testDemo(): void
    {
        $demo = new Demo;
        $demo->setName('demo');
        
        $this->assertTrue($demo->getName() === 'demo');
    }
}
