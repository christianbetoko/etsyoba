<?php

namespace App\Livewire\Components;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Entreprise;
use App\Models\Social;
use App\Models\Slide;
class Header extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
          $entreprise=Entreprise::first();
           $socials=Social::orderBy('created_at','ASC')
        ->where('status',true)
        ->get();
         $slides=Slide::orderBy('created_at','ASC')
        ->where('is_active',true)
        ->get();
        return view('livewire.components.header',[
            'entreprise'=>$entreprise,
            'socials'=>$socials,
            'slides'=>$slides
        ]);
    }
}
