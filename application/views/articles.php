<?php
$template = "";
$topButtons = "";
if ($active == 1) {
  $topButtons = '
        <div class="row mb-3">
          <a href="' . base_url('article') . '" class="btn btn-outline-success btn-sm mx-2"> Crear un artículo</a>
          <a href="' . base_url('article/inactives') . '" class="btn btn-outline-warning btn-sm mx-2"> Ver artículos inactivos</a>
        </div>
      ';
  foreach ($articles as $article) {
    $template .= "
          <tr>
            <td class='align-middle'>{$article->item_name}</td>
            <td class='align-middle'>{$article->item_description}</td>
            <td class='align-middle'>{$article->item_value}</td>
            <td class='align-middle'>{$article->name_category}</td>
            <td class='align-middle'>
              <div class='row'>
                <a class='btn btn-outline-primary btn-sm mx-1' href='edit?id=$article->id_item'><span class='align-middle material-icons'>edit</span></a>
                <a class='btn btn-outline-danger btn-sm mx-1' href='delete?id=$article->id_item'><span class='align-middle material-icons'>delete</span></a>
              </div>
            </td>
          </tr>
        ";
  }
} else {
  foreach ($articles as $article) {
    $topButtons = '
        <div class="row mb-3">
          <a href="' . base_url('article') . '" class="btn btn-outline-success btn-sm mx-2"> Crear un artículo</a>
          <a href="' . base_url('article/list') . '" class="btn btn-outline-warning btn-sm mx-2"> Ver artículos activos</a>
        </div>
      ';
    $template .= "
          <tr>
            <td class='align-middle'>{$article->item_name}</td>
            <td class='align-middle'>{$article->item_description}</td>
            <td class='align-middle'>{$article->item_value}</td>
            <td class='align-middle'>{$article->name_category}</td>
            <td class='align-middle'>
              <div class='row'>
                <a class='btn btn-outline-primary btn-sm mx-1' href='restore?id=$article->id_item'><span class='align-middle material-icons'>restore</span></a>
                <a class='btn btn-outline-danger btn-sm mx-1' href='delete_permanent?id=$article->id_item'><span class='align-middle material-icons'>delete_forever</span></a>
              </div>
            </td>
          </tr>
        ";
  }
}
?>

<table class="table table-sm">
  <?= $topButtons ?>
  <caption> Lista de artículos </caption>
  <thead>
    <tr>
      <th scope="col">Artículo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Valor</th>
      <th scope="col">Categoría</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?= $template ?>
  </tbody>
</table>