<header>
  <div id="logo">
    <span id="site-logo"></span>
    <span id="flashapp-name">Flashapp</span>
  </div>
  <div id ="search-login">
    <input type="text" class="find"/>
    @if ($login == TRUE)
      <span class="user">prueba</span> 
    @else
      <input class="btn btn-blue login" type="button" value="Iniciar Sesión" />
    @endif
  </div>
</header>