<?php
//parent class for bots
class BotTemplate{
    protected $token;
    public function __construct($token){
        $this->token = $token;
    }
}