<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Número de identificación</th>
      <th scope="col">Cliente</th>
      <th scope="col">Dirección cliente</th>
      <th scope="col">Teléfono móvil</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($customers as $customer) {
      $template = "
          <tr>
            <td class='align-middle'>{$customer->id_customer}</td>
            <td class='align-middle'>{$customer->customer_identification}</td>
            <td class='align-middle'>{$customer->customer_name}</td>
            <td class='align-middle'>{$customer->customer_address}</td>
            <td class='align-middle'>{$customer->customer_mobile}</td>
            <td>
              <div class='row'>
                <div class='col'>
                  <button class='btn btn-primary'>Editar</button>
                </div>
                <div class='col'>
                  <button class='btn btn-primary'>eliminar</button>
                </div>
              </div>
            </td>
          </tr>
        ";
      echo $template;
    }
    ?>

  </tbody>
</table>