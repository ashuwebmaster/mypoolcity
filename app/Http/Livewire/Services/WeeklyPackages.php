<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class WeeklyPackages extends Component
{
    public function render()
    {
        return view('livewire.services.weekly-packages')->layout('layouts.base');
    }
}
