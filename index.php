<?php

use Src\Classes\MyDate;
use Src\Classes\QtdDays;
use Src\Classes\SumArray;
use Src\Classes\User;

require __DIR__.'/vendor/autoload.php';

try {
	echo "<pre>";

	$total = SumArray::Sum([1,3,5,9,12,10]);
	echo 'Soma Array: '.$total.PHP_EOL;

	echo "<br>";
	echo "<br>";

	$days =  QtdDays::Days('01/08/2022');

	echo 'Quantidade de dias Inicio(01/08/2022): '.$total.PHP_EOL;

	echo "<br>";
	echo "<br>";

	$objUser = new User;
	$users = $objUser->UserId(1);
	echo 'Usuario id 1';
	echo "<br>";
	foreach ($users as $user) {
		echo 'Id: '.$user->id.PHP_EOL;
		echo 'Nome: '.$user->nome.PHP_EOL;
		echo 'Login: '.$user->login.PHP_EOL;
		echo 'Senha: '.$user->senha.PHP_EOL;
	}

	echo "<br>";
	echo "<br>";

	$users = $objUser->ListUsers(2);
	echo 'Usuarios pagina 2';
	echo "<br>";
	foreach ($users as $user) {
		echo 'Id: '.$user->id.PHP_EOL;
		echo 'Nome: '.$user->nome.PHP_EOL;
		echo 'Login: '.$user->login.PHP_EOL;
		echo 'Senha: '.$user->senha.PHP_EOL;
	}

	echo "<br>";
	echo "<br>";

	$american =  MyDate::toAmerican('31/08/2022');
	
	echo 'Padrão americano: '.$american;
	echo "<br>";

	echo "<br>";
	echo "<br>";

	echo 'Varios Padrões: ';
	echo "<br>";

	$american =  MyDate::toAmerican('31/08/2022');
	echo 'Padrão americano: '.$american;

	echo "<br>";
	echo "<br>";

	$brasil = MyDate::toggle('2022-08-31');
	echo 'Padrão brasileiro: '.$brasil;

	echo "<br>";
	echo "<br>";

	echo MyDate::toggle('2022-08-321');

	echo "</pre>";
} catch (\Exception $th) {
	echo 'ERROR: ' . $th->getMessage();
}