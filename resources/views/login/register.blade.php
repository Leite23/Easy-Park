<x-layout title="Criar Conta">
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="d-flex flex-column mb-5">
            <label for="user">usuário</label>
            <input type="text" name="user" id="user" value="{{ old('user')}}" class="mb-3" class="user" placeholder="user">
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="{{ old('email')}}" class="mb-3" placeholder="email">
            <label for="password">senha</label>
            <input type="password" name="password" id="password" class="mb-3" placeholder="password">
            <button type="submit" class="btn btn-primary">criar conta</button>
        </div>
    </form>
    <a class="link d-flex justify-content-center align-center" href={{ route('login') }}>Já possui uma conta? Conecte-se</a>
</x-layout>
