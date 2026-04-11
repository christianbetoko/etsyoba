<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use App\Models\Membre;
#[Title('Equipe - Ets Yoba')]
class TeamPage extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
          $membres=Membre::orderBy('created_at','ASC')
        ->where('is_active',true)
        ->get();
        return view('livewire.team-page',compact('membres'));
    }
}
