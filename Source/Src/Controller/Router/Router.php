<?php
    class Router{
        
        function __construct(){
            $Routes = [];
        }
        function View($Path, $Callback){
            $this->Routes[ $Path ] = $Callback;
        }
        function Dispatch($Path){
            $Callback = $this->Routes[ $Path ];
    
            echo call_user_func($Callback);
        }
    }
?>