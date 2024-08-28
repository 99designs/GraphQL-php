<?php

namespace Youshido\Tests\Issues\Issue98;

use PHPUnit\Framework\TestCase;
use Youshido\GraphQL\Type\TypeService;

class TypeServiceTest extends TestCase
{
    public function testPropertGetValueWithMagicGet()
    {
        $object = new DummyObjectWithMagicGet();

        // Failing with magic getters, symfony/property-access consider them non-existent
        $this->assertNull(TypeService::getPropertyValue($object, 'foo'));
        $this->assertNull(TypeService::getPropertyValue($object, 'anything'));
    }

    public function testPropertyGetValueWithMagicCall()
    {
        $object = new DummyObjectWithMagicCall();

        // __call() should not be considered by default
        $this->assertNull(TypeService::getPropertyValue($object, 'foo'));
        $this->assertNull(TypeService::getPropertyValue($object, 'anything'));
    }
}

class DummyObjectWithMagicGet
{
    public function __get($name)
    {
        if ($name === 'foo') {
            return 'getfoo';
        }

        return 'getbar';
    }

}

class DummyObjectWithMagicCall
{
    public function __call($name, $arguments)
    {
        if ($name === 'foo') {
            return 'callfoo';
        }

        return 'callbar';
    }
}

