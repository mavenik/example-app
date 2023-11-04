<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1.5,3), 4.5);
    }

    /**
     * A basic unit test example.
     */
    public function testAddNumeric(): void
    {
      $this->expectException(\InvalidArgumentException::class);

      Practical::add("abc", "xyz");
    }
}

?>
