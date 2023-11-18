<?php
include ("./session.php");

$addr1=$_SERVER["PHP_SELF"];
$addr2=$_SERVER["HTTP_REFERER"];


if ( ! isset($_SESSION['login']))   //is not logged
 {

    if ($_SERVER["REQUEST_METHOD"]==="POST")
       {
         if (isset ($_POST["username"]))
           {
             if (isset ($_POST["password"]))
                {

                   if ( ($_POST["username"]==="user")&&( $_POST["password"]==="1")  )
                      {
                        //checking is good. Activate user
                        $_SESSION['login']=htmlspecialchars(addslashes($_POST["username"]));
                        $_SESSION['wrong_pass']="off";
                        session_regenerate_id();
			header ("Location: $addr2");

                      }
                   else {$_SESSION['wrong_pass']="on"; header ("Location: $addr2");  } // wrong login/pass

                }
             else {    die;     //  "no password";
                    }
           
 
           }
         else {
                   die;     //  "no username";
               } 


       }
    else {  
               die;   //  "wrong method";
         }

 }
else {header ("Location: $addr2");}  // already logged  





?>