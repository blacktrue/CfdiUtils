<?php
namespace CfdiUtilsTests\Validate\Cfdi33\RecepcionPagos;

use CfdiUtils\Validate\Cfdi33\RecepcionPagos\CfdiRelacionados;
use CfdiUtils\Validate\Status;

class CfdiRelacionadosTest extends ValidateComplementoPagosTestCase
{
    /** @var CfdiRelacionados */
    protected $validator;

    protected function setUp()
    {
        parent::setUp();
        $this->validator = new CfdiRelacionados();
    }

    public function testValidTipoRelacion()
    {
        $comprobante = $this->getComprobante();
        $comprobante->getCfdiRelacionados(['TipoRelacion' => '04']);

        $this->runValidate();

        $this->assertStatusEqualsCode(Status::ok(), 'PAGREL01');
    }

    public function testInvalidTipoRelacion()
    {
        $comprobante = $this->getComprobante();
        $comprobante->getCfdiRelacionados(['TipoRelacion' => 'XX']);

        $this->runValidate();

        $this->assertStatusEqualsCode(Status::error(), 'PAGREL01');
    }

    public function testWithoutCfdiRelacionados()
    {
        $this->runValidate();

        $this->assertStatusEqualsCode(Status::none(), 'PAGREL01');
    }
}
