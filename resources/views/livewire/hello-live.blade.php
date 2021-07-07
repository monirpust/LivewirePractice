<div>
    <input type="text" wire:model.lazy="name">
    <input type="checkbox" wire:model="loud">

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    Hello, {{$name}} @if($loud) ! @endif
</div>
