<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testKeys()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $keys = $collection->keys()->toArray();
        $expectedKeys = ['a', 'b', 'c'];
        $this->assertEquals($expectedKeys, $keys);
    }

    // public function testCount()
    // {
    //     $collection = new Collect(['a', 'b', 'c']);
    //     $count = $collection->count();
    //     $this->assertEquals(3, $count);
    // }

    public function testValues()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $values = $collection->values()->toArray();
        $expectedValues = [1, 2, 3];
        $this->assertEquals($values, $expectedValues);
    }

    public function testGet()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $value = $collection->get('b');
        $this->assertEquals(2, $value);
    }

    public function testExcept()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $exceptedCollection = $collection->except('b')->toArray();
        $expectedCollection = ['a' => 1, 'c' => 3];
        $this->assertEquals($expectedCollection, $exceptedCollection);
    }

    public function testFirst()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $firstElem = $collection->first();
        $expectedElem = 1;
        $this->assertEquals($expectedElem, $firstElem);
    }
}