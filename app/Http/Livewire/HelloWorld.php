<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name;
    public $loud = false;
    public $greetings = 'Hello';
    public function render()
    {

        //it's just function to render blade view
        //instead of passing parameters to view instance we could use public properties  
        return view('livewire.hello-world');
    }

    public function resetName()
    {
        $this->name = 'Alama';
    }
}
