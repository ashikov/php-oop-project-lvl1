<?php

namespace Validator\Tests;

use PHPUnit\Framework\TestCase;
use Validator\Validator;

class ValidatorTest extends TestCase
{
    public function testValidate(): void
    {
        $v = new Validator();
        $this->assertEquals(true, $v->validate());
    }
}
