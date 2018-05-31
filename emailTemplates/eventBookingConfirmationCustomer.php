{%name%},
<br><br>
Hvala Vam na rezervaciji.
<br><br>
Usluga: {%service%}<br>
Ime: {%name%}<br>
Ime slavljenika: {%imeGodine%}<br>
Broj djece na rođendanu: {%brojDjece%}<br>
Telefon: {%phone%}<br>
Email: {%email%}<br>
Komentari: <br>{%comments%}<br>
=======================================================
<br>
Naziv događaja: {%eventName%}<br>
Datum događaja: {%eventDate%}<br>
Broj ulaznica: {%qty%}<br><br>
Opis događaja: {%eventDescr%}<br>
Lokacija događaja: <a href="{%eventMapLink%}">{%eventLocation%}</a><br>

<br>
<?php if($_payment){?>

Ukupno za uplatiti: {%currencyB%}&nbsp;{%subtotal%}&nbsp;{%currencyA%}

<?php if(!empty($discount)){?>
<del>( {%currencyB%}&nbsp;{%_subtotal%}&nbsp;{%currencyA%} )</del><br />
Popust : <?php echo ($discount)?><br />
Kupon kod: {%coupon%}
<?php }?>

<?php if($_taxable){?>
<br />
Porez : {%currencyB%} {%tax%} {%currencyA%} ( {%taxRate%}% )<br />

<?php }?>


Ukupan iznos za platiti: {%currencyB%}&nbsp;<strong>{%total%}</strong>&nbsp;{%currencyA%}<br />
    <?php if($deposit<1){?>
        Iznos depozita ( <?php echo ($deposit*100)?>% ): {%currencyB%}&nbsp;<strong>{%totalToPay%}</strong>&nbsp;{%currencyA%}<br />
    <?php }?>
    <br />
Vaša rezervacija će biti procesirana/potvrđena nakon Vaše uplate.<br />
<?php }?>
Status rezervacije:{%status%}

Vi možete jednostavno upravljati Vašom rezervacijom pomoću sledećeg linka {%link%}
<br /><br />
<a href="{%google_link%}">Ubaci</a> na Google kalendar
