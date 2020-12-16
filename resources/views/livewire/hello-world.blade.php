<div>
    @foreach ($names as $key => $name)
        @livewire('say-hay',['name' =>$name])
        <button wire:click="removeContact({{$key}})">Remove Contact</button>
    @endforeach
</div>
