<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->name))
    @endforeach

    <hr>
    <button wire:click="$refresh">Refresh</button>
     {{ now() }}
</div>
