Dragi Administratore,<br /> <br />

Ovo je potvrda Vaše rezervacije.
<br />Usluga: {%serviceName%}
<br />Ime osobe: {%name%}
<br />{%imeSlavljenika%}
<br />Broj osoba:{%brojDjece%}
<br />Email: {%email%}
<br />Telefon: {%phone%}
<br />Komentari: {%comments%}
<br />Informacije o rezervaciji: 
<br />
<br />
<table cellspacing=0 cellpadding=4 border=1>
<tr>
	<th bgcolor="#cccccc"><?php echo TBL_DATE?></th>
	<th bgcolor="#cccccc"><?php echo TBL_TIME1?></th>
	<th bgcolor="#cccccc"><?php echo TBL_TIME2?></th>
	<th bgcolor="#cccccc"><?php echo TBL_QTY?></th>
</tr>
<?php foreach($_info as $item){?>
<tr>
	<td><?php echo $item['date']?></td>
	<td><?php echo $item['timeFrom']?></td>
	<td><?php echo $item['timeTo']?></td>
	<td><?php echo $item['qty']?></td>
	
</tr>
<?php }?>
</table><br>
{%collect%}
<?php if($_payment){?>



<?php if(!empty($discount)){?>

Iznos: {%currencyB%}&nbsp;{%subtotal%}&nbsp;{%currencyA%}&nbsp;<del>( {%currencyB%}&nbsp;{%_subtotal%}&nbsp;{%currencyA%} )</del><br />
Popust : <?php echo ($discount)?><br />
Kupon kod: {%coupon%}<br />
<?php }else{?>
Iznos: {%currencyB%}&nbsp;{%subtotal%}&nbsp;{%currencyA%}
<?php }?>

<?php if($_taxable){?>

Porez : {%currencyB%} <strong>{%tax%}</strong> {%currencyA%} ( {%taxRate%}% )<br />

<?php }?>
Ukupno za platiti: {%currencyB%}&nbsp;<strong>{%total%}</strong>&nbsp;{%currencyA%}<br />
    <?php if($deposit<1){?>
        Iznos depozita ( <?php echo ($deposit*100)?>% ): {%currencyB%}&nbsp;<strong>{%totalToPay%}</strong>&nbsp;{%currencyA%}<br />
    <?php }?>
    <br />
Vaša rezervacija će biti procesirana/potvrđena nakon što mi primimo pare za uplatu.<br />
<?php }?>
Status rezervacije: {%status%}
<br/>
