<?php

use App\Http\Livewire\Counter;
use function Pest\Livewire\livewire;

uses(Tests\TestCase::class);

test('can be incremented', function () {
    livewire(Counter::class)
        ->call('increment')
        ->assertSee(1);
});