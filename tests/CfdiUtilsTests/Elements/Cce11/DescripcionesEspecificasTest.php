<?php
namespace CfdiUtilsTests\Elements\Cce11;

use CfdiUtils\Elements\Cce11\DescripcionesEspecificas;
use PHPUnit\Framework\TestCase;

class DescripcionesEspecificasTest extends TestCase
{
    /** @var DescripcionesEspecificas */
    public $element;

    protected function setUp()
    {
        parent::setUp();
        $this->element = new DescripcionesEspecificas();
    }

    public function testConstructedObject()
    {
        $this->assertSame('cce11:DescripcionesEspecificas', $this->element->getElementName());
    }
}
