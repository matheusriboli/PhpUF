<?php

$classe = 'MinhaClasse';
$metodo = 'DizerAlgoStatic';
$param = 'Sei laNew!';

$obj = new $classe;
$obj->$metodo($param);

class MinhaClasse {
	function DizerAlgo($frase) {
		echo $frase;
	}
	static function DizerAlgoStatic($frase) {
		echo $frase;
	}
}

exit();


class Apple {
	public function FirstMethod() { }
	final protected function SecondMethod() { }
	private static function thirdMethod() { }
}

$class = new ReflectionClass('Apple');
$methods = $class->getMethods();
var_dump($class);

echo "<br><br><br>";
var_dump($methods);







/*
call_user_func('Testar', 'Eeebaaaaaa!!!! :D');

function Testar($param) {
	echo $param;
}
*/
?>