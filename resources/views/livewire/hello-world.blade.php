<div>
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
