<div class="container w-25 m-auto">
  <form action="<?= base_url('login/autenticar') ?>" method="post">
    <div class="form-group">
      <label for="customerEmail">Correo electrónico</label>
      <input type="text" name="customerEmail" class="form-control shadow-sm" id="customerEmail" placeholder="user@email.com">
    </div>
    <div class="form-group">
      <label for="customerPassword">Contraseña</label>
      <input type="password" name="customerPassword" class="form-control shadow-sm" id="customerPassword" placeholder="Contraseña">
    </div>
    <button id="logger" type="submit" class="btn btn-outline-primary shadow-sm mt-2 w-100">Autenticar</button>
  </form>
</div>