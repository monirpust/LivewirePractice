<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHello extends Component
{
    public $contact;

    function mount(Contact $contact){
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hello');
    }
}
