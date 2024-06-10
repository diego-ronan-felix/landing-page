@props(['trigger'])

<div 
      x-cloak
      class="fixed top-0 flex items-center w-full h-full bg-gray-900 bg-opacity-60"
      x-show="{{ $trigger }}"
      x-on:click.self="{{ $trigger }} = false"
      x-on:keydown.escape.window="{{ $trigger }} = false"
>
      <div {{ $attributes->merge(['class' => 'p-8 m-auto bg-gray-500 shadow-2xl rounded-xl']) }}>
          {{ $slot }}
      </div>
</div>






















