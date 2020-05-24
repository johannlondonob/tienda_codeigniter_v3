<table class="table table-sm">
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

    <?php
    foreach ($articles as $article) {
      $template = "
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
      echo $template;
    }
    ?>

  </tbody>
</table>