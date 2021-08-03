<div>
    <h2>from child component</h2>
    Hello {{$contact->name}} : {{now()}}

    <button wire:click = "emitFoo">Refresh</button>
</div>
