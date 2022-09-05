<?php

namespace Src\Classes;

class QtdDays 
{
	public static function Days(string $date): string
	{
		$date = explode('/',$date);
		$dateFormat = $date[2] . '-' . $date[1] . '-' . $date[0];
		$date_ini = new \DateTime($dateFormat);
		$date_end = new \DateTime();
		$dateInterval = $date_ini->diff($date_end);
		return $dateInterval->days;
	}
}