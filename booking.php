


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

	include "includes/dbconnect.php";
	include "includes/config.php";
	
	bw_do_action("bw_load");
	$name = (!empty($_REQUEST["name"]))?strip_tags(str_replace("'","`",$_REQUEST["name"])):'';
	$brojDjece = (!empty($_REQUEST["brojDjece"]))?strip_tags(str_replace("'","`",$_REQUEST["brojDjece"])):'';
	
	$phone = (!empty($_REQUEST["phone"]))?strip_tags(str_replace("'","`",$_REQUEST["phone"])):'';
	$email = (!empty($_REQUEST["email"]))?strip_tags(str_replace("'","`",$_REQUEST["email"])):'';
	$comments = (!empty($_REQUEST["comments"]))?strip_tags(str_replace("'","`",$_REQUEST["comments"])):'';
	$date = (!empty($_REQUEST["date"]))?strip_tags(str_replace("'","`",$_REQUEST["date"])):'';
	$captcha_sum = (!empty($_POST["captcha_sum"]))?strip_tags(str_replace("'","`",$_POST["captcha_sum"])):'';
	$captcha = (!empty($_POST["captcha"]))?strip_tags(str_replace("'","`",$_POST["captcha"])):'';
	$msg2 = (!empty($_REQUEST["msg2"]))?strip_tags(str_replace("'","`",$_REQUEST["msg2"])):'';
	$serviceID = (!empty($_REQUEST["serviceID"]))?strip_tags(str_replace("'","`",$_REQUEST["serviceID"])): getDefaultService();
	$time = (!empty($_GET["time"]))?$_GET["time"]:'';
	$qty = (!empty($_REQUEST["qty"]))?strip_tags(str_replace("'","`",$_REQUEST["qty"])):1;
	$lb1 = (!empty($_REQUEST["lb1"]))?strip_tags(str_replace("'","`",$_REQUEST["lb1"])):'';
    $couponCode = (!empty($_GET["couponCode"]))?strip_tags(str_replace("'","`",$_GET["couponCode"])):'';

    $referrer = (!empty($_REQUEST["referrer"]))?strip_tags(str_replace("'","`",$_REQUEST["referrer"])):'';
	//print_r($time);
	
	$availability = getAvailableBookingsTable($date,$serviceID,$time,$qty,$couponCode);
	$int = getInterval($serviceID); //interval in minutes.
	
	
	##########################################################################################################################
	#  GET MAXIMUM AND MINIMUM INTERVALS FOR BOOKING AND JS VALIDATION	
	$maximumBookings = getMaxBooking($serviceID);
	$minimumBookings = getMinBooking($serviceID);
	$bookingTexts = getBookingText($serviceID);
	$availebleSpaces = getServiceSettings($serviceID,'spaces_available');
	$fee = getServiceSettings($serviceID,'spot_price');
    
  
    $vikend = date('D', strtotime($date));
    if($vikend != 'Sat' && $vikend != 'Sun')
    {
    echo "<script type='text/javascript'>";
    echo "function myFunction() { document.getElementById('couponCode').value = 'vikend'; document.getElementById('couponCode').focus();}";
    echo "</script>";
    }
    ?>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
      console.log("ucitano");
      $('#imeSlavljenika').change(function()
      {
        var brojMenija = $('#imeSlavljenika').val();
        console.log(brojMenija);
        if(brojMenija == '2 iftarski meni' || brojMenija == '4 iftarski meni' || brojMenija == '5 iftarski meni')
        {
          document.getElementById('couponCode').value = 'meni';
          document.getElementById('couponCode').focus();
          console.log("if");
        }
        else if(brojMenija == '3 iftarski meni' || brojMenija == '6 iftarski meni' || brojMenija == '1 iftarski meni')
        {
          document.getElementById('couponCode').value = 'meni2';
          document.getElementById('couponCode').focus(); 
          console.log("else if");
        }
      });     
    });    
    </script>
    
    <?php
	###############################################################################################z#########################
		
	if(!empty($lb1) && $lb1=="yes"){
		$msg = "<div class='error_msg'> ".CAPTCHA_ERROR."; </div>";
	}
      //  header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
?>
<?php include "includes/header.php";?>
<?php include "includes/javascript.validation.php";?>

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
   <style type="text/css">
        #inline{width:100%;height:auto;display:flex;}
        .one,.two{width:50%;height:0px;}
        .thumbnail {
  max-width: 100%;
}



