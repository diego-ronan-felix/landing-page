<div class="p-6 text-gray-900">
    <p class="mb-6 text-xl font-bold text-gray-600">
        {{ __("Subscribers") }}
    </p>
    <div class="px-8">
        <x-text-input 
            type="text"
            class="float-right w-1/3 pl-8 mb-4 border border-gray-300 rounded-lg"
            placeholder="Pesquisar"
            wire:model.live="search"
        >

        </x-text-input>
        @if ($subscribers->isEmpty())
            <div class="flex w-full p-5 bg-red-100 rounded-lg">
            <p class="text-red-400">
                No subscribers found!
            </p>
            </div>
        @else
            <table class="w-full">
                <thead class="text-indigo-700 border-b-2 border-gray-300">
                    <tr>
                    <th class="px-6 py-3 text-left">E-mail</th>
                    <th class="px-6 py-3 text-left">Verified</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                    <tr class="text-sm border-b border-gray-400">
                        <td class="px-6 py-4">{{ $subscriber->email }}</td>
                        <td class="px-6 py-4">
                        {{ optional($subscriber->email_verified_at)   ->diffForHumans() ?? 'Never verified' }}
                        </td>
                        <td class="px-6 py-4">
                            <x-primary-button 
                                wire:click="delete({{ $subscriber->id }})"
                                wire:confirm="Deseja realmente excluir o registro?"
                            >
                                Deletar
                            </x-primary-button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
    