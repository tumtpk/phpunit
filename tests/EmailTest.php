<?php

class EmailTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testContain()
    {
        $this->assertContains(4, [1, 2, 3]);
    }

    public function testEmpty()
    {
        $this->assertEmpty(['foo']);
    }

    public function testFalse()
    {
        $this->assertFalse(true);
    }

    public function testGreater()
    {
        $this->assertGreaterThan(2, 1);
    }

    public function testGreaterEqual()
    {
        $this->assertGreaterThanOrEqual(2, 1);
    }

    public function testNull()
    {
        $this->assertNull('foo');
    }

    public function testRegExp()
    {
        $this->assertRegExp('/foo/', 'bar');
    }

    public function testTrue()
    {
        $this->assertTrue(false);
    }

    public function testContainTrue()
    {
        $this->assertContains('baz', 'foobar');
    }

    public function testCount()
    {
        $this->assertCount(0, ['foo']);
    }
}