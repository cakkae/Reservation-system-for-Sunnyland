Plaćanje za Narudžbu #{%orderId%} je uspješno procesirana {%paymentProcessor%}<br/><br/>

<b>Informacije plaćanja</b><br/>
Iznos :{%amount%} {%currency%}<br/>
ID Transakcije :{%trnID%}<br/>
Ime : {%payer_name%}<br/>
Email : {%payer_email%}<br/><br/>

<b>Informacije o rezervaciji</b><br/>

Naziv usluge: {%serviceName%}<br/>
Datum: {%date%}s<br/>
Vrijeme: <table border="1" width="300">
<tr><th bgcolor="#ccc">Od</th><th bgcolor="#ccc">To</th><th bgcolor="#ccc">Količina</th></tr>
<?php foreach($times as $k){?>
    <tr><td align="center"><?php echo $k['from']?></td><td align="center"> <?php echo $k['to']?></td><td align="center"><?php echo $k['qty']?></td>
<?php }?>
</table>
