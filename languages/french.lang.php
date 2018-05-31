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
    define("January","Janvier");
    define("February","F&eacute;vrier");
    define("March","Mars");
    define("April","Avril");
    define("May","Mai");
    define("June","Juin");
    define("July","Juillet");
    define("August","Ao&ucirc;t");
    define("September","Septembre");
    define("October","Octobre");
    define("November","Novembre");
    define("December","D&eacute;cembre");

    define("Jan","Jan");
    define("Feb","F&eacute;v");
    define("Mar","Mar");
    define("Apr","Avr");
    define("Jun","Jun");
    define("Jul","Juil");
    define("Aug","Aout");
    define("Sep","Sep");
    define("Oct","Oct");
    define("Nov","Nov");
    define("Dec","Dec");

    define("Mon","Lun");
    define("Tue","Mar");
    define("Wed","Mer");
    define("Thu","Jeu");
    define("Fri","Ven");
    define("Sat","Sam");
    define("Sun","Dim");
    
    define("Monday","Lundi");
    define("Tuesday","Mardi");
    define("Wednesday","Mercredi");
    define("Thursday","Jeudi");
    define("Friday","Vendredi");
    define("Saturday","Samedi");
    define("Sunday","Dimanche");

    #index_small.php
    define("SML_PREV","Pr&eacute;c&eacute;dent");
    define("SML_NEXT","Suivant");
    define("SML_D0","Di");
    define("SML_D1","Lu");
    define("SML_D2","Ma");
    define("SML_D3","Me");
    define("SML_D4","Je");
    define("SML_D5","Ve");
    define("SML_D6","Sa");
    define (EVENTS_LIST_TITLE,"&Eacute;v&eacute;nement pour");

    # admin navigation items
    define("MENU1","PLANING");
    define("MENU1_1","Service Simple Jour");
    define("MENU1_2","Service Multi-Jours");
    define("MENU1_3","Events");
    define("MENU2","RESERVATIONS");
    define("MENU2_1","R&eacute;servation du site");
    define("MENU2_2","REservations Manuelles");
    define("MENU2_3","Ajouter une R&eacute;servation");
    define("MENU2_4","Exporter les Participants");
    define("MENU3","SERVICES");
    define("MENU3_1","Ajouter un Service");
    define("MENU4","EVENEMENTS");
    define("MENU4_1","Ajouter un &eacute;v&eacute;nement");
    define("MENU5","COUPONS");
    define("MENU5_1","Ajouter un Coupon de R&eacute;duction");
    define("MENU6","Reports");
    define("MENU6_1","Events Reports");
    define("MENU6_2","Appointments Reports");
    define("MENU6_3","Multi-Day Bookings Reports");
    define("MENU7","Ajouter une r&eacute;servation Manuelle");
    define("MENU7_1","Ajouter une r&eacute;servation Manuelle");
    define("MENU8","Liste des R&eacute;servations");
    define("MENU9","SERVICES");
    define("MENU10","Liste des Services");
    define("MENU11","Ajouter un Service");
    define("MENU11_1","Ajouter un Service Multi-Jours");
    define("MENU14","Liste des Coupons");


    define("REQUIRED_DEPOSIT","Required Deposit");


    # booking-nojs.php
    # General
    define("APPLICATION_TITLE","Administration de R&eacute;servation");//(used multiple times)
    define("GENERIC_QUERY_FAIL","Oups, une erreur s'est produite lors de la tentative d'ex&eacute;cution de la requ&ecirc;te.");
    define("BOOKING_FRM_CONFIRMED","Confirm&eacute;");//(used multiple times)
    define("BOOKING_FRM_NOTCONFIRMED","Non Confirm&eacute;");//(used multiple times)
    define("BOOKING_FRM_USERCANCELLED","Utilisateur Annul&eacute;");//(used multiple times)
    define("BOOKING_FRM_CANCELLED","Annul&eacute;");//(used multiple times)
    define("BOOKING_FRM_PAID", "Pay&eacute;");//(used multiple times)
    define("NO_ACCESS", "Vous n'avez pas acces &agrave; cette page");//(used multiple times)

    # Emails which are sent from admin side
    define("EMAIL_SUBJ_CONFIRMED","R&eacute;servation Confirm&eacute;!");
    define("EMAIL_SUBJ_CANCELLED","R&eacute;servation Annul&eacute;e!");
    define("ADM_MSG1","Mail de confirmation envoy&eacute; au client!");
    define("ADM_MSG2","E-mail d'annulation de r&eacute;servation envoy&eacute; au client!");

    # admin-index.php
    define("ADMIN_WELCOME","Bienvenue sur votre syst&egrave;me de r&eacute;servation");
    define("ADMIN_WELCOME_TEXT","Veuillez utiliser le menu pour confirmer / ajouter / supprimer des r&eacute;servations.<br />Vous pouvez aller dans les param&egrave;tres par deacute;faut et d&eacute;finir des jours / heures pour la disponibilit&eacute; des r&eacute;servations.");
    define("QUICK_LINKS","LIENS RAPIDE");
    define("BASIC_STATS","Statistiques");
    define("LASTED_BOOKINGS","Derni&egrave;res R&eacute;servations");
    define("BASIC_STATS_DESCR","These basic stats help you to keep track of received bookings. One quick look at this report tells you your booking trends and how many bookings you’ve got at a certain day.");

    # admin.php
    define("ADMIN_LOG","Connectez vous sur BookingWizz");
    define("LOGIN_USERNAME","Utilisateur:");
    define("LOGIN_PASSWORD","Mot de Passe:");
    define("LOGIN_FORGOT","Mot de Passe Oubli&eacute;?");
    define("LOGIN_ERROR1","Nom d'utilisateur et/ou mot de passe absent.");
    define("LOGIN_ERROR2","Nom d'utilisateur et/ou mot de passe incorrect");
    define("ADM_BTN_LOGIN","Entrer");
    define("ADM_BTN_FORGOT","Reset Password");

    # bs-bookings-edit.php
    define("BOOKING_SUCC","R&eacute;servation mis &agrave; jour avec succes!");
    define("BOOKING_DEL_ITEM"," l'objet de l'Heure de R&eacute;servation effac&eacute;e!");
    define("BOOKING_TIME_UPDATED","Heure de R&eacute;servation mis &agrave; jour avec succes!");
    define("BOOKING_TIME_DELETED","Heure de R&eacute;servation effac&eacute;e!");
    define("TBL_DATE","Date");
    define("TBL_TIME1","A Partir de");
    define("TBL_TIME2","Jusque");
    define("TBL_QTY","Quantit&eacute;: ");//(used multiple times)
    define("BOOKING_EDIT_TITLE","Modifier r&eacute;servation du Site web");
    define("BOOKING_FRM_DATE","Date de r&eacute;servation a &eacute;t&eacute; r�serv&eacute;e:");
    define("BOOKING_FRM_SERVICE","Service:");//(used multiple times)
    define("BOOKING_FRM_STATUS","Statut:");//(used multiple times)
    define("BOOKING_FRM_SELECT", "Veuillez S&eacute;lectionner");
    define("BOOKING_FRM_QTY", "Quantit&eacute;: ");//(used multiple times)
    define("BOOKING_FRM_SUBTOTAL", "Subtotal ");//(used multiple times)
    define("BOOKING_FRM_TAX", "Tax ");//(used multiple times)
    define("BOOKING_FRM_TOTAL", "Total ");//(used multiple times)
    define("BOOKING_FRM_NAME", "Titre");// (used multiple times)
    define("BOOKING_FRM_TYPE", "Type de Service");// (used multiple times)
    define("BOOKING_FRM_EMAIL", "E-mail");//(used multiple times)
    define("BOOKING_FRM_PHONE", "T&eacute;l&eacute;phone");//(used multiple times)
    define("BOOKING_FRM_COMMENTS", "Commentaire");//(used multiple times)
    define("BOOKINGR_FRM_DATE", "Date de r&eacute;servation");//(used recurring booking)
    define("BOOKING_FRM_BOOKEDDATES", "Dates r&eacute;serv&eacute;es:");
    define("BOOKING_FRM_NOTE1", "Veuillez noter:  pour supprimer 1 p&eacute;riode, vous devez laisser vide les deux champs");


    # bs-bookings.php
    define("ADM_MSG3","R&eacute;servations s&eacute;lectionn&eacute;s supprim&eacute;s.");
    define("ADM_MSG4","0 R&eacute;servations trouv&eacute;s dans la base de donn&eacute;es");
    define("ADM_BTN_DELETE","Supprimer la s&eacute;lection");
    define("ADM_BTN_SUBMIT","Sauvegarder");
    define("PAGE_TITLE1","R&eacute;servations");
    define("BOOKING_LST_NAME","Nom");
    define("BOOKING_LST_EVENT","Ev&eacute;nement");
    define("BOOKING_LST_EMAIL","Email");
    define("BOOKING_LST_PHONE","T&eacute;l&eacute;phone");
    define("BOOKING_LST_ON","R&eacute;serv&eacute; pour");
    define("BOOKING_LST_DATES","Dates de r&eacute;servation");
    define("BOOKING_LST_SPACES","Places");//(used multiple times)
    define("BOOKING_LST_STATUS","Statut");
    define("BOOKING_LST_COUPON","Coupon");

    # bs-bookings_event-edit.php
    define("PAGE_TITLE_EDIT","Modifier la r&eacute;servation de l'&eacute;v&eacute;nement");
    define("PAGE_TITLE_ADD","Ajouter une r&eacute;servations de l'&eacute;v&eacute;nement");
    define("BOOKING_LST_EVENTS","&Eacute;v&eacute;nements");
    define("DATE_BOOK_PLC","Date de R&eacute;servation effectu&eacute;e:");
    define("DAYS_LIST","&laquo; Retour &agrave; la liste de r&eacute;servations");

    
    # bs-bookings_day-edit.php
     define("PAGE_TITLE_DAY_BOOK","Modifier une r&eacute;servation Multi-Jours");
     define("DAY_FROM","Date de D&eacute;but");
     define("DAY_TO","Date de Fin");
    define("TOTAL_DAYS","Total Days");

    # bs-events-add.php
    define("BS_EVENT_ADD_TXT","Dans cette section vous pouvez ajouter un nouvel &eacute;v&eacute;nement en remplissant correctement les champs ci-dessous.");
    define("ADM_MSG5","R&eacute;servation ajout&eacute;e avec succes!");
    define("ADM_MSG6","Certains champs sont vides!");
    define("EVENT_SUC_MSG","Ev&eacute;nement mis &agrave; jour!");
    define("EVENT_SUC_UPD","Ev&eacute;nement enregistr&eacute;!");
    define("EVENT_STR_TIME","Heure de d&eacute;but de l'&eacute;v&eacute;nement peut pas &ecirc;tre post&eacute;rieure &agrave; l'heure de fin!");
    define("EVENT_END_RECURING","Date de fin de l'&eacute;v&eacute;nement r&eacute;current de plus t&ocirc;t que l'intervalle minimum");
    define("STAT_UPDT","Statut mis &agrave; jour!");
    define("NTFC_ESENT","Mails de notification envoy&eacute;.");
    define("SEL_ATT_DEL","Participant s&eacute;lectionn&eacute; supprim&eacute;.");
    define("NO_FOUND","0 participants dans la base de donn&eacute;es");
    define("EVENT_DISCRP","Description:");
    define("IMGJPG","Note: les images ne seront pas redimensionn&eacute;s, l'image doit &ecirc;tre au format JPG uniquement");
    define("CRNT_EV_IMG","L'image de l'&eacute;v&eacute;nement en cours:");
    define("DEL_IMG","Supprimer l'image");
    define("EVENT_ST_DATE","Date de d&eacute;but:");//(used multiple times)
    define("EVENT_END_RECURR","Date de Fin R&eacute;current:");//(used multiple times)
    define("EVENT_NOTE_OVER","Veuillez noter: l'&eacute;v&eacute;nement aura pr&eacute;s&eacute;ance sur toute les r&eacute;servations existantes sur ce jour");
    define("EVENT_ENDDATE","Date de Fin:");
    define("MAX_SPACE","Maximum de Places:");
    define("NUMB_PLZ","nombres seulement, ex 28");
    define("PAYMT","Paiement:");
    define("REC","requis");
    define("NOTREC","Non requis");
    define("PAY_METD","Mode de paiement:");//(used multiple times)
    define("PAYPAL_GTW","PayPal");
    define("OFFL_INVC","Facture Hors ligne");
    define("OFFL_INVC_MSG","Si la facture hors ligne est s&eacute;lectionn&eacute; - r&eacute;servation sera confirm&eacute;e automatiquement, il est de votre responsabilit&eacute; de percevoir le paiement du client");
    define("PRICE","Prix:");
    define("TCT_QNTT","Quantit&eacute; de Place:");
    define("MLTP_TCT_CSTM","Multiple Place par client");
    define("ONE_TCT_CSTM","1 place par client");
    define("MXM_TCT","Maximum de place:");
    define("MXM_COUPON","Maximun de Coupons:");
    define("TCT_MSG","sera appliqu&eacute; si &quot;multiple places par client&quot; a &eacute;t&eacute; s&eacute;lectionn&eacute;");
    define("ADD_MNL_BOOK","Ajouter r&eacute;servation manuelle");
    define("ALL_BOOKED","Toutes les places sont r&eacute;serv&eacute;es");
    define("DATE_SUBSCR","Date de souscription");
    define("DATE_TO_BOOK","Date de r&eacute;servation");
    define("EVENT_TTL","Titre");//(used multiple times)
    define("EVENT_ID","ID");//(used multiple times)
    define("ALLFIELDSREQ","Tous les champs sont obligatoires!");//(used multiple times)
    define("INCORRECT_DEPOSIT","Deposit value must be more then 0 and less or equal than 100");
    define("ADD_EDIT_EVENT","Ajouter / Modifier un &eacute;v&eacute;nement");//(used multiple times)
    define("ADD_EVENT","Ajouter un Ev&eacute;nement");
    define("EDIT_EVENT","Editer un Ev&eacute;nement");
    define("LOCATION","Lieu:");
    define("MAP_LINK","Map Link:");

    # bs-events.php
    define("ZERO_EVENT_DATABASE","0 &eacute;v&eacute;nements trouv&eacute;s dans la base de donn&eacute;es");
    define("BOOK_SYS_ADMIN","R&eacute;servation System Admin ");
    define("END_DATE","Date de Fin");
    define("PAYMENT_QUEST","Paiement requis?");
    define("MSG_EVDELETED","Les &eacute;v&eacute;nements s&eacute;lectionn&eacute;s ont &eacute;t&eacute; supprim&eacute;s!");
    define("BTN_DELETESEL","Supprimer");
    define("SYL_AT","A");
    define("SYL_LEFT","Disponible sur");
    define("SYL_TOTAL","total");
    define("EVENT_ADD","Ajout Ev&eacute;nement");
    define("EVENT_PAY"," - paiement requit");
    define("EVENT_REC"," - Ev&eacute;nement R&eacute;curant");
    define("EVENT_ATT"," - voir Participant");
    define("EVENT_EVEN","Ev&eacute;nement");
    define("EVENT_EVEN2","Table on the left shows all events for SELECTED service. Use dropdown above the table to change the service.");

    
    # bs-events-attendees.php
    define("ATTENDEES","Participants aux &eacute;v&eacute;nements");
    define("ZERO_ATTENDEES_DATABASE","0 Participants trouv&eacute;s dans la base de donn&eacute;es");
    define("END_DATE","Date de Fin");
    define("PAYMENT_QUEST","Paiement requis?");
    define("MSG_ATDELETED"," Les Participants s&eacute;lectionn&eacute;s ont &eacute;t&eacute; supprim&eacute;s!");
    define("BTN_DELETESEL","Supprimer");
    define("BACK_TO_LIST","Retour &agrave; la Liste");
    define("ATTEND_LST_NAME","Nom");
    define("ATTEND_LST_EMAIL","Email");
    define("ATTEND_LST_DATES","Dates");
    define("ATTEND_LST_SPACES","Places");//(used multiple times)
    define("ATTEND_VIEW_EVENT","Voir les Participants pour L'&eacute;v&eacute;nement");
    define("ATTEND_CHOISE_EVENT","Choisissez un Ev&eacute;nement");
    define("ATTEND_LST_BTN","Ajouter une R&eacute;servation");

    #bs-reserve-view.php
    define("ZERO_MAN_FOUND","0 R&eacute;servations manuelles dans la base de donn&eacute;es");
    define("MAN_BOOK","R&eacute;servations manuelles");
    define("NEW_BOOKING","Nouv R&eacute;servation");
    define("REASON","Raison");
    define("MANUAL_BK_DESC","Description");
    define("RECURRING","r&eacute;current");
    define("DATE_FORM_RES","Date de R&eacute;servation du");
    define("BTN_NEW_BOOKING","Nouvelle R&eacute;servation");
    define("DATE_RES_TO","R&eacute;servation jusqu'au");
    define("ADD_EDIT_MAN_BOOK","Ajouter/Editer R&eacute;servation manuelle");
    define("ADD_MAN_BOOK","Ajouter une r&eacute;servation manuelle");
    define("EDIT_MAN_BOOK","Editer une R&eacute;servation manuelle");
    define("ADD_EDIT_MAN_BOOK_DAY","Ajouter/Editer R&eacute;servation manuelle");
    define("ADD_MAN_BOOK_DAY","Ajouter une R&eacute;servation manuelle");
    define("EDIT_MAN_BOOK_DAY","Editer R&eacute;servation manuelle");
    define("SHRT_DESCRPTN","Petite Description:");  // same as small description
    define("SEL_SERVICE","S&eacute;lectionner le Service:");//(used multiple times)
