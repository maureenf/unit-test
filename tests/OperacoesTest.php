<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Operacoes;

class OperacoesTest extends TestCase
{

    public function testSoma()
    {
        $operacoes = new Operacoes();

        $result = $operacoes->soma(2, 5);

        $this->assertEquals(7, $result);
    }

    public function testMistura()
    {
        $expectedValueA = 4;
        $expectedValueB = 5;
        $expectedSomaResult = 9;
        $expectedMultiplicacaoResult = 36;
        $operacoesMock = $this->mockOperacoes(['soma', 'multiplicacao']);

        $operacoesMock->expects($this->once())
            ->method('soma')
            ->with($expectedValueA, $expectedValueB)
            ->willReturn($expectedSomaResult);

        $operacoesMock->expects($this->once())
            ->method('multiplicacao')
            ->with($expectedSomaResult, $expectedValueA)
            ->willReturn($expectedMultiplicacaoResult);

        $result = $operacoesMock->mistura($expectedValueA, $expectedValueB);

        $this->assertEquals($expectedMultiplicacaoResult, $result);
    }

    private function mockOperacoes(array $methods)
    {
        return $this->getMockBuilder(Operacoes::class)
            ->setMethods($methods)
            ->getMock();
    }

}