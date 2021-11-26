<?php

include_once './controler.php';

$controler = new Controler();

$id = $_REQUEST['id'];

$delete = $controler->delete($id);

if ($delete) {
    header('Location: records.php');
}
