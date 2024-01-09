<x-layout title="Login" :successMessage="$successMessage">
    <div class="container-fluid d-flex justify-content-center align-center flex-column gap-4">
        <img src="{{ asset('assets/logo.svg') }}" alt="logo" height="100">
        <h1 class="fs-4 text-center text-bold main-font" style="color: 494949">Qual a sua próxima <span style="color: #ff8f00">Vaga?</h1>
    </div>
    <form method="post">
        @csrf
        <div class="container d-flex flex-column gap-2 login-form-container">
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="mb-3"
                placeholder="email">
            <label for="password">senha</label>
            <input type="password" name="password" id="password" class="mb-5" placeholder="password">
            <button type="submit" class="btn btn-primary mb-3 text-light text-uppercase">entrar</button>
            <p style="color: #686868" class="d-flex justify-content-center align-center with-lines text-nowrap">ainda
                não tem conta?</p>
            <a href="{{ route('register') }}" class="link d-flex justify-content-center align-center">cadastre-se
                agora</a>
        </div>
    </form>
</x-layout>
