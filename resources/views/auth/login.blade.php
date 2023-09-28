@extends('layouts.login')

@section('content')
<div class="container fondo">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-col">
                <img src="{{ asset('imagenes/Logo_Cubikar_1.png') }}" class="logo" alt="Logo Cubikar">

                <div class="card-header">Bienvenido, Ingresa tu correo y contraseña</div><br><br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email">Correo electrónico:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-street-view" aria-hidden="true"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                            @error('email') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                            @error('password') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Iniciar sesión" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .fondo {
    background-image: url('imagenes/selectivo.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .logo {
        max-width: 300px;
        justify-content: center;
        margin-bottom: 20px;
    }

    .login-col {
        text-align: center;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    }

    .login-col p {
        font-size: 20px;
        font-weight: bold;
        color: #444;
        margin-bottom: 20px;
    }

    .login-col input[type="email"],
    .login-col input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 16px;
    }

    .login-col button {
        background-color: #1E90FF;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
        padding: 12px 40px;
        transition: all 0.3s ease-in-out;
    }

    .login-col button:hover {
        background-color: #00BFFF;
        cursor: pointer;
    }

    .error-message {
        color: red;
        margin-top: 5px;
        text-align: left;
    }
</style>
