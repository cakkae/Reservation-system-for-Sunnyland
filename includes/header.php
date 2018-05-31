<?php ob_end_flush();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width" />
    <meta name="format-detection" content="telephone=no">
<title>Kalendar - Sunnyland</title>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./css/bs-admin.css" type="text/css" />
<link href="css/dd.css" rel="stylesheet" type="text/css"/>
<link href="css/dropdown-skins.css" rel="stylesheet" type="text/css"/>
<?php if(!empty($canonical)){?>
    <link rel="canonical" href="<?php echo $canonical?>"/>
<?php }?>


<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="js/jquery.dd.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/wp.js"></script>

<link type="text/css" href="./css/redmond/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="./js/jquery-ui-1.8.20.custom.min.js"></script>


<link type="text/css" media="screen" rel="stylesheet" href="./css/colorbox.css" />
<script type="text/javascript" src="./js/jquery.colorbox.js"></script>
<script type="text/javascript" src="./js/spinner.js"></script>

<?php bw_do_action("bw_header_includes"); ?>
<script>
    $(function(){
        try{
            if($("#index").length){
                top.resizeFrame($('#index').height()+200,1100);
            }else{
                top.resizeFrame($('#resize').height()+200,1100);
            }
        
        }catch(e){}
        
            
        
    }
)

</script>
</head>
    <body style="height: auto"  itemscope itemtype="http://schema.org/Product">
        <div id="mess">

        </div>
        <?php if(getOption('language_switch') && count(getLangNaw())>1){?>
        <div class="languageContainer">
            <?php
                if(strpos($_SERVER['SCRIPT_FILENAME'],'processing')===false){

                    foreach(getLangNaw() as $k=>$v){
                        $_GET['action'] = 'changelang';
                        $_GET['lang'] = $k;
                        $get = http_build_query($_GET);
                        echo '<a href="?'.$get.'" '.($_SESSION['curr_lang']==$k?'class="current"':'').'><img src="//'.$v.'"/></a>';
                    }
                }
            ?>

        </div>
        <?php }?>
<noscript>
    <div class="js_error">Please enable JavaScript or upgrade to better <a href="http://www.mozilla.com/en-US/firefox/upgrade.html" target="_blank">browser</a></div>
</noscript>