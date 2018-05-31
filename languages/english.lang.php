<?php
    /******************************************************************************
     * #                         BookingWizz v5.5
     * #******************************************************************************
     * #      Author:     Convergine (http://www.convergine.com)
     * #      Website:    http://www.convergine.com
     * #      Support:    http://support.convergine.com
     * #      Version:    5.5
     * #
     * #      Copyright:   (c) 2009 - 2014  Convergine.com
     * #
     * #******************************************************************************/

    /******************************************************************************
      BOOKING SYSTEM INTERFACE TEXT STRINGS (BOTH FRONT + ADMIN)
    ******************************************************************************/
    define("January","Januar");
    define("February","Februar");
    define("March","Mart");
    define("April","April");
    define("May","Maj");
    define("June","Juni");
    define("July","Juli");
    define("August","August");
    define("September","Septembar");
    define("October","Oktobar");
    define("November","Novembar");
    define("December","Decembar");

    define("Jan","Jan");
    define("Feb","Feb");
    define("Mar","Mar");
    define("Apr","Apr");
    define("Jun","Jun");
    define("Jul","Jul");
    define("Aug","Aug");
    define("Sep","Sep");
    define("Oct","Oct");
    define("Nov","Nov");
    define("Dec","Dec");

    define("Mon","Pon");
    define("Tue","Uto");
    define("Wed","Sri");
    define("Thu","Cet");
    define("Fri","Pet");
    define("Sat","Sub");
    define("Sun","Ned");
    
    define("Monday","Ponedjeljak");
    define("Tuesday","Utorak");
    define("Wednesday","Srijeda");
    define("Thursday","Cetvrtak");
    define("Friday","Petak");
    define("Saturday","Subota");
    define("Sunday","Nedjelja");

    #index_small.php
    define("SML_PREV","Prethodni");
    define("SML_NEXT","Sledeci");
    define("SML_D0","Ned");
    define("SML_D1","Pon");
    define("SML_D2","Uto");
    define("SML_D3","Sri");
    define("SML_D4","Cet");
    define("SML_D5","Pet");
    define("SML_D6","Sub");
    define ("EVENTS_LIST_TITLE","Dogadaji za");

    # admin navigation items
    define("MENU1","Raspored");
    define("MENU1_1","Jedan dan");
    define("MENU1_2","Više dana");
    define("MENU1_3","Dogadaji");
    define("MENU2","Website rezervacije");
    define("MENU2_1","Website rezervacije");
    define("MENU2_2","Rucne rezervacije");
    define("MENU2_3","Dodaj rezervaciju");
    define("MENU2_4","Export ucesnike");
    define("MENU3","USLUGE");
    define("MENU3_1","Dodaj uslugu");
    define("MENU4","Dogadaji");
	define('MENU4_0','Lista dogadaja');
    define("MENU4_1","Dodaj dogadaj");
    define("MENU5","Kuponi");
    define("MENU5_1","Dodaj kupon");
	define("MENU6","Izvještaji");
	define("MENU6_1","Izvještaj dogadaja");
	define("MENU6_2","Izvještaj termina");
	define("MENU6_3","Izvještaj višedanskih rezervacija");
    define("MENU7","Dodaj rucno rezervaciju");
    define("MENU7_1","Dodaj rucno jednodnevnu rezervaciju");
    define("MENU8","Lista rezervacija");
    define("MENU9","Usluge");
    define("MENU10","Lista usluga");
    define("MENU11","Dodaj uslugu");
    define("MENU11_1","Dodaj višedansku uslugu");
    define("MENU14","Moji kuponi");
    
    
    define("REQUIRED_DEPOSIT","Potreban depozit");


    # booking-nojs.php
    # General
    define("APPLICATION_TITLE","Sunnyland Admin");//(used multiple times)
    define("GENERIC_QUERY_FAIL","Oops, desila se greška.");
    define("BOOKING_FRM_CONFIRMED","Potvrdeno");//(used multiple times)
    define("BOOKING_FRM_NOTCONFIRMED","Nije potvrdeno");//(used multiple times)
    define("BOOKING_FRM_USERCANCELLED","Korisnik otkazao");//(used multiple times)
    define("BOOKING_FRM_CANCELLED","Otkazano");//(used multiple times)
    define("BOOKING_FRM_PAID","Placeno");//(used multiple times)
    define("NO_ACCESS","Nemate privilegiju da pristupite stranici");//(used multiple times)

    # Emails which are sent from admin side
    define("EMAIL_SUBJ_CONFIRMED","Rezervacija potvrdena!");
    define("EMAIL_SUBJ_CANCELLED","Rezervacija otkazana!");
    define("ADM_MSG1","Potvrdni mail za rezervaciju poslan je korisniku!");
    define("ADM_MSG2","Otkazni mail za rezervaciju poslan je korisniku!");

    # admin-index.php
    define("ADMIN_WELCOME","Dobrodošli na Sunnyland kontrolnu plocu");
    define("ADMIN_WELCOME_TEXT","Molimo izaberite potvrdi/izbriši/dodaj rezervaciju.<br />Vi takoder možete otici na postavke i postaviti podrazumijevane dane/sate kada je rezervacija dostupna.<br />Koristite &quot;Dodaj rucno rezervaciju&quot; za dodavanje rezervacije u bazu podataka ili ako želite da rezervišete za neke dane manuelno (rucno).");
    define("QUICK_LINKS","Brzi linkovi");
    define("BASIC_STATS","Statistika");
    define("LASTED_BOOKINGS","Posljednje rezervacije");
    define("BASIC_STATS_DESCR","Kratka statistika pomaže Vam da pratite Vaše rezervacije.");

    # admin.php
    define("ADMIN_LOG","Dobrodošli na Sunnyland kontrolnu plocu");
    define("LOGIN_USERNAME","Korisnicko ime:");
    define("LOGIN_PASSWORD","Šifra:");
    define("LOGIN_FORGOT","Zaboravili ste šifru?");
    define("LOGIN_ERROR1","Prazno korisnicko ime i/ili šifra.");
    define("LOGIN_ERROR2","Pogrešno korisnicko ime i/ili šifra.");
    define("ADM_BTN_LOGIN","Prijava");
    define("ADM_BTN_FORGOT","Resetovanje šifre");

    # bs-bookings-edit.php
    define("BOOKING_SUCC","Rezervacija je uspješno ažurirana!");
    define("BOOKING_DEL_ITEM","Rezervacija je uspješno izbrisano!");
    define("BOOKING_TIME_UPDATED","Vrijeme rezervacije je uspješno ažurirano!");
    define("BOOKING_TIME_DELETED","Vrijeme rezervacije je uspješno izbrisano!");
    define("TBL_DATE","Datum");
    define("TBL_TIME1","Vrijeme od");
    define("TBL_TIME2","Vrijeme do");
    define("TBL_QTY","Kolicina: ");//(used multiple times)
    define("BOOKING_EDIT_TITLE","Uredite website rezervacije");
    define("BOOKING_FRM_DATE","Datum postavljene rezervacije:");
    define("BOOKING_FRM_SERVICE","Usluge");//(used multiple times)
    define("BOOKING_FRM_STATUS","Status");//(used multiple times)
    define("BOOKING_FRM_SELECT","Molimo izaberite");
    define("BOOKING_FRM_QTY","Kolicina ");//(used multiple times)
    define("BOOKING_FRM_SUBTOTAL","Iznos ");//(used multiple times)
    define("BOOKING_FRM_TAX","PDV ");//(used multiple times)
    define("BOOKING_FRM_TOTAL","Ukupno ");//(used multiple times)
    define("BOOKING_FRM_NAME","Naslov");// (used multiple times)
    define("BOOKING_FRM_TYPE","Tip ");// (used multiple times)
    define("BOOKING_FRM_EMAIL","E-mail");//(used multiple times)
    define("BOOKING_FRM_PHONE","Telefon");//(used multiple times)
    define("BOOKING_FRM_COMMENTS","Komentari");//(used multiple times)
    define("BOOKINGR_FRM_DATE","Datum rezervacije");//(used recurring booking)
    define("BOOKING_FRM_BOOKEDDATES","Rezervisani datumi:");
    define("BOOKING_FRM_NOTE1","Opis: da bi izbrisali 1 period od vremena rezervacije trebate ostaviti oba prazna polja&quot;OD&quot; i &quot;DO&quot;");


    # bs-bookings.php
    define("ADM_MSG3","Odabrana rezervacija je izbrisana.");
    define("ADM_MSG4","0 rezervacija pronadeno u bazi");
    define("ADM_BTN_DELETE","Izbriši odabrano");
    define("ADM_BTN_SUBMIT","Snimi");
    define("PAGE_TITLE1","Website rezervacije");
    define("BOOKING_LST_NAME","Ime");
    define("BOOKING_LST_EVENT","Dogadaj");
    define("BOOKING_LST_EMAIL","Email");
    define("BOOKING_LST_PHONE","Telefon");
    define("BOOKING_LST_ON","Rezervisano na");
    define("BOOKING_LST_DATES","Datumi");
    define("BOOKING_LST_SPACES","Mjesto");//(used multiple times)
    define("BOOKING_LST_STATUS","Status");
    define("BOOKING_LST_COUPON","Kupon");

    # bs-bookings_event-edit.php
    define("PAGE_TITLE_EDIT","Uredite website dogadaje rezervacije");
    define("PAGE_TITLE_ADD","Dodajte website dogadaje rezervacije");
    define("BOOKING_LST_EVENTS","Dogadaji");
    define("DATE_BOOK_PLC","Datum postavljene rezervacije:");
    define("DAYS_LIST","&laquo; Vratite se na listu rezervacija");

    
    # bs-bookings_day-edit.php
     define("PAGE_TITLE_DAY_BOOK","Uredite website višedanske rezervacije");
     define("DAY_FROM","Pocetak datum rezervacije");
     define("DAY_TO","Kraj datum rezervacije");
    define("TOTAL_DAYS","Ukupno dana");

    # bs-events-add.php
    define("BS_EVENT_ADD_TXT","\"Event\" applies to an entity such as show, concerts, conference and so on. \"Event\" must be associated with a \"Service\". Initial \"Service\" setup is required to create an \"Event\" calendar. Add \"Event\", specify its parameters such as location and map, image, start and end dates, price, spaces, requiring options and have it ready for booking.");
    define("ADM_MSG5","Rezervacija je uspješno dodana!");
    define("ADM_MSG6","Neka potrebna polja su prazna!");
    define("EVENT_SUC_MSG","Događaj je uspješno ažuriran!");
    define("EVENT_SUC_UPD","Događaj je uspješno kreiran!");
    define("EVENT_STR_TIME","Početno vrijeme događaja ne može biti isto ili veće od vremena završetka!");
    define("EVENT_END_RECURING","Zatum završetka za događaj nije izabran ili je manji od minimalnog intervala");
    define("STAT_UPDT","Statusi ažurirani!");
    define("NTFC_ESENT","Obavijest emailom je poslana.");
    define("SEL_ATT_DEL","Odabrani učesnik je obrisan.");
    define("NO_FOUND","0 učesnika pronađeno u bazi");
    define("EVENT_DISCRP","Opis događaja");
    define("IMGJPG","Napomena: Slika mora biti JPG format samo");
    define("CRNT_EV_IMG","Trenutna slika događaja");
    define("DEL_IMG","Izbriši sliku");
    define("EVENT_ST_DATE","Datum početka događaja");//(used multiple times)
    define("EVENT_END_RECURR","Krajnji datum završetka perioda");//(used multiple times)
    define("EVENT_NOTE_OVER","Napomena: događaj će prevazići sve postojeće rezervacije tog dana");
    define("EVENT_ENDDATE","Završetak događaja");
    define("MAX_SPACE","Maksimalno mjesta");
    define("NUMB_PLZ","brojevi samo, npr. 28");
    define("PAYMT","Plaćanje");
    define("REC","Potrebno");
    define("NOTREC","Nije potrebno");
    define("PAY_METD","Način plaćanja");//(used multiple times)
    define("PAYPAL_GTW","PayPal Gateway");
    define("OFFL_INVC","Offline faktura");
    define("OFFL_INVC_MSG","Ako je izabrana offline faktura - rezervacija će biti potvrđena automatski, vaša je dužnost preuzeti pare od korisnika");
    define("PRICE","Cijena");
    define("TCT_QNTT","Količina ulaznika");
    define("MLTP_TCT_CSTM","Više ulaznica za korisnika");
    define("ONE_TCT_CSTM","1 ulaznica za korisnika");
    define("MXM_TCT","Maksimalno ulaznica");
    define("MXM_COUPON","Dozvoli kupone");
    define("TCT_MSG","Ako je izabrana više ulaznica po klijentu (s lijeve strane) - kupci će moći kupiti više karata po istom vremenu, do maksimalnog broja ulaznica u ovom polju.");
    define("ADD_MNL_BOOK","Dodaj rezervaciju");
    define("ALL_BOOKED","Sva mjesta su rezervisana");
    define("DATE_SUBSCR","Datum pretplate");
    define("DATE_TO_BOOK","Datum rezervacije");
    define("EVENT_TTL","Naslov događaja");//(used multiple times)
    define("EVENT_ID","ID");//(used multiple times)
    define("ALLFIELDSREQ","Sva polja su obavezna!");//(used multiple times)
    define("INCORRECT_DEPOSIT","Vrijednost depozita mora biti veća 0d 0 ili manja od 100");
    define("ADD_EDIT_EVENT","Dodaj/uredi događaj");//(used multiple times)
    define("ADD_EVENT","Dodaj događaj");
    define("EDIT_EVENT","Uredi događaj");
    define("LOCATION","Lokacija ");
    define("MAP_LINK","Mapa ");

    # bs-events.php
    define("ZERO_EVENT_DATABASE","0 događaja pronađeno u bazi");
    define("BOOK_SYS_ADMIN","Sunnyland kontrolna ploča ");
    define("END_DATE","Datum završetka");
    define("PAYMENT_QUEST","Plaćanje obavezno?");
    define("MSG_EVDELETED","Odabrani događaj je izbrisan!");
    define("BTN_DELETESEL","Izbriši");
    define("SYL_AT","u");
    define("SYL_LEFT","ostalo");
    define("SYL_TOTAL","ukupno");
    define("EVENT_ADD","Dodaj događaj");
    define("EVENT_PAY"," - plaćanje potrebno");
    define("EVENT_REC"," - ponavljajući događaj");
    define("EVENT_ATT"," - pogledaj učesnike");
    define("EVENT_EVEN","Događaji");
    define("EVENT_EVEN2","Tabela lijevo pokazuje sve događaje za ODABRANU uslugu. Koristite padajuću listu ispod tabele da izmjenite uslugu.");

    # bs-events-attendees.php
    define("ATTENDEES","Učesnici događaja");
    define("ZERO_ATTENDEES_DATABASE","0 učesnika pronađeno u bazi");
    define("END_DATE","Datum završetka");
    define("PAYMENT_QUEST","Plaćanje potrebno?");
    define("MSG_ATDELETED","Odabrani učesnik je izbrisan!");
    define("BTN_DELETESEL","Izbriši");
    define("BACK_TO_LIST","Vrati se na listu");
    define("ATTEND_LST_NAME","Ime");
    define("ATTEND_LST_EMAIL","Email");
    define("ATTEND_LST_DATES","Datum");
    define("ATTEND_LST_SPACES","termina");//(used multiple times)
    define("ATTEND_VIEW_EVENT","Pogledaj učesnike događaja");
    define("ATTEND_CHOISE_EVENT","Odaberi događaj");
    define("ATTEND_LST_BTN","Dodaj rezervaciju");

    #bs-reserve-view.php
    define("ZERO_MAN_FOUND","0 rezervacija pronađeno u bazi");
    define("MAN_BOOK","Ručne rezervacije");
    define("NEW_BOOKING","Nova rezervacija");
    define("REASON","Razlog");
    define("MANUAL_BK_DESC","Opis");
    define("RECURRING","Ponavljajući događaj");
    define("DATE_FORM_RES","Datum rezervacije od");
    define("BTN_NEW_BOOKING","Nova rezervacija");
    define("DATE_RES_TO","Datum rezervacije do");
    define("ADD_EDIT_MAN_BOOK","Dodaj/Uredi ručnu rezervaciju");
    define("ADD_MAN_BOOK","Dodaj ručnu rezervaciju");
    define("EDIT_MAN_BOOK","Izmijeni ručnu rezervaciju");	
    define("ADD_EDIT_MAN_BOOK_DAY","Dodaj/Izmijeni ručnu rezervaciju");
    define("ADD_MAN_BOOK_DAY","Dodaj ručnu rezervaciju");
    define("EDIT_MAN_BOOK_DAY","Izmijeni ručnu rezervaciju");	    	
    define("SHRT_DESCRPTN","Kratki opis:");  // same as small description
    define("SEL_SERVICE","Odabrana usluga");//(used multiple times)
    define("EVENT_COLOR","Boja događaja");
    define("RES_DATE_FROM","Datum rezervacije od:");
    define("RES_DATE_TO","Datum rezervacije do:");
    define("REP","Ponavljanje");
    define("HOURLY","satno");
    define("DAILY","dnevno");
    define("WEEKLY","sedmično");
    define("MONTHLY","mjesečno");
    define("YEARLY","godišnje");
    define("EVERY","Svaki");
    define("MSG_MAN_DEL","Odabrana rezervacije je obrisana.");

    #bs-reserve.php
    define("MSG_BACK","Vratite se na listu");
    define("MSG_TMBK","Rezervisano!");
    define("MSG_DATETO1","Datum rezervacije je raniji nego što je minimalna granica");
    define("MSG_DATETO2","Završetak rezervacije ne može biti manji od početka rezervacije");
    define("MSG_BKSAVE","Rezervacija je uspješno spremljena!");
    define("TXT_BS_RESERVE_DESCR","Korištenjem forme možete dodati rezervaciju ručnu, npr. imate korisnika s kojim ste se čuli putem telefona. Također, vi možete koristiti ručnu rezervaciju za bilo koji vremenski period (godišnji odmor, praznici, ...)");

    #bs-reserve-day.php
    define("BS_RESERVE_DAY_DESCR","Korištenje forme ispod možete dodati višednevnu rezervaciju za odabranu višednevnu uslugu (hotel, koliba, ...)");

    #bs-schedule.php
    define("SCHEDL","Raspored");
    define("SEL_DATE","Odaberite dan:");
    define("SCHEDL_SELECT_SERV","Odaberite uslugu:");
    define("SCHEDL_VIEW","Pogledajte raspored usluga za odabrani vremenski period");
    define("SCHEDL_TIME","Vrijeme");
    define("SCHEDL_DATE","Izaberite datum:");
    define("SCHEDL_BTN_VIEW","Pogledajte...");
    define("SCHEDL_FOR","za");
    define("SCHEDL_BTN1","Dodajte jednodnevnu uslugu");
    define("SCHEDL_BTN2","Dodajte višednevnu uslugu");
    define("SCHEDL_BTN3","Dodajte događaj");
    define("SCHEDL_CUSTOMER_NAME","Ime");
    define("SCHEDL_CUSTOMER_PHONE","Telefon");
    define("SCHEDL_CUSTOMER_EMAIL","Email");
    
    #bs-schedule-day.php
    define("SCHEDL_DAY","Raspored rezervacija");

    #bs-services-add.php
    define("BS_SERV_BTN1","Dodajte jednodnevnu uslugu");
    define("BS_SERV_BTN2","Dodajte višednevnu uslugu");
    define("ZEO_FOUND_BS","0 usluga pronađeno u bazi");
    define("BS_SERV_TXT","\"Usluga \" je važan entitet aplikacije. . \"Usluga\" odnosi se na profesionalne usluge, klase ili bilo koji drugi entitet koji se mogu uklopiti u jedan dan za rezervaciju, uključujući i događaje. Dodaj \"Uslugu\", odredite parametre kao što su cijena, trajanje, min / max rezervacije za uslugu, vremenski okviri i tako dalje kako biste bili spremni za rezervaciju.");
    define("SERVICES","Usluge");
    define("PRICE_PER_BOOKING","Cijena rezervacije");
    define("SERVICE_DURATION","Trajanje usluge");
    define("FREE_BOOKING","Gratis");
    define("ADD_EDIT_SERV","Dodaj/Uredi uslugu");
    define("ADD_SERV","Dodaj uslugu");
    define("EDIT_SERV","Uredi uslugu");	
    define("SERV_TTL","Naslov usluge");
    define("TIME_BKK_SET","Postavke za vrijeme rezervacije");
    define("BOOK_TIME_INTRV","Trajanje usluge");
    define("MIN15","15 minuta");
    define("MIN30","30 minuta");
    define("MIN45","45 minuta");
    define("H1","1 sat");
    define("H2","2 sata");
    define("H3","3 sata");
    define("H4","4 sata");
    define("H5","5 sata");
    define("H6","6 sata");
    define("H7","7 sata");
    define("H8","8 sata");
    define("H9","9 sata");
    define("H10","10 sata");
    define("H11","11 sata");
    define("H12","12 sata");

    define("INTERV_MSG","Trajanje 1 intervala rezervacije (tačka)");
    define("PRICE_SPOT","Cijena po 1 mjestu");// price per one SPOT???
    define("TIME_BEFORE","Vrijeme prije rezervacije");
    define("HOURS",'sati');
    define("TIME_MSG","Za 'GRATIS' - stavite 0, inače XX.XX format");// time bookings? - doesn't sound right
    define("ALLOW_MULT_SPACES","Dozvolite više rezervacije za trajanje usluge");// spots vs spaces?
    define("SPACES_INTRV","Mjesta za svaki interval");
    define("PAYMENT_MSG","Ako je odabrana offline faktura - rezervacije će biti automatski prihvaćena.");
    define("SHOW_SPAC","Prikažite slobodna mjesta");
    define("NO","Ne");//(used multiple times)
    define("YES","Da");//(used multiple times)
    define("SPOT_MSG","Minimalno rezervacija za uslugu");
    define("UNLM_SPOT","Neograničeno mjesta");
    define("SPOT_MSG_MAX","Maksimalno rezervacija za uslugu");
    define("SPT1","1 mjesto");
    define("SPT2","2 mjesta");
    define("SPT3","3 mjesta");
    define("SPT4","4 mjesta");
    define("BOOK_MSG_DAY","Molimo postavite vrijeme dostupno za rezervaciju za svaki dan, ili postavite N/A ako nije dostupno");
    define("PICK_DAY","Dan u sedmici"); //weekday? pick a day?
    define("CALND_WEEK_STARTS","Sedmica u kalendaru kreće sa");
    define("SUN","Nedjelja");
    define("MON","Ponedjeljak");
    define("CRNT_SRV_IMG","Trenutna slika usluge");
    define("EVENT_DISP_SETT","Postavke događaja");
    define("SHOW_TTL","Prikažite naslov događaja (prikazano na kalendaru)");
    define("AUTOCONFIRM","Automatski potvrdi slobodnu rezervaciju");
    define("AUTOCONFIRM_MSG","Ako je cijena postavljena na 0 (gratis) i odabrano 'DA' - sve rezervacije će biti automatski prihvaćene i markirane kao nedostupno na kalendaru.");
    define("EMAIL_SETTINGS","Postavke email obavijesti za uslugu");
    define("EMAIL_FROM_NAME","Ime pošaljioca");
    define("EMAIL_FROM_EMAIL","Email pošaljioca");
    define("SHOW_IMG","Prikažite sliku događaja (prikazano u kalendaru)");
    define("SHOW_SEATS","Prikažite \"dostupna mjesta\" za događaj (prikazano u kalendaru)");
    define("MSG_SRVUPD","Usluga ažurirana!");
    define("MSG_SHEDULE_DEL","Odabrani raspored je izbrisan!");
    define("MSG_DEMO1","Izvinite, odabrana akcija je izbrisana");
    define("MSG_SRVSAVE","Usluga je uspješno napravljena!");
    define("MSG_SRVDEL","Odabrana usluga je izbrisana.");
    define("MSG_SRVDEL_DEFAULT","Podrazumijevana usluga ne može biti izbrisana");
    define("MSG_NOTE","Sve rezervacije (vrijeme i događaji) će biti obrisani");
    define("ALLOW_DEL_BOOKINGS","Dozvolite učesniku da otkaže\"potvrdi\",\"plati\" rezervacije");
    define("ALLOW_DEL_BOOKINGS_NOTES","Dozvolite učesniku da otkaže \"potvrdi\",\"plati\" rezervacije");
    define("HIDE_PRICE","Sakrijte cijene na kalendaru");

    #bs-settings.php
    define("DEMO_PASS_MSG"," Izvinite, šifra ne može biti promijenja u demo verziji");
    define("PASS_NOMATCH","Šifre se ne poklapaju!");
    define("SCRP_SETNG","Postavke skripte");
    define("BS_SETTINGS_DESCR","Molimo podesite Vaše postavke. Izaberite jezik ili valutu, takse i druge stvari po Vašem izboru.");
    define("ACC_SETNG","Postavke pristupa");
    define("NEWPASS_ADMN","Nova administratorska šifra");
    define("CNFRM_PASS","Potvrdite šifru");
    define("NOTIF__EMAIL"," Email obavijest");
    define("PYPAL_STNG","PayPal postavke");
    define("TAX_ON","Uključite porez");
    define("TAX","Porez");
    define("PAYPAL_EMAIL","PayPal Merchant Email");
    define("PAYPAL_CURRN","Payment valuta");
    define("PAYPAL_CURRN_SUP","(PayPal)");
    define("DIPL_SETTNG","Postavke");
    define("TIME_MODE","Vremenski mod");
    define("DATE_FORMT","Format datuma");
    define("POPUP_MSG_BOOK","Koristite iskakajući prozor za rezervacije");
    define("LANGUAGE_SWITCHING","Uključite promjenu jezika");
    define("LANGUAGE_SETTINGS","Postavke jezika");
    define("CURNT_SYMBL","Simbol valute");
    define("CURNT_POS","Pozicija valute");
    define("LANG","Jezik");
    define("PLUGINS","Instalirani dodaci");
    define("MSG_SETSAVED","Postavke su ažurirane!");
    define("MSG_ADMPSCHG","Administratorska šifra je ažurirana!");
    define("MSG_PSDNTMTCH","Šifre se ne poklapaju!");
    define("BTN_SUBMITCHANGES","Potvrdi izmjene");
    define("TIMEZONES","Vremenska zona");
    define("TIMEZONE_SET","Izaberite vremensku zonu");
    define("MSG_BLANK_TAX","Vrijednost poreza je obavezna");
    define("REMINDER","Podsjetnici");
    define("SEND_EMAIL","pošaljite email za podsjetnik rezervacije");
    define("HOURS_BEFORE_BOOKING","sati prije rezervacije");
    define("HOURS_BEFORE_APPOINTMENT","hours before the appointment");
    define("HOURS_BEFORE_EVENT","sati prije početka događaja");
    define("MULTI_DAY_NOTIFICATIONS","Višednevna notifikacija");
    define("SINGLE_DAY_NOTIFICATIONS","Jednodnevna obavijest");
    define("EVENT_NOTIFICATIONS","Obavijesti za događaje");
    define("CRON_FOR_EMAIL_NOTIFICATIONS","Cron za obavijesti emailom");
    define("USE_CRON_TAB","korisite podrazumijevani cron tab");
    define("USE_ALTERNATIVE_CRON","koristite alternativni cron tab");
    define("CRON_TAB_DESCRIPTION","Mi strogo preporučujemo odabir ove opcije. Ovo je standardna CRON (ili raspored). Vi trebate kopirati/zalijepiti CRON komandu na lijevu stranu u vaš CRON TAB sekciju.");
    define("ALTERNATIVE_CRON_DESCRIPTION","U svakom slučaju ako imate bilo kakve probleme sa postavljanjem regularnog CRON tab - vi možete izabrati ovu opciju.");
    define("ENABLED","Uključeno");
    define("DISABLED","Isključeno");

    #event-booking.php
    define("MSG_JS_ALLFIELDS","Molimo popunite sva naznačena polja za nastavak.");

    #Event-booking-nojs.php
    define("RESERV_MSG","Hvala Vam. Vi ćete dobiti potvrdni email, kada administrator potvrdi rezervaciju.");
    define("FIELDS_NEEDED","Sledeća polja su obavezna: Ime, Email, Telefon, Izabrani događaj. Molimo dva puta provjerite vaš unos.");
    define("CAPTCHA_ERROR","Captcha greška! Pokušajte ponovo!");//(used multiple times)
    define("JAVA_NEEDED","Molimo odobrite JAVASCRIPT ili ažurirajte na najvišu verziju");//to better what?? //(used multiple times)
    define("BROWSER","tražilica");//(used multiple times)
    define("YNAME","Vaše ime");//(used multiple times)
    define("BOOKING_FORM","Obrazac");//(used multiple times)

    #eventlist.php
    define("WELCM_SYSTM","Dobrodošli na naš rezervacioni sistem.");
    define("SAMPLE_TEXT","");
    define("EVENTS_LIST","Lista događaja");
    define("VIEW","Pogledajte");
    define("CALENDAR","Kalendar");
    define("EVENT_START","Događaj kreće u ");
    define("FREE","GRATIS");
    define("NO_EVENT_MONTH","Nema događaja u trenutnom mjesecu");
    define("LINKTO","Link to");
    define("ADMINAREA","ADMIN AREA");

    #Forgot.php
    define("WRONG_EMAIL","Pogrešan E-mail");
    define("WRONG_EMAIL2","Pogrešan PayPal Merchant Email");
    define("CHANGE_PASS_TO_NEW","Molimo promijenite šifru.");
    define("NEW_PASS_SENT","Nova šifra je postavljena i biće poslana na Vaš email.");
    define("WRONG_USERNAME","Pogrešno korisničko ime i/ili PayPal Merchant Email");
    define("WRONG_USERNAME2","Prazan email obavijest i/ili pogrešan PayPal Merchant Email.");
    define("MSG_BSFORGOT_TITLE","Zaboravili ste šifru");

    #booking.processing.php
    define("BACK_RETURN","Vratite se na kalendar");

    #booking.event.processing.php
    define("BEP_5","Događaj postavljen!");
    define("BEP_6","(Molimo prikupite novac od učesnika)<br />");
    define("BEP_7","<br />");
    define("BEP_8","Nova potvrđena rezervacija događaja");
    define("BEP_9","Nova nepotvrđena rezervacija događaja");
    define("BEP_10","Pogrešna email adresa. Molimo pogledajte Vaš unos."); //used multiple times
    define("BEP_11","Hvala Vam. Dobit ćete potvrdni email nakon što administrator potvrdi rezervaciju.");
    define("BEP_12","Izvinite , neko je rezervisao");
    define("BEP_13","Pogledajte sledeća obavezna polja: Ime, Email, Telefon, Izabrani događaj. Molimo dva puta provjerite Vaš unos. ");
    define("BEP_14","Hvala Vam za vašu rezervaciju!"); //h1 page title - used multiple times
    define("BEP_15","&laquo; Vratite se na kalendar"); //used multiple times
    define("BEP_16","Plaćanje narudžbe"); //payment order
    define("SEL_TIME","Izaberite željeno vrijeme."); // used multiple times
    define("BEP_161","Rezervacija narudžbe");
    define("BEP_17","Pogledajte sledeća obavezna polja: Ime, Email, Telefon, Izabrani događaj. Molimo dva puta provjerite Vaš unos. ");
    define("BEP_18","Neki vremenski interval prelazi broj mjesta. Molimo provjerite Vaš unos.");
    define("BEP_19","Odabrani raspon nije dostupan "); //payment order
    define("AVAIL","Dostupnost");
    
    #booking.days.processing.php
    define("BDP_1","Nova višednevna rezervacija");
    define("BDP_2","Nova potvrđena višednevna rezervacija");
    define("BDP_3","Nova nepotvrđena višednevna rezervacija");
    define("BDP_4","Izvinite, neko je rezervisao već");
    define("BDP_5","Odabrani raspon nije dostupan "); //payment order
    define("BEP_6","Pogledajte sledeća obavezna polja: Ime, Email, Telefon, Izabrani događaj. Molimo dva puta provjerite Vaš unos. ");
    define("BEP_7","Pogrešna email adresa. Molimo pogledajte Vaš unos.");
    
    #manageReservation.php
    define("MNG_ATTDEL","Otkazali ste rezervaciju.");
    define("MNG_0FOUND","0 učesnika pronađeno u bazi");
    define("MNG_RESERFOR","Rezervacije za ");
    define("TBL_NAME","Ime");
    define("TBL_QTY","Količina");
    define("TBL_SERVICE","Usluga");
    define("TBL_EVENT","Događaj");
    define("TBL_TIME","Vrijeme");
    define("TBL_DATE","Datum pretplate");
    define("TBL_MNG","Status");

    #paypal.ipn.php
    define("PP_SUBJ_RECEIVED","Primljeno novo plaćanje");
    define("PP_CANCEL","Isplata je otkazana!");
    define("PP_THANK_H1","Hvala Vam !");
    define("PP_THANKYOU","Hvala vam na plaćanju, uskoro ćemo Vas kontaktirati!");

    #thank-you.php
    define("THNK_H1","Hvala Vam na rezervaciji!");
    define("THNK_TEXT","");

    #functions.php
    define("ZERO_SPACES","0 termina dostupno");
    define("ZERO_SPACES2","0 termina");
    define("SPC_AVAIL"," termina dostupno");
    define("DAY_AVAIL","Dostupno");
    define("SEATS_AVAIL"," dostupno termina");
    define("DAY_BOOKED","Rezervisano");
    define("CHECKOUT_AVAILABLE","Odjava samo");
    define("EVENTS_SCHEDULED"," događaj(i) raspored");
    define("BOOK_NOW","Rezervišite sada");
    define("TXT_RESERVED","Rezervisano od strane admina sa razlogom: ");
    define("SPACES"," mjesta");
    define("TXT_EVENT","Događaj");
    define("TXT_PAST","Nije dostupno");
    define("TXT_QTY","Količina ");
    define("TXT_EVENT_START","Početak događaja");
    define("TXT_EVENT_ENDS","Završetak događaja ");
    define("SPC_LEFT"," mjesta ostalo ");
    define("TXT_PLSSELECT","Izaberite željeni događaj.");
    define("ADM_NONWORKING","Ovaj dan je označen kao neradni dan, 0 rezervacija pronađeno.");
    define("TXT_EVENT2","Događaj");
    define("TXT_AVAIL","Dostupno za rezervacije ");
    define("TXT_MINUTES_MAX"," minuta maksimalno;");
    define("TXT_MAX"," maksimalno;");
    define("TXT_MINUTES"," minute");
    define("TXT_AND"," i ");
    define("TXT_HOURSS"," sat(i)");
    define("TXT_MINUTES_MIN"," minuta minimalno; ");
    define("TXT_MIN"," minimalno; ");
    define("TXT_SPOTS_LEFT","mjesta<br>ostalo");
    define("TXT_FUNC_QTY","Količina");
    define("TXT_FUNC_FREE","GRATIS");
    define("TXT_FUNC_PAYMENT_FOR","Plaćanje za rezervaciju");
    define("TXT_FUNC_PAYMNT_EVENT","Plaćanje za događaj");
    define("TXT_FUNC_CLICK_HERE_TO_PAY","Pritisnite ovdje za plaćanje rezervacije");
    define("TXT_FUNC_THANK_YOU_MSG","<p>Hvala Vam. Dobićete e-mail za potvrdu u vezi sa vašom rezervacijom čim ga administrator obradi.</p>");
    define("TXT_FUNC_ALMOST_DONE","Uskoro ste završili. Ostala je samo jedna stvar - plaćanje. Molimo kliknite na dugme ispod i bićete prebačeni na PayPal.com za brzo i sigurno plaćanje. Imajte na umu da će vaša rezervacija potvrditi samo nakon toga");

    #new messages in v5.3
    define("REPEAT_MSG","Provjerite da li je datum završetka rezervacije jednak stvarnom intervalu koji se ponavlja. Na primjer, ako se ponavljajuća rezervacija mora završiti za 6 nedelja, postavite 'završetak rezervacije' na 'danas+6 sedmica'");
    define("REPEAT_MSG2","Provjerite da li je datum završetka rezervacije jednak stvarnom intervalu koji se ponavlja. Na primjer, ako se ponavljajuća rezervacija mora završiti za 6 nedelja, postavite 'završetak rezervacije' na 'danas+6 sedmica'");


    #bs-coupons-add.php
    define("BS_COUPONS_TXT","Koristite ovaj odjeljak da biste kreirali više popusta kupona za vaše usluge ili događaje. Navedite parametre kao što su kod kupona, tip popusta, datumi isteka, povežite ga sa odgovarajućom uslugom i spremni ste ga koristiti.");
    define("TXT_COUPONS_STARTS","Počinje");
    define("TXT_COUPONS_ENDS","Završava");
    define("TXT_SET_ST","Postavite početni i krajnji datum");


    #bs-coupons.php
    define("TXT_COUPONS","Moji kuponi");
    define("TXT_COUPONS_ADD","Uredite kupon");
    define("TXT_COUPONS_NEW","Dodajte kupon");
    define("TXT_COUPONS_DEL","Odabrani kupon je izbrisan.");
    define("TXT_COUPONS_NOT_FOUND","0 kupona pronađeno u bazi");
    define("LABEL_COUPON_TITLE","Naslov");
    define("LABEL_COUPON_AMOUNT","Popust");
    define("LABEL_COUPON_CODE","Kupon kod");
    define("LABEL_COUPON_VALUE","Vrijednost");
    define("LABEL_COUPON_TYPE","Tip");
    define("LABEL_COUPON_VALID_FROM","Validno od");
    define("LABEL_COUPON_VALID_TO","Validno do");
    define("LABEL_COUPON_CALENDARS","Primenljive usluge (kalendari)");
    define("MSG_COUPON_SAVE","Kupon je uspješno kreiran!");
    define("MSG_COUPON_UPD","Kupon je ažuriran!");

    #bs-services_days-add
    define("TXT_DAY_SRV_ADD_EDIT","Dodaj/Uredi višednevne usluge");
	define("TXT_DAY_SRV_ADD","Dodajte višednevne usluge");
	define("TXT_DAY_SRV_EDIT","Uredite višednevne usluge");	
    define("TXT_DAY_SRV_TITLE","Naslov usluge");
    define("TXT_DAY_SRV_SETTINGS","Postavke višednevne rezervacije");
    define("TXT_DAY_MAX_SPACES","Maksimalno mjesta");
    define("TXT_DAY_SRV_MAX_DAYS","Maksimalno dana");
    define("TXT_DAY_SRV_MIN_DAYS","Minimalno dana");
    define("TXT_DAY_SRV_DAYS_BEFORE","Dana prije rezervacije");
    define("TXT_DAY_SRV_DESCR","Opis");
    define("TXT_DAY_SRV_IMAGE","Slika usluge");
    define("TXT_DAY_SRV_AVAILABILITY","Dostupnost i cijene");
    define("TXT_DAY_SRV_FROM","Od");
    define("TXT_DAY_SRV_TO","Do");
    define("TXT_DAY_SRV_PRICE","Cijena");
    define("BS_SERV_TXT_MD","\"Višednevna usluga\" odnosi se na entitet koji se može proširiti na nekoliko dana kao što je rezervacija hotelske sobe ili rezervacija za mlade. Dodajte \"višednevnu uslugu\", odredite parametre kao što su cijena, maksimalni dani i prostori, raspoloživost datuma i tako dalje da biste bili spremni za rezervaciju.");

    #bs-services.php
    define("TXT_SM_R_ABOUT", "dodavanjem i prilagođavanjem usluge, dodate kalendar dostupnosti usluge.");
    define("DEFAULT_SERVICE", "Podrazumijevana usluga");
    define("MAKE_DAFAULT", "Označi kao podrazumijevana usluga");
    define("THIS_DEFAULT_SERVICE", "Ovo je podrazumijevana usluga ");

    #js-table
    define("JS_TABLE_FIRST","prvi");
    define("JS_TABLE_PREV","prethodni");
    define("JS_TABLE_NEXT","sledeći");
    define("JS_TABLE_LAST","posljednji");
    define("MSG_DAY_SRV","");
    define("LABEL_DAY_SRV","");
    define("SERVICE_ID","ID");//(used multiple times)

    #bs-addons
    define("ADDONS_TITLE","Instalirani dodaci");
    define("BS_ADDONS_DESCR","Please find below currently installed add-ons for your  BookingWizz. You can turn add-on on or off with a click of a button.");
    define("PLUGIN_SETTINGS","Plugin settings");

    #bs-attendees-export
    define("EXPORT_TITLE","Export učesnika");
    define("NO_ATTENDEES","Učesnici nisu pronađeni");
    define("EXPORT_TITLE2","U ovoj sekciji možete eksportovati (izvesti) sve Vaše učesnike (događaj/vrijeme) .ICS fajl koji kasnije možete importovati u program koji podržava .ICS format kao što je (Google Calendar, Outlook Express, iCal, itd...)");
    define("EXPORT_TITLE3","Izaberite raspon datuma za izvoz");
    define("EVENT_BOOKINGS","Rezervacije događaja");
    define("BOOKINGS","Rezervacije");
    define("DAY_BOOKINGS","Višednevne rezervacije");
    define("BOOKINGS_EXPRT","Dnevne i satne rezervacije");

    #bs-reports
    define("REPORTS_DESCR","<em style=\"font-weight: normal;\" >Možete navigirati korištenjem miša<b>/</b>, povlačenjem do specifičnog zapisa, ili sa strelicama.</em>");
    define("REPORTS_1","Molimo izaberite uslugu");
    define("REPORTS_2","Molimo izaberite raspon datuma");
    define("REPORTS_3","Pogledajte izvještaj");
    define("REPORTS_4","Rezervacije događaja od");
    define("REPORTS_5","Izvještaji termina");
    define("REPORTS_6","Od");
    define("REPORTS_7","Do");
    define("REPORTS_8","Termini rezervacija od");
    define("REPORTS_9","za uslugu");
    define("REPORT_TITLE2","Izvještaj Vam dopušta da vidite koliko događaja imate u određenom vremenskom periodu");

    define("NEED_HELP","Trebate pomoć?");
    define("SUPPORT_FAILED_TO_LOAD","Greška");
    define("HELP_SIDE1","Vi pregledate sve prisutne za odabrani događaj. Da biste promjenili događaj, molimo da odaberete IZABERITE DOGAĐAJ padajući meni na desnoj strani.");
    define("EVENT_IMAGE","Slika događaja");
    define("EVENT_START_END","Postavite početak i kraj datuma");
    define("SELECT_SERVICE","Morate izabrati uslugu (=kalendar) gdje će se događaj prikazati.");
    define("SELECT_SERVICE_RESERVE","Morate izabrati uslugu (=kalendar) gdje je rezervacija primjenjiva.");
    define("RECURRING_MDB","Ponavljanje rezervacije");
    define("MULTI_DAY_NOT_AV","Ovaj dan nije dostupan");
    define("MULTI_DAY_BK_ADM","Ovaj dan je rezervisan od strane administratora ");
    define("MULTI_DAY_BK_ADM2","razlog: ");
    define("MULTI_DAY_TXT1","Možete rezervisati");
    define("MULTI_DAY_TXT2","dana maksimalno.");
    define("MULTI_DAY_TXT2_1","dana minimalno.");
    define("MULTI_DAY_TXT3","Odabrani datum je izvan opsega dostupnosti. Molimo podesite ponovo.");
    define("MULTI_DAY_TXT4","Dostupno za rezervaciju");
    define("MULTI_DAY_TXT5","Rezervišite");
    define("MULTI_DAY_TXT6","Ručna rezervacija ");
    define("MULTI_DAY_TXT7","Rezervisano ");
    define("MULTI_DAY_TXT8","Datum od");
    define("MULTI_DAY_TXT9","Datum do");

    #various tooltips
    define("TTIP_1","Ako je odobreno - učesnik će moći unijeti KUPON.");
    define("TTIP_2","Broj sati unešen ovdje će spriječiti učesnika za rezervaciju u tom periodu. Primjer: Ako je sada 12:00 i Vi imate 4 sata u ovom polju, najranije vrijeme koji će biti dostupno je 16:00");
    define("TTIP_3","Učesnik će vidjeti IME u svim obavijestima sa tom uslugom.");
    define("TTIP_4","Učesnik će vidjeti EMAIL u svim obavijestima sa tom uslugom.");
    define("TTIP_5","Maksimalno gostiju za rezervaciju. U ovom momemntu za 'prikazano'.");
    define("TTIP_6","Maksmalan broj dana dozvoljen za rezervaciju.");
    define("TTIP_6_1","Minimalni broj dana dozvoljen za rezervaciju.");
    define("TTIP_7","Broj dana unešen ovdje će spriječiti učesnika za rezervaciju u tom periodu. Primjer: Ako je danas 1. Januar i Vi imate 4 dana u ovom polju, najraniji datum koji će biti dostupan za rezervaciju je 5. Januar.");

    #homescreen popup
    define("HSP1", "Ne prikazujte više na početku");
    define("HSP2", "Dobrodošli na <br/>Sunnyland rezervacioni sistem");
    define("HSP3", "Kao vlasnik aplikacije, Vi možete jednostavno postaviti događaje, usluge, uzimati besplatne ili plaćene rezervacije putem interneta.");
    define("HSP4", "Vi također imate opciju za ručno rezervisanje vremnea, npr. ako je korporativna zabava i cijeli objekt će biti rezerviran za cijeli dan - možete dodati takvu rezervaciju  - tako da učesnik će vidjeti na kalendar da ovaj dan nije dostupan za rezervacije.");
    define("HSP5", "<a href='help/index.html'>pročitajte više kako koristiti aplikaciju</a>");
    define("HSP6", "IZGRADNJA VAŠEG POPISA");
    define("HSP7", "OPCIONALNI DODACI");
    define("HSP8", "PROČITAJTE VIŠE");
    define("HSP9", "Često postavljena pitanja");
    define("HSP10", "Studije slučaja i aplikacije");

    define("TXT_COUPON_CODE","Unesite kupon (opciono)");

    #order summery text
    define("ORDER_BOOKING_INF","Informacije rezervacije");
    define("ORDER_EVENT_INF","Informacija događaja");
    define("ORDER_BOOKING_DATE","Datum rezervacije");
    define("ORDER_BOOKING_TIME","Vrijeme rezervacije");
    define("ORDER_BOOKING_QTY","Količina");
    define("ORDER_DATE_FROM","Datum od");
    define("ORDER_DATE_TO","Datum do");
    define("ORDER_DAYS","Dana");
    define("ORDER_SUBTOTAL","Iznos");
    define("ORDER_TOTAL","Ukupno");
    define("ORDER_DISCOUNT","Popust");
    define("ORDER_TAX","Porez");
    define("ORDER_TO_PAY","Ukupno za platiti");
    define("ORDER_SUMMERY","Sažetak narudžbe");

    define("ERROR_RESERVED_BY_ADMIN","Odabrani dani su već rezervisani od strane administratora");
    define("ERROR_RESERVED_ALREADY","Odabrani dani su već rezervisani");

