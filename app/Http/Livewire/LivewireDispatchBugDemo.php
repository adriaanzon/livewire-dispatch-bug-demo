<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivewireDispatchBugDemo extends Component
{
    public ?string $buttonChoice = null;
    public ?string $spanChoice = null;

    public function render()
    {
        return view('livewire.livewire-dispatch-bug-demo');
    }
}
