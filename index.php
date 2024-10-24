<?php

$namesAndAges = [
		'mario' => 35, 
		'luisa' => 18, 
		'fer' => 23
];



array_key_exists('mario', $namesAndAges);

$keys1 = array_keys($namesAndAges, );
//print_r($keys1);

$keys2 = array_keys($namesAndAges, 23);
//print_r($keys2);

$values = array_values($namesAndAges);
//print_r($values);

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");

$array1_2_merged = array_merge($array1, $array2);
//print_r($array1_2_merged);

$array1_2_intersect = array_intersect($array1, $array2);
//print_r($array_intersect);

$array1_2_diff = array_diff($array1, $array2);
//print_r($array1_2_diff);


$myArray = [
		"apple" => 2,
		"banana" => 3,
		"cherry" => 1,
		"date" => 4
];

$array_filtrandoMayorQueDos = array_filter($myArray, callback: function($key, $value){
    return $value >= 2;
}, mode:ARRAY_FILTER_USE_BOTH);
//print_r($array_filtrandoMayorQueDos);

$array_filtrandoPares = array_filter($myArray, callback: function( $value){ 
    return ($value % 2== 0);
});
/* OJO: si solo usas los values no hace falta que la callbackFn pille las keys como parametro y no hace falta
 especificar el mode
 */
//print_r($array_filtrandoPares);

$myArray = [
		"apple" => 2,
		"banana" => 3,
		"cherry" => 1,
		"date" => 4
];

$myarrayDoblado = array_map(function($value){
    return $value * 2;
}, $myArray);
//print_r($myarrayDoblado);
