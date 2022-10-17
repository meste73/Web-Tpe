<?php

    class AuthController extends MainController {

        function login(){
            if(!isset($this->name)){
                //if email exists, get values.
                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                }
    
                //get user by email.
                if(isset($email)){
                    $user = $this->authModel->getUser($email);
        
                    //check if user and password are correct.
                    if ($user && password_verify($password, $user->password)) {
                        $_SESSION['name'] = $user->userName;
                        $_SESSION['email'] = $user->email;
                        header('Location: ' . BASE_URL);
                    } else {
                        $this->userView->showError("Usuario o contraseña incorrectos", $this->name);
                    }
                } else {
                    $this->userView->showError("Usuario o contraseña incorrectos", $this->name);
                }
            } else {
                $this->userView->showError("Admin ya se encuentra logueado");
            }
        }

        function logout() {
            session_destroy();
            header('Location: ' . BASE_URL);
        }
    }
