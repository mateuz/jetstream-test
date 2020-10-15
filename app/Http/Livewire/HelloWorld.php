<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Log;

class HelloWorld extends Component
{
    public $count = 10;
    public $loud = false;
    public $name = 'Jelly';
    public $greeting = 'Hello';

    /**
     * Lifecycle Hooks
     *
     * mount, hydrate, updating, updated
     * updatedName
     *
     */
    // first requests always call this one
    public function mount()
    {
        $this->count = 0;
    }

    // any subsequent request call this one
    public function hydrate()
    {
        $this->loud = true;
    }

    public function increment()
    {
        $this->count++;
        Log::info('Showing counter: '.$this->count);
    }



    public function render()
    {
        return view('livewire.hello-world');
    }
}
