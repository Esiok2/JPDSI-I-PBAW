{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
<legend>Kalkulator</legend>
<label for="x">Kwota</label>
<input id="x" type="text" placeholder="PLN" name="x" value="{$form ->x}">

<label for="y">Okres spłaty</label>
<input id="y" type="text" placeholder="Lata" name="y" value="{$form->y}">

<label for="op">Oprocentowanie</label>		
<input id="op" type="text" placeholder="%" name="op" value="{$form->op}">

<button class="pure-button" type="submit" name="submit">Oblicz</button>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}