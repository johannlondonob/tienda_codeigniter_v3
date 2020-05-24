    <?php
    $template = "";
    $topButtons = "";
    if ($active == 1) {
      $topButtons = '
        <div class="row mb-3">
          <a href="' . base_url('customer') . '" class="btn btn-outline-success btn-sm mx-2"> Crear un cliente</a>
          <a href="' . base_url('customer/inactives') . '" class="btn btn-outline-warning btn-sm mx-2"> Ver clientes inactivos</a>
        </div>
      ';
      foreach ($customers as $customer) {
        $template .= "
          <tr>
            <td class='align-middle'>{$customer->customer_identification}</td>
            <td class='align-middle'>{$customer->customer_name}</td>
            <td class='align-middle'>{$customer->customer_address}</td>
            <td class='align-middle'>{$customer->customer_mobile}</td>
            <td>
              <div class='row text-white'>
                  <a class='btn btn-outline-primary btn-sm mx-1' href='edit?id=$customer->id_customer'><span class='align-middle material-icons'>edit</span></a>
                  <a class='btn btn-outline-danger btn-sm mx-1' href='delete?id=$customer->id_customer'><span class='align-middle material-icons'>delete</span></a>
              </div>
            </td>
          </tr>
        ";
      }
    } else {
      $topButtons = '
        <div class="row mb-3">
          <a href="' . base_url('customer') . '" class="btn btn-outline-success btn-sm mx-2"> Crear un cliente</a>
          <a href="' . base_url('customer/list') . '" class="btn btn-outline-warning btn-sm mx-2"> Ver clientes activos</a>
        </div>
      ';
      foreach ($customers as $customer) {
        $template .= "
          <tr>
            <td class='align-middle'>{$customer->customer_identification}</td>
            <td class='align-middle'>{$customer->customer_name}</td>
            <td class='align-middle'>{$customer->customer_address}</td>
            <td class='align-middle'>{$customer->customer_mobile}</td>
            <td>
              <div class='row text-white'>
                  <a class='btn btn-outline-primary btn-sm mx-1' href='restore?id=$customer->id_customer'><span class='align-middle material-icons'>restore</span></a>
                  <a class='btn btn-outline-danger btn-sm mx-1' href='delete_permanent?id=$customer->id_customer'><span class='align-middle material-icons'>delete_forever</span></a>
              </div>
            </td>
          </tr>
        ";
      }
    }
    ?>

    <table class="table table-sm">
      <?= $topButtons ?>
      <thead>
        <tr>
          <th scope="col">Número de identificación</th>
          <th scope="col">Cliente</th>
          <th scope="col">Dirección cliente</th>
          <th scope="col">Teléfono móvil</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?= $template ?>
      </tbody>
    </table>