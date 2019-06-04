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

}