.lightbox {
	/** Default lightbox to hidden */
	display: none;

	/** Position and style */
	position: fixed;
	z-index: 999;
	width: 100%;
	height: 100%;
	text-align: center;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
}

.lightbox img {
	/** Pad the lightbox image */
	max-width: 90%;
	max-height: 80%;
	margin-top: 2%;
}

.lightbox:target {
	/** Remove default browser outline */
	outline: none;

	/** Unhide lightbox **/
	display: block;
}
        

 @media only screen and (max-width: 600px) {

 body
        {
            background-color: darkblue;
            background-image: none;
        }
        
.one
{
    margin-left: -25%;
}
.two
{
    display: none;
}

.desireTime
{
    font-size: 14px;
    height: 50px;
    padding-top: 2.5%;
}

.timeEvCont
{
    height: 90px;
}
 }

    </style>
</head>

<?php echo $msg; ?>
<style type="text/css">
    
    #coupon_conteiner
{
    opacity: 0;
}    
    
</style>
<body onload="myFunction();">



<div class="internal_booking_form" id="resize">

<form name="ff1" enctype="multipart/form-data" method="post" action="booking.processing.php" onsubmit="return checkForm();">  
<input type="hidden" value="<?php echo $date?>" name="date">
<input type="hidden" name="interval" value="<?php echo $int;?>" />
<input type="hidden" name="serviceID" value="<?php echo $serviceID;?>" />
 
    <?php if ($serviceID == 1) {?>
        <input type="hidden" name="discount" value="vikend" />
    <?php }else {?>
        <input type="hidden" name="discount" value="meni" />
    <?php } ?>
    <input type="hidden" name="discount" value="1" />

<input type="hidden" name="referrer" value="<?php echo $referrer;?>" />


 <div id="inline">
<div class="one"><a href="http://sunnyland.ba"><img src="images/sunnyLogo.png" height="117x" width="180px" href="http://sunnyland.ba" style="margin-left:200px;" ></a></div>

<div class="two"><p style="font-size:25px; color: #4c9d2a; font-family: system-ui; font-weight: bold; float:center;"><b><?php  echo _getDate(date(getOption("date_mode"),strtotime($date)))?> </br><?php echo AVAIL; ?></b></p></div>
</div>


   </br></br></br></br></br></br>




<p class="desireTime"> <?php echo SEL_TIME. " ". $bookingTexts[0]?> <?php echo $bookingTexts[1]?></p>

<?php echo $availability?>

 <?php      $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			  $servis = substr($actual_link, 58, 11);
			 
			  $num1 = rand(1,9);
			  $num2 = rand(1,9);
			  $sum = $num1 + $num2;
			  ?>
		
<div class="container" style="background-color: #4c9d2aad;">
    <div></br></div>
  <div class="row">
      <div class="col-sm-3 ">
          </div>
        <div class="col-sm-3 " style="color: white;">
   <b>Ime i prezime (osobe koja rezervise)</b>
        </div>
        <div class="col-sm-1">
      <input type="text" name="name" id="name" value="<?php echo $name?>"  onchange="checkFieldBack(this)" style="text-align:left;"/>
        </div>
  </div>
  
<div class="row">
       <div class="col-sm-3 ">
          </div>
        <div class="col-sm-3 " style="color: white;">
   <b>E-mail</b>
        </div>
    <div class="col-sm-6">
      <input type="text" name="email" id="email" value="<?php echo $name?>"  onchange="checkFieldBack(this)"/>
        </div>
  </div>


<div class="row">
         <div class="col-sm-3 ">
          </div>
       <div class="col-sm-3 " style="color: white;">
   <b>Broj telefona</b>
        </div>
        <div class="col-sm-6"> 
      <input type="text" name="phone" id="phone" value="<?php echo $phone?>"  onchange="checkFieldBack(this)" onkeyup="noAlpha(this)" />
        </div>
  </div>

