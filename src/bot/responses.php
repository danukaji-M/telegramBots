<?php

namespace App\Responses;
use App\Database\Database;

class Response
{
    public function responsMsg($chatId, $msg){
        if($msg == "Start"){
            return "Welcome to the Movie Bot! Before Join Our Other Channels";
        }else if($msg == "Help"){
            return "This is a Movie Bot. You can search for movies by title"; 
        }else{
            $database = new Database();
            $data = $database->filmJsonSearch($msg);
            return $data;
        }
    }
}