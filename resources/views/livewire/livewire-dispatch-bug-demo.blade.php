<div x-data>
    <div wire:model="buttonChoice">
        <button x-on:click="$dispatch('input', null)">Reset</button>
        <br>
        <button x-on:click="$dispatch('input', 'A')">Choose A</button>
        <br>
        <button x-on:click="$dispatch('input', 'B')">Choose B</button>
        <br>
        <button x-on:click="$dispatch('input', 'C')">Choose C</button>
    </div>

    @if ($buttonChoice === null)
        You haven't chosen
    @else
        Your choice is {{ $buttonChoice }}
    @endif

    @dump($buttonChoice)

    <hr>

    <div wire:model="spanChoice">
        <span style="border: 1px solid gray; cursor: pointer;" role="button" x-on:click="$dispatch('input', null)">Reset</span>
        <br>
        <span style="border: 1px solid gray; cursor: pointer;" role="button" x-on:click="$dispatch('input', 'A')">Choose A</span>
        <br>
        <span style="border: 1px solid gray; cursor: pointer;" role="button" x-on:click="$dispatch('input', 'B')">Choose B</span>
        <br>
        <span style="border: 1px solid gray; cursor: pointer;" role="button" x-on:click="$dispatch('input', 'C')">Choose C</span>
    </div>

    @if ($spanChoice === null)
        You haven't chosen
    @else
        Your choice is {{ $spanChoice }}
    @endif

    @dump($spanChoice)
</div>
