<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class WeeklyServices extends Component
{
    public function render()
    {
        return view('livewire.services.weekly-services')->layout('layouts.base');
    }
}
