<?php 
namespace App;

use PHPUnit\Runner\Exception;

class Parser {

    protected $version = "parser.0.0.1";
    public $file;
    public $words =[];

    protected $openDict = array(
        "#" => "<h1>",
        "##" => "<h2>"
    );

    protected $closeDict = array(
        "#" => "</h1>",
        "##" => "</h2>"
    );


    function __construct($path) {
        try{

            $this->file = @file_get_contents($path);
            $this->words  = preg_split('/[\s]+/', $this->file, -1, PREG_SPLIT_NO_EMPTY);

        }catch(Exception $e){

        }
    }

    public  function getversion(){

        return $this->version;
    }

    public function getOpenToken($token){

        return $this->openDict[$token];
    }


    public  function getCloseToken($token){

        return $this->closeDict[$token];
    }


    public  function isValidToken($token){

        return  array_key_exists($token ,$this->openDict);

    }

    public function getWords(){
        return $this->words;
    }

    public  function CountTokens(){
        //$this->loadFileToParse($path);
        $words = preg_split('/[\s]+/', $this->file, -1, PREG_SPLIT_NO_EMPTY);
        return count($words);
    }
}