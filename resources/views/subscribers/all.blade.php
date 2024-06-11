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
                      {{ __("Subscribers") }}
                  </p>
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
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($subscribers as $subscriber)
                            <tr class="text-sm border-b border-gray-400">
                              <td class="px-6 py-4">{{ $subscriber->email }}</td>
                              <td class="px-6 py-4">
                                {{ optional($subscriber->email_verified_at)   ->diffForHumans() ?? 'Never verified' }}
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                  @endif
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
