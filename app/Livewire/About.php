<?php

namespace App\Livewire;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Entreprise;
#[Title('Accueil - Ets Yoba - Ma Bannière')]
class About extends Component
{
    public function render()
    {
        Carbon::setLocale('fr');
          $entreprise=Entreprise::first();
        return view('livewire.about',[
            'entreprise'=>$entreprise
        ]);
    }
}
