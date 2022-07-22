<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class HelloWorld extends Component
{   

    public $contacts;

    public function mount() {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
