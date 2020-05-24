<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <a class="navbar-brand" href="<?= base_url('') ?>"><b>Tienda Online</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('article/list') ?>">Artículos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('customer/list') ?>">Clientes</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Otras opciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('article/inactives') ?>">Artículos eliminados</a>
                    <a class="dropdown-item" href="<?= base_url('customer/inactives') ?>">Clientes eliminados</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>
            <!--             <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
        <?php
        if (!isset($_SESSION['customerName'])) { ?>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?= base_url('login') ?>" class="btn btn-outline-info my-2 my-sm-0 shadow-sm">Iniciar sesión</a>
            </form>

        <?php } else { ?>
            <form class="form-inline my-2 my-lg-0">
                <div class="dropdown shadow-sm">
                    <button class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['customerEmail'] ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Mi perfil</a>
                        <a class="dropdown-item" href="#">Mis compras</a>
                        <a class="dropdown-item" href="<?= base_url('login/close_session') ?>">Cerrar sesión</a>
                    </div>
                </div>
                <!-- <span class="mx-3 btn btn-sm btn-outline-info"> </span> -->
            </form>
        <?php } ?>
    </div>
</nav>