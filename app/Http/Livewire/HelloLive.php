<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloLive extends Component
{
    public $name = 'Pleasure';
    public $loud = false;
    public $greeting = ['Hello'];
    public function render()
    {
        return view('livewire.hello-live');
    }
}