define("EVENT_COLOR","Event Color");
    define("RES_DATE_FROM","Date de R&eacute;servation du:");
    define("RES_DATE_TO","R&eacute;servation jusqu'au:");
    define("REP","r&eacute;p&eacute;ter");
    define("HOURLY","Horaire");
    define("DAILY","journalier");
    define("WEEKLY","hebdomadaire");
    define("MONTHLY","mensuel");
    define("YEARLY","annuel");
    define("EVERY","chaque:");
    define("MSG_MAN_DEL","R&eacute;servations manuelles s&eacute;lectionn&eacute;es supprim&eacute;es.");

    #bs-reserve.php
    define("MSG_BACK","Retour &agrave; la liste");
    define("MSG_TMBK","Cet Horaire est r&eacute;serv&eacute;!");
    define("MSG_DATETO1","Date de r&eacute;servation Pour plus t&ocirc;t que l'intervalle minimum");
    define("MSG_DATETO2","Dates r�serv&eacute;es Pour ne peut pas &ecirc;tre inf&eacute;rieure &agrave; date de r&eacute;ception de");
    define("MSG_BKSAVE","R&eacute;servation enregistr&eacute;e!");
    define("TXT_BS_RESERVE_DESCR","Using form below you can add booking manually, for example, having customer on the phone. Also, you can use manual booking to block periods of days which your services are not available on, for example - holidays, vacations, special events (full day facility booking) etc.");

    #bs-reserve-day.php
    define("BS_RESERVE_DAY_DESCR","Using form below you can add multi-day booking for selected multi-day service (such as hotel or cottage)  while having customer on the phone.");

    #bs-schedule.php
    define("SCHEDL","Planning");
    define("SEL_DATE","S&eacute;lectionnez le Jour:");
    define("SCHEDL_SELECT_SERV","Choisir un Service:");    
    define("SCHEDL_VIEW","Voir le planing pour le service &agrave; la date s&eacute;lectionn&eacute;e");       
    define("SCHEDL_TIME","Heure");
    define("SCHEDL_DATE","Choisir la Date:");
    define("SCHEDL_BTN_VIEW","Voir...");
    define("SCHEDL_FOR","pour");
    define("SCHEDL_BTN1","Ajout Service Simple Jour");
    define("SCHEDL_BTN2","Ajout Service Multi-Jours");
    define("SCHEDL_BTN3","Add Event");
    define("SCHEDL_CUSTOMER_NAME","Nom du Client");
    define("SCHEDL_CUSTOMER_PHONE","T&eacute;l&eacute;phone");
    define("SCHEDL_CUSTOMER_EMAIL","Email");
    
    #bs-schedule-day.php
    define("SCHEDL_DAY","Calendrier des r&eacute;servations du jour");

    #bs-services-add.php
    define("BS_SERV_BTN1","Ajouter un Service");
    define("BS_SERV_BTN2","Ajout Service Multi");
    define("BS_SERV_TXT","Dans cette section , vous pouvez ajouter un service en remplissant correctement les champs ci-dessous. Si vous voulez ajouter un multi Service , veuillez cliquer sur le lien Multi-Service.");
    define("ZEO_FOUND_BS","0 Services trouv&eacute;es dans la base de donn&eacute;es");
    define("SERVICES","Services");
    define("PRICE_PER_BOOKING","Prix par r&eacute;servation");
    define("SERVICE_DURATION","Dur&eacute;e du Service");
    define("FREE_BOOKING","Gratuit");
    define("ADD_EDIT_SERV","Ajouter/Editer un Service");
    define("ADD_SERV","Ajouter un Service");
    define("EDIT_SERV","Editer un Service");
    define("SERV_TTL","Titre du Service:");
    define("TIME_BKK_SET","R&eacute;glages Horaire de r&eacute;servation");
    define("BOOK_TIME_INTRV","Intervalle de temps:");
    define("MIN15","15 minutes");
    define("MIN30","30 minutes");
    define("MIN45","45 minutes");
    define("H1","1 heure");
    define("H2","2 heures");
    define("H3","3 heures");
    define("H4","4 heures");
    define("H5","5 heures");
    define("H6","6 heures");
    define("H7","7 heures");
    define("H8","8 heures");
    define("H9","9 heures");
    define("H10","10 heures");
    define("H11","11 heures");
    define("H12","12 heures");

    define("INTERV_MSG","(1 place = 1 intervalle de r&eacute;servation que vous avez s&eacute;lectionn&eacute; ci-dessus.)");
    define("PRICE_SPOT","Prix par place:");// price per one SPOT???
    define("TIME_BEFORE","D&eacute;lai avant r&eacute;servation:");
    define("HOURS",'heures');
    define("TIME_MSG","(si les r&eacute;servations en horaire libre - mettre 0, sinon le format XX.XX)");// time bookings? - doesn't sound right
    define("ALLOW_MULT_SPACES","Laissez r&eacute;servations multiples par la dur&eacute;e de service");// spots vs spaces?
    define("SPACES_INTRV","Places par chaque intervalle:");
    define("PAYMENT_MSG","(Si la facture hors ligne est s&eacute;lectionn&eacute; - r&eacute;servation sera confirm&eacute;e automatiquement, il est de votre responsabilit&eacute; de percevoir le paiement du client)");
    define("SHOW_SPAC","Voir les espaces libres:");
    define("NO","Non");//(used multiple times)
    define("YES","Oui");//(used multiple times)
    define("SPOT_MSG","NB de Place minimum pour 1 r&eacute;servation:");
    define("UNLM_SPOT","Places illimit&eacute;s");
    define("SPOT_MSG_MAX","NB de Place maximum pour 1 r&eacute;servation:");
    define("SPT1","1 place");
    define("SPT2","2 places");
    define("SPT3","3 places");
    define("SPT4","4 places");
    define("BOOK_MSG_DAY","(veuillez r&eacute;gler les horaires disponible pour la r&eacute;servation, pour chaque jour, ou mettre N / A si non disponible)");
    define("PICK_DAY","Jour de la semaine"); //weekday? pick a day?
    define("CALND_WEEK_STARTS"," Le Calendrier commence le:");
    define("SUN","Dimanche");
    define("MON","Lundi");
    define("CRNT_SRV_IMG","Image du Service");
    define("EVENT_DISP_SETT","Ev&eacute;nements Param&egrave;tres d'affichage");
    define("SHOW_TTL","Afficher les titres d'&eacute;v&eacute;nements sur le calendrier:");
    define("AUTOCONFIRM","AUTO-Confirmation des r&eacute;servations gratuites:");
    define("AUTOCONFIRM_MSG","AUTO-Confirmation des r&eacute;servations gratuites");
    define("EMAIL_SETTINGS","Param&egrave;tres de notification par service e-mail:");
    define("EMAIL_FROM_NAME","Nom:");
    define("EMAIL_FROM_EMAIL","Email:");
    define("SHOW_IMG","Voir image de l'&eacute;v&eacute;nement (redimensionnement):");
    define("SHOW_SEATS","Afficher \"places disponibles\" pour l'&eacute;v&eacute;nement");
    define("MSG_SRVUPD","Service mise &agrave; jour!");
    define("MSG_SHEDULE_DEL"," Le calendrier a &eacute;t&eacute; supprim&eacute;!");
    define("MSG_DEMO1","D&eacute;sol&eacute;, l'action s&eacute;lectionn&eacute;e est interdite dans la d&eacute;mo en direct");
    define("MSG_SRVSAVE","Service cr&eacute;&eacute; avec succ&egrave;s!");
    define("MSG_SRVDEL","Service s&eacute;lectionn&eacute; supprim&eacute;.");
    define("MSG_SRVDEL_DEFAULT","Default Service cannot be deleted");
    define("MSG_NOTE","Toutes les r&eacute;servations (Heures et &eacute;v&eacute;nements) associ&eacute;s &agrave; ce service seront supprim&eacute;, op&eacute;ration irr&eacute;versible");
    define("ALLOW_DEL_BOOKINGS","Allow user to cancel \"confirmed\",\"paid\" bookings");
    define("ALLOW_DEL_BOOKINGS_NOTES","Allow user to cancel \"confirmed\",\"paid\" bookings");
    define("HIDE_PRICE","Hide price on calendar");

    #bs-settings.php
    define("DEMO_PASS_MSG"," D&eacute;sol&eacute;, changement de mot de passe impossible dans la d&eacute;mo");
    define("PASS_NOMATCH","Les mots de passe ne correspondent pas!");
    define("SCRP_SETNG","Param&egrave;tres du script");
    define("BS_SETTINGS_DESCR","Please setup your own settings below to fine tune your BookingWizz. Pick your language or currency, setup taxes, select appropriate time mode and time zone to make your script working precisely as you need.");
    define("ACC_SETNG","Param&egrave;tres d'acc&egrave;s");
    define("NEWPASS_ADMN","Nouveau mot de passe administrateur:");
    define("CNFRM_PASS","Confirmer le mot de passe:");
    define("NOTIF__EMAIL"," Notification par email:");
    define("PYPAL_STNG","R&eacute;glages PayPal");
    define("TAX_ON","TVA Active:");
    define("TAX","TVA:");
    define("PAYPAL_EMAIL","Email du compte Paypal:");
    define("PAYPAL_CURRN","Devise de Paiement:");
    define("PAYPAL_CURRN_SUP","(paypal Devise accept&eacute;e seulement)");
    define("DIPL_SETTNG","Param&egrave;tres d'affichage");
    define("TIME_MODE","Mode Horaire:");
    define("DATE_FORMT","Format de Date:");
    define("POPUP_MSG_BOOK","Utiliser les PopUp window pour R&eacute;servation:");
    define("LANGUAGE_SWITCHING","Enable language switching");
    define("LANGUAGE_SETTINGS","Language settings");
    define("CURNT_SYMBL","Symbole de devise:");
    define("CURNT_POS","Position du Symbole:");
    define("LANG","Language:");
    define("PLUGINS","Plugins Install&eacute;s");
    define("MSG_SETSAVED","Les param&egrave;tres ont &eacute;t&eacute; mis &agrave; jour!");
    define("MSG_ADMPSCHG","Mot de Passe Admin Chang&eacute;!");
    define("MSG_PSDNTMTCH","Les mots de passe ne correspondent pas!");
    define("BTN_SUBMITCHANGES","Enregistrer");
    define("TIMEZONES","Timezones");
    define("TIMEZONE_SET","Select Timezone");
    define("MSG_BLANK_TAX","Tax value are required");

    define("REMINDER","Reminders");
    define("SEND_EMAIL","send email booking reminder");
    define("HOURS_BEFORE_BOOKING","hours before customer booking");
    define("HOURS_BEFORE_APPOINTMENT","hours before the appointment");
    define("HOURS_BEFORE_EVENT","hours before event starts");
    define("MULTI_DAY_NOTIFICATIONS","Multi-Day notifications");
    define("SINGLE_DAY_NOTIFICATIONS","Single-Day notifications");
    define("EVENT_NOTIFICATIONS","Event notifications");
    define("CRON_FOR_EMAIL_NOTIFICATIONS","Cron for Email Notifications");
    define("USE_CRON_TAB","use normal cron tab ");
    define("USE_ALTERNATIVE_CRON","use cron alternative");
    define("CRON_TAB_DESCRIPTION","We highly recommend selecting this option. This is standard CRON (or Scheduled Task). You will need to copy/paste the cron command on the left into your CRON TAB management section. To learn more about setting up CRON/Scheduled Tasks - please refer to BookingWizz PDF Manual.");
    define("ALTERNATIVE_CRON_DESCRIPTION","In case you have any issues with setting regular CRON tab task - you can select this option. In this case you will be passing cron execution on to visitors. Everytime a visitor will access your BookingWizz - BookingWizz will check if cron has to be ran, and will run it and send all required reminders. In case there are no visitors on site - no reminders will be checked/sent.");
    define("ENABLED","Enabled");
    define("DISABLED","Disabled");


    #event-booking.php
    define("MSG_JS_ALLFIELDS","Veuillez remplir tous les champs en surbrillance pour continuer.");

    #Event-booking-nojs.php
    define("RESERV_MSG","Merci, Vous recevrez un courriel de confirmation concernant votre r&eacute;servation apr&egrave;s le traitement de l'administrateur.");
    define("FIELDS_NEEDED","Champs obligatoires suivants: Nom, Email, T&eacute;l&eacute;phone, &eacute;v&eacute;nement s&eacute;lectionn&eacute;. Veuillez v&eacute;rifiez votre saisie.");
    define("CAPTCHA_ERROR","Captcha erreur! Veuillez essayez de nouveau!");//(used multiple times)
    define("JAVA_NEEDED","Veuillez activer le JavaScript de votre  ");//to better what?? //(used multiple times)
    define("BROWSER","Navigateur");//(used multiple times)
    define("YNAME","Votre Nom");//(used multiple times)
    define("BOOKING_FORM","R&eacute;servation");//(used multiple times)

    #eventlist.php
    define("WELCM_SYSTM","Bienvenue sur notre espace de r&eacute;servation en ligne.");
    define("SAMPLE_TEXT","Vous pouver consulter le calendrier mois par mois pour y voir les &eacute;v&eacute;nements propos&eacute;s.<br><b>Veuillez s&eacute;lectionner dans la liste d&eacute;roulante les diff&eacute;rents services propos&eacute;s</b><br>Vous pouvez ainsi r&eacute;server en ligne une ou plusieurs places pour vous et vos amis.<br>Choisissez votre date et remplissez le formulaire de r&eacute;servation en ligne.<br>Si vous rencontrez le moindre probl&egrave;me veuillez contacter l'administrateur. ");
    define("EVENTS_LIST","Liste compl&egrave;te des &eacute;v&eacute;nements");
    define("VIEW","Voir le ");
    define("CALENDAR","Calendrier");
    define("EVENT_START","Commence &agrave; ");
    define("FREE","GRATUIT");
    define("NO_EVENT_MONTH","Il n'y a pas d'&eacute;v&eacute;nement ce mois ci ...");
    define("LINKTO","Lien de ");
    define("ADMINAREA","ADMIN AREA");

    #Forgot.php
    define("WRONG_EMAIL","Notification par email incorrecte");
    define("WRONG_EMAIL2","Email Paypal non valable");
    define("CHANGE_PASS_TO_NEW","Veuillez changer le mot de passe d&egrave;s que vous vous connectez.");
    define("NEW_PASS_SENT"," Le Nouveau mot de passe a &eacute;t&eacute; envoy&eacute; &agrave; votre adresse email.");
    define("WRONG_USERNAME","Nom d'utilisateur incorrect (Notification par email) ");
    define("WRONG_USERNAME2","Notification par email vide.");
    define("MSG_BSFORGOT_TITLE","Mot de passe oubli&eacute;");

    #booking.processing.php
    define("BACK_RETURN","Retour au Calendrier");

    #booking.event.processing.php
    define("BEP_5","Réservation d'événement placé!");
    define("BEP_6","<br />Statut de r&eacute;servation: Confirm&eacute; (Veuillez percevoir le paiement du client)<br />");
    define("BEP_7","<br />Statut de r&eacute;servation: Non Confirm&eacute;<br />");
    define("BEP_8","Nouvelle R&eacuteservation Confirm&eacute;");
    define("BEP_9","R&eacute;servation nouvelle non confirm&eacute;");
    define("BEP_10","Adresse email invalide. Veuillez v&eacute;rifier votre saisie."); //used multiple times
    define("BEP_11","Merci. Vous recevrez un courriel de confirmation concernant votre r&eacute;servation apr&egrave;s le traitement de l'administrateur.");
    define("BEP_12","D&eacute;sol&eacute;, quelqu'un viens juste de r&eacute;server la place");
    define("BEP_13","Champs obligatoires suivants: Nom, Email, T&eacute;l&eacute;phone, &eacute;v&eacute;nement s&eacute;lectionn&eacute;. Veuillez v&eacute;rifiez votre entr&eacute;e. ");
    define("BEP_14","Nous vous remercions de votre r&eacute;servation!"); //h1 page title - used multiple times
    define("BEP_15","&laquo; Retour au Calendrier"); //used multiple times
    define("BEP_16","Paiement de la commande "); //payment order
    define("BEP_161","R&eacute;servation Ordre");
    define("SEL_TIME","Veuillez choisir l'horaire."); // used multiple times
    define("BEP_17","Champs obligatoires suivants: Nom, Email, T&eacute;l&eacute;phone, &eacute;v&eacute;nement s&eacute;lectionn&eacute;. Veuillez v&eacute;rifiez votre entr&eacute;e. ");
    define("BEP_18","Certains intervalle de temps d&eacute;passe le nombre de places. Veuillez v&eacute;rifier votre saisie.");
    define("BEP_19"," Choisir une Plage de dates de disponibilit&eacute; "); //payment order
    define("AVAIL","Disponibilit&eacute;");
    
    #booking.days.processing.php
    define("BDP_1","Nouvelle r&eacute;servation multi-jours");
    define("BDP_2","Nouvelle r&eacute;servation multi-jours confirm&eacute;e");
    define("BDP_3","Nouvelle r&eacute;servation multi-jours non confirm&eacute;e");
    define("BDP_4","D&eacute;sol&eacute;, quelqu'un viens juste de r&eacute;server la place");
    define("BDP_5","Choisir une Plage de dates de disponibilit&eacute; "); //payment order
    define("BEP_6","Champs obligatoires suivants: Nom, Email, T&eacute;l&eacute;phone, &eacute;v&eacute;nement s&eacute;lectionn&eacute;. Veuillez v&eacute;rifiez votre entr&eacute;e. ");
    define("BEP_7","Email non Valable, veuillez recommencer.");
    
    #manageReservation.php
    define("MNG_ATTDEL","Participant s&eacute;lectionn&eacute; annul&eacute;.");
    define("MNG_0FOUND","0 participants dans la base de donn&eacute;es");
    define("MNG_RESERFOR","R&eacute;servations pour ");
    define("TBL_NAME","Nom");
    define("TBL_QTY","Quantit&eacute;.");
    define("TBL_SERVICE","Service");
    define("TBL_EVENT","Ev&eacute;nement");
    define("TBL_TIME","Heure");
    define("TBL_DATE","Date de Souscription");
    define("TBL_MNG","Organiser");

    #paypal.ipn.php
    define("PP_SUBJ_RECEIVED","Nouveau paiement re&ccedil;u");
    define("PP_CANCEL","Le paiement a &eacute;t&eacute; annul&eacute;!");
    define("PP_THANK_H1","Merci !");
    define("PP_THANKYOU","Nous vous remercions de votre paiement, nous vous contacterons rapidement!");

    #thank-you.php
    define("THNK_H1","Nous vous remercions de votre r&eacute;servation!");
    define("THNK_TEXT","Si vous d&eacute;sirez entrer en contact directement avec nous veuillez t&eacute;l&eacute;phoner au XX XX XX XX.");

    #functions.php
    define("ZERO_SPACES","0 place disponible");
    define("ZERO_SPACES2","0 place");
    define("SPC_AVAIL"," place(s) disponible(s)");
    define("DAY_AVAIL","Disponible");
    define("SEATS_AVAIL"," places disponibles");
    define("DAY_BOOKED","R&eacute;serv&eacute;");
    define("CHECKOUT_AVAILABLE","Checkout Available");
    define("EVENTS_SCHEDULED"," &eacute;v&eacute;nement(s) pr&eacute;vue");
    define("BOOK_NOW","R&eacute;servez ...");
    define("TXT_RESERVED","R&eacute;serv&eacute; par l'admin avec la raison suivante: ");
    define("SPACES"," Places");
    define("TXT_EVENT","Ev&eacute;nement");
    define("TXT_PAST","Non disponible");
    define("TXT_QTY","Quantit&eacute;: ");
    define("TXT_EVENT_START","Commence &agrave; ");
    define("TXT_EVENT_ENDS","Termine &agrave; ");
    define("SPC_LEFT"," spaces left ");
    define("TXT_PLSSELECT","Veuillez choisir un Ev&eacute;nement.");
    define("ADM_NONWORKING","Cette journ&eacute;e est marqu&eacute;e comme non-travaill&eacute;e, de sorte que 0 R&eacute;servations trouv&eacute;es.");
    define("TXT_EVENT2","Ev&eacute;nement");
    define("TXT_AVAIL","Disponible pour r&eacute;servation ");
    define("TXT_MINUTES_MAX"," minutes maximum;");
    define("TXT_MAX"," maximum;");
    define("TXT_MINUTES"," minutes");
    define("TXT_AND"," et ");
    define("TXT_HOURSS"," heure(s)");
    define("TXT_MINUTES_MIN"," minutes minimum; ");
    define("TXT_MIN"," minimum; ");
    define("TXT_SPOTS_LEFT","Place(s)<br>Dispo");
    define("TXT_FUNC_QTY","Qty.");
    define("TXT_FUNC_FREE","Gratuit");
    define("TXT_FUNC_PAYMENT_FOR","Paiement pour r&eacute;servation");
    define("TXT_FUNC_PAYMNT_EVENT","Paiement pour l'&eacute;v&eacute;nement");
    define("TXT_FUNC_CLICK_HERE_TO_PAY","Cliquez ici pour payer la r&eacute;servation");
    define("TXT_FUNC_THANK_YOU_MSG","<p>Merci. Vous recevrez un courriel de confirmation concernant votre r&eacute;servation apr&egrave;s le traitement de votre commande.</p>");
    define("TXT_FUNC_ALMOST_DONE","Vous avez presque fini. Il ya juste une chose &agrave; faire - le r&eacute;glement. Veuillez cliquer sur le bouton pour vous diriger vers PayPal.com pour un paiement s&eacute;curis&eacute;. La confirmation de votre r&eacute;servation se fera juste apr&egrave;s");

    #new messages in v5.3
    define("REPEAT_MSG","Veuillez vous assurer que votre date r&eacute;serv&eacute;e &agrave; la fin de l'intervalle est �gal &agrave; effectif r&eacute;current. Par exemple si la r&eacuteservation r&eacute;currente doit se terminer en 6 semaines &agrave; partir de maintenant, r&eacute;gler \"la date\" de \"aujourd'hui + 6 semaines\"");


    #bs-coupons-add.php
    define("BS_COUPONS_TXT","Dans cette section vous pouvez ajouter vos coupons de r&eacute;ductions.");
    define("TXT_COUPONS_STARTS","D&eacutebut");
    define("TXT_COUPONS_ENDS","Fin");
    define("TXT_SET_ST","D&eacutefinir le d&eacutebut et la fin");


    #bs-coupons.php
    define("TXT_COUPONS","Coupons");
    define("TXT_COUPONS_ADD","Coupons (Ajouter/Editer)");
    define("TXT_COUPONS_NEW","Ajouter un Coupon");
    define("TXT_COUPONS_DEL","Coupon Effac&eacute;.");
    define("TXT_COUPONS_NOT_FOUND","0 coupons trouv&eacute;s dans la base de donn&eacute;es");
    define("LABEL_COUPON_TITLE","Titre");
    define("LABEL_COUPON_CODE","Code de R&eacute;duction");
    define("LABEL_COUPON_VALUE","Valeur");
    define("LABEL_COUPON_AMOUNT","Remise");
    define("LABEL_COUPON_TYPE","Type");
    define("LABEL_COUPON_VALID_FROM","Valide de");
    define("LABEL_COUPON_VALID_TO","jusqu'au");
    define("LABEL_COUPON_CALENDARS","Calendriers applicables");
    define("MSG_COUPON_SAVE","Coupon enregistr&eacute;!");
    define("MSG_COUPON_UPD","Coupon mis &agrave; jour!");
    
    #bs-services_days-add
    define("TXT_DAY_SRV_ADD_EDIT","Ajouter/Modifier service de Multi-Jours");
    define("TXT_DAY_SRV_ADD","Ajouter un service de Multi-Jours");
    define("TXT_DAY_SRV_EDIT","Modifier service de Multi-Jours");
    define("TXT_DAY_SRV_TITLE","Titre");
    define("TXT_DAY_SRV_SETTINGS","R'glages R&eacute;servation Multi-Jours");
    define("TXT_DAY_MAX_SPACES","Maximum de Places");
    define("TXT_DAY_SRV_MAX_DAYS","Maximum de Jours");
    define("TXT_DAY_SRV_MIN_DAYS","Minimum days");
    define("TXT_DAY_SRV_DAYS_BEFORE"," Jours avant la r&eacute;servation");
    define("TXT_DAY_SRV_DESCR","Description");
    define("TXT_DAY_SRV_IMAGE","Service Image");
    define("TXT_DAY_SRV_AVAILABILITY","Jours de R&eacute;servation Disponible");
    define("TXT_DAY_SRV_FROM","Du");
    define("TXT_DAY_SRV_TO","Au");
    define("TXT_DAY_SRV_PRICE","Prix");
    define("BS_SERV_TXT_MD","\"Multi-Day Service\" applies to entity that may spread into several days such as hotel room booking or cottage booking. Add \"Multi-Day Service\", specify parameters such as price, maximum days and spaces, dates availability range and so on to have it ready for booking.");

    #bs-services.php
    define("TXT_SM_R_ABOUT", "by adding and customizing service, you add service's availability calendar.");
