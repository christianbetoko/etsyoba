<?php

namespace App\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Service;
#[Title('Accueil - Ets Yoba')]
class AgroPastoral extends Component
{
    public function render()
    {
          Carbon::setLocale('fr');
        $service = Service::where('slug', 'agro-pastoral')
                          ->where('is_active', true)
                          ->first();
        return view('livewire.agro-pastoral', compact('service'));
    }
}
