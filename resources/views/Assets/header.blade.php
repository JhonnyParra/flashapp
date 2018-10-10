<header>
  <div id="logo">
    <span id="flashapp-name">Flashapp</span>
  </div>
  <div id ="search-login">
    <input type="text" class="find"/>
    @if ($login == TRUE)
      <span class="user">prueba</span> 
    @else
      <button class="btn-blue login">Iniciar Sesión</button>
    @endif
  </div>
</header>