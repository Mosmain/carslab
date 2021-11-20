<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$cars['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$cars['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$cars['id'] ?>" method="post">
        	<div class="form-group">
                <label class="form-label">Бренд</label>
        		<input type="text" class="form-control" name="edit_brand_name" value="<?=$cars['brand_name'] ?>" placeholder="Бренд" required>
        	</div>
        	<div class="form-group">
                <label class="form-label">Цвет</label>
        		<input type="text" class="form-control" name="edit_color" value="<?=$cars['color'] ?>" placeholder="Цвет" required>
        	</div>
        	<div class="form-group">
                <label class="form-label">Кол-во дверей</label>
        		<input type="number" class="form-control" name="edit_doors" value="<?=$cars['doors'] ?>" placeholder="Кол-во дверей" required>
        	</div>
            <div class="form-group">
                <label class="form-label">Вес</label>
                <input type="number" class="form-control" name="edit_weight" value="<?=$cars['weight'] ?>" placeholder="Вес" required>
            </div>
            <div class="form-group">
                <label class="form-label">Лошадиные силы</label>
                <input type="number" class="form-control" name="edit_hp" value="<?=$cars['hp'] ?>" placeholder="Лошадиных сил" required>
            </div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$cars['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$cars['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$cars['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
