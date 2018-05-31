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

require_once("includes/config.php"); //Load the configurations

bw_do_action("bw_load");
##################################################################################
#  	1. GET ALL VARIABLES
$name = (!empty($_POST["name"])) ? strip_tags(str_replace("'", "`", $_POST["name"])) : '';
$brojDjece = (!empty($_POST["brojDjece"])) ? strip_tags(str_replace("'", "`", $_POST["brojDjece"])) : '';
$imeSlavljenika = (!empty($_POST["imeSlavljenika"])) ? strip_tags(str_replace("'", "`", $_POST["imeSlavljenika"])) : '';
$phone = (!empty($_POST["phone"])) ? strip_tags(str_replace("'", "`", $_POST["phone"])) : '';
$email = (!empty($_POST["email"])) ? strip_tags(str_replace("'", "`", $_POST["email"])) : '';
$email1 = (!empty($_POST["email1"])) ? strip_tags(str_replace("'", "`", $_POST["email1"])) : '';
$comments = (!empty($_POST["comments"])) ? strip_tags(str_replace("'", "`", $_POST["comments"])) : '';
$date = (!empty($_POST["date"])) ? strip_tags(str_replace("'", "`", $_POST["date"])) : '';
$interval = (!empty($_POST["interval"])) ? strip_tags(str_replace("'", "`", $_POST["interval"])) : '';
$time = (!empty($_POST["time"])) ? $_POST["time"] : '';
$captcha_sum = (!empty($_POST["captcha_sum"])) ? strip_tags(str_replace("'", "`", $_POST["captcha_sum"])) : '';
$captcha = (!empty($_POST["captcha"])) ? strip_tags(str_replace("'", "`", $_POST["captcha"])) : '';
$serviceID = (!empty($_REQUEST["serviceID"])) ? strip_tags(str_replace("'", "`", $_REQUEST["serviceID"])) : getDefaultService();;
$qty = (!empty($_REQUEST["qty"])) ? intval($_REQUEST["qty"]) : 1;
$couponCode = (!empty($_POST["couponCode"])) ? strip_tags(str_replace("'", "`", $_POST["couponCode"])) : '';
$referrer = (!empty($_REQUEST["referrer"]))?strip_tags(str_replace("'","`",$_REQUEST["referrer"])):'';
// captcha check

if (empty($captcha_sum) || empty($captcha) || md5($captcha) != $captcha_sum || !empty($email1)) {
    $queryString = array(
        "date" => $date,
        "lb1" => "yes",
        "serviceID" => $serviceID,
        "name" => $name,
        "phone" => $phone,
        "brojDjece" => $brojDjece,
        "email" => $email,
        "comments" => $comments,
        "time" => $time,
        "qty" => $qty,
        "couponCode" => $couponCode,
        "referrer"=>$referrer
    );

    $timeURL = http_build_query($time);
    if (getOption('use_popup') && $referrer!='calendar') {
        header("Location: index.php?" . http_build_query($queryString));
    } else {
        header("Location: booking.php?" . http_build_query($queryString));
    }
    exit();
}
## Check Qty allowed
$error = checkQtyForTimeBooking($serviceID, $time, $date, $interval, $qty);

