<?php


use Asminog\Wr\Catalog\Domain\Unit;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    protected Unit $unit;

    protected function setUp(): void
    {
        $this->unit = new Unit;
    }

    /**
     * @covers Unit::test
     */
    public function testFirst(): Unit
    {
        $this->assertFalse($this->unit->test(false));
        $this->assertTrue($this->unit->test(true));
        return $this->unit;
    }

    /**
     * @coversNothing
     * @depends testFirst
     */
    public function testSecond(Unit $vacancy): Unit
    {
        $this->assertTrue($vacancy->test(true));

        return $vacancy;
    }
}