define("SERVICE_ID","ID");//(used multiple times)
define("DEFAULT_SERVICE", "Default Service");
define("MAKE_DAFAULT", "Make as default service");
define("THIS_DEFAULT_SERVICE", "This is default service ");
    
    #js-table
    define("JS_TABLE_FIRST","D&eacute;but");
    define("JS_TABLE_PREV","previous");
    define("JS_TABLE_NEXT","next");
    define("JS_TABLE_LAST","last");
    define("MSG_DAY_SRV","");
    define("LABEL_DAY_SRV","");

    #bs-addons
    define("ADDONS_TITLE","Add Ons Install&eacute;s");
    define("BS_ADDONS_DESCR","Please find below currently installed add-ons for your  BookingWizz. You can turn add-on on or off with a click of a button.");
    define("PLUGIN_SETTINGS","Plugin settings");

    #bs-attedees-export
    define("EXPORT_TITLE","Exporter les Participants");
    define("NO_ATTENDEES","No attendees found");
    define("EXPORT_TITLE2","Dans cette section , vous pouver exporter dans un calendrier les participants ");
    define("EXPORT_TITLE3","Interval de temps pour exportation");
    define("EVENT_BOOKINGS","R&eacute;servations d'&eacute;v&eacute;nements");
    define("BOOKINGS","R&eacute;servations");
    define("DAY_BOOKINGS","Jour de R&eacute;servations");
    define("BOOKINGS_EXPRT","Daily & Hourly Bookings");

    #bs-reports
    define("REPORTS_DESCR","<em style=\"font-weight: normal;\" >You can navigate on graphic by scrolling to zoom in<b>/</b>out by dragging to focus specific data, and also with the direction arrows from the top left of the graphic</em>");
    define("REPORTS_1","Please select Service");
    define("REPORTS_2","Please Select Date Range");
    define("REPORTS_3","View Report");
    define("REPORTS_4","Event bookings from");
    define("REPORTS_5","Appointments Reports");
    define("REPORTS_6","From");
    define("REPORTS_7","To");
    define("REPORTS_8","Appointment bookings from");
    define("REPORTS_9","for service");
    define("REPORT_TITLE2","Reports allow you to see how many event bookings / hourly appointments / daily bookings been reserved per selected period of time, for selected service(calendar)");

    define("NEED_HELP","Need help?");
    define("SUPPORT_FAILED_TO_LOAD","Unfortunately, this section is not available at the moment. Please check back a bit later. <br /> If you will continue to experience this issue at a later time - please refer to our support forum located at <a href=\"http://support.convergine.com\" target=\"_blank\">http://support.convergine.com</a> for assistance with BookingWizz.");
    define("HELP_SIDE1","You are viewing all attendees for selected event. To change event please user SELECT EVENT dropdown on the right.");
    define("EVENT_IMAGE","Event Image");
    define("EVENT_START_END","Set Start and End Dates");
    define("SELECT_SERVICE","You must select service (=calendar) where this event will show up.");
    define("SELECT_SERVICE_RESERVE","You must select service (=calendar) where this manual booking is applicable.");
    define("RECURRING_MDB","Recurring Booking");
    define("MULTI_DAY_NOT_AV","This day is not available");
    define("MULTI_DAY_BK_ADM","This day booked by admin ");
    define("MULTI_DAY_BK_ADM2","reason: ");
    define("MULTI_DAY_TXT1","You can book");
    define("MULTI_DAY_TXT2","days maximum.");
    define("MULTI_DAY_TXT2_1","days minimum.");
    define("MULTI_DAY_TXT3","The selected date is outside the range of availability. Please adjust your selection.");
    define("MULTI_DAY_TXT4","Available for Booking");
    define("MULTI_DAY_TXT5","Book");
    define("MULTI_DAY_TXT6","Manual Booking ");
    define("MULTI_DAY_TXT7","This is day booked ");
    define("MULTI_DAY_TXT8","Date From");
    define("MULTI_DAY_TXT9","Date To");

    #various tooltips
    define("TTIP_1","If enabled - customer will be able to enter coupon code on the booking form.");
    define("TTIP_2","Number of hours entered here will prevent customer from booking any time spot within this period. Example: if right now is 12pm and you have 4 hours in this field, the earliest time spot customers will be able to book is 4pm");
    define("TTIP_3","Your customers will see this NAME as 'FROM' in all notifications associated with this service.");
    define("TTIP_4","Your customers will see this EMAIL as 'FROM' in all notifications associated with this service.");
    define("TTIP_5","Maximum guests in any booking. At the moment for 'display' purpose only.");
    define("TTIP_6","Maximum number of days allowed per any booking.");
    define("TTIP_6_1","Minimum number of days allowed per any booking.");
    define("TTIP_7","Number of days entered here will prevent customer from booking any date within this period from current time. Example: if today is January 1st and you have 4 days in this field, the earliest day customers will be able to book will be January 5th.");

    #homescreen popup
    define("HSP1", "Don't show this screen on start up");
    define("HSP2", "Welcome to Your <br/>BookingWizz Back Office");
    define("HSP3", "As a website owner, you can easily setup events, classes, programs and start taking free or paid reservations online. BookingWizz provides you with great management options, flexibitliy and customization For example, you can set a timeframe available for registration for each day (Monday through Sunday), set price, availabiltiy, various restrictions; set notification email, set how many hours can customer reserve per booking.");
    define("HSP4", "You also have an option to reserve time manually right here, for example if there is a corporate party and whole facility will be booked for the whole day – you can add such reservation through this back office – so that customer will see on calendar that this day is not available for bookings.");
    define("HSP5", "<a href='help/index.html'>read further how to use BookingWizz</a>");
    define("HSP6", "BUILDING YOUR INVENTORY");
    define("HSP7", "OPTIONAL ADD-ONS");
    define("HSP8", "LEARN MORE");
    define("HSP9", "Frequently Asked Questions");
    define("HSP10", "Case studies & Applications");

    define("TXT_COUPON_CODE","Type coupon code");

    #order summery text
    define("ORDER_BOOKING_INF","Booking Information");
    define("ORDER_EVENT_INF","Event Information");
    define("ORDER_BOOKING_DATE","Booking Date");
    define("ORDER_BOOKING_TIME","Booking Time");
    define("ORDER_BOOKING_QTY","QTY");
    define("ORDER_DATE_FROM","Booking Date From");
    define("ORDER_DATE_TO","Booking Date To");
    define("ORDER_DAYS","Days");
    define("ORDER_SUBTOTAL","Sub Total");
    define("ORDER_TOTAL","Total");
    define("ORDER_DISCOUNT","Discount");
    define("ORDER_TAX","Tax");
    define("ORDER_TO_PAY","Total to pay");
    define("ORDER_SUMMERY","Order Summary");

    define("ERROR_RESERVED_BY_ADMIN", "Selected days are already booked by admin");
    define("ERROR_RESERVED_ALREADY", "Selected days are already booked");

