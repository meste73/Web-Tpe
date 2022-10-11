<?php

    class AuthController extends MainController {

        function login(){
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
            }
            $user = $this->authModel->getUser($email);
            if ($user && password_verify($password, $user->password)) {
                $_SESSION['name'] = $user->userName;
                $_SESSION['email'] = $user->email;
                header('Location: ' . BASE_URL);
            } else {
                $this->view->showError("Usuario o contraseña incorrectos", $this->name);
            }
        }

        function logout() {
            session_destroy();
            header('Location: ' . BASE_URL);
        }
    }
