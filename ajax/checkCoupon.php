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
require_once("../includes/config.php"); //Load the configurationsa        

$serviceID = (!empty($_REQUEST["serviceID"])) ? strip_tags(str_replace("'", "`", $_REQUEST["serviceID"])) : getDefaultService();;
$couponCode = (!empty($_REQUEST["couponCode"])) ? strip_tags(str_replace("'", "`", $_REQUEST["couponCode"])) : "";

$responce = array();

$sql = "SELECT * FROM bs_coupons WHERE code='{$couponCode}'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0){
    $row = mysql_fetch_assoc($res);
    if($row['dateFrom']<=date("Y-m-d") && $row['dateTo']>=date("Y-m-d")){
    $services = explode(",",$row['services']);
        if(in_array($serviceID, $services)){
            $responce = array("responce" =>true,"value"=>$row['value'],"type"=>$row['type'] );
        }else{
           $responce = array("responce" =>false,"message"=>"Kupon nije predviđen za ovu uslugu" );
        }
    }else{
         $responce = array("responce" =>false,"message"=>"Kupon je istekao" );
    }
}else{
    $responce = array("responce" =>false,"message"=>"Kupon nije pronađen" );
}

print json_encode($responce);
?>
