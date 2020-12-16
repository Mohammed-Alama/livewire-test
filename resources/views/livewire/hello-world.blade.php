{{-- <div>
    {{-- wire model pass name to Component class and send it again with render
    --}}
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greetings">
        <option>Hallo</option>
        <option>Good Morning</option>
        <option>Hola</option>
    </select>
    {{-- <form action="#" wire:submit.prevent="resetName()"> --}}
    {{-- you can use this way if it's just one line method to set value to property at Components --}}
    <form action="#" wire:submit.prevent="$set('name','Alama')">
        <button >Reset Name</button>
    </form>
    {{ $greetings }} {{ $name }}
    @if ($loud) ! @endif
</div> --}}
