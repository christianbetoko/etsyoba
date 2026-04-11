<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Service;
use Carbon\Carbon;
#[Title('Centre Medical - Ets Yoba')]
class CentreMedical extends Component
{
    public function render()
    {
        Carbon::setLocale('fr');
        $service = Service::where('slug', 'centre-medical')
                          ->where('is_active', true)
                          ->first();
        return view('livewire.centre-medical', compact('service'));
    }
}
