<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>



    
    <form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
        <legend>Kalkulator kredytowy</legend>
    <fieldset>
        <label for="id_il">Kwota Kredytu:</label> <br>
        <input id="id_il" type="text" name="ilosc" value="<?php out($ilosc);?>"><br>

        <label for="id_ll">Liczba lat:</label> <br>
        <input id="id_ll" type="text" name="lata" value="<?php out($lata); ?>"><br>

        <label for="id_opr">Oprocentowanie (w %):</label> <br>
        <input id="id_opr" type="text" name="oprocentowanie" value="<?php out($oprocentowanie); ?>"><br>

        
    </fieldset>
    <input type="submit" name="submit" value="Oblicz" class="pure-form pure-form-stacked">
    </form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
//wynik
?>
    <?php if (isset($miesieczna_stopa)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata: : '. number_format($miesieczna_stopa, 2) . " zł"; ?>
</div>
<?php } ?>


</body>
</html>