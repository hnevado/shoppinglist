<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Tag;

class TagTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_slug()
    {
        $tag = new Tag;
        $tag->name='Producto 1';

        $this->assertEquals('producto-1', $tag->slug);
    
    }
}
