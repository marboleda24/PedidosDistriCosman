<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../catalogo/">  Catalogo</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="../ingresarImg/">Subir Imagen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../agregar_proveedor/">Agregar Proveedor</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../asignar_usuario/">Asignar Usuarios</a>
          <a class="dropdown-item" href="../autorizar_usuario/">Autorizar usuario</a>
          <a class="dropdown-item" href="../Administrar_usuarios/">Administrar usuarios</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Imagenes</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../agregar_producto/">Agregar producto</a>
          <a class="dropdown-item" href="../habilitar_img/">Habilitar imagen</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pedidos/">Pedidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../borradores/">Borradores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../autorizar_pedido">Autorizar Pedido</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../consolidar">Consolidar</a>
      </li>
    </ul>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <a href="../catalogo/lista.php"><i class="fas fa-shopping-cart" style="color:#fff;font-size:1.5em;margin: 7px 20px 0px 0px"></i></a>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cerrar">Salir</button>
      <div class="btn-group" role="group">
        <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop3" x-placement="bottom-start" style="position: absolute; transform: translate3d(-140px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
          <a class="dropdown-item" href="../cambiar_pass/">Cambiar contraseña</a>
        </div>
      </div>
    </div>
  </div>
</nav>
