<?php 

$filecontents = file_get_contents('README.md');

$words = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);

print_r($words);



$handle = @fopen("README.md", "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle);
        $exploded_data = explode(" ",$buffer);
    }
    fclose($handle);
    print_r($exploded_data);
}

class parser {
    private $openDict = array("#" => "<h1>");
    private $closeDict = array("#" => "</h1>");


    function getOpenToken($str){
        
    }
}