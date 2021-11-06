<?php
require_once 'config.php';
$db = new DB();
$tblName = 'cars';

// Create
if (isset($_POST['submit'])) {
    $carData = array(
        'brand_name' => $_POST['brand_name'],
        'color' => $_POST['color'],
        'doors' => $_POST['doors'],
        'weight' => $_POST['weight'],
        'hp' => $_POST['hp']
    );
    $db->insert($tblName, $carData);
}

// Update
if (isset($_POST['edit-submit'])) {
    $carData = array(
        'brand_name' => $_POST['edit_brand_name'],
        'color' => $_POST['edit_color'],
        'doors' => $_POST['edit_doors'],
        'weight' => $_POST['edit_weight'],
        'hp' => $_POST['edit_hp']
    );
    $condition = array('id' => $_GET['id']);
    $update = $db->update($tblName,$carData,$condition);
};

// DELETE
if (isset($_POST['delete_submit'])) {
    $condition = array('id' => $_GET['id']);
    $db->delete($tblName, $condition);
}
