<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;

class HelloLive extends Component
{
    protected $listeners = ['foo' => '$refresh'];

    public $contacts;

    function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeContact($name)
    {
        Contact::whereName($name)->first()->delete();
        $this->contacts = Contact::all();
    }

    // public function refreshChild()
    // {
    //     $this->emit('refreshChild', 'foo');
    // }

    public function render()
    {
        return view('livewire.hello-live');
    }
}