if (!$error) {
    if (!empty($name) && !empty($phone) && !empty($email)) {

        if (!preg_match("(^[-\w\.]+@([-a-z0-9]+\.)+[a-z]{2,4}$)i", $email)) {
            $msg = "<div class='error_msg'>" . BEP_10 . "</div>";
        } else {
            if (!empty($couponCode)) {
                $couponData = checkCoupon($couponCode, $serviceID);
                if ($couponData['responce']) {
                    $couponValue = $couponData['value'];
                    $couponType = $couponData['type'];
                } else {
                   
                    $couponCode = '';
                }
            }

            ##################################################################################
            #  	3. PREPARE BOOKING DATE/TIME
            # CREATE ORDER

            $price_per_spot = getPricePerSpot($serviceID);
            $status = getServiceSettings($serviceID, 'payment_method')  == 'invoice' ? 1 : 2;


            $q = "INSERT INTO bs_reservations (dateCreated, name, email, phone, comments,status, `interval`,`serviceID`,`qty`,`coupon`)
                                    VALUES ('".DATETIME."','" . $name . "','" . $email . "','" . $phone . "','" . $comments . "','" . $status . "','" . $interval . "','" . $serviceID . "','" . $qty . "','" . $couponCode . "')";
            $res = mysql_query($q) or die("error! 001:" . mysql_error());
            $orderID = mysql_insert_id();
            $serviceName = getService($serviceID, 'name');
            if (!empty($orderID)) {
                $tempVar = "";
                $bookingData = array();
                $spots = 0;
                foreach ($time as $k => $v) {
                    $dateFrom = date("Y-m-d H:i:s", strtotime($date . " +" . $v . " minutes"));
                    $dateTo = date("Y-m-d H:i:s", strtotime($dateFrom . " +" . $interval . " minutes"));
                    $q = "INSERT INTO bs_reservations_items (reservationID,dateCreated,reserveDateFrom,reserveDateTo,qty)
                          VALUES ('" . $orderID . "','".DATETIME."','" . $dateFrom . "','" . $dateTo . "','" . $qty . "')";
                    $res = mysql_query($q) or die("error! 002");

                    //needed for message
                    $tempVar .= "<tr><td>" . getDateFormat($date) . "</td><td>" . date((getTimeMode()) ? "g:i a" : "H:i", strtotime($dateFrom)) . "</td><td>" . date((getTimeMode()) ? "g:i a" : "H:i", strtotime($dateTo)) . "</td><td>" . $qty . "</td></tr>";
                    $bookingData[] = array(
                        'date' => getDateFormat($date),
                        'timeFrom' => date((getTimeMode()) ? "g:i a" : "H:i", strtotime($dateFrom)),
                        'timeTo' => date((getTimeMode()) ? "g:i a" : "H:i", strtotime($dateTo)),
                        'qty' => $qty,
                        'dateFrom'=>$dateFrom,
                        'dateTo'=>$dateTo
                    );
                    $spots++;
                }




                $paymentBookingIngo = get_payment_info($orderID);
                if ($price_per_spot == 0 || $paymentBookingIngo['amount']==0) {
                    $infoForBooking = BEP_11;
                    $subject = BEP_161 . " (#" . $orderID . ")!";
                } else {
                    $subject = BEP_16 . " (#" . $orderID . ")!";
                    $infoForBooking = do_payment($orderID, getServiceSettings($serviceID, "payment_method"),null,$referrer);
                }

                //bw_dump($paymentBookingIngo);

                $uid = md5($email . "FtTtffT");
                $linkCancelReservation = "<a href=\"http://" . $_SERVER['SERVER_NAME'] . $baseDir . "manageReservation.php?email=" . urlencode($email) . "&uid=" . $uid . "\">link</a>";
                ##################################################################################
                #  	4. SEND NOTICE TO ADMIN AND CUSTOMER
                //send email to admin



                $adminMail = getAdminMail();

                $_startDate = dateToUTC($bookingData[0]['dateFrom']);
                $_endDate = end($bookingData);
                $_endDate = dateToUTC($_endDateIcal);





                $eventURL = "http://{$_SERVER['SERVER_NAME']}".$baseDir."booking.php?serviceID={$serviceID}&date=".  _date($_endDate);
                $googleLinkData = array(
                    "action"=>"TEMPLATE",
                    "text"=>  $serviceName,
                    "dates"=>date("Ymd",strtotime($_startDate))."T".date("His",strtotime($_startDate))."Z/".date("Ymd",strtotime($_endDate))."T".date("His",strtotime($_endDate))."Z",
                    "sprop"=>urlencode("website:{$eventURL}"),
                    "details"=>$serviceName,
                    "location"=>''
                );
                $googleLink = "http://www.google.com/calendar/event?".http_build_query($googleLinkData);

                $data = array(
                    "{%name%}" => $name,
                    "{%brojDjece%}" => $brojDjece,
                    "{%imeSlavljenika%}" => $imeSlavljenika,
                    "{%serviceName%}" => $serviceName,
                    "{%email%}" => $email,
                    "{%phone%}" => $phone,
                    "{%comments%}" => $comments,
                    "{%status%}" => $status== 1?BOOKING_FRM_CONFIRMED:BOOKING_FRM_NOTCONFIRMED,
                    "_info" => $bookingData,
                    "{%collect%}" => ($status == 1 &&$price_per_spot>0 ? " (Please collect payment from customer)<br/>" : ""),
                    "{%currencyB%}" => getOption('currency_position') == 'b' ? getOption('currency') : "",
                    "{%currencyA%}" => getOption('currency_position') == 'a' ? getOption('currency') : "",
                    "{%tax%}" => number_format($paymentBookingIngo['tax'], 2),
                    "{%subtotal%}" => number_format($paymentBookingIngo['subAmount'], 2),
                    "{%_subtotal%}" => number_format($paymentBookingIngo['_subAmount'], 2),
                    "discount" => $paymentBookingIngo['discount'],
                    "{%coupon%}" => $couponCode,
                    "{%total%}" => number_format($paymentBookingIngo['amount'], 2),
                    "{%taxRate%}" => $paymentBookingIngo['taxRate'],
                    "_payment" => ($price_per_spot != 0 ? 1 : 0),
                    "_taxable" => !empty($paymentBookingIngo['tax']) ? 1 : 0,
                    "{%linkCancelReservation%}" => $linkCancelReservation,
                    "{%google_link%}"=>$googleLink,
                    "deposit"=>$paymentBookingIngo['deposit'],
                    "{%totalToPay%}"=>number_format($paymentBookingIngo['amountToPay'], 2)
                );

                sendMail($adminMail, $subject, "timeBookingConfirmationAdmin.php", $serviceID, $data);
                //send email to customer



                include_once './includes/export/booking_ical.php';
                sendMailFile($email, $subject, "timeBookingConfirmationCustomer.php",$serviceID, $data,$ical_file);
                //sendMail($email, $subject, "timeBookingConfirmationCustomer.php", $serviceID, $data,$ical_file);
                //header("Location: thank-you.php");

                if (($price_per_spot == 0 && $status!=1) || $paymentBookingIngo['amount']==0) {
                    if (getService($serviceID, "autoconfirm") && $paymentBookingIngo['amount']==0) {
                        $subject = EMAIL_SUBJ_CONFIRMED;
                        $data = array(
                            "{%name%}" => $name,
                            "{%status%}" => BOOKING_FRM_CONFIRMED,
                            "_info" => $bookingData,

                        );
                        sendMail($email, $subject, "timeBookingConfirmationStatus.php", $serviceID, $data);

                        $sql = "UPDATE bs_reservations SET status = 1 WHERE id='{$orderID}'";
                        $res = mysql_query($sql) or die("error autoconfirm booking!");
                    }
                }
            }
        }
    } else {
        //throw error
        $msg = "<div class='error_msg'>" . BEP_17 . "</div>";
    }
} else {
    $msg = "<div class='error_msg'>" . BEP_18 . "</div>";
    $paypal_form = "";
}


?>
<?php include "includes/header.php"?>
<script type="text/javascript">
$(function(){
    if(($.browser.msie) && (($.browser.version == '7.0') ||($.browser.version == '8.0') )){
        $("#back").show();
    }
})
</script>
<div id="index">
<h1><?php echo BEP_14;?></h1>
<?php echo $msg;?>
<?php echo !$error?getOrderSummery($orderID):"";?>

<?php echo $infoForBooking?>
<br><br>
    <?php
if(!empty($_SESSION['site']) && getOption('use_popup')=='0'){
        echo "<a href='{$_SESSION['site']}' id='back'>".BACK_RETURN."</a>";
    }else{
        echo "<br/><br/><a href=\"http://". MAIN_URL."index.php?serviceID={$serviceID}\">".BEP_15."</a>";
    }
    ?>


<?php include "includes/footer.php"?>