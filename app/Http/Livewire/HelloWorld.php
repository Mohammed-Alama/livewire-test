<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name;
    public $anotherName;
    public $count;

    //this method called when livewire init the component
    //what ever happened in this function called when component booted up 
    public function mount()
    {
        $this->name = 'Alama';
        $this->count = 0;
    }

    //this function called in any subsequent request called to component
    public function hydrate()
    {
        $this->anotherName = 'Hydrate Alama';
    }

    //this function called in any subsequent request called to component
    public function updated()
    {
        $this->anotherName = 'Updated anotherName';
        $this->count = $this->count + 1;
    }

    //this function called when specific Property updated
    public function updatedName()
    {
        $this->anotherName = 'name is Updated';
    }

    //this function called when updating properties in component
    public function updating()
    {
        $this->anotherName = 'Updating anotherName ';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
