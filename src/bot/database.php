<?php
namespace App\Database; 
class Database{
    //insert Data to json file
    public function filmJsonInsert($data){
        $json = json_encode($data);
        file_put_contents('../database/films.json', $json);
    }
    //Read Data from json file
    public function filmJsonRead(){
        $json = file_get_contents('../database/films.json');
        return json_decode($json, true);
    }
    //Update Data from json file
    public function filmJsonUpdate($data){
        $json = json_encode($data);
        file_put_contents('../database/films.json', $json);
    }
    //Delete Data from json file
    public function filmJsonDelete($data){
        $json = json_encode($data);
        file_put_contents('../database/films.json', $json);
    }
    //Search Data from json file
    public function filmJsonSearch($data){
        $json = file_get_contents('../database/films.json');
        $films = json_decode($json, true);
        $result = [];
        foreach($films as $film){
            if($film['title'] == $data){
                $result[] = $film;
            }
        }
        return $result;
    }
    //Json Data Structure
    public function dataStucture($id, $title, $name, $year, $type, $adultOrNot, $documentLink){
        return [
            'id' => $id,
            'title' => $title,
            'name' => $name,
            'year' => $year,
            'type' => $type,
            'adultOrNot' => $adultOrNot,
            'documentLink' => $documentLink
        ];
    }
    public function userDataInsert($data){
        $json = json_encode($data);
        file_put_contents('../database/users.json', $json);
    }   
}