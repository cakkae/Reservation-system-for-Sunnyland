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

eval(base64_decode("JGl0ZW1fbmFtZSA9ICI4NzkxOSI7DQokZW52YXRvX2FwaWtleSA9ICdrdnRrYnExMXg5N3dqOWptbzhjdW02ZHJqc200c3c5Nyc7DQokZW52YXRvX3VzZXJuYW1lID0gIkNyaXRpY2FsR2VhcnMiOw=="));

$license_to_check = preg_replace('/[^a-zA-Z0-9_ -]/s', '', !empty($license) ? $license : "");
$continue = false;

if (!empty($username) && !empty($domain)) {
    if (!empty($license_to_check) &&!empty($envato_apikey) && !empty($envato_username) ) {

        //Initialize curl
        
        $api_url = 'http://marketplace.envato.com/api/edge/' . $envato_username . '/' . $envato_apikey . '/verify-purchase:' . $license_to_check . '.json';
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_url);

        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, "BookingWizz License Validator (during install)");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $ch_data = curl_exec($ch);

        curl_close($ch);

        if (!empty($ch_data)) {

            $json_data = json_decode($ch_data, true);

            if (isset($json_data['verify-purchase']) && count($json_data['verify-purchase']) > 0) {

                $continue = true;

                if ($json_data['verify-purchase']['item_id'] != $item_name) {
                    $tt .= "<div class=error>License Key belongs to a different product.</div>";
                    $continue = false;
                }
                if (strtolower($json_data['verify-purchase']['buyer']) != strtolower(trim($username))) {

                    $tt .= "<div class=error>License key and username do not match.</div>";
                    $continue = false;
                }

                //$continue = true;
            } else {


                $tt .= "<div class=error>Error fetching the info. Possible reason: license key invalid or wrong username. Make sure CURL is enabled on your server!</div>";
                //print_r($json_data) Here's the curl return:;
            }
        } else {


            $tt .= "<div class=error>Something went terribly wrong!</div>";
        }
    } else {

        $tt .= "<div class=error>You either didn`t pass the license key into the url or didn`t enter your envato username/apikey into configuration</div>";
    }
} else {
  $tt .= "<div class=error>License Key, Username and Domain fields are required</div>";  
}
?>