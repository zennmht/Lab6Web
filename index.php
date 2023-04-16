<?php

require_once("class/Database.php");
require_once("template/header.php");
require_once("class/Form.php");

class Main
{
    private $konfig = [];
    public function __construct($namaModul)
    {
        $this->konfig = $namaModul;
    }
    public function x($namaUrl)
    {
        if (array_key_exists($namaUrl, $this->konfig)) {
            require($this->konfig[$namaUrl]);
        } else {
            require($this->konfig["home"]);
        }
    }
}

$url = [
    "home" => "module/home.php",
    "add" => "module/article/add.php",
    "update" => "module/article/update.php",
    "delete" => "module/article/delete.php",
    
    
];
$main = new Main($url);
$main->x(@$_REQUEST["mod"]);
require_once("template/footer.php");
