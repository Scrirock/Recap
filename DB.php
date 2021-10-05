<?php

class DB {
    private static $representativeDb = null;


    public function __construct(){
        $user = 'root';
        $password = '';
        $database = 'cvrecap';

        try {
            self::$representativeDb = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $user, $password);
            self::$representativeDb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$representativeDb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Make a safe string
     * @param $data
     * @return string
     */
    public function sanitize($data): string{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);

        return $data;
    }

    /**
     * Return only one PDO  instance through the whole project.
     * @return PDO|null
     */
    public static function getRepresentative(): ?PDO {
        if(null === self::$representativeDb) {
            new self();
        }
        return self::$representativeDb;
    }

    /**
     * Prevent to clone the object
     */
    public function __clone(){}
}