#################     Event Tickets plugin     ######################################################################

    define("PLUGIN_NAME","Ulaznice za događaje");
    define("ADD_TIX","Dodajte ulaznicu");
    define("TXT_TIX_DEL","Odabrana ulaznica je izbrisana");
    define("TXT_TIX_DEL_ERROR","Greška prilikom brisanja");
    define("TXT_TIX_NOT_FOUND","0 ulaznica u bazi");
    define("LABEL_TIX_TITLE","Naslov");
    define("LABEL_TIX_CODE","Kod ulaznice");
    define("MSG_TIX_UPD","Ulaznica ažurirana!");
    define("MSG_TIX_SAVE","Ulaznica je uspješno kreirana!");
    define("TXT_TIX_ADD","Uredite ulaznicu");
    define("BS_TIX_TXT","Koristite ovaj odjeljak da biste kreirali sopstvenu ulaznicu za svoj događaj. Korak 1 je podešavanje imena i veličine ulaznice, nakon što ga sačuvate, moći ćete da odredite parametre koje će se prikazivati na kartama, bojama, fontovima itd.");
    define("LABEL_TIX_NAME","Naziv ulaznice");
    define("LABEL_TIX_WIDTH","Širina ulaznice (pikseli)");
    define("LABEL_TIX_HEIGHT","Veličina ulaznice");
    define("LABEL_TIX_BG_TYPE","Pozadina ulaznice");
    define("LABEL_SELECT_BACKGROUND_COLOR","Izaberite boju pozadine");
    define("LABEL_UPLOAD_BACKGROUND","Postavite sliku pozadine");
    define("LABEL_BG_IMAGE","Izaberite sliku pozadine");
    define("LABEL_BG_COLOR","Izaberite boju pozadine");
    define("LABEL_FONT_COLOR","Boja fonta");
    define("LABEL_FONT_SIZE","Veličina fonta");
    define("LABEL_FONT_FAMILY","Font");
    define("LABEL_LOGO","Logo");
    define("LABEL_ENCODE_IN_BARCODE","Kodiraj na barkodu");
    define("LABEL_RESERVATION_ID","ID rezervacije");
    define("LABEL_CUSTOMER_NAME","Ime");
    define("LABEL_EVENT_NAME","Naziv");
    define("LABEL_EVENT_DATE","Datum i vrijeme");
    define("LABEL_EVENT_LOCATION","Lokacija događaja");
    define("LABEL_EVENT_PRICE","Cijena događaja");
    define("LABEL_BARCODE","Barkod");
    define("LABEL_LABEL","Labela");
?>