<?php
    require_once("InputValidation.php");


    class Login extends Connection
    {
        
        function __contruct(){

        }

        function Signin(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $Validate = new InputValidation();
                $conn = $this->connect();

                $Email = $Validate->Validate($_REQUEST['email__input']);
                $Password = $Validate->Validate($_REQUEST['password__input']);
                $error = array();

                if(empty($Email)){
                    array_push($error, "Please Check your email");
                }
                if(empty($Password)){
                    array_push($error, "Please Check your password");
                }

                $data = ['email'=>$Email
                ];
                $fetch = 'SELECT * FROM admin WHERE email = :email';
                $execute = $conn->prepare($fetch);
                $execute->execute($data);
                $results = $execute->fetch();
                $count = $execute->rowCount();

                //Does the user exist
                if($count <= 0){
                    array_push($error, "Please use an existing user");
                }
                else if($Email === $results["email"] && $Password !== $results["password"]){
                            array_push($error, "Your password is incorrect, please try again");
                }
                else {
                        if($Email === $results["email"] && $Password === $results["password"]){
                        echo "correct";
                        session_start();
                        session_set_cookie_params(time()*2,'/','localhost',false,true);
                       
                        $_SESSION['active_user'] = $results["id"];
                        if($_SESSION['active_user']){
                            header('Location: https://'.$_SERVER['HTTP_HOST']. '/Learnture/Source/cms/View/index.php');
                        }
                        //add session
                        //add session time
                        //destroy session if user exit browser (Think twice on this)
                        }
                }


                foreach ($error as $key) {
                    echo "<div class='error'>$key</div>";
                }
                //check number of login attempts
                //check if email and password character are with their requirements and formats
            }
        }

        function Signout(){
            $logout = $_REQUEST['logout'];
            if(isset($_REQUEST['logout'])){
                unset($_SESSION['active_user']);
                if(!$_SESSION['active_user']){
                    
                header('Location: https://'.$_SERVER['HTTP_HOST']. '/Learnture/Source/cms/View/Login.php');
                }
            }
        }
    }
    