<?php

namespace Src\Classes;

class SumArray
{
	public static function Sum(array $values): int
	{
		$total = 0;
		if(count($values) == 0)
			return $total;

		
		foreach ($values as $key => $value) {
			$total += $value;
		}

		return $total;
	}
}