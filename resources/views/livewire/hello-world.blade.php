<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    The best ahtlete wants his opponent at his best.
    <br>

    <input wire:model.lazy="name" type="text">

    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{ $greeting }}, {{ $name }} @if ($loud) ! @endif

    <button wire:click="increment">Increment</button>
    {{ $count }}
</div>
