<?php
						error_reporting(E_ALL ^ E_NOTICE);
						//EDIT ONLY FOLLOWING 5 LINES
						$db_host = 'localhost'; //hostname
						$db_user = 'liliumde_sunny'; // username
						$db_password = 'sifra1234'; // password
						$db_name = 'liliumde_sunnyland'; //database name
						$baseDir = '/sunnyland/'; // Don't change this variable if you will be using booking in the ROOT of the username. 
						// otherwise - change to $baseDir = "/directoryName/"; WITH TRAILING SLASH!
						
						$demo=false;
						
						if(!empty($db_host) && !empty($db_user) && !empty($db_password) && !empty($db_name)){
							$link = @mysql_connect($db_host, $db_user, $db_password) or die("1. Open dbconnect.php and edit mysql variables. <br/> 2. Run install.php ");
							@mysql_select_db($db_name);
						 	mysql_query("SET NAMES utf8") or die("err: " . mysql_error());
						} else { echo "Application not installed! <a href='install.php'>Click here</a> to proceed with installation."; exit(); }
						
					?>