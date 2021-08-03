<div>
    <h1>hello from parent</h1>
        <div>
            @foreach($contacts as $contact)
                @livewire('say-hello', ['contact' => $contact], key($contact->name))

                <button wire:click="removeContact('{{$contact->name}}')">Remove</button>
            @endforeach
        </div>


    <hr>

    <!-- <button wire:click="$refresh">RefreshParent</button> -->
    
    {{now()}}

    <button wire:click ="$emit('refreshChild')">RefreshChild</button>
</div>