#################     Event Tickets plugin     ######################################################################
    define("PLUGIN_NAME","Event Tickets");
    define("ADD_TIX","Add Ticket");
    define("TXT_TIX_DEL","Selected ticket was deleted");
    define("TXT_TIX_DEL_ERROR","Error deleting ticket");
    define("TXT_TIX_NOT_FOUND","0 tickets found in database");
    define("LABEL_TIX_TITLE","Title");
    define("LABEL_TIX_CODE","Ticket Code");
    define("MSG_TIX_UPD","Ticket updated!");
    define("MSG_TIX_SAVE","Ticket was successfully created!");
    define("TXT_TIX_ADD","Edit Ticket");
    define("BS_TIX_TXT","Use this section to create custom ticket for your event. Step 1 is to setup ticket name and size, after saving it you will be able to specify parameters which to show on ticket, colors, fonts etc.");
    define("LABEL_TIX_NAME","Ticket Name");
    define("LABEL_TIX_WIDTH","Ticket Width (px)");
    define("LABEL_TIX_HEIGHT","Ticket Height");
    define("LABEL_TIX_BG_TYPE","Ticket background type");
    define("LABEL_SELECT_BACKGROUND_COLOR","Select background color");
    define("LABEL_UPLOAD_BACKGROUND","Upload background image");
    define("LABEL_BG_IMAGE","Select background image");
    define("LABEL_BG_COLOR","Select background color");
    define("LABEL_FONT_COLOR","Font color");
    define("LABEL_FONT_SIZE","Font size");
    define("LABEL_FONT_FAMILY","Font");
    define("LABEL_LOGO","Logo");
    define("LABEL_ENCODE_IN_BARCODE","Encode in barcode");
    define("LABEL_RESERVATION_ID","Reservation ID");
    define("LABEL_CUSTOMER_NAME","Customer Name");
    define("LABEL_EVENT_NAME","Event Name");
    define("LABEL_EVENT_DATE","Event Date & Time");
    define("LABEL_EVENT_LOCATION","Event Location");
    define("LABEL_EVENT_PRICE","Event Price");
    define("LABEL_BARCODE","Barcode");
    define("LABEL_LABEL","Label");
?>