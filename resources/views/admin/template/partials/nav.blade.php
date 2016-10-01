<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" width="20" height="20"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="{{route('users.index')}}">Usuarios <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="{{route('categories.index')}}">Categorias <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="{{route('articles.index')}}">Articulos <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="#">Clientes <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="{{route('providers.index')}}">Proveedores <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="#">Entradas <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="#">Ventas <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Editar Perfil</a></li>
            <li><a href="#">Cambiar Contraseña</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>