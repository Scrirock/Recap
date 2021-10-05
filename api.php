<?php
    include "./DB.php";

    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === "GET"){
        $block = [getSection(), getUl(), getDd()];
        echo json_encode($block);
    }

    function getSection(){
        $response = [];

        $request = DB::getRepresentative()->prepare("SELECT * FROM section");
        $request->execute();
        $sections = $request->fetchAll();

        foreach($sections as $section) {
            $response[] = [
                'titleS' => $section["title"],
                'contentS' => $section["content"],
            ];
        }

        return $response;
    }

    function getUl(){
        $response = [];

        $request = DB::getRepresentative()->prepare("SELECT * FROM ul");
        $request->execute();
        $uls = $request->fetchAll();

        foreach($uls as $ul) {
            $response[] = [
                'contentU' => $ul["content"],
            ];
        }

        return $response;
    }

    function getDd(){
        $response = [];

        $request = DB::getRepresentative()->prepare("SELECT * FROM dd");
        $request->execute();
        $dds = $request->fetchAll();

        foreach($dds as $dd) {
            $response[] = [
                'titleD' => $dd["title"],
                'contentD' => $dd["content"],
            ];
        }

        return $response;
    }
