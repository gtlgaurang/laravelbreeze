<div style="width: 80%;">
    <div style="float:left; width:40%">
        <input type="text" wire:model="name">
        <input type="checkbox" wire:model="loud">
        <select name="" wire:model="greeting" id="" multiple>
            <option>Hello</option>
            <option>GoodBye</option>
            <option>Adios</option>
        </select>
        <h1>
            {{ implode(',', $greeting) }} @if ($loud)
                {{ $name }}
            @endif
        </h1>

        <form action="#" wire:submit.prevent="resetName('Bingo')">
            <button>Reset Name</button>
        </form>
    </div>
    <div style="float:right; width:60%">

        @foreach ($names as $name)
            @livewire('say-hi', ['name' => $name], key($name))
        @endforeach

    </div>
</div>
