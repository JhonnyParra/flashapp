<header>
  <div id="logo">
    <span id="flashapp-name">Flashapp</span>
  </div>
  <input type="text" class="find"/>
  @if ($login == TRUE)
    <span class="user">prueba</span> 
  @else
    <button class="btn-blue">Iniciar Sesión</button>
  @endif
</header>