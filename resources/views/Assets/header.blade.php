{{-- login and sign-up modal's' --}}
@if ($login != true)
<div class="pop-back no-show" id="sign-up-pop">
  <form action="post" id="sign-up">
    <h2>Registro</h2>
    <input type="text" id="name" placeholder="Nombre"/>
    <input type="text" id="last_name" placeholder="Apellido"/>
    <input type="text" id="phone" placeholder="Télefono"/>
    <input type="text" id="email" placeholder="Correo"/>
    <input type="password" id="pass" placeholder="Contraseña"/>
    <input type="password" id="re_pass" placeholder="Reingresa la contraseña"/>
    <input type="button" value="Continuar" class="btn-white"/>
  </form>
</div>
@endif


{{-- header --}}
<header class="no-loaded">
  <div id="logo">
    <span id="site-logo"></span>
    <span id="flashapp-name">Flashapp</span>
  </div>
  <div id ="search-login">
    <!--<input type="text" class="find"/>-->
    @if ($login == true)
      <span class="user">prueba</span> 
    @else
      <input id="sign-up-btn" class="btn btn-blue sign-up" type="button" value="Registrate" />
      <input id="login-btn" class="btn btn-blue login" type="button" value="Iniciar Sesión" />
    @endif
  </div>
</header>

