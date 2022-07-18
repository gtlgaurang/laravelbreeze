<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public $name = "D Jelly";
    public $names = ["Jelly", "Man", "Chico"];
    public $loud =  false;
    public $greeting = ["Hello"];

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function resetName($name = 'Chiko')
    {
        $this->name = $name;
    }
}
