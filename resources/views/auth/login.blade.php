@extends('layouts_pucli.main')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('title', 'Página de Bienvenida')

@section('content')
<div class="cotn_principal">
    <div class="cont_centrar">
        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">
                        <h2>LOGIN</h2>
                        <p>Accede a tu cuenta para continuar.</p>
                        <button class="btn_login" onclick="change_to_login()">LOGIN</button>
                    </div>
                </div>
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>REGÍSTRATE</h2>
                        <p>Crea una cuenta para acceder a más funciones.</p>
                        <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
                    </div>
                </div>
            </div>
            <div class="cont_forms">
                <div class="cont_img_back_">
                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5" alt="Fondo" />
                </div>
                <div class="cont_form_login">
                    <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                    <h2>LOGIN</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <button class="btn_login" type="submit">LOGIN</button>
                    </form>
                </div>






                <div class="cont_form_sign_up">
                    <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                    <h2>REGÍSTRATE</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="last_name" type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Apellido" value="{{ old('last_name') }}" required>
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="CC" type="text" name="CC" class="form-control @error('CC') is-invalid @enderror" placeholder="Cédula" value="{{ old('CC') }}" required>
                        @error('CC')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" required>

                        <button class="btn_sign_up" type="submit">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

    const time_to_show_login = 400;
    const time_to_hidden_login = 200;

    function change_to_login() {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
        document.querySelector('.cont_form_login').style.display = "block";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";

        setTimeout(function() {
            document.querySelector('.cont_form_login').style.opacity = "1";
        }, time_to_show_login);

        setTimeout(function() {
            document.querySelector('.cont_form_sign_up').style.display = "none";
        }, time_to_hidden_login);
    }

    const time_to_show_sign_up = 100;
    const time_to_hidden_sign_up = 400;

    function change_to_sign_up(at) {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
        document.querySelector('.cont_form_sign_up').style.display = "block";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function() {
            document.querySelector('.cont_form_sign_up').style.opacity = "1";
        }, time_to_show_sign_up);

        setTimeout(function() {
            document.querySelector('.cont_form_login').style.display = "none";
        }, time_to_hidden_sign_up);


    }

    const time_to_hidden_all = 500;

    function hidden_login_and_sign_up() {

        document.querySelector('.cont_forms').className = "cont_forms";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function() {
            document.querySelector('.cont_form_sign_up').style.display = "none";
            document.querySelector('.cont_form_login').style.display = "none";
        }, time_to_hidden_all);

    }
</script>
@endsection