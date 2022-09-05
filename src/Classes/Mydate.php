<?php

namespace Src\Classes;

class MyDate{

	public static function toAmerican(string $date){
		$data = explode("/", $date);

		list($dia, $mes, $ano) = $data;
		
		return "$ano-$mes-$dia";
	}

	public static function toBrazilian(string $date){
		$data = explode("-", $date);

		list($ano, $mes, $dia ) = $data;
		
		return "$dia/$mes/$ano";
	}

	public static function toggle($date){

		try {
			if(!(preg_match("/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/", $date)) && !(preg_match("/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/", $date))){
				throw new \Exception("Formato de data inválido", 1);
				
			}

			if (preg_match("/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/", $date)) {
				echo MyDate::toBrazilian($date);
			}
			if (preg_match("/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/", $date)) {
				echo MyDate::toAmerican($date);
			}
		} catch (\Exception $th) {
			echo 'ERROR: ' . $th->getMessage();
		}		
	}
}