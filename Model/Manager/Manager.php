<?php

include "./DB.php";

class Manager{

    private static $manager = null;

    /**
     * @return self
     */
    public static function getManager(): self {
        if(is_null(self::$manager)) {
            self::$manager = new self();
        }
        return self::$manager;
    }

    /**
     * Return true if the user exist and the password is correct
     * @param $name
     * @param $password
     * @return bool
     */
    public function checkUser($name, $password): bool{
        $request = DB::getRepresentative()->prepare("SELECT * FROM user WHERE name = :name");
        $request->bindValue(':name', $name);

        if($request->execute()) {
            $userData = $request->fetch();
            if(password_verify($password, $userData["password"])) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    public function addSection($fields){
        if (isset($fields["titleS"], $fields["contentS"])){
            $title = (new DB)->sanitize($fields['titleS']);
            $content = (new DB)->sanitize($fields['contentS']);

            $request = DB::getRepresentative()->prepare("
            INSERT INTO section (title, content)
                VALUES (:title, :content)
            ");

            $request->bindParam(":title", $title);
            $request->bindParam(":content", $content);

            if ($request->execute()){
                header("Location: /mySkill.php");
            }
            else{
                header("Location: /admin.php");
            }
        }
    }

    public function addUl($fields){
        if (isset($fields["contentU"])){
            $content = (new DB)->sanitize($fields['contentU']);

            $request = DB::getRepresentative()->prepare("
            INSERT INTO ul (content)
                VALUES (:content)
            ");

            $request->bindParam(":content", $content);

            if ($request->execute()){
                header("Location: /");
            }
            else{
                header("Location: /admin.php");
            }
        }
    }

    public function addDl($fields){
        if (isset($fields["titleD"], $fields["contentD"])){
            $title = (new DB)->sanitize($fields['titleD']);
            $content = (new DB)->sanitize($fields['contentD']);

            $request = DB::getRepresentative()->prepare("
            INSERT INTO dd (title, content)
                VALUES (:title, :content)
            ");

            $request->bindParam(":title", $title);
            $request->bindParam(":content", $content);

            if ($request->execute()){
                header("Location: /");
            }
            else{
                header("Location: /admin.php");
            }
        }
    }

}