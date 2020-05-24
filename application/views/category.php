<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Categoría</th>
      <th scope="col">Descripción</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($categories as $category) {
      $template = "
          <tr>
            <td class='align-middle'>{$category->name_category}</td>
            <td class='align-middle'>{$category->description_category}</td>
            <td>
              <div class='row'>
                  <a class='btn btn-outline-primary btn-sm mx-1' href='{edit/$category->id_category}'><span class='align-middle material-icons'>edit</span></a>
                  <a class='btn btn-outline-danger btn-sm mx-1' href='{delete/$category->id_category}'><span class='align-middle material-icons'>delete</span></a>
              </div>
            </td>
          </tr>
        ";
      echo $template;
    }
    ?>

  </tbody>
</table>