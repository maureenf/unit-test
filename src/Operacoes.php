<?php

namespace App;

class Operacoes
{

	public function soma($a, $b)
	{
		return $a + $b;
	}

	public function subtracao($a, $b)
	{
		return $a - $b;
	}

	public function divisao($a, $b)
	{
		return $a / $b;
	}

	public function multiplicacao($a, $b)
	{
		return $a * $b;
	}

	public function mistura($a, $b)
	{

		$resultadoSoma = $this->soma($a, $b);

		return $this->multiplicacao($resultado, $a);
	}
}