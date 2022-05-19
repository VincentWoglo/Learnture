<?php

    namespace Src\Controller;

    class GetBrowser{
        function GetBrowserClient(){
            $UserAgent = $_SERVER["HTTP_USER_AGENT"];
            $BrowserNotDetected = "N/A";
            //https://www.w3docs.com/snippets/php/browser-detection.html
            if(strpos($UserAgent, "OPR") !== FALSE){
                return "Opera";
            }
            elseif(strpos($UserAgent, "Chrome") !== FALSE){
                return "Chrome";
            }
            elseif(strpos($UserAgent, "Firefox") !== FALSE){
                return "Firefox";
            }
            elseif(strpos($UserAgent, "IE") !== FALSE){
                return "Internet Explorer";
            }
            elseif(strpos($UserAgent, "Edge") !== FALSE){
                return "Edge";
            }
            else{
                return $BrowserNotDetected;
            }
        }

        function GetBrowserLang(){

            //Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        }
    }
?>