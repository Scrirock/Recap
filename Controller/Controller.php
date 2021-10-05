<?php


class Controller{

    /**
     * Check the user's connexion and role
     * @param $fields
     */
    public function connexion($fields){
        if (isset($fields['name'], $fields['password'])){
            $name = (new DB)->sanitize($fields['name']);
            $password = (new DB)->sanitize($fields['password']);

            $checkAccount = (new Manager)->checkUser($name, $password);
            if ($checkAccount){
                session_start();
                $_SESSION["role"] = "admin";
                $_SESSION["name"] = $name;
                header("Location: /index.php");
            }
            else{
                session_start();
                $_SESSION["error"] = "Mot de passe ou Pseudo incorrect";
                header("Location: /connection.php");
            }
        }
    }

}