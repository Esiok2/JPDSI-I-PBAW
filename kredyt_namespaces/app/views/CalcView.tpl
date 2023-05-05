{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<h3>Prosty kalkulator</h2>


<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
<label for="x">Kwota</label>
<input id="x" type="text" placeholder="PLN" name="x" value="{$form ->x}">

<label for="y">Okres spłaty</label>
<input id="y" type="text" placeholder="Lata" name="y" value="{$form->y}">

<label for="op">Oprocentowanie</label>		
<input id="op" type="text" placeholder="%" name="op" value="{$form->op}">

<button class="pure-button" type="submit" name="submit">Oblicz</button>
	
</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="center">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="center">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="center">
	{$res->result}
	</p>
{/if}

</div>

{/block}