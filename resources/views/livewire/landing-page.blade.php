<div 
    class="flex flex-col w-full h-screen bg-indigo-900"
    x-data="{
        showSubscribe: @entangle('showSubscribe'),
        showSuccess: @entangle('showSuccess'),
    }"
>
    <nav class="container flex justify-between pt-5 mx-auto text-indigo-200">
        <a href="/" class="text-4xl">
            <x-application-logo class="w-16 h-16 fill-current">
            </x-application-logo>
        </a>
        <div class="flex justify-end">
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </nav>
    <div class="container flex items-center h-full mx-auto">
        <div class="flex flex-col items-start w-1/3">
            <h1 class="mb-4 text-5xl font-bold leading-tight text-white">
                Uma landing page simples para se inscrever!
            </h1>
            <p class="mb-10 text-xl text-indigo-200">
                Landing page simples usando <span class="font-bold underline">TALL</span> stack. Você se importaria de se inscrever?
            </p>
            <x-primary-button 
                class="px-8 py-3 bg-pink-500 hover:bg-pink-700"
                    x-on:click="showSubscribe = true"
            >
                Se inscrever
            </x-primary-button>
        </div>
    </div>
    <x-mymodal class="bg-pink-500" trigger="showSubscribe">
        <p class="text-5xl font-extrabold text-center text-white">
            Vamos lá!
        </p>
        <form class="flex flex-col items-center p-24" wire:submit="subscribe">
            <x-text-input 
                class="px-5 py-3 border border-blue-400 w-80" 
                type="email" 
                name="email" 
                placeholder="Digite seu e-mail"
                wire:model="email"
            >
            </x-text-input>
            <span class="text-sm text-gray-100">
                {{ 
                    $errors->has('email') 
                    ? $errors->first('email') 
                    : 'Nós lhe enviaremos um e-mail de confirmação.'
                }}
            </span>
            <x-primary-button 
                class="justify-center px-5 py-3 mt-5 bg-indigo-900 hover:bg-indigo-700 w-80"
            >
                <span class="animate-spin" wire:loading wire:target="subscribe">
                    &#9696;
                </span>
                <span wire:loading.remove wire:target="subscribe">
                    Entrar
                </span>
            </x-primary-button>
        </form>
    </x-mymodal>
    <x-mymodal class="bg-green-500" trigger="showSuccess">
        <p class="font-extrabold text-center text-white text-9xl animate-pulse">
            &check;
        </p>
        <p class="mt-16 text-5xl font-extrabold text-center text-white">
            Ótimo!
        </p>
        @if (request()->has('verified') && request()->verified == 1)
            <p class="text-3xl text-center text-white">
                Obrigado por confirmar!
            </p>
        @else
            <p class="text-3xl text-center text-white">
                Vejo você na sua caixa de entrada!
            </p>
        @endif
    </x-mymodal>
</div>