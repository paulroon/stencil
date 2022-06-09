<?php

namespace Happycode\Stencil\Tests;

use Happycode\Stencil\Stencil;
use PHPUnit\Framework\TestCase;

class StencilTest extends TestCase
{
    public function testStencilConstructs()
    {
        $stencil = new Stencil();
        $this->assertInstanceOf(Stencil::class, $stencil);
    }

    public function testParseReturnsString()
    {
        $stencil = new Stencil();
        $templateString = "Hello World";
        $output = $stencil->parse($templateString);

        $this->assertIsString($output);
        $this->assertEquals("Hello World", $output);
    }

    public function testParseWillSubstituteStringData()
    {
        $stencil = new Stencil();
        $templateString = "{{mummy}}, {{daddy        }}, {{  daughter }} & {{     son  }}, went for a walk on {{ date:d-m-Y H:i }}";
        $output = $stencil->parse($templateString, [
            'mummy' => 'Annabel',
            'daddy' => 'Paul',
            'daughter' => 'Olive',
            'son' => 'Arlo'
        ]);
        $expected = "Annabel, Paul, Olive & Arlo, went for a walk on " . date('d-m-Y H:i');
        $this->assertIsString($output);
        $this->assertEquals($expected, $output, "Parse did not correctly substitute context|functions property");
    }

    public function testParseIgnoredExtraContextData()
    {
        $stencil = new Stencil();
        $templateString = "Hello Marty";
        $output = $stencil->parse($templateString, [
            'name' => 'Doc'
        ]);

        $this->assertIsString($output);
        $this->assertEquals("Hello Marty", $output);
    }

}
