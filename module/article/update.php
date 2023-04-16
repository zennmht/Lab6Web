<?php

$database = new Database();
$id = $_GET["id"];

if (isset($_POST['submit'])) {
    $data = [
        'nama_pemain' => $_POST['nama_pemain'],
        'club' => $_POST['club'],
        'nama_negara' => $_POST['nama_negara']
    ];
    $database->update("data_pemain", $data, "id=" . $id);
    header("location: home");
}

$data = $database->get("data_pemain", "where id=" . $id);

$form = new Form("", "submit");
$form->addField("nama_pemain", "Nama Pemain", $data["nama_pemain"]);
$form->addField("club", "Klub", $data["club"]);
$form->addField("nama_negara", "Nama Negara", $data["nama_negara"]);
$form->displayForm();
