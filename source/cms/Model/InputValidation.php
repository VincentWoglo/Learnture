<?php
    class InputValidation{
        function Validate( $Validate ){
            $Validate = trim($Validate);
            $Validate = stripslashes($Validate);
            $Validate = htmlspecialchars($Validate, ENT_QUOTES, 'UTF-8');
            //$Validate = urlencode($Validate);
            return $Validate;
        }
    }
?>