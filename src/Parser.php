<?php 
namespace App;

class Parser {

    protected $version = "parser.0.0.1";
    protected $openDict = array("#" => "<h1>");
    protected $closeDict = array("#" => "</h1>");


    public static function getversion(){
        $p = new Parser();
        return $p->version;
    }

    public static function getOpenToken($token){
        $p = new Parser();
        return $p->openDict[$token];
    }

    public static function getCloseToken($token){

        $p = new Parser();

        return $p->closeDict[$token];
    }


    public static function isValidToken($token){
        $p = new Parser();
        return  array_key_exists($token ,$p->openDict);

    }
}