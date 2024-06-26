<?php

namespace App\Livewire\Guest\Playgrounds;

use App\Models\Playgrounds;
use Livewire\Component;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;
    
    public function render()
    {
        $playgrounds = Playgrounds::latest()->paginate(6);

        return view('livewire.guest.playgrounds.record', [
            'playgrounds' => $playgrounds
        ])->layout('layouts.guest');
    }
}
