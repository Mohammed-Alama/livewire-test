<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Alama', 'Maged', 'Abeer'];

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function removeContact($key)
    {
        $names = $this->names;
        unset($names[$key]);
        $this->names =  $names;
    }
}
