<?php

$database = new Database();
$id = $_GET["id"];
echo $id;

if (isset($_GET["id"])) {
    $database->delete("data_pemain", "where id=" . $id);
    header("Location: home");
}
