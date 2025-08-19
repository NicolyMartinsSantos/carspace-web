<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-100 to-purple-300">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-xl">

            <!-- Sua logo personalizada abaixo da logo do Laravel -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/login.png') }}" alt="Logo Car Space" class="w-40 h-auto">
            </div>

            <h1 class="text-2xl font-bold text-purple-700 text-center mb-6">Entrar no Car Space</h1>

            <!-- Formulário de Login -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- E-mail -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full rounded-md border-gray-300 bg-blue-50 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Senha -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full rounded-md border-gray-300 bg-blue-50 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Botão de Login -->
            <div>
            <button type="submit" style="background-color: #1e3a8a; color: white; padding: 10px 20px; width: 100%; font-size: 16px;">
                Entrar
            </button>

            </div>
            </form>

            <!-- Linha divisória -->
            <div class="my-6 flex items-center">
                <hr class="flex-grow border-gray-300">
                <span class="mx-3 text-gray-500 text-sm">ou</span>
                <hr class="flex-grow border-gray-300">
            </div>

            <!-- Login com Google -->
            <button
                class="w-full flex items-center justify-center gap-2 border border-gray-300 py-2 rounded-md hover:bg-gray-100 transition duration-200">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5">
                <span>Entrar com Google</span>
            </button>

            <!-- Link para registro -->
            <p class="text-center text-sm text-gray-600 mt-6">
                Ainda não tem uma conta?
                <a href="{{ route('register') }}" class="text-purple-700 font-semibold hover:underline">
                    Cadastre-se
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
