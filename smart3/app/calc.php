<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/libs/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['opro'] = isset($_REQUEST['opro']) ? $_REQUEST['opro'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
	if ( ! (isset($form['x']) && isset($form['y']) && isset($form['opro']) ))	return false;	
	

	$hide_intro = true;
	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['x'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['y'] == "") $msgs [] = 'nie podano czasu do spłaty';
	if ( $form['opro'] == "") $msgs [] = 'Nie podano oprocentowania';
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['x'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą';
		if (! is_numeric( $form['y'] )) $msgs [] = 'Druga wartość nie jest liczbą';
		if (! is_numeric( $form['opro'] )) $msgs [] = 'Druga wartość nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na int
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
	$form['opro'] = floatval($form['opro']);
	//wykonanie operacji
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
	$form['opro'] = floatval($form['opro']);
	
	$result = ($form['x']/$form['y']/12);
	$result = $result+$result*$form['opro']/100;
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Krystian Sliski');
$smarty->assign('page_description','Robi Speedrun projektu');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('page_dol','Wypelaniacz');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

;

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');