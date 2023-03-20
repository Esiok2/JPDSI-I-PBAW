<?php
//Kontroler
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

//pobieranie parametrów
function getParams(&$ilosc,&$lata,&$oprocentowanie) {
$ilosc = isset($_REQUEST['ilosc']) ? $_REQUEST['ilosc'] : null;
$lata = isset($_REQUEST['lata']) ?  $_REQUEST['lata'] : null;
$oprocentowanie = isset($_REQUEST['oprocentowanie']) ?  $_REQUEST['oprocentowanie'] : null;
}

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$ilosc,&$lata,&$oprocentowanie,&$messages ){
	//sprawdzenie przekazania parametrów
if ( ! (isset($ilosc) && isset($lata) && isset($oprocentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $ilosc == "") {
	$messages [] = 'Nie podano ilości';
}
if ( $lata == "") {
	$messages [] = 'Nie podano lat';
}
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//zatrzymanie walidacji dalej gdy brak parametrów
if (count($messages)!= 0) return false;
	
// sprawdzenie, czy $x i $y są liczbami całkowitymi
if (! is_numeric( $ilosc )) {
	$messages [] = 'Ilosc nie jest liczbą całkowitą';
}
	
if (! is_numeric( $lata )) {
	$messages [] = 'Lata nie są liczbą całkowitą';
}	
if (! is_numeric( $oprocentowanie )) {
	$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
}

if (count($messages)!= 0) return false;
else return true;

}




//wykonaj zadanie jeśli wszystko w porządku

function oblicz(&$ilosc,&$lata,&$oprocentowanie,&$messages,&$miesieczna_stopa){
	global $role;
	//konwersja parametrów na int
	$ilosc = intval($ilosc);
	$lata = intval($lata);
    $oprocentowanie = intval($oprocentowanie);

	 //wartości stałe
	 $miesieczne_oprocentowanie = $oprocentowanie / 1200; //  dzielmy przez 1200 ponieważ potrzebujemy oprocentowania w  miesiącach
	 $miesioce = $lata * 12;

    //operacja
	if ($role == 'admin'){
    $miesieczna_stopa = $ilosc * ($miesieczne_oprocentowanie + ($miesieczne_oprocentowanie / (pow(1 + $miesieczne_oprocentowanie, $miesioce) - 1)));
	} else {
		$messages [] = 'Tylko administrator może poznać miesięczną rate !';
	}
	
    //echo "Miesięczna rata: " . number_format($miesieczna_stopa, 2) . " zł";
}

//definicja kontrolera
$ilosc = null;
$lata = null;
$oprocentowanie = null;
$miesieczna_stopa = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($ilosc,$lata,$oprocentowanie);
if ( validate($ilosc,$lata,$oprocentowanie,$messages) ) { // gdy brak błędów
	oblicz($ilosc,$lata,$oprocentowanie,$messages,$miesieczna_stopa);
}
include 'calc_view.php';