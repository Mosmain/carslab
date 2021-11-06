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
};
//
//function createCar($brand_name, $color, $doors, $weight, $hp, $pdo){
//    $sql = ("INSERT INTO `cars`(`brand_name`, `color`, `doors`, `weight`, `hp`) VALUES(?,?,?,?,?)");
//    $query = $pdo->prepare($sql);
//    $query->execute([$brand_name, $color, $doors, $weight, $hp]);
//    $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
//  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//    <span aria-hidden="true">&times;</span>
//  </button>
//</div>';
//}
//
//function updateCar($edit_brand_name, $edit_color, $edit_doors, $edit_weight, $edit_hp, $get_id, $pdo) {
//    $sql = "UPDATE cars SET brand_name=?, color=?, doors=?, weight=?, hp=? WHERE id=?";
//    $query = $pdo->prepare($sql);
//    $query->execute([$edit_brand_name, $edit_color, $edit_doors, $edit_weight, $edit_hp, $get_id]);
//    header('Location: '. $_SERVER['HTTP_REFERER']);
//}
//
//function deleteCar($get_id, $pdo) {
//    $sql = "DELETE FROM cars WHERE id=?";
//    $query = $pdo->prepare($sql);
//    $query->execute([$get_id]);
//    header('Location: '. $_SERVER['HTTP_REFERER']);
//}
