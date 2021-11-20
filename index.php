<?php
include 'func.php';
require_once 'config.php';

$db = new DB();
$tblName = 'cars';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Машинки ООП</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-1">
				<?=$success ?>
				<button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-plus"></i></button>
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
							<th>№</th>
							<th>Бренд</th>
							<th>Цвет</th>
							<th>Кол-во дверей</th>
							<th>Вес</th>
							<th>ЛС</th>
							<th>Действия</th>
						</tr>
						<?php
                            $key = $db->getRows($tblName, array('order_by'=>'id DESC'));
                            foreach ($key as $cars) {
                        ?>
						<tr>
							<td><?=$cars['id'] ?></td>
							<td><?=$cars['brand_name'] ?></td>
							<td><?=$cars['color'] ?></td>
							<td><?=$cars['doors'] ?></td>
							<td><?=$cars['weight'] ?></td>
							<td><?=$cars['hp'] ?></td>
							<td>
								<a href="?edit=<?=$cars['id'] ?>" class="btn btn-success btn-m" data-toggle="modal" data-target="#editModal<?=$cars['id'] ?>"><i class="fa fa-edit"></i></a>
								<a href="?delete=<?=$cars['id'] ?>" class="btn btn-danger btn-m" data-toggle="modal" data-target="#deleteModal<?=$cars['id'] ?>"><i class="fa fa-trash"></i></a>
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow dark add-new">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить автомобиль</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
                <div class="form-group">
                    <label class="form-label">Бренд</label>
                    <input type="text" class="form-control" name="brand_name" placeholder="Бренд" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Цвет</label>
                    <input type="text" class="form-control" name="color" placeholder="Цвет" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Кол-во дверей</label>
                    <input type="text" class="form-control" name="doors" placeholder="Кол-во дверей" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Вес</label>
                    <input type="text" class="form-control" name="weight" value placeholder="Вес" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Лошадиные силы</label>
                    <input type="text" class="form-control" name="hp" placeholder="Лошадиных сил" required>
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
</body>
<?php
include 'func.php';
require_once 'config.php';

$db = new DB();
$tblName = 'cars';
?>
</html>