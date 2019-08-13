@extends('layouts.login')
@section('contenido')
<div class="login-reg-panel">

    <div class="register-info-box">
      <h2 class="login-reg">No tienes una cuenta?</h2>
      <p class="login-reg">Registrate aquí!</p>
      <input class="login-botonReg" type="button" onclick="window.open('register.php')" value="Registrarse">
    </div>

    <div class="white-panel">
      <div class="login-show">
        <h2 class="login-title">LOGIN</h2>
          <form action="" method="POST"   >

            <input class="login-campos" name="email" type="text" id="email"   value="" placeholder="Correo electrónico"/>
            <input class="login-campos" name="password" type="password" id="password"  value="" placeholder="Contraseña..." />

            <input name="recordar" type="checkbox" id="recordarme" value="recordar"/>
            <label class = "login-recu">Recuérdarme </label>
            <a class= "login-msj" href="olvidePassword.php">¿Olvidaste tu contraseña?</a>

            <button class="login-boton" type="submit">LOGIN</button>
          </form>
  </div>
 </div>



@endsection
