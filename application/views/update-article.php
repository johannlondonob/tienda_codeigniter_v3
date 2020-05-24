<?php
foreach ($article as $data) {
  $idItem = $data->id_item;
  $itemName = $data->item_name;
  $itemDescription = $data->item_description;
  $itemValue = $data->item_value;
  $idCategory = $data->id_category;
  $nameCategory = $data->name_category;
}
?>
<div class="container">
  <form class="needs-validation" action="<?= base_url('article/save') ?>" method="POST" novalidate>
    <input name="itemId" type="number" hidden value="<?= $idItem ?>">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="itemName">Nombre artículo</label>
        <input type="text" class="form-control shadow-sm" id="itemName" value="<?= $itemName ?>" required name="itemName">
      </div>
      <div class="col-md-6 mb-3">
        <label for="itemValue">Valor unidad</label>
        <input type="text" class="form-control shadow-sm" id="itemValue" required name="itemValue" value="<?= $itemValue ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="idCategory">Categoría</label>
        <select class="custom-select shadow-sm" id="idCategory" required name="idCategory">
          <option selected value="<?= $idCategory ?>"><?= $nameCategory ?></option>
          <?php foreach ($categories as $category) { ?>
            <option value="<?= $category->id_category ?>"> <?= $category->name_category ?> </option>
          <?php } ?>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="itemDescription">Descripción artículo</label>
        <textarea class="form-control shadow-sm" name="itemDescription" id="itemDescription" cols="30" rows="5" required> <?= $itemDescription ?></textarea>
      </div>
    </div>
    <button class="btn btn-outline-primary btn w-100 my-3 shadow-sm" type="submit">Guardar datos</button>
  </form>
</div>