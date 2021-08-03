<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHello extends Component
{
    public $contact;

    protected $listeners = ['foo' => '$refresh'];

    public function emitFoo()
    {
        $this->emitUp('foo');
    }

    function mount(Contact $contact){
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hello');
    }
}
