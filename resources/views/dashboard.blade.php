<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-6 text-xl font-bold text-gray-600">
                        {{ __("Ações") }}
                    </p>
                    <ul class="pl-5 list-disc">
                        <li class="text-blue-500 hover:underline">
                            <a href="{{ route('subscribers.all') }}">
                                Gerenciar Assinantes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