<div class="row">
         <div class="col-sm-3 ">
          </div>
       <div class="col-sm-3 " style="color: white;">
 <?php 
       
       if ($serviceID == 1){
           echo ' <b>Ime slavljenika:</b>';
       }
       else{
           echo ' <b>Broj menija</b>';

       }?>
        </div>
        <div class="col-sm-6"> 
        <?php
         if ($serviceID == 1){
           echo "<input type='text' name='imeSlavljenika' id='imeSlavljenika' value='$brojDjece'  onchange='checkFieldBack(this)' style='width:46%;'/>";
       }
       else{
           echo "<select type='text' name='imeSlavljenika' id='imeSlavljenika' />
        <option value='1 iftarski meni'>1. Iftarski meni</option>
   <option value='2 iftarski meni'>2. Iftarski meni</option>
   <option value='3 iftarski meni'>3. Iftarski meni</option>
   <option value='4 iftarski meni'>4. Iftarski meni</option>
    <option value='5 iftarski meni'>5. Iftarski meni</option>
     <option value='6 iftarski meni'>6. Iftarski meni</option>
</select>";
           
           
  
       }?>
      
        </div>
        
        
        
  </div>
  </br>
  <div class="row" >
         <div class="col-sm-3 "></br></br>
          </div>
       <div class="col-sm-3 " style="color: white;">
   <?php if ($serviceID == 1){
           echo ' <b>Broj djece na rodjendanu:</b>';
       }
       else{
           echo ' <b>Broj osoba:</b>';
       }?>
        </div>
        <div class="col-sm-6"> 
        <input type="text" name="brojDjece" id="brojDjece" value="<?php echo $qty?>"  onchange="checkFieldBack(this)"/>
        </div>
  </div>
  
  <div class="row">
         <div class="col-sm-3 ">
          </div>
       <div class="col-sm-3 " style="color: white;">
   <b> Dodatna napomena:</b>
        </div>
        <div class="col-sm-6"> 
        <textarea name="comments" id="comments" cols="35" rows="3" onchange="checkFieldBack(this)" style="width: 243px;"><?php echo $comments?></textarea>
        </div>
  </div>
  
  <div class="row"></br></br></div>
  <div class="row">
         
         <div class="col-sm-2 ">
             <?php if ($serviceID == 1){
            echo "<a href='images/rodjendan.jpg' target='_blank'>
<img src='images/rodjendan.jpg' height='300px'></a>";
       }
       else{
          



           echo "<center><a href='#img1'><img src='images/thumb1.jpg' height='200px' class='thumbnail'></a> </br> <p style='font-weight: bold; color: white; text-align: center;'>1. Ramazanski meni</p></center>
           <a href='#_' class='lightbox' id='img1'><img src='images/iftar1.jpg'></a>";
       }?>
          </div>
          <div class="col-sm-2 ">
               <?php if ($serviceID == 1){
           
       }
       else{
            echo "<center><a href='#img2'><img src='images/thumb2.jpg' height='200px' class='thumbnail'></a> </br> <p style='font-weight: bold; color: white; text-align: center;'>2. Ramazanski meni</p></center>
           <a href='#_' class='lightbox' id='img2'><img src='images/iftar2.jpg'></a>";
       }?>
          </div>
          <div class="col-sm-2 ">
               <?php if ($serviceID == 1){
            
       }
       else{
           echo "<center><a href='#img3'><img src='images/thumb3.jpg' height='200px' class='thumbnail'></a> </br> <p style='font-weight: bold; color: white; text-align: center;'>3. Ramazanski meni</p></center>
           <a href='#_' class='lightbox' id='img3'><img src='images/iftar3.jpg'></a>";
       }?>
          </div>
          <div class="col-sm-2 ">
               <?php if ($serviceID == 1){
          
       }
       else{
            echo "<center><a href='#img4'><img src='images/thumb4.jpg' height='200px' class='thumbnail'></a> </br> <p style='font-weight: bold; color: white; text-align: center;'>4. Ramazanski meni</p></center>
           <a href='#_' class='lightbox' id='img4'><img src='images/iftar4.jpg'></a>";
       }?>
          </div>
          <div class="col-sm-2 ">
               <?php if ($serviceID == 1){
          
       }
       else{
        echo "<center><a href='#img5'><img src='images/thumb5.jpg' height='200px' class='thumbnail'></a> </br> <p style='font-weight: bold; color: white; text-align: center;'>5. Ramazanski meni</p></center>
           <a href='#_' class='lightbox' id='img5'><img src='images/iftar5.jpg'></a>";
       }?>
          </div>
          <div class="col-sm-2 ">
               <?php if ($serviceID == 1){
          
       }
       else{
           echo "<center><a href='#img6'><img src='images/thumb6.jpg' height='200px' class='thumbnail'></a> </br> <p style='font-weight: bold; color: white; text-align: center;'>6. Ramazanski meni</p></center>
           <a href='#_' class='lightbox' id='img6'><img src='images/iftar6.jpg'></a>";
       }?>
          </div>
       
  </div>
 
 <div class="col-md-3">
          	<div class="captchaCont" >
							    <span style="color: white; font-weight: bold;"><?php echo $num1." + ".$num2." = "?></span>
							<input type="text" name="captcha" id="captcha"  value="" onchange="checkFieldBack(this);"/>
							</div>
        </div>
        <div class="col-md-3" >
           
            <input type="image" src="images/reserve_btn.jpg" style="margin-top: 28px;" />
							<input type="hidden" name="captcha_sum" value="<?php echo md5($sum);?>" />
                           </br> </br> </br>
        </div> 
 
  
  <div class="col-sm-3 ">
      </br>
          </div>
