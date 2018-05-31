Poštovanje,
<br><br>
Usluga: {%service%}<br>
Ime: {%name%}<br>
Telefon: {%phone%}<br>
Ime slavljenika: {%imeGodine%}<br>
Broj djece na rođendanu: {%brojDjece%}<br>
Email: {%email%}<br>
Komentari: <br>{%comments%}<br>
=======================================================
<br>
Broj potvrde: {%orderID%}<br>
Detalji rezervacije: <br>
<table cellspacing=0 cellpadding=4 border=1>
<tr>
	<th bgcolor="#cccccc">Datum od</th>
	<th bgcolor="#cccccc">Datum do</th>
	<th bgcolor="#cccccc">Broj dana</th>
	<th bgcolor="#cccccc">Ukupno</th>
</tr>
<?php foreach($summery as $item){?>
<tr>
	<td><?php echo getDateFormat($item['from'])?></td>
	<td><?php echo getDateFormat($item['to'])?></td>
	<td><?php echo getDaysInterval($item['from'], $item['to'])?></td>
	 <td><?php echo number_format($item['price'])?></td>
	
</tr>
<?php }?>
</table>
Opis: <br>{%dayDescr%}<br>

<br>
<?php if($_payment){?>

Iznos: {%currencyB%}&nbsp;{%subtotal%}&nbsp;{%currencyA%}

<?php if(!empty($discount)){?>
<del>( {%currencyB%}&nbsp;{%_subtotal%}&nbsp;{%currencyA%} )</del><br />
Popust : <?php echo ($discount)?><br />
Kupon kod: {%coupon%}
<?php }?>

<?php if($_taxable){?>
<br/>
Porez : {%currencyB%} <strong>{%tax%}</strong> {%currencyA%} ( {%taxRate%}% )<br />

<?php }?>
Ukupno za platiti: {%currencyB%}&nbsp;<strong>{%total%}</strong>&nbsp;{%currencyA%}<br />

    <?php if($deposit<1){?>
        Iznos depozita ( <?php echo ($deposit*100)?>% ): {%currencyB%}&nbsp;<strong>{%totalToPay%}</strong>&nbsp;{%currencyA%}<br />
    <?php }?>
    <br />
Vaša rezervacija će biti procesirana/potvrđena nakon što pošaljete uplatu.<br />
<?php }?>
{%collect%}


Vi možete jednostavno upravljati Vašom rezervacijom korištenjem sledećeg linka {%link%}

