<?php
foreach ($customer as $data) {
  $idCustomer = $data->id_customer;
  $customerName = $data->customer_name;
  $customerAddress = $data->customer_address;
  $customerMobile = $data->customer_mobile;
  $customerIdentification = $data->customer_identification;
  $customerEmail = $data->customer_email;
  $customerPassword = $data->customer_password;
}
?>
<div class="container">
  <form class="needs-validation" action="<?= base_url('customer/save') ?>" method="POST">
    <input name="customerId" type="number" hidden value="<?= $idCustomer ?>">
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="customerName">Nombres</label>
        <input type="text" class="form-control shadow-sm" id="customerName" value="<?= $customerName ?>" required name="customerName">
      </div>
      <div class="col-md-6 mb-3">
        <label for="customerAddress">Dirección</label>
        <input type="text" class="form-control shadow-sm" id="customerAddress" required name="customerAddress" value="<?= $customerAddress ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="customerIdentification">Número de identificación</label>
        <input type="text" class="form-control shadow-sm" id="customerIdentification" value="<?= $customerIdentification ?>" required name="customerIdentification">
      </div>
      <div class="col-md-6 mb-3">
        <label for="customerMobile">Teléfono</label>
        <input type="text" class="form-control shadow-sm" id="customerMobile" required name="customerMobile" value="<?= $customerMobile ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="customerEmail">Correo electrónico</label>
        <input type="text" class="form-control shadow-sm" id="customerEmail" value="<?= $customerEmail ?>" required name="customerEmail">
      </div>
      <div class="col-md-6 mb-3">
        <label for="customerPassword">Contraseña</label>
        <input type="text" class="form-control shadow-sm" id="customerPassword" required name="customerPassword" value="<?= $customerPassword ?>">
      </div>
    </div>
    <button class="btn btn-outline-primary btn w-100 my-3 shadow-sm" type="submit">Guardar datos</button>
  </form>
</div>