<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'id' => $_POST['id'],
        'nama_pemain' => $_POST['nama_pemain'],
        'club' => $_POST['club'],
        'nama_negara' => $_POST['nama_negara']
    ];
    $database->insert("data_pemain", $data);
    header("location:home");
}

$form = new Form("", "submit");
$form->addField("id", "Id");
$form->addField("nama_pemain", "Name Player");
$form->addField("club", "Club");
$form->addField("nama_negara", "Nationality");
$form->displayForm();