</div>
    			
		<!--
		
		
		<div class="book_form">
		    <div class="container">
		        
		        <div class="row" style="width: 650px;">
		            <div class="col-md-12">
		                Ime i prezime (osobe koja rezervise)
		            </div>
		        </div>
		        
		        <div class="row" style="width:650px;">
		            <div class="col-md-12" style="width:650px;">
		                <input type="text" name="name" id="name" value="<?php echo $name?>"  onchange="checkFieldBack(this)"/>
		            </div>
		        </div>
		        
		        
  <div class="row" style="width:650px;">
      <div class="col-md-6">
          <label>E-mail</label>
      </div>
      <div class="col-md-6">
          <label>Broj telefona</label>
      </div>
    
    <div class="row" style="width:650px;">
        
        <div class="col-md-6">
            <input type="text" name="email" id="email" value="<?php echo $name?>"  onchange="checkFieldBack(this)"/>
        </div>
        <div class="col-md-6">
            <input type="text" name="phone" id="phone" value="<?php echo $phone?>"  onchange="checkFieldBack(this)" onkeyup="noAlpha(this)"/>
        </div>
    </div>
    
     <div class="row" style="width:650px;">
   <div class="col-md-6">
       <?php 
       
       if ($serviceID == 1){
           echo ' <label>Ime slavljenika:</label>';
       }
       else{
           echo ' <label>Broj menija</label>';
       }?>
          
        </div>
        <div class="col-md-6">
           <?php if ($serviceID == 1){
           echo ' <label>Broj djece na rodjendanu:</label>';
       }
       else{
           echo ' <label>Broj osoba:</label>';
       }?>
        </div>
    </div>
    
      <div class="row" style="width:650px;">
   <div class="col-md-6">
             <input type="text" name="imeSlavljenika" id="imeSlavljenika" value="<?php echo $brojDjece?>"  onchange="checkFieldBack(this)"/>
        </div>
        <div class="col-md-6">
            <input type="text" name="brojDjece" id="brojDjece" value="<?php echo $brojDjece?>"  onchange="checkFieldBack(this)"/>
        </div>
    </div>
    
    <div class="row" style="width:650px;">
   <div class="col-md-9">
            <label>Dodatna napomena:</label>
        </div>
        <div class="col-md-3">
            <label>PDF:</label>
        </div>
    </div>
  
  
  <div class="col-md-9">
             <textarea name="comments" id="comments" cols="60" rows="5" onchange="checkFieldBack(this)"><?php echo $comments?></textarea>
        </div>
        <div class="col-md-3">
            
             <?php if ($serviceID == 1){
            echo "<a href='images/rodjendan.jpg' target='_blank'>
<img src='images/rodjendan.jpg' height='300px'></a>";
       }
       else{
           echo "<a href='images/iftar1.jpg' target='_blank'><img src='images/iftar1.jpg' height='300px'></a>";
       }?>
            
            
        </div>
    </div>
	
    
    <div class="row" style="width:650px;">
   <div class="col-md-3">
          	<div class="captchaCont">
							    <span><?php echo $num1." + ".$num2." = "?></span>
							<input type="text" name="captcha" id="captcha"  value="" onchange="checkFieldBack(this);"/>
							</div>
        </div>
        <div class="col-md-3">
           
            <input type="image" src="images/reserve_btn.jpg" style="margin-top: 28px;" />
							<input type="hidden" name="captcha_sum" value="<?php echo md5($sum);?>" />
                           
        </div>
    </div>
    
    
   
</br>
		    
		    
		            	
						
			</div>
-->
              </form></body>
<script>
jQuery(function(){
    jQuery("#qty").spinner({min:1,max:<?php echo ($availebleSpaces)?>});
})
document.getElementById("feeValue").innerHTML="newtext";
$('#qty').change(function() {
    $('#brojDjece').val($(this).val()+" osoba/e");
});





</script>		  

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php include "includes/footer.php";?>